<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldDataTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormFieldData::query()
            ->create([	'id' => '2112101', 	'form_field' => '2111101', 	'attribute' => 'name', 													])
            ->create([	'id' => '2112102', 	'form_field' => '2111102', 	'attribute' => 'email', 													])
            ->create([	'id' => '2112103', 	'form_field' => '2111103', 	'attribute' => 'password', 													])
            ->create([	'id' => '2112104', 	'form_field' => '2111104', 	'attribute' => 'group', 	'relation' => '2109105', 												])
            ->create([	'id' => '2112105', 	'form_field' => '2111105', 	'attribute' => 'name', 													])
            ->create([	'id' => '2112106', 	'form_field' => '2111106', 	'attribute' => 'email', 													])
            ->create([	'id' => '2112107', 	'form_field' => '2111107', 	'attribute' => 'password', 													])
            ->create([	'id' => '2112108', 	'form_field' => '2111108', 	'attribute' => 'name', 													])
            ->create([	'id' => '2112109', 	'form_field' => '2111109', 	'attribute' => 'email', 													])
            ->create([	'id' => '2112110', 	'form_field' => '2111110', 	'attribute' => 'password', 													])
            ->create([	'id' => '2112111', 	'form_field' => '2111111', 	'attribute' => 'name', 													])
            ->create([	'id' => '2112112', 	'form_field' => '2111112', 	'attribute' => 'phone', 	'relation' => '2109185', 												])
            ->create([	'id' => '2112113', 	'form_field' => '2111113', 	'attribute' => 'address', 	'relation' => '2109185', 												])
            ->create([	'id' => '2112114', 	'form_field' => '2111114', 	'attribute' => 'name', 													])
            ->create([	'id' => '2112115', 	'form_field' => '2111115', 	'attribute' => 'phone', 													])
            ->create([	'id' => '2112116', 	'form_field' => '2111116', 	'attribute' => 'status', 													])
            ->create([	'id' => '2112117', 	'form_field' => '2111117', 	'attribute' => 'address', 													])
            ->create([	'id' => '2112118', 	'form_field' => '2111118', 	'attribute' => 'image', 													])
            ->create([	'id' => '2112119', 	'form_field' => '2111119', 	'attribute' => 'email', 													])
            ->create([	'id' => '2112120', 	'form_field' => '2111120', 	'attribute' => 'website', 													])
            ->create([	'id' => '2112121', 	'form_field' => '2111121', 	'attribute' => 'name', 													])
            ->create([	'id' => '2112122', 	'form_field' => '2111122', 	'attribute' => 'description', 													])
            ->create([	'id' => '2112123', 	'form_field' => '2111123', 	'attribute' => 'status', 													])
            ->create([	'id' => '2112124', 	'form_field' => '2111124', 	'attribute' => 'name', 													])
            ->create([	'id' => '2112125', 	'form_field' => '2111125', 	'attribute' => 'description', 													])
            ->create([	'id' => '2112126', 	'form_field' => '2111126', 	'attribute' => 'status', 													])
            ->create([	'id' => '2112127', 	'form_field' => '2111127', 	'attribute' => 'item', 													])
            ->create([	'id' => '2112128', 	'form_field' => '2111128', 	'attribute' => 'service', 													])
            ->create([	'id' => '2112129', 	'form_field' => '2111129', 	'attribute' => 'name', 													])
            ->create([	'id' => '2112130', 	'form_field' => '2111130', 	'attribute' => 'name', 													])
            ->create([	'id' => '2112131', 	'form_field' => '2111131', 	'attribute' => 'service', 													])
            ->create([	'id' => '2112132', 	'form_field' => '2111132', 	'attribute' => 'status', 													])
            ->create([	'id' => '2112133', 	'form_field' => '2111133', 	'attribute' => 'hub', 													])
            ->create([	'id' => '2112134', 	'form_field' => '2111134', 	'attribute' => 'name', 													])
            ->create([	'id' => '2112135', 	'form_field' => '2111135', 	'attribute' => 'status', 													])
            ->create([	'id' => '2112136', 	'form_field' => '2111136', 	'attribute' => 'hub', 													])
            ->create([	'id' => '2112137', 	'form_field' => '2111137', 	'attribute' => 'shelf', 													])
            ->create([	'id' => '2112138', 	'form_field' => '2111138', 	'attribute' => 'name', 													])
            ->create([	'id' => '2112139', 	'form_field' => '2111139', 	'attribute' => 'description', 													])
            ->create([	'id' => '2112140', 	'form_field' => '2111140', 	'attribute' => 'status', 													])
            ->create([	'id' => '2112141', 	'form_field' => '2111141', 	'attribute' => 'pl', 													])
            ->create([	'id' => '2112142', 	'form_field' => '2111142', 	'attribute' => 'is', 													])
            ->create([	'id' => '2112143', 	'form_field' => '2111143', 	'attribute' => 'price', 													])
            ->create([	'id' => '2112144', 	'form_field' => '2111144', 	'attribute' => 'price', 													])
            ->create([	'id' => '2112145', 	'form_field' => '2111145', 	'attribute' => 'status', 													])
            ->create([	'id' => '2112146', 	'form_field' => '2111146', 	'attribute' => 'code', 													])
            ->create([	'id' => '2112147', 	'form_field' => '2111147', 	'attribute' => 'status', 													])
            ->create([	'id' => '2112148', 	'form_field' => '2111148', 	'attribute' => 'customer', 													])
            ->create([	'id' => '2112149', 	'form_field' => '2111149', 	'attribute' => 'date', 													])
            ->create([	'id' => '2112150', 	'form_field' => '2111150', 	'attribute' => 'pl', 													])
            ->create([	'id' => '2112151', 	'form_field' => '2111151', 	'attribute' => 'order', 													])
            ->create([	'id' => '2112152', 	'form_field' => '2111152', 	'attribute' => 'item', 													])
            ->create([	'id' => '2112153', 	'form_field' => '2111153', 	'attribute' => 'service', 	'relation' => '2109156', 												])
            ->create([	'id' => '2112154', 	'form_field' => '2111154', 	'attribute' => 'label', 													])
            ->create([	'id' => '2112155', 	'form_field' => '2111155', 	'attribute' => 'item', 													])
            ->create([	'id' => '2112156', 	'form_field' => '2111156', 	'attribute' => 'service', 	'relation' => '2109156', 												])
            ->create([	'id' => '2112157', 	'form_field' => '2111157', 	'attribute' => 'label', 													])
            ->create([	'id' => '2112158', 	'form_field' => '2111158', 	'attribute' => 'shelf', 													])
            ->create([	'id' => '2112159', 	'form_field' => '2111159', 	'attribute' => 'delivery', 													])
            ->create([	'id' => '2112160', 	'form_field' => '2111160', 	'attribute' => 'ois', 													])
            ->create([	'id' => '2112161', 	'form_field' => '2111161', 	'attribute' => 'user', 													])
            ->create([	'id' => '2112162', 	'form_field' => '2111162', 	'attribute' => 'date', 													])
            ->create([	'id' => '2112163', 	'form_field' => '2111163', 	'attribute' => 'invoice', 													])
            ->create([	'id' => '2112164', 	'form_field' => '2111164', 	'attribute' => 'amount', 													])
            ->create([	'id' => '2112165', 	'form_field' => '2111165', 	'attribute' => 'date', 													])
            ->create([	'id' => '2112166', 	'form_field' => '2111166', 	'attribute' => 'order', 													])
            ->create([	'id' => '2112167', 	'form_field' => '2111167', 	'attribute' => 'oi', 	'relation' => '2109173', 												])
            ->create([	'id' => '2112168', 	'form_field' => '2111168', 	'attribute' => 'source_hub', 													])
            ->create([	'id' => '2112169', 	'form_field' => '2111169', 	'attribute' => 'destination_hub', 													])
            ->create([	'id' => '2112170', 	'form_field' => '2111170', 	'attribute' => 'date', 													])
            ->create([	'id' => '2112171', 	'form_field' => '2111171', 	'attribute' => 'status', 													])
            ->create([	'id' => '2112172', 	'form_field' => '2111172', 	'attribute' => 'name', 													])
            ->create([	'id' => '2112173', 	'form_field' => '2111173', 	'attribute' => 'email', 													])
            ->create([	'id' => '2112174', 	'form_field' => '2111174', 	'attribute' => 'password', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
