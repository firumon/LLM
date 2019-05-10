<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceListLayoutTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceListLayout::query()
            ->create([	'id' => '2126101', 	'resource_list' => '2123102', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '2126102', 	'resource_list' => '2123102', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '2126103', 	'resource_list' => '2123102', 	'label' => 'Email', 	'field' => 'email', 												])
            ->create([	'id' => '2126104', 	'resource_list' => '2123103', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '2126105', 	'resource_list' => '2123103', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '2126106', 	'resource_list' => '2123103', 	'label' => 'Roles', 	'field' => 'title', 	'relation' => '2109187', 											])
            ->create([	'id' => '2126107', 	'resource_list' => '2123103', 	'label' => 'Hub', 	'field' => 'name', 	'relation' => '2109106', 											])
            ->create([	'id' => '2126108', 	'resource_list' => '2123104', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '2126109', 	'resource_list' => '2123104', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '2126110', 	'resource_list' => '2123104', 	'label' => 'Hub', 	'field' => 'name', 	'relation' => '2109106', 											])
            ->create([	'id' => '2126111', 	'resource_list' => '2123105', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '2126112', 	'resource_list' => '2123105', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '2126113', 	'resource_list' => '2123105', 	'label' => 'Services', 	'field' => 'name', 	'relation' => '2109104', 											])
            ->create([	'id' => '2126114', 	'resource_list' => '2123105', 	'label' => 'Hub', 	'field' => 'name', 	'relation' => '2109106', 											])
            ->create([	'id' => '2126115', 	'resource_list' => '2123107', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '2126116', 	'resource_list' => '2123107', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '2126117', 	'resource_list' => '2123107', 	'label' => 'Phone', 	'field' => 'phone', 	'relation' => '2109185', 											])
            ->create([	'id' => '2126118', 	'resource_list' => '2123108', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '2126119', 	'resource_list' => '2123108', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '2126120', 	'resource_list' => '2123108', 	'label' => 'Phone', 	'field' => 'phone', 												])
            ->create([	'id' => '2126121', 	'resource_list' => '2123108', 	'label' => 'Status', 	'field' => 'status', 												])
            ->create([	'id' => '2126122', 	'resource_list' => '2123109', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '2126123', 	'resource_list' => '2123109', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '2126124', 	'resource_list' => '2123109', 	'label' => 'Cost', 	'field' => 'price', 	'relation' => '2109119', 											])
            ->create([	'id' => '2126125', 	'resource_list' => '2123109', 	'label' => 'Status', 	'field' => 'status', 												])
            ->create([	'id' => '2126126', 	'resource_list' => '2123110', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '2126127', 	'resource_list' => '2123110', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '2126128', 	'resource_list' => '2123110', 	'label' => 'Services', 	'field' => 'name', 	'relation' => '2109124', 											])
            ->create([	'id' => '2126129', 	'resource_list' => '2123110', 	'label' => 'Status', 	'field' => 'status', 												])
            ->create([	'id' => '2126130', 	'resource_list' => '2123111', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '2126131', 	'resource_list' => '2123111', 	'label' => 'Hub', 	'field' => 'name', 	'relation' => '2109138', 											])
            ->create([	'id' => '2126132', 	'resource_list' => '2123111', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '2126133', 	'resource_list' => '2123111', 	'label' => 'Status', 	'field' => 'status', 												])
            ->create([	'id' => '2126134', 	'resource_list' => '2123111', 	'label' => 'Current Item', 	'field' => 'read_name', 	'relation' => '2109139', 											])
            ->create([	'id' => '2126135', 	'resource_list' => '2123112', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '2126136', 	'resource_list' => '2123112', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '2126137', 	'resource_list' => '2123112', 	'label' => 'Status', 	'field' => 'status', 												])
            ->create([	'id' => '2126138', 	'resource_list' => '2123113', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '2126139', 	'resource_list' => '2123113', 	'label' => 'Code', 	'field' => 'code', 												])
            ->create([	'id' => '2126140', 	'resource_list' => '2123113', 	'label' => 'Current', 	'field' => 'read_name', 	'relation' => '2109145', 											])
            ->create([	'id' => '2126141', 	'resource_list' => '2123113', 	'label' => 'Status', 	'field' => 'status', 												])
            ->create([	'id' => '2126142', 	'resource_list' => '2123114', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '2126143', 	'resource_list' => '2123114', 	'label' => 'Customer', 	'field' => 'name', 	'relation' => '2109147', 											])
            ->create([	'id' => '2126144', 	'resource_list' => '2123114', 	'label' => 'Date', 	'field' => 'date', 												])
            ->create([	'id' => '2126145', 	'resource_list' => '2123114', 	'label' => 'Progress', 	'field' => 'progress', 												])
            ->create([	'id' => '2126146', 	'resource_list' => '2123115', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '2126147', 	'resource_list' => '2123115', 	'label' => 'Customer', 	'field' => 'name', 	'relation' => '2109162', 											])
            ->create([	'id' => '2126148', 	'resource_list' => '2123115', 	'label' => 'Date', 	'field' => 'date', 												])
            ->create([	'id' => '2126149', 	'resource_list' => '2123115', 	'label' => 'Order', 	'field' => 'id', 	'relation' => '2109161', 											])
            ->create([	'id' => '2126150', 	'resource_list' => '2123116', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '2126151', 	'resource_list' => '2123116', 	'label' => 'date', 	'field' => 'date', 												])
            ->create([	'id' => '2126152', 	'resource_list' => '2123116', 	'label' => 'amount', 	'field' => 'amount', 												])
            ->create([	'id' => '2126153', 	'resource_list' => '2123116', 	'label' => 'Customer', 	'field' => 'name', 	'relation' => '2109170', 	'nest_relation1' => '2109162', 										])
            ->create([	'id' => '2126154', 	'resource_list' => '2123116', 	'label' => 'Invoice Progress', 	'field' => 'progress', 	'relation' => '2109170', 											])
            ->create([	'id' => '2126155', 	'resource_list' => '2123117', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '2126156', 	'resource_list' => '2123117', 	'label' => 'Date', 	'field' => 'date', 												])
            ->create([	'id' => '2126157', 	'resource_list' => '2123117', 	'label' => 'Hub', 	'field' => 'name', 	'relation' => '2109172', 											])
            ->create([	'id' => '2126158', 	'resource_list' => '2123117', 	'label' => 'Order Progress', 	'field' => 'progress', 												])
            ->create([	'id' => '2126159', 	'resource_list' => '2123118', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '2126160', 	'resource_list' => '2123118', 	'label' => 'Date', 	'field' => 'date', 												])
            ->create([	'id' => '2126161', 	'resource_list' => '2123118', 	'label' => 'From', 	'field' => 'name', 	'relation' => '2109177', 											])
            ->create([	'id' => '2126162', 	'resource_list' => '2123118', 	'label' => 'To', 	'field' => 'name', 	'relation' => '2109178', 											])
            ->create([	'id' => '2126163', 	'resource_list' => '2123119', 	'label' => 'Price List', 	'field' => 'name', 	'relation' => '2109143', 											])
            ->create([	'id' => '2126164', 	'resource_list' => '2123119', 	'label' => 'Item Service', 	'field' => 'name', 	'relation' => '2109144', 											])
            ->create([	'id' => '2126165', 	'resource_list' => '2123119', 	'label' => 'Price', 	'field' => 'price', 												])
            ->create([	'id' => '2126166', 	'resource_list' => '2123119', 	'label' => 'Status', 	'field' => 'status', 												])
            ->create([	'id' => '2126167', 	'resource_list' => '2123120', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '2126168', 	'resource_list' => '2123120', 	'label' => 'Item', 	'field' => 'name', 	'relation' => '2109131', 											])
            ->create([	'id' => '2126169', 	'resource_list' => '2123120', 	'label' => 'Service', 	'field' => 'name', 	'relation' => '2109132', 											])
            ->create([	'id' => '2126170', 	'resource_list' => '2123120', 	'label' => 'Price', 	'field' => 'price_and_pl', 	'relation' => '2109133', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
