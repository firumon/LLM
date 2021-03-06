<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormDataMapTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormDataMap::query()
            ->create([	'id' => '2119101', 	'resource_form' => '2110104', 	'resource_data' => '2128103', 	'form_field' => '2111113', 	'attribute' => 'address', 	'relation' => '2109185', 										])
            ->create([	'id' => '2119102', 	'resource_form' => '2110104', 	'resource_data' => '2128103', 	'form_field' => '2111112', 	'attribute' => 'phone', 	'relation' => '2109185', 										])
            ->create([	'id' => '2119103', 	'resource_form' => '2110111', 	'resource_data' => '2128105', 	'form_field' => '2111134', 	'attribute' => 'id', 	'relation' => '2109138', 										])
            ->create([	'id' => '2119104', 	'resource_form' => '2110119', 	'resource_data' => '2128106', 	'form_field' => '2111158', 	'attribute' => 'id', 	'relation' => '2109194', 										])
            ->create([	'id' => '2119105', 	'resource_form' => '2110119', 	'resource_data' => '2128106', 	'form_field' => '2111159', 	'attribute' => 'id', 	'relation' => '2109154', 										])
            ->create([	'id' => '2119106', 	'resource_form' => '2110119', 	'resource_data' => '2128106', 	'form_field' => '2111160', 	'attribute' => 'id', 	'relation' => '2109155', 										])
            ->create([	'id' => '2119107', 	'resource_form' => '2110128', 	'resource_data' => '2128111', 	'form_field' => '2111185', 	'attribute' => 'id', 	'relation' => '2109147', 										])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
