<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
        Model::unguard();

        $this->call(UserSeeder::class);

        Model::reguard();
    }
}

class UserSeeder extends Seeder {

 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run()
 {

     User::truncate();
     User::create(array(
         'userName' => 'geoadmin',
         'userPassword' => bcrypt('geoadmin')
     ));
 }

}
