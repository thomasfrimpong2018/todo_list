<?php 

 class UsersTableSeeder extends Seeder{
     public function run(){
         DB::table('users')->delete();

         $users=array(
             array(
                 'name'=>'Alice',
                 'password'=>Hash::make('alice'),
                 'email'=>'email@email.com'
             )

             );
         DB::table('users')->insert($users);
     }
 }