<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceDataTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceData::query()
            ->create([	'id' => '2128101', 	'resource' => '2106104', 	'name' => 'EmployeeData', 		'title_field' => 'name', 											])
            ->create([	'id' => '2128102', 	'resource' => '2106107', 	'name' => 'HubData', 		'title_field' => 'name', 											])
            ->create([	'id' => '2128103', 	'resource' => '2106105', 	'name' => 'CustomerData', 		'title_field' => 'name', 											])
            ->create([	'id' => '2128104', 	'resource' => '2106108', 	'name' => 'ServiceData', 		'title_field' => 'name', 											])
            ->create([	'id' => '2128105', 	'resource' => '2106113', 	'name' => 'ShelfData', 		'title_field' => 'name', 											])
            ->create([	'id' => '2128106', 	'resource' => '2106119', 	'name' => 'OrderItemData', 		'title_field' => 'name', 											])
            ->create([	'id' => '2128107', 	'resource' => '2106110', 	'name' => 'ItemServiceEditData', 		'title_field' => 'name', 											])
            ->create([	'id' => '2128108', 	'resource' => '2106117', 	'name' => 'LabelEditData', 		'title_field' => 'code', 											])
            ->create([	'id' => '2128109', 	'resource' => '2106115', 	'name' => 'PricelistEditData', 		'title_field' => 'name', 											])
            ->create([	'id' => '2128110', 	'resource' => '2106109', 	'name' => 'ItemEditData', 		'title_field' => 'name', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
