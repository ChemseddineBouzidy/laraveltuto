<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table("profiles")->insert([
        //     'name'=>Str::random(20),
        //     'email'=>Str::random(20)."@gmail.com",
        //     'password'=>Hash::make('password'),
        //     'bio'=>Str::random(255),
        // ]);
        \App\Models\Profile::factory(200)->create();
    }
}

