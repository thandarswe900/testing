<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $s1=new Role;

        // //mgmg
        $s1->name="Admin";
        // $s1->email="mgmg@gmail.com";
        // $s1->address="Bahan";
        $s1->save();


        $s2=new Role;
        // //mya mya
         $s2->name="Customer";
        // $s2->email="myamya@gmail.com";
        // $s2->address="Mayangone";
        $s2->save();
    }
}
