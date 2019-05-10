<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceListScopeTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceListScope::query()
            ->create([	'id' => '2124101', 	'resource_list' => '2123101', 	'scope' => '2108101', 													])
            ->create([	'id' => '2124102', 	'resource_list' => '2123104', 	'scope' => '2108102', 													])
            ->create([	'id' => '2124103', 	'resource_list' => '2123105', 	'scope' => '2108103', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
