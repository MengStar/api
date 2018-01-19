<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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

         $this->call(SnapInviteStatisticsTableSeeder::class);

        Model::reguard();
    }
}

class SnapInviteStatisticsTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::table('snap_invite_statistics')->delete();
        \App\Models\SnapInviteStatistic::create(['cs_id'=>'fafsaar2323','site_id'=>'ewqewqeqw','style_id'=>'1321edasdas','is_mobile'=>'true','statistic_info'=>'[]']);
    }
}