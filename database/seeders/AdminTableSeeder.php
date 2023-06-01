<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = new Admin();
        $admin->first_name = "Asif";
        $admin->last_name = "Ahmed";
        $admin->email = "asifahmed715@gmail.com";
        $admin->phone = "03139188022";
        $admin->password = Hash::make('12345678');
        $admin->save();
    }
}
