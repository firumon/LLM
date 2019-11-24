<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldValidationTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormFieldValidation::query()
            ->create([	'id' => '2116101', 	'form_field' => '2111102', 	'rule' => 'required', 	'message' => 'Email Required', 												])
            ->create([	'id' => '2116102', 	'form_field' => '2111102', 	'rule' => 'unique', 	'message' => 'Already in Use, try another one', 	'arg1' => 'users,email', 											])
            ->create([	'id' => '2116103', 	'form_field' => '2111106', 	'rule' => 'required', 	'message' => 'Email Required', 												])
            ->create([	'id' => '2116104', 	'form_field' => '2111106', 	'rule' => 'unique', 	'message' => 'Already in Use, try another one', 	'arg1' => 'users,email', 											])
            ->create([	'id' => '2116105', 	'form_field' => '2111109', 	'rule' => 'required', 	'message' => 'Email Required', 												])
            ->create([	'id' => '2116106', 	'form_field' => '2111109', 	'rule' => 'unique', 	'message' => 'Already in Use, try another one', 	'arg1' => 'users,email', 											])
            ->create([	'id' => '2116107', 	'form_field' => '2111114', 	'rule' => 'required', 	'message' => 'Name Required', 												])
            ->create([	'id' => '2116108', 	'form_field' => '2111122', 	'rule' => 'required', 	'message' => 'Name Required', 												])
            ->create([	'id' => '2116109', 	'form_field' => '2111125', 	'rule' => 'required', 	'message' => 'Name Required', 												])
            ->create([	'id' => '2116110', 	'form_field' => '2111135', 	'rule' => 'required', 	'message' => 'Name Required', 												])
            ->create([	'id' => '2116111', 	'form_field' => '2111139', 	'rule' => 'required', 	'message' => 'Name Required', 												])
            ->create([	'id' => '2116112', 	'form_field' => '2111148', 	'rule' => 'required', 	'message' => 'Name Required', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
