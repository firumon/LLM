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
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
