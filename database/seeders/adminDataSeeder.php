<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('123456');
        $adminDatas = [
            [
                'id' => 1,
                'name' => 'Jewel Rana',
                'email' => 'jewel@gmail.com',
                'mobile' => '01959837583',
                'password' => $password,
                'type' => 'admin',
                'status' => 1,
            ]
        ];

        Admin::insert($adminDatas);
    }
}
