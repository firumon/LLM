<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceDataRelationTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceDataRelation::query()
            ->create([	'id' => '2130101', 	'resource_data' => '2128101', 	'relation' => '2109104', 													])
            ->create([	'id' => '2130102', 	'resource_data' => '2128101', 	'relation' => '2109106', 													])
            ->create([	'id' => '2130103', 	'resource_data' => '2128101', 	'relation' => '2109105', 													])
            ->create([	'id' => '2130104', 	'resource_data' => '2128102', 	'relation' => '2109108', 	'nest_relation1' => '2109102', 												])
            ->create([	'id' => '2130105', 	'resource_data' => '2128102', 	'relation' => '2109109', 	'nest_relation1' => '2109134', 												])
            ->create([	'id' => '2130106', 	'resource_data' => '2128102', 	'relation' => '2109109', 	'nest_relation1' => '2109135', 												])
            ->create([	'id' => '2130107', 	'resource_data' => '2128102', 	'relation' => '2109110', 													])
            ->create([	'id' => '2130108', 	'resource_data' => '2128102', 	'relation' => '2109111', 													])
            ->create([	'id' => '2130109', 	'resource_data' => '2128103', 	'relation' => '2109185', 													])
            ->create([	'id' => '2130110', 	'resource_data' => '2128104', 	'relation' => '2109116', 													])
            ->create([	'id' => '2130111', 	'resource_data' => '2128104', 	'relation' => '2109117', 													])
            ->create([	'id' => '2130112', 	'resource_data' => '2128104', 	'relation' => '2109118', 													])
            ->create([	'id' => '2130113', 	'resource_data' => '2128104', 	'relation' => '2109119', 	'nest_relation1' => '2109143', 												])
            ->create([	'id' => '2130114', 	'resource_data' => '2128105', 	'relation' => '2109138', 													])
            ->create([	'id' => '2130115', 	'resource_data' => '2128105', 	'relation' => '2109139', 													])
            ->create([	'id' => '2130116', 	'resource_data' => '2128106', 	'relation' => '2109153', 													])
            ->create([	'id' => '2130117', 	'resource_data' => '2128106', 	'relation' => '2109154', 													])
            ->create([	'id' => '2130118', 	'resource_data' => '2128106', 	'relation' => '2109155', 													])
            ->create([	'id' => '2130119', 	'resource_data' => '2128106', 	'relation' => '2109188', 													])
            ->create([	'id' => '2130120', 	'resource_data' => '2128106', 	'relation' => '2109156', 	'nest_relation1' => '2109159', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
