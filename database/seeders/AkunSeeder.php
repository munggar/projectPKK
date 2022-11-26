<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username'=> 'wali kelas',
                'name'=> 'Wali Kelas',
                'foto' => 'user.png',
                'email'=>'walikelas@gmail.com',
                'level'=>'walikelas',
                'password'=>bcrypt('wakel123')
            ],
            [
                'username'=> 'ketua kelas',
                'name'=> 'Admin',
                'foto' => 'user.png',
                'email'=>'admin@gmail.com',
                'level'=>'ketuamurid',
                'password'=>bcrypt('admin123')
            ],
            ];
            foreach( $user as $key =>$value){
                User::create($value);
            }
    }
}
