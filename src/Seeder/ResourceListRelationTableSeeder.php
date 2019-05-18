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
            ->create([	'id' => '2125107', 	'resource_list' => '2123110', 	'relation' => '2109191', 													])
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
            ->create([	'id' => '2125124', 	'resource_list' => '2123121', 	'relation' => '2109153', 													])
            ->create([	'id' => '2125125', 	'resource_list' => '2123121', 	'relation' => '2109154', 													])
            ->create([	'id' => '2125126', 	'resource_list' => '2123121', 	'relation' => '2109155', 													])
            ->create([	'id' => '2125127', 	'resource_list' => '2123122', 	'relation' => '2109158', 	'nest_relation1' => '2109194', 												])
            ->create([	'id' => '2125128', 	'resource_list' => '2123122', 	'relation' => '2109159', 													])
            ->create([	'id' => '2125129', 	'resource_list' => '2123122', 	'relation' => '2109160', 													])
            ->create([	'id' => '2125130', 	'resource_list' => '2123122', 	'relation' => '2109189', 													])
            ->create([	'id' => '2125131', 	'resource_list' => '2123123', 	'relation' => '2109168', 													])
            ->create([	'id' => '2125132', 	'resource_list' => '2123123', 	'relation' => '2109169', 													])
            ->create([	'id' => '2125133', 	'resource_list' => '2123125', 	'relation' => '2109147', 													])
            ->create([	'id' => '2125134', 	'resource_list' => '2123113', 	'relation' => '2109192', 													])
            ->create([	'id' => '2125135', 	'resource_list' => '2123126', 	'relation' => '2109166', 													])
            ->create([	'id' => '2125136', 	'resource_list' => '2123126', 	'relation' => '2109167', 													])
            ->create([	'id' => '2125137', 	'resource_list' => '2123127', 	'relation' => '2109162', 													])
            ->create([	'id' => '2125138', 	'resource_list' => '2123127', 	'relation' => '2109161', 													])
            ->create([	'id' => '2125139', 	'resource_list' => '2123122', 	'relation' => '2109158', 													])
            ->create([	'id' => '2125140', 	'resource_list' => '2123122', 	'relation' => '2109159', 													])
            ->create([	'id' => '2125141', 	'resource_list' => '2123122', 	'relation' => '2109189', 													])
            ->create([	'id' => '2125142', 	'resource_list' => '2123128', 	'relation' => '2109162', 													])
            ->create([	'id' => '2125143', 	'resource_list' => '2123128', 	'relation' => '2109161', 													])
            ->create([	'id' => '2125144', 	'resource_list' => '2123114', 	'relation' => '2109148', 													])
            ->create([	'id' => '2125145', 	'resource_list' => '2123121', 	'relation' => '2109188', 													])
            ->create([	'id' => '2125146', 	'resource_list' => '2123121', 	'relation' => '2109194', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
