<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FournisseurRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FournisseurCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FournisseurCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Fournisseur::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/fournisseur');
        CRUD::setEntityNameStrings('fournisseur', 'fournisseurs');
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
                'name'      => 'image', // The db column name
                'label'     => 'Product Image', // Table column heading
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
      
          
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(FournisseurRequest::class);

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
