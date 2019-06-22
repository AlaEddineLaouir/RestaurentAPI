<?php

use App\Employee;
use Illuminate\Database\Seeder;

class AdminstratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'name'=>'Mehdi',
            'email'=>'mehdi@gmail.com',
            'password'=>bcrypt('123456'),
            'role'=>'admin',
            'phone'=>'0541863592',
            
        ]);
    }
}
