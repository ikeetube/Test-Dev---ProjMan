<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id'=>2, 
            'name'=>'Ikee Wenceslao', 
            'email'=>'ikee@example.com', 
            'email_verified_at'=>NULL,
            'password'=>'$2y$10$XzD.UBp6y0DEr4yV1DGJL.uYMvi0qvOs4KaGpTqgG0ACNPdkewArO', 
            'remember_token'=>'sjo3wutwZR7yot10ya4ULQF2bjuLrdtlJ6CM0QZxPVnR5JuteRe2fqxPdyap', 
            'created_at'=>'2018-12-21 01:05:54',
            'updated_at'=>'2018-12-21 01:05:54']
        ]);
    }
}
