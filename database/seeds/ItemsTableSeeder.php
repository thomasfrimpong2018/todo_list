<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

 class ItemsTableSeeder extends seeder{

 public function run(){
    DB::table('items')->delete();

    $items=array(
       array(
           'user_id'=>1,
           'name'=>'Buying Groceries',
           'done'=>false

       ),
       array(
        'user_id'=>1,
        'name'=>'Doing the dishes',
        'done'=>true

       ),
    array(
        'user_id'=>1,
        'name'=>'Making supper',
        'done'=>false

    )
       

       );
DB::table('items')->insert($items);
 }

 }