<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Subcategory extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'subcategories';
    // protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
   protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function Cat() {
        $tab=[];
        $ax= Subcategory::with('category')->get();
       // foreach($ax as $a){
            foreach($this->Category as $b){
           array_push($tab,$b->name);
           }  
      // }
        $x=implode(",", $tab);
       return $x;
            
//             $x=$this->with('category')->get();
            
//             foreach($x as $b){
//                array_push($tab,$b);
//            }
// dd($tab[0]->category->name);
         
//             $x=implode(",", $tab);
//            return $x;

              // return $this->category_id;
   }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function piece()
    {
        return $this->hasMany(Piece::class);
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
