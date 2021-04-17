<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SubcategoryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SubcategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SubcategoryCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Subcategory::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/subcategory');
        CRUD::setEntityNameStrings('subcategory', 'subcategories');
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
         * - 
         */
        $f1= [   'name' => 'name',
            'label' => "name",
            'type'  => 'text',
        ];
        $f2=[  // Select2
            'label'     => "Category :",
            'name'      => 'category_id', // the db column for the foreign key
            'entity'    => 'category', // the method that defines the relationship in your Model
            'model'     => "App\Models\Category", // foreign key model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'default'   => 2, // set the default value of the select2
         
            ];
        CRUD::addColumns([$f1, $f2]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(SubcategoryRequest::class);

        //CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
     
      
        $this->crud->addField(  [
            'name'  => 'name',
            'label' => "name",
            'type'  => 'text',
        ]);
        $this->crud->addField([  // Select2
            'label'     => "Category :",
            'type'      => 'select2',
            'name'      => 'category_id', // the db column for the foreign key
            'entity'    => 'category', // the method that defines the relationship in your Model
            'model'     => "App\Models\Category", // foreign key model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'default'   => 2, // set the default value of the select2
         
            ]);
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
