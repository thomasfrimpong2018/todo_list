<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
     //
    //Table Name
    protected $table ="items";
    //Primary Key
    public $primaryKey='id';
   //Timestamp
   public $timestamp =true;

//function to mark item as done or undone
   public function mark(){

      $this->done=$this->done ? false : true;
      $this->save();
   }
}
