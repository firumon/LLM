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
            ->create([	'id' => '2113103', 	'form_field' => '2111123', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113104', 	'form_field' => '2111126', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113105', 	'form_field' => '2111127', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113106', 	'form_field' => '2111128', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113107', 	'form_field' => '2111131', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113108', 	'form_field' => '2111132', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113109', 	'form_field' => '2111133', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113110', 	'form_field' => '2111135', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113111', 	'form_field' => '2111136', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113112', 	'form_field' => '2111137', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113113', 	'form_field' => '2111140', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113114', 	'form_field' => '2111141', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113115', 	'form_field' => '2111142', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113116', 	'form_field' => '2111145', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113117', 	'form_field' => '2111147', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113118', 	'form_field' => '2111148', 	'type' => 'List', 	'detail' => '2123107', 	'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113119', 	'form_field' => '2111150', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113120', 	'form_field' => '2111152', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113121', 	'form_field' => '2111153', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113122', 	'form_field' => '2111154', 	'type' => 'List', 	'detail' => '2123124', 	'value_attr' => 'id', 	'label_attr' => 'code', 										])
            ->create([	'id' => '2113123', 	'form_field' => '2111155', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113124', 	'form_field' => '2111156', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113125', 	'form_field' => '2111157', 	'type' => 'List', 	'detail' => '2123113', 	'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113126', 	'form_field' => '2111158', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113127', 	'form_field' => '2111160', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'service', 										])
            ->create([	'id' => '2113128', 	'form_field' => '2111161', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113129', 	'form_field' => '2111163', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'date', 										])
            ->create([	'id' => '2113130', 	'form_field' => '2111166', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'date', 										])
            ->create([	'id' => '2113131', 	'form_field' => '2111167', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'id', 										])
            ->create([	'id' => '2113132', 	'form_field' => '2111168', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113133', 	'form_field' => '2111169', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '2113134', 	'form_field' => '2111171', 	'type' => 'Enum', 													])
            ->create([	'id' => '2113135', 	'form_field' => '2111175', 	'type' => 'Enum', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
