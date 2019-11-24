<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldOptionTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormFieldOption::query()
            ->create([	'id' => '2113101', 	'form_field' => '2111104', 	'type' => 'List', 	'detail' => '2123101', 	'value_attr' => 'id', 	'label_attr' => 'title', 										])
            ->create([	'id' => '2113102', 	'form_field' => '2111116', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113103', 	'form_field' => '2111124', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113104', 	'form_field' => '2111127', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113105', 	'form_field' => '2111128', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113106', 	'form_field' => '2111129', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113107', 	'form_field' => '2111132', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113108', 	'form_field' => '2111133', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113109', 	'form_field' => '2111134', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113110', 	'form_field' => '2111136', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113111', 	'form_field' => '2111137', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113112', 	'form_field' => '2111138', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113113', 	'form_field' => '2111141', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113114', 	'form_field' => '2111142', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113115', 	'form_field' => '2111143', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113116', 	'form_field' => '2111146', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113117', 	'form_field' => '2111147', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113118', 	'form_field' => '2111149', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113119', 	'form_field' => '2111150', 	'type' => 'List', 	'detail' => '2123107', 	'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113120', 	'form_field' => '2111152', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113121', 	'form_field' => '2111154', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113122', 	'form_field' => '2111155', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113123', 	'form_field' => '2111157', 	'type' => 'List', 	'detail' => '2123124', 	'value_attr' => 'id', 	'label_attr' => 'code', 										])
            ->create([	'id' => '2113124', 	'form_field' => '2111158', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113125', 	'form_field' => '2111159', 	'type' => 'List', 	'detail' => '2123113', 	'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113126', 	'form_field' => '2111160', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113127', 	'form_field' => '2111163', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113128', 	'form_field' => '2111164', 	'type' => 'List', 	'detail' => '2123122', 	'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113129', 	'form_field' => '2111165', 	'type' => 'List', 	'detail' => '2123106', 	'value_attr' => 'id', 	'label_attr' => 'name_and_services', 										])
            ->create([	'id' => '2113130', 	'form_field' => '2111167', 	'type' => 'List', 	'detail' => '2123127', 	'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113131', 	'form_field' => '2111170', 	'type' => 'List', 	'detail' => '2123141', 	'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113132', 	'form_field' => '2111171', 	'type' => 'List', 	'detail' => '2123130', 	'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113133', 	'form_field' => '2111172', 	'type' => 'List', 	'detail' => '2123129', 	'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113134', 	'form_field' => '2111173', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113135', 	'form_field' => '2111175', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113136', 	'form_field' => '2111181', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113137', 	'form_field' => '2111183', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113138', 	'form_field' => '2111185', 	'type' => 'List', 	'detail' => '2123107', 	'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113139', 	'form_field' => '2111187', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113140', 	'form_field' => '2111188', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113141', 	'form_field' => '2111191', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113142', 	'form_field' => '2111192', 	'type' => 'Method', 	'detail' => 'ImageableList', 			'preload' => 'Yes', 									])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
