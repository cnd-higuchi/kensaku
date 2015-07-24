<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Carbon\Carbon;
use App\User;
use App\ResidentialBasicInformation as Rbi;
use App\ResidentialBasicInformationMeta as Rbim;

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

        $this->call(UsersTableSeeder::class);
        $this->call(ResidentialBasicInformationsSeeder::class);

        Model::reguard();
    }
}

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->truncate();
        User::create([
            'name' => 'c-system',
            'email' => 'c-system@cn-door.com',
            'password' => bcrypt('c-system'),
        ]);
    }
}

class ResidentialBasicInformationsSeeder extends Seeder
{
    public function run()
    {
        DB::table('residential_basic_informations')->truncate();
        DB::table('residential_basic_information_metas')->truncate();
        
        Rbi::create([
            'code' => '201507-0001',
            'residential_type' => '1',
            'sales_form' => '1',
            'name' => 'テストマンション',
            'structure' => '1',
            'story' => '1',
            'postal_code' => '0600042',
            'area_category_id' => '1',
            'address' => '中央区大通西５丁目大五ビル',
            'Age' => '30',
            'traffic_category_id' => '1',
            'access' => '地下鉄大通駅徒歩１分',
            'latite' => '43.0611377',
            'longitude' => '141.3499789',
            'warranty' => '1',             //保障
            'parking' => '1',              //駐車場
            'gas' => '1',                  //ガス
            'internet' => '1',             //インターネット
        ]);
        Rbim::create([
            'information_id' => '1',
            'key' => 'photo_file_path',
            'value' => '/img/sample.jpg',
        ]);
        Rbim::create([
            'information_id' => '1',
            'key' => 'common_icon',
            'value' => '1',
        ]);
        Rbim::create([
            'information_id' => '1',
            'key' => 'common_icon',
            'value' => '2',
        ]);
        Rbim::create([
            'information_id' => '1',
            'key' => 'common_icon',
            'value' => '4',
        ]);
         
        
        
    }
}