<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceActionDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_ = \DB::statement('SELECT @@GLOBAL.foreign_key_checks');
        \DB::statement('set foreign_key_checks = 0');
        \Milestone\Appframe\Model\ResourceActionData::query()
            ->create([	'id' => '2137101', 	'resource_action' => '2133202', 	'resource_data' => '2128102', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
