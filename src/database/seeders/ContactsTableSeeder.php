<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
      'secondname' => 'tony',
      'firstname' => 'tony',
      'gender' => '男性',
      'email' => 'aaa@yahoo.co.jp',
      'postcode' => '1234567',
      'adress' => 'japan',
      'building' => 'testビル',
      'content' => 'test',
    ];
    DB::table('contacts')->insert($param);

    $this->call(ContactsTableSeeder::class);
    }
}
