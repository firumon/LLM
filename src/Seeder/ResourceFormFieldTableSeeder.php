<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormField::query()
            ->create([	'id' => '2111101', 	'resource_form' => '2110101', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Owner Name', 											])
            ->create([	'id' => '2111102', 	'resource_form' => '2110101', 	'name' => 'email', 	'type' => 'text', 	'label' => 'Login Email', 											])
            ->create([	'id' => '2111103', 	'resource_form' => '2110101', 	'name' => 'password', 	'type' => 'password', 	'label' => 'Password', 											])
            ->create([	'id' => '2111104', 	'resource_form' => '2110102', 	'name' => 'group', 	'type' => 'select', 	'label' => 'Employee Type', 											])
            ->create([	'id' => '2111105', 	'resource_form' => '2110102', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Name', 											])
            ->create([	'id' => '2111106', 	'resource_form' => '2110102', 	'name' => 'email', 	'type' => 'text', 	'label' => 'Login Email', 											])
            ->create([	'id' => '2111107', 	'resource_form' => '2110102', 	'name' => 'password', 	'type' => 'password', 	'label' => 'Password', 											])
            ->create([	'id' => '2111108', 	'resource_form' => '2110103', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Name', 											])
            ->create([	'id' => '2111109', 	'resource_form' => '2110103', 	'name' => 'email', 	'type' => 'text', 	'label' => 'Email', 											])
            ->create([	'id' => '2111110', 	'resource_form' => '2110103', 	'name' => 'password', 	'type' => 'password', 	'label' => 'Password', 											])
            ->create([	'id' => '2111111', 	'resource_form' => '2110104', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Customer Name', 											])
            ->create([	'id' => '2111112', 	'resource_form' => '2110104', 	'name' => 'phone', 	'type' => 'text', 	'label' => 'Contact Number', 											])
            ->create([	'id' => '2111113', 	'resource_form' => '2110104', 	'name' => 'address', 	'type' => 'textarea', 	'label' => 'Address', 											])
            ->create([	'id' => '2111114', 	'resource_form' => '2110105', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Name', 											])
            ->create([	'id' => '2111115', 	'resource_form' => '2110105', 	'name' => 'phone', 	'type' => 'text', 	'label' => 'Phone Number', 											])
            ->create([	'id' => '2111116', 	'resource_form' => '2110105', 	'name' => 'status', 	'type' => 'select', 	'label' => 'Status', 											])
            ->create([	'id' => '2111117', 	'resource_form' => '2110105', 	'name' => 'address', 	'type' => 'textarea', 	'label' => 'Address', 											])
            ->create([	'id' => '2111118', 	'resource_form' => '2110105', 	'name' => 'image', 	'type' => 'file', 	'label' => 'Image', 											])
            ->create([	'id' => '2111119', 	'resource_form' => '2110105', 	'name' => 'email', 	'type' => 'text', 	'label' => 'Email', 											])
            ->create([	'id' => '2111120', 	'resource_form' => '2110105', 	'name' => 'website', 	'type' => 'text', 	'label' => 'Website', 											])
            ->create([	'id' => '2111121', 	'resource_form' => '2110106', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Service Name', 											])
            ->create([	'id' => '2111122', 	'resource_form' => '2110106', 	'name' => 'description', 	'type' => 'textarea', 	'label' => 'Description', 											])
            ->create([	'id' => '2111123', 	'resource_form' => '2110106', 	'name' => 'status', 	'type' => 'select', 	'label' => 'Status', 											])
            ->create([	'id' => '2111124', 	'resource_form' => '2110107', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Name', 											])
            ->create([	'id' => '2111125', 	'resource_form' => '2110107', 	'name' => 'description', 	'type' => 'textarea', 	'label' => 'Description', 											])
            ->create([	'id' => '2111126', 	'resource_form' => '2110107', 	'name' => 'status', 	'type' => 'select', 	'label' => 'Status', 											])
            ->create([	'id' => '2111127', 	'resource_form' => '2110108', 	'name' => 'item', 	'type' => 'select', 	'label' => 'Select Item', 											])
            ->create([	'id' => '2111128', 	'resource_form' => '2110108', 	'name' => 'service', 	'type' => 'select', 	'label' => 'Select Service', 											])
            ->create([	'id' => '2111129', 	'resource_form' => '2110108', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Name the item service', 											])
            ->create([	'id' => '2111130', 	'resource_form' => '2110109', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Change name to', 											])
            ->create([	'id' => '2111131', 	'resource_form' => '2110109', 	'name' => 'service', 	'type' => 'select', 	'label' => 'Select Service', 											])
            ->create([	'id' => '2111132', 	'resource_form' => '2110109', 	'name' => 'status', 	'type' => 'select', 	'label' => 'Status', 											])
            ->create([	'id' => '2111133', 	'resource_form' => '2110110', 	'name' => 'hub', 	'type' => 'select', 	'label' => 'Select Hub', 											])
            ->create([	'id' => '2111134', 	'resource_form' => '2110110', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Name', 											])
            ->create([	'id' => '2111135', 	'resource_form' => '2110110', 	'name' => 'status', 	'type' => 'select', 	'label' => 'Status', 											])
            ->create([	'id' => '2111136', 	'resource_form' => '2110111', 	'name' => 'hub', 	'type' => 'select', 	'label' => 'Select Hub', 											])
            ->create([	'id' => '2111137', 	'resource_form' => '2110111', 	'name' => 'shelf', 	'type' => 'select', 	'label' => 'Select Shelf', 											])
            ->create([	'id' => '2111138', 	'resource_form' => '2110112', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Enter a name', 											])
            ->create([	'id' => '2111139', 	'resource_form' => '2110112', 	'name' => 'description', 	'type' => 'textarea', 	'label' => 'Description', 											])
            ->create([	'id' => '2111140', 	'resource_form' => '2110112', 	'name' => 'status', 	'type' => 'select', 	'label' => 'Status', 											])
            ->create([	'id' => '2111141', 	'resource_form' => '2110113', 	'name' => 'pl', 	'type' => 'select', 	'label' => 'Price List', 											])
            ->create([	'id' => '2111142', 	'resource_form' => '2110113', 	'name' => 'is', 	'type' => 'select', 	'label' => 'Service', 											])
            ->create([	'id' => '2111143', 	'resource_form' => '2110113', 	'name' => 'price', 	'type' => 'text', 	'label' => 'Price', 											])
            ->create([	'id' => '2111144', 	'resource_form' => '2110114', 	'name' => 'price', 	'type' => 'text', 	'label' => 'Change Price To', 											])
            ->create([	'id' => '2111145', 	'resource_form' => '2110114', 	'name' => 'status', 	'type' => 'select', 	'label' => 'Status', 											])
            ->create([	'id' => '2111146', 	'resource_form' => '2110115', 	'name' => 'code', 	'type' => 'text', 	'label' => 'Enter code on label', 											])
            ->create([	'id' => '2111147', 	'resource_form' => '2110115', 	'name' => 'status', 	'type' => 'select', 	'label' => 'Status', 											])
            ->create([	'id' => '2111148', 	'resource_form' => '2110116', 	'name' => 'customer', 	'type' => 'select', 	'label' => 'Select Customer', 											])
            ->create([	'id' => '2111149', 	'resource_form' => '2110116', 	'name' => 'date', 	'type' => 'text', 	'label' => 'Enter date (yyyy-mm-dd)', 											])
            ->create([	'id' => '2111150', 	'resource_form' => '2110116', 	'name' => 'pl', 	'type' => 'select', 	'label' => 'Select Price List', 											])
            ->create([	'id' => '2111151', 	'resource_form' => '2110117', 	'name' => 'order', 	'type' => 'select', 	'label' => 'Select Order', 											])
            ->create([	'id' => '2111152', 	'resource_form' => '2110117', 	'name' => 'item', 	'type' => 'select', 	'label' => 'Item', 											])
            ->create([	'id' => '2111153', 	'resource_form' => '2110117', 	'name' => 'service', 	'type' => 'multiselect', 	'label' => 'Service', 											])
            ->create([	'id' => '2111154', 	'resource_form' => '2110117', 	'name' => 'label', 	'type' => 'select', 	'label' => 'Label', 											])
            ->create([	'id' => '2111155', 	'resource_form' => '2110118', 	'name' => 'item', 	'type' => 'select', 	'label' => 'Select Item', 											])
            ->create([	'id' => '2111156', 	'resource_form' => '2110118', 	'name' => 'service', 	'type' => 'multiselect', 	'label' => 'Select Service', 											])
            ->create([	'id' => '2111157', 	'resource_form' => '2110118', 	'name' => 'label', 	'type' => 'select', 	'label' => 'Attached Label', 											])
            ->create([	'id' => '2111158', 	'resource_form' => '2110118', 	'name' => 'shelf', 	'type' => 'select', 	'label' => 'Storage Shelf', 											])
            ->create([	'id' => '2111159', 	'resource_form' => '2110118', 	'name' => 'delivery', 	'type' => 'text', 	'label' => 'Delivery Date', 											])
            ->create([	'id' => '2111160', 	'resource_form' => '2110119', 	'name' => 'ois', 	'type' => 'select', 	'label' => 'Order Item Service', 											])
            ->create([	'id' => '2111161', 	'resource_form' => '2110119', 	'name' => 'user', 	'type' => 'select', 	'label' => 'Select Provider', 											])
            ->create([	'id' => '2111162', 	'resource_form' => '2110120', 	'name' => 'date', 	'type' => 'text', 	'label' => 'Enter date (yyyy-mm-dd)', 											])
            ->create([	'id' => '2111163', 	'resource_form' => '2110120', 	'name' => 'invoice', 	'type' => 'select', 	'label' => 'Select Invoice to be paid', 											])
            ->create([	'id' => '2111164', 	'resource_form' => '2110120', 	'name' => 'amount', 	'type' => 'text', 	'label' => 'Amount', 											])
            ->create([	'id' => '2111165', 	'resource_form' => '2110121', 	'name' => 'date', 	'type' => 'text', 	'label' => 'Enter date (yyyy-mm-dd)', 											])
            ->create([	'id' => '2111166', 	'resource_form' => '2110121', 	'name' => 'order', 	'type' => 'select', 	'label' => 'Select Order', 											])
            ->create([	'id' => '2111167', 	'resource_form' => '2110121', 	'name' => 'oi', 	'type' => 'multiselect', 	'label' => 'Select Order Item', 											])
            ->create([	'id' => '2111168', 	'resource_form' => '2110123', 	'name' => 'source_hub', 	'type' => 'select', 	'label' => 'Select From Hub', 											])
            ->create([	'id' => '2111169', 	'resource_form' => '2110123', 	'name' => 'destination_hub', 	'type' => 'select', 	'label' => 'Select To Hub', 											])
            ->create([	'id' => '2111170', 	'resource_form' => '2110123', 	'name' => 'date', 	'type' => 'text', 	'label' => 'Date', 											])
            ->create([	'id' => '2111171', 	'resource_form' => '2110123', 	'name' => 'status', 	'type' => 'select', 	'label' => 'Status', 											])
            ->create([	'id' => '2111172', 	'resource_form' => '2110124', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Name', 											])
            ->create([	'id' => '2111173', 	'resource_form' => '2110124', 	'name' => 'email', 	'type' => 'text', 	'label' => 'Email', 											])
            ->create([	'id' => '2111174', 	'resource_form' => '2110124', 	'name' => 'password', 	'type' => 'password', 	'label' => 'Password', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
