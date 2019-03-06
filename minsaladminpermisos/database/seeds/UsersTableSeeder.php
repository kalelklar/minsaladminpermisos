<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                //
        \DB:: table('users')->insert(array(
            'name' =>'Estrategico',
            'email'=>'estrategico@gmail.com',
            'password'=>\Hash::make('estrategico1234'),
            'type'=>'estrategico',
        	));

        \DB:: table('users')->insert(array(
            'name' =>'Tactico',
            'email'=>'tactico@gmail.com',
            'password'=>\Hash::make('tactico1234'),
            'type'=>'tactico',
        	));

        \DB:: table('users')->insert(array(
            'name' =>'Administrador del Sistema',
            'email'=>'admin@gmail.com',
            'password'=>\Hash::make('admin1234'),
            'type'=>'adminsistema',
        	));

        \DB:: table('users')->insert(array(
            'name' =>'Operativo',
            'email'=>'operativo@gmail.com',
            'password'=>\Hash::make('operativo1234'),
            'type'=>'operativo',
            ));
    }
}
