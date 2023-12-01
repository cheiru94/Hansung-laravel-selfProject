<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('users')->insert(
      [
        [
          'name' => '이재일',
          'email' => 'cheiru94@gmail.com',
          'password' => Hash::make('wodlf011')
        ],
        [
          'name' => 'Ichiban',
          'email' => 'lji941001@gmail.com',
          'password' => Hash::make('wodlf011')
        ],
        [
          'name' => '배수현',
          'email' => 'betty05@gmail.com',
          'password' => Hash::make('wodlf011')
        ],
      ]
    );
  }
}
