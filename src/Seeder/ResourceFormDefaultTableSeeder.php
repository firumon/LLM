<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormDefaultTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormDefault::query()
            ->create([	'id' => '2120101', 	'resource_form' => '2110101', 	'name' => 'groups', 	'value' => '2102102', 	'relation' => '2109103', 	'attribute' => 'group', 										])
            ->create([	'id' => '2120102', 	'resource_form' => '2110103', 	'name' => 'groups', 	'value' => '2102106', 	'relation' => '2109105', 	'attribute' => 'group', 										])
            ->create([	'id' => '2120103', 	'resource_form' => '2110104', 	'name' => 'groups', 	'value' => '2102103', 	'relation' => '2109105', 	'attribute' => 'group', 										])
            ->create([	'id' => '2120104', 	'resource_form' => '2110104', 	'name' => 'email', 	'value' => '-', 		'attribute' => 'email', 										])
            ->create([	'id' => '2120105', 	'resource_form' => '2110104', 	'name' => 'password', 	'value' => '-', 		'attribute' => 'password', 										])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
