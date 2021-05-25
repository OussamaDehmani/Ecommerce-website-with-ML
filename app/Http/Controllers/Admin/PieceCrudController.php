<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PieceRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PieceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PieceCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Piece::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/piece');
        CRUD::setEntityNameStrings('piece', 'pieces');
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
        CRUD::addColumn(
            [
                'name'      => 'image', // The db column name
                'label'     => 'image', // Table column heading
                'type'      => 'image',
                // 'prefix' => 'folder/subfolder/',
                // image from a different disk (like s3 bucket)
                // 'disk'   => 'disk-name', 
                // optional width/height if 25px is not ok with you
                 'height' => '100px',
                 'width'  => '100px',
            ],); 
        CRUD::addColumn(
            [
                'name'  => 'name',
                'label' => "Name :",
                'type'  => 'text',
            ]); 
        CRUD::addColumn(
            [
                'name'  => "Caracteristique",
                'label' => "Caracteristique",
                'type'  => 'text',
            ]); 
         
        CRUD::addColumn(
            [   // Number
                'name' => 'prix',
                'label' => 'Prix :',
                'type' => 'number',
            
                // optionals
                // 'attributes' => ["step" => "any"], // allow decimals
                'prefix'     => "$",
                'suffix'     => ".00",
            ]); 
             CRUD::addColumn([  // Select2
                'label'     => 'subcategory_id',
                'name'      => 'subcategory_id', // the db column for the foreign key
                'entity'    => 'subcategory', // the method that defines the relationship in your Model
                'model'     => 'App\Models\Subcategory', // foreign key model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'default'   => 1, // set the default value of the select2
            ]);
            CRUD::addColumn([  // Select2
                'label'     => 'fournisseur_id',
                'name'      => 'fournisseur_id', // the db column for the foreign key
                'entity'    => 'fournisseur', // the method that defines the relationship in your Model
                'model'     => 'App\Models\Fournisseur', // foreign key model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'default'   => 1, // set the default value of the select2
             
                 // also optional
                // 'options'   => (function ($query) {
                //      return $query->orderBy('name', 'ASC')->where('depth', 1)->get();
                //  }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
             ],
        ); 
            CRUD::addColumn([    // Select2Multiple = n-n relationship (with pivot table)
                'label'     => "cars",
                'type'      => 'select2_multiple',
                'name'      => 'car', // the method that defines the relationship in your Model
           
                // optional
                'entity'    => 'car', // the method that defines the relationship in your Model
                'model'     => "App\Models\Car", // foreign key model
                'attribute' => 'marque', // foreign key attribute that is shown to user
                'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?
                // 'select_all' => true, // show Select All and Clear buttons?
           
                // optional
                // 'options'   => (function ($query) {
                //     return $query->orderBy('name', 'ASC')->where('depth', 1)->get();
                // }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
           ],
        ); 
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PieceRequest::class);

       // CRUD::setFromDb(); // fields

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
        $this->crud->addField([
            'label'        => "image",
            'name'         => "image",
            'filename'     => null, // set to null if not needed
            'type'         => 'base64_image',
            'aspect_ratio' => 1, // set to 0 to allow any aspect ratio
            'crop'         => true, // set to true to allow cropping, false to disable
            'src'          => NULL, // null to read straight from DB, otherwise set to model accessor function
        ]);
        $this->crud->addField(  [
            'name'  => "Caracteristique",
            'label' => "Caracteristique",
            'type'  => 'text',
        ]);
        $this->crud->addField([   // Number
            'name' => 'prix',
            'label' => 'Prix :',
            'type' => 'number',
        
            // optionals
            // 'attributes' => ["step" => "any"], // allow decimals
            'prefix'     => "$",
            'suffix'     => ".00",
        ],);
        $this->crud->addField([  // Select2
            'label'     => 'subcategory_id',
            'type'      => 'select2',
            'name'      => 'subcategory_id', // the db column for the foreign key
            'entity'    => 'subcategory', // the method that defines the relationship in your Model
            'model'     => 'App\Models\Subcategory', // foreign key model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'default'   => 1, // set the default value of the select2
       ],);
         $this->crud->addField([  // Select2
            'label'     => 'fournisseur_id',
            'type'      => 'select2',
            'name'      => 'fournisseur_id', // the db column for the foreign key
            'entity'    => 'fournisseur', // the method that defines the relationship in your Model
            'model'     => 'App\Models\Fournisseur', // foreign key model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'default'   => 1, // set the default value of the select2
         
             // also optional
            // 'options'   => (function ($query) {
            //      return $query->orderBy('name', 'ASC')->where('depth', 1)->get();
            //  }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
         ],);
         $this->crud->addField([    // Select2Multiple = n-n relationship (with pivot table)
            'label'     => "cars",
            'type'      => 'select2_multiple',
            'name'      => 'car', // the method that defines the relationship in your Model
       
            // optional
            'entity'    => 'car', // the method that defines the relationship in your Model
            'model'     => "App\Models\Car", // foreign key model
            'attribute' => 'marque', // foreign key attribute that is shown to user
            'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?
            // 'select_all' => true, // show Select All and Clear buttons?
       
            // optional
            // 'options'   => (function ($query) {
            //     return $query->orderBy('name', 'ASC')->where('depth', 1)->get();
            // }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
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
