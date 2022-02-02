<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\People;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        People::factory(30)->create();

        $user = new User();
        $user->name = 'Jamil Ahsan';
        $user->email = 'demo@laravel.com';
        $user->email_verified_at = now();
        $user->password = Hash::make('123456');
        $user->remember_token = Str::random(10);
        $user->save();
    }
}
