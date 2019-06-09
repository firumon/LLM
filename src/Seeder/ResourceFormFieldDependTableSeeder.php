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
            ->create([	'id' => '2117101', 	'form_field' => '2111137', 	'depend_field' => 'hub', 	'db_field' => 'hub', 	'operator' => '=', 				'ignore_null' => 'Yes', 							])
            ->create([	'id' => '2117102', 	'form_field' => '2111150', 					'method' => 'getCurrentDateDependentValue', 		'ignore_null' => 'No', 							])
            ->create([	'id' => '2117103', 	'form_field' => '2111165', 					'method' => 'getCurrentDateDependentValue', 		'ignore_null' => 'No', 							])
            ->create([	'id' => '2117104', 	'form_field' => '2111167', 	'depend_field' => 'invoice', 				'method' => 'getBalanceReceiptAmount', 		'ignore_null' => 'Yes', 							])
            ->create([	'id' => '2117105', 	'form_field' => '2111159', 	'depend_field' => 'hub', 	'db_field' => 'hub', 	'operator' => '=', 				'ignore_null' => 'Yes', 							])
            ->create([	'id' => '2117106', 	'form_field' => '2111173', 					'method' => 'getCurrentDateDependentValue', 		'ignore_null' => 'No', 							])
            ->create([	'id' => '2117107', 	'form_field' => '2111188', 					'method' => 'currentStartAtDateTime', 		'ignore_null' => 'No', 							])
            ->create([	'id' => '2117108', 	'form_field' => '2111189', 					'method' => 'currentEndAtDateTime', 		'ignore_null' => 'No', 							])
            ->create([	'id' => '2117109', 	'form_field' => '2111168', 					'method' => 'getCurrentDateDependentValue', 		'ignore_null' => 'No', 							])
            ->create([	'id' => '2117110', 	'form_field' => '2111170', 	'depend_field' => 'order', 	'db_field' => 'order', 	'operator' => '=', 				'ignore_null' => 'Yes', 							])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
