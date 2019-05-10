<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceDataViewSectionTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceDataViewSection::query()
            ->create([	'id' => '2131101', 	'resource_data' => '2128101', 		'title_field' => 'name', 		'colspan' => '12', 										])
            ->create([	'id' => '2131102', 	'resource_data' => '2128102', 	'title' => 'Hub Details', 			'colspan' => '12', 										])
            ->create([	'id' => '2131103', 	'resource_data' => '2128102', 	'title' => 'Users', 		'relation' => '2109108', 	'colspan' => '12', 										])
            ->create([	'id' => '2131104', 	'resource_data' => '2128102', 	'title' => 'Services', 		'relation' => '2109109', 	'colspan' => '12', 										])
            ->create([	'id' => '2131105', 	'resource_data' => '2128102', 	'title' => 'Shelves', 		'relation' => '2109110', 	'colspan' => '12', 										])
            ->create([	'id' => '2131106', 	'resource_data' => '2128103', 		'title_field' => 'name', 		'colspan' => '12', 										])
            ->create([	'id' => '2131107', 	'resource_data' => '2128104', 		'title_field' => 'name', 												])
            ->create([	'id' => '2131108', 	'resource_data' => '2128104', 	'title' => 'Providers', 		'relation' => '2109116', 											])
            ->create([	'id' => '2131109', 	'resource_data' => '2128104', 	'title' => 'Hubs', 		'relation' => '2109117', 											])
            ->create([	'id' => '2131110', 	'resource_data' => '2128104', 	'title' => 'Prices', 		'relation' => '2109119', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
