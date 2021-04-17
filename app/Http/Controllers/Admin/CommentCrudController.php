<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CommentRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CommentCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CommentCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Comment::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/comment');
        CRUD::setEntityNameStrings('comment', 'comments');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
       // CRUD::setFromDb(); // columns

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
        CRUD::addColumn(
            [
                'name'  => 'description',
                'label' => "Description :",
                'type'  => 'text',
            ]); 
        CRUD::addColumn(
            [   // Date
                'name'  => 'date_pub',
                'label' => 'Date',
                'type'  => 'date'
            ]); 
        CRUD::addColumn(
            [  // Select2
                'label'     => "User name :",
                'name'      => 'user_id', // the db column for the foreign key
                'entity'    => 'user', // the method that defines the relationship in your Model
                'model'     => "App\User", // foreign key model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'default'   => 2, // set the default value of the select2
          ]); 
        CRUD::addColumn(
            [  // Select2
                'label'     => "Piece name :",
                'name'      => 'piece_id', // the db column for the foreign key
                'entity'    => 'piece', // the method that defines the relationship in your Model
                'model'     => "App\Models\Piece", // foreign key model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'default'   => 2, // set the default value of the select2
           ]); 
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CommentRequest::class);

        //CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
        $this->crud->addField(  [
            'name'  => 'description',
            'label' => "Description :",
            'type'  => 'text',
        ]);
        $this->crud->addField(  [   // Date
            'name'  => 'date_pub',
            'label' => 'Date',
            'type'  => 'date'
        ],);
        $this->crud->addField([  // Select2
            'label'     => "User name :",
            'type'      => 'select2',
            'name'      => 'user_id', // the db column for the foreign key
            'entity'    => 'user', // the method that defines the relationship in your Model
            'model'     => "App\User", // foreign key model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'default'   => 2, // set the default value of the select2
         
             // also optional
            // 'options'   => (function ($query) {
            //      return $query->orderBy('name', 'ASC')->where('depth', 1)->get();
            //  }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
         ],);
        $this->crud->addField([  // Select2
            'label'     => "Piece name :",
            'type'      => 'select2',
            'name'      => 'piece_id', // the db column for the foreign key
            'entity'    => 'piece', // the method that defines the relationship in your Model
            'model'     => "App\Models\Piece", // foreign key model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'default'   => 2, // set the default value of the select2
         
             // also optional
            // 'options'   => (function ($query) {
            //      return $query->orderBy('name', 'ASC')->where('depth', 1)->get();
            //  }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
         ],);
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
