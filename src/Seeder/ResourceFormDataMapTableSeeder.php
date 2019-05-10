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
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
