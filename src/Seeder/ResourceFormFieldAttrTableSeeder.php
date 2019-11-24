<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldAttrTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormFieldAttr::query()
            ->create([	'id' => '2114101', 	'form_field' => '2111101', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114102', 	'form_field' => '2111102', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114103', 	'form_field' => '2111103', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114104', 	'form_field' => '2111104', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114105', 	'form_field' => '2111105', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114106', 	'form_field' => '2111106', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114107', 	'form_field' => '2111108', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114108', 	'form_field' => '2111109', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114109', 	'form_field' => '2111110', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114110', 	'form_field' => '2111107', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114111', 	'form_field' => '2111111', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114112', 	'form_field' => '2111112', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114113', 	'form_field' => '2111113', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114114', 	'form_field' => '2111122', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114115', 	'form_field' => '2111123', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114116', 	'form_field' => '2111124', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114117', 	'form_field' => '2111125', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114118', 	'form_field' => '2111126', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114119', 	'form_field' => '2111127', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114120', 	'form_field' => '2111131', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114121', 	'form_field' => '2111132', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114122', 	'form_field' => '2111133', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114123', 	'form_field' => '2111134', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114124', 	'form_field' => '2111135', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114125', 	'form_field' => '2111136', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114126', 	'form_field' => '2111137', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114127', 	'form_field' => '2111138', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114128', 	'form_field' => '2111139', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114129', 	'form_field' => '2111140', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114130', 	'form_field' => '2111141', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114131', 	'form_field' => '2111145', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114132', 	'form_field' => '2111146', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114133', 	'form_field' => '2111147', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114134', 	'form_field' => '2111148', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114135', 	'form_field' => '2111149', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114136', 	'form_field' => '2111150', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114137', 	'form_field' => '2111151', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114138', 	'form_field' => '2111152', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114139', 	'form_field' => '2111158', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114140', 	'form_field' => '2111159', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114141', 	'form_field' => '2111160', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114142', 	'form_field' => '2111161', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114143', 	'form_field' => '2111162', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114144', 	'form_field' => '2111164', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114145', 	'form_field' => '2111165', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114146', 	'form_field' => '2111166', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114147', 	'form_field' => '2111167', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114148', 	'form_field' => '2111168', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114149', 	'form_field' => '2111169', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114150', 	'form_field' => '2111170', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114151', 	'form_field' => '2111171', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114152', 	'form_field' => '2111172', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114153', 	'form_field' => '2111173', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114154', 	'form_field' => '2111174', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114155', 	'form_field' => '2111175', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114156', 	'form_field' => '2111176', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114157', 	'form_field' => '2111177', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114158', 	'form_field' => '2111178', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114159', 	'form_field' => '2111163', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114160', 	'form_field' => '2111179', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114161', 	'form_field' => '2111180', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114162', 	'form_field' => '2111181', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114163', 	'form_field' => '2111189', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '2114164', 	'form_field' => '2111190', 	'name' => 'inline', 	'value' => '4', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
