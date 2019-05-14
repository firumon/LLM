<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormLayoutTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormLayout::query()
            ->create([	'id' => '2118101', 	'resource_form' => '2110105', 	'form_field' => '2111114', 	'colspan' => '4', 												])
            ->create([	'id' => '2118102', 	'resource_form' => '2110105', 	'form_field' => '2111115', 	'colspan' => '4', 												])
            ->create([	'id' => '2118103', 	'resource_form' => '2110105', 	'form_field' => '2111116', 	'colspan' => '4', 												])
            ->create([	'id' => '2118104', 	'resource_form' => '2110105', 	'form_field' => '2111117', 	'colspan' => '12', 												])
            ->create([	'id' => '2118105', 	'resource_form' => '2110105', 	'form_field' => '2111118', 	'colspan' => '4', 												])
            ->create([	'id' => '2118106', 	'resource_form' => '2110105', 	'form_field' => '2111119', 	'colspan' => '4', 												])
            ->create([	'id' => '2118107', 	'resource_form' => '2110105', 	'form_field' => '2111120', 	'colspan' => '4', 												])
            ->create([	'id' => '2118108', 	'resource_form' => '2110126', 	'form_field' => '2111180', 	'colspan' => '7', 												])
            ->create([	'id' => '2118109', 	'resource_form' => '2110126', 	'form_field' => '2111181', 	'colspan' => '5', 												])
            ->create([	'id' => '2118110', 	'resource_form' => '2110126', 	'form_field' => '2111182', 	'colspan' => '12', 												])
            ->create([	'id' => '2118111', 	'resource_form' => '2110127', 	'form_field' => '2111183', 	'colspan' => '7', 												])
            ->create([	'id' => '2118112', 	'resource_form' => '2110127', 	'form_field' => '2111184', 	'colspan' => '5', 												])
            ->create([	'id' => '2118113', 	'resource_form' => '2110127', 	'form_field' => '2111185', 	'colspan' => '6', 												])
            ->create([	'id' => '2118114', 	'resource_form' => '2110127', 	'form_field' => '2111186', 	'colspan' => '6', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
