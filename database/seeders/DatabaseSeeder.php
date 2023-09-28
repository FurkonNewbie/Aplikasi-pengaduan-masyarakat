<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //     $data = [
        //         'nama' => 'furkon',
        //         'email' => 'furkon@gmail.com',
        //         'password' => '123',
        //         'role' => 'Admin',
        //         'no_telepon' => '673487',
        //     ];
        //     User::create($data);
        // }
        $data = [
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '123',
            'role' => 'Masyarakat',
            'no_telepon' => '673487',
        ];
        User::create($data);
    }
}
