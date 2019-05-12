<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceDataViewSectionItemTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceDataViewSectionItem::query()
            ->create([	'id' => '2132101', 	'section' => '2131101', 	'label' => 'Email', 	'attribute' => 'email', 												])
            ->create([	'id' => '2132102', 	'section' => '2131101', 	'label' => 'Services', 	'attribute' => 'name', 	'relation' => '2109104', 											])
            ->create([	'id' => '2132103', 	'section' => '2131101', 	'label' => 'Hubs', 	'attribute' => 'name', 	'relation' => '2109106', 											])
            ->create([	'id' => '2132104', 	'section' => '2131101', 	'label' => 'Groups', 	'attribute' => 'title', 	'relation' => '2109105', 											])
            ->create([	'id' => '2132105', 	'section' => '2131102', 	'label' => 'Address', 	'attribute' => 'address', 												])
            ->create([	'id' => '2132106', 	'section' => '2131102', 	'label' => 'Phone', 	'attribute' => 'phone', 												])
            ->create([	'id' => '2132107', 	'section' => '2131102', 	'label' => 'Email', 	'attribute' => 'email', 												])
            ->create([	'id' => '2132108', 	'section' => '2131102', 	'label' => 'Website', 	'attribute' => 'website', 												])
            ->create([	'id' => '2132109', 	'section' => '2131102', 	'label' => 'Default Shelf', 	'attribute' => 'name', 	'relation' => '2109111', 											])
            ->create([	'id' => '2132110', 	'section' => '2131102', 	'label' => 'Status', 	'attribute' => 'status', 												])
            ->create([	'id' => '2132111', 	'section' => '2131103', 	'label' => 'Name', 	'attribute' => 'name', 												])
            ->create([	'id' => '2132112', 	'section' => '2131103', 	'label' => 'Email', 	'attribute' => 'email', 												])
            ->create([	'id' => '2132113', 	'section' => '2131103', 	'label' => 'Roles', 	'attribute' => 'title', 	'relation' => '2109102', 											])
            ->create([	'id' => '2132114', 	'section' => '2131104', 	'label' => 'Name', 	'attribute' => 'name', 	'relation' => '2109135', 											])
            ->create([	'id' => '2132115', 	'section' => '2131104', 	'label' => 'Users', 	'attribute' => 'name', 	'relation' => '2109134', 											])
            ->create([	'id' => '2132116', 	'section' => '2131105', 	'label' => 'Name', 	'attribute' => 'name', 												])
            ->create([	'id' => '2132117', 	'section' => '2131105', 	'label' => 'Status', 	'attribute' => 'status', 												])
            ->create([	'id' => '2132118', 	'section' => '2131105', 	'label' => 'Items', 	'attribute' => 'name', 	'relation' => '2109139', 											])
            ->create([	'id' => '2132119', 	'section' => '2131106', 	'label' => 'Address', 	'attribute' => 'address', 	'relation' => '2109185', 											])
            ->create([	'id' => '2132120', 	'section' => '2131106', 	'label' => 'Phone', 	'attribute' => 'phone', 	'relation' => '2109185', 											])
            ->create([	'id' => '2132121', 	'section' => '2131107', 	'label' => 'Items', 	'attribute' => 'name', 	'relation' => '2109118', 											])
            ->create([	'id' => '2132122', 	'section' => '2131107', 	'label' => 'Status', 	'attribute' => 'status', 												])
            ->create([	'id' => '2132123', 	'section' => '2131108', 	'label' => 'Name', 	'attribute' => 'name', 												])
            ->create([	'id' => '2132124', 	'section' => '2131108', 	'label' => 'Email', 	'attribute' => 'email', 												])
            ->create([	'id' => '2132125', 	'section' => '2131109', 	'label' => 'Name', 	'attribute' => 'name', 												])
            ->create([	'id' => '2132126', 	'section' => '2131109', 	'label' => 'Phone', 	'attribute' => 'phone', 												])
            ->create([	'id' => '2132127', 	'section' => '2131110', 	'label' => 'Price List', 	'attribute' => 'name', 	'relation' => '2109143', 											])
            ->create([	'id' => '2132128', 	'section' => '2131110', 	'label' => 'Cost', 	'attribute' => 'price', 												])
            ->create([	'id' => '2132129', 	'section' => '2131111', 	'label' => 'Hub', 	'attribute' => 'name', 	'relation' => '2109138', 											])
            ->create([	'id' => '2132130', 	'section' => '2131111', 	'label' => 'Current Items', 	'attribute' => 'name', 	'relation' => '2109139', 											])
            ->create([	'id' => '2132131', 	'section' => '2131111', 	'label' => 'Status', 	'attribute' => 'status', 												])
            ->create([	'id' => '2132132', 	'section' => '2131112', 	'label' => 'Shelf', 	'attribute' => 'name', 	'relation' => '2109155', 											])
            ->create([	'id' => '2132133', 	'section' => '2131112', 	'label' => 'Label', 	'attribute' => 'code', 	'relation' => '2109154', 											])
            ->create([	'id' => '2132134', 	'section' => '2131112', 	'label' => 'Services', 	'attribute' => 'name', 	'relation' => '2109188', 											])
            ->create([	'id' => '2132135', 	'section' => '2131112', 	'label' => 'Progress', 	'attribute' => 'progress', 												])
            ->create([	'id' => '2132136', 	'section' => '2131113', 	'label' => 'Service', 	'attribute' => 'name', 	'relation' => '2109159', 											])
            ->create([	'id' => '2132137', 	'section' => '2131113', 	'label' => 'Users', 	'attribute' => 'name', 	'relation' => '2109189', 											])
            ->create([	'id' => '2132138', 	'section' => '2131113', 	'label' => 'Progress', 	'attribute' => 'progress', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
