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
            ->create([	'id' => '2121101', 	'resource_form' => '2110108', 	'collection_form' => '2110109', 	'relation' => '2109124', 	'foreign_field' => '2111128', 											])
            ->create([	'id' => '2121102', 	'resource_form' => '2110113', 	'collection_form' => '2110114', 	'relation' => '2109142', 	'foreign_field' => '2111142', 											])
            ->create([	'id' => '2121103', 	'resource_form' => '2110117', 	'collection_form' => '2110118', 	'relation' => '2109146', 	'foreign_field' => '2111153', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
