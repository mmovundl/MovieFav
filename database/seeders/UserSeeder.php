<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'jointheteam',
                'email'              => 'jointheteam@aglet.co.za',
                'email_verified_at'  => null,
                'password'           => bcrypt('@TeamAglet'),
                'remember_token'     => null,
                'email_verified_at'  => '2021-02-19 16:28:29',
                'created_at'         => '2021-02-19 16:28:29',
                'updated_at'        =>'2021-02-19 16:28:29'
            ],
        ];

        User::insert($users);
    }
}
