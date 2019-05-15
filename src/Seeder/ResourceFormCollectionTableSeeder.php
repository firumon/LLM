<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormCollectionTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormCollection::query()
            ->create([	'id' => '2121101', 	'resource_form' => '2110107', 	'collection_form' => '2110108', 	'relation' => '2109124', 	'foreign_field' => '2111127', 											])
            ->create([	'id' => '2121102', 	'resource_form' => '2110112', 	'collection_form' => '2110113', 	'relation' => '2109142', 	'foreign_field' => '2111141', 											])
            ->create([	'id' => '2121103', 	'resource_form' => '2110116', 	'collection_form' => '2110117', 	'relation' => '2109146', 	'foreign_field' => '2111152', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
