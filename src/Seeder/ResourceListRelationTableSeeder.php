<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceListRelationTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceListRelation::query()
            ->create([	'id' => '2125101', 	'resource_list' => '2123103', 	'relation' => '2109187', 													])
            ->create([	'id' => '2125102', 	'resource_list' => '2123103', 	'relation' => '2109106', 													])
            ->create([	'id' => '2125103', 	'resource_list' => '2123104', 	'relation' => '2109106', 													])
            ->create([	'id' => '2125104', 	'resource_list' => '2123105', 	'relation' => '2109106', 													])
            ->create([	'id' => '2125105', 	'resource_list' => '2123105', 	'relation' => '2109104', 													])
            ->create([	'id' => '2125106', 	'resource_list' => '2123109', 	'relation' => '2109119', 													])
            ->create([	'id' => '2125107', 	'resource_list' => '2123110', 	'relation' => '2109124', 	'nest_relation1' => '2109132', 												])
            ->create([	'id' => '2125108', 	'resource_list' => '2123111', 	'relation' => '2109138', 													])
            ->create([	'id' => '2125109', 	'resource_list' => '2123111', 	'relation' => '2109139', 													])
            ->create([	'id' => '2125110', 	'resource_list' => '2123114', 	'relation' => '2109147', 													])
            ->create([	'id' => '2125111', 	'resource_list' => '2123115', 	'relation' => '2109162', 													])
            ->create([	'id' => '2125112', 	'resource_list' => '2123115', 	'relation' => '2109161', 													])
            ->create([	'id' => '2125113', 	'resource_list' => '2123116', 	'relation' => '2109170', 	'nest_relation1' => '2109162', 												])
            ->create([	'id' => '2125114', 	'resource_list' => '2123117', 	'relation' => '2109171', 													])
            ->create([	'id' => '2125115', 	'resource_list' => '2123117', 	'relation' => '2109172', 													])
            ->create([	'id' => '2125116', 	'resource_list' => '2123118', 	'relation' => '2109177', 													])
            ->create([	'id' => '2125117', 	'resource_list' => '2123118', 	'relation' => '2109178', 													])
            ->create([	'id' => '2125118', 	'resource_list' => '2123119', 	'relation' => '2109144', 													])
            ->create([	'id' => '2125119', 	'resource_list' => '2123119', 	'relation' => '2109143', 													])
            ->create([	'id' => '2125120', 	'resource_list' => '2123120', 	'relation' => '2109131', 													])
            ->create([	'id' => '2125121', 	'resource_list' => '2123120', 	'relation' => '2109132', 													])
            ->create([	'id' => '2125122', 	'resource_list' => '2123120', 	'relation' => '2109133', 													])
            ->create([	'id' => '2125123', 	'resource_list' => '2123113', 	'relation' => '2109145', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
