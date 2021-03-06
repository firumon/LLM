<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldDependTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormFieldDepend::query()
            ->create([	'id' => '2117101', 	'form_field' => '2111138', 	'depend_field' => 'hub', 	'db_field' => 'hub', 	'operator' => '=', 				'ignore_null' => 'Yes', 							])
            ->create([	'id' => '2117102', 	'form_field' => '2111151', 					'method' => 'getCurrentDateDependentValue', 		'ignore_null' => 'No', 							])
            ->create([	'id' => '2117103', 	'form_field' => '2111166', 					'method' => 'getCurrentDateDependentValue', 		'ignore_null' => 'No', 							])
            ->create([	'id' => '2117104', 	'form_field' => '2111168', 	'depend_field' => 'invoice', 				'method' => 'getBalanceReceiptAmount', 		'ignore_null' => 'Yes', 							])
            ->create([	'id' => '2117105', 	'form_field' => '2111160', 	'depend_field' => 'hub', 	'db_field' => 'hub', 	'operator' => '=', 				'ignore_null' => 'Yes', 							])
            ->create([	'id' => '2117106', 	'form_field' => '2111174', 					'method' => 'getCurrentDateDependentValue', 		'ignore_null' => 'No', 							])
            ->create([	'id' => '2117107', 	'form_field' => '2111189', 					'method' => 'currentStartAtDateTime', 		'ignore_null' => 'No', 							])
            ->create([	'id' => '2117108', 	'form_field' => '2111190', 					'method' => 'currentEndAtDateTime', 		'ignore_null' => 'No', 							])
            ->create([	'id' => '2117109', 	'form_field' => '2111169', 					'method' => 'getCurrentDateDependentValue', 		'ignore_null' => 'No', 							])
            ->create([	'id' => '2117110', 	'form_field' => '2111171', 	'depend_field' => 'order', 	'db_field' => 'order', 	'operator' => '=', 				'ignore_null' => 'Yes', 							])
            ->create([	'id' => '2117111', 	'form_field' => '2111192', 	'depend_field' => 'type', 				'method' => 'getTypeList', 		'ignore_null' => 'Yes', 							])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
