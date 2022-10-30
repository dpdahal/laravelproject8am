<?php

namespace Database\Seeders;

use App\Models\Admin\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Admin::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gamil.com',
            'password' => bcrypt('admin002'),
            'gender' => 'male',
            'status' => 1,
            'role' => 'superadmin',
        ]);

    }
}
