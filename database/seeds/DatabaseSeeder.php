<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $add = new User;
        $add->user_name     = 'karim';
        $add->password = bcrypt('jkJkp<e%YL@[rmf9=YBw');
        $add->email    = 'admincpx@high-discounts.com';
        $add->save();
    }
}
