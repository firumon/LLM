<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceRoleTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceRole::query()
            ->create([	'id' => '2107101', 	'resource' => '2106101', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107102', 	'resource' => '2106102', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107103', 	'resource' => '2106103', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107104', 	'resource' => '2106104', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107105', 	'resource' => '2106105', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107106', 	'resource' => '2106106', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107107', 	'resource' => '2106107', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107108', 	'resource' => '2106108', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107109', 	'resource' => '2106109', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107110', 	'resource' => '2106110', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107111', 	'resource' => '2106111', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107112', 	'resource' => '2106112', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107113', 	'resource' => '2106113', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107114', 	'resource' => '2106114', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107115', 	'resource' => '2106115', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107116', 	'resource' => '2106116', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107117', 	'resource' => '2106117', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107118', 	'resource' => '2106118', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107119', 	'resource' => '2106119', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107120', 	'resource' => '2106120', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107121', 	'resource' => '2106121', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107122', 	'resource' => '2106122', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107123', 	'resource' => '2106123', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107124', 	'resource' => '2106124', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107125', 	'resource' => '2106125', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107126', 	'resource' => '2106126', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107127', 	'resource' => '2106127', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107128', 	'resource' => '2106128', 	'role' => '2104101', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107129', 	'resource' => '2106104', 	'role' => '2104103', 	'actions_availability' => 'Only', 	'actions' => '2133119,2133181', 											])
            ->create([	'id' => '2107130', 	'resource' => '2106105', 	'role' => '2104103', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107131', 	'resource' => '2106113', 	'role' => '2104103', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107132', 	'resource' => '2106114', 	'role' => '2104103', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107133', 	'resource' => '2106117', 	'role' => '2104103', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107134', 	'resource' => '2106118', 	'role' => '2104103', 	'actions_availability' => 'Except', 	'actions' => '2133127', 											])
            ->create([	'id' => '2107135', 	'resource' => '2106119', 	'role' => '2104103', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107136', 	'resource' => '2106120', 	'role' => '2104103', 	'actions_availability' => 'Except', 	'actions' => '2133176', 											])
            ->create([	'id' => '2107137', 	'resource' => '2106121', 	'role' => '2104103', 	'actions_availability' => 'Except', 	'actions' => '2133128,2133172,2133177', 											])
            ->create([	'id' => '2107138', 	'resource' => '2106122', 	'role' => '2104103', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107139', 	'resource' => '2106123', 	'role' => '2104103', 	'actions_availability' => 'Only', 	'actions' => '2133185,2133187,2133188,2133189', 											])
            ->create([	'id' => '2107140', 	'resource' => '2106124', 	'role' => '2104103', 	'actions_availability' => 'Except', 	'actions' => '2133129', 											])
            ->create([	'id' => '2107141', 	'resource' => '2106125', 	'role' => '2104103', 	'actions_availability' => 'Except', 	'actions' => '2133130', 											])
            ->create([	'id' => '2107142', 	'resource' => '2106126', 	'role' => '2104103', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107143', 	'resource' => '2106127', 	'role' => '2104103', 	'actions_availability' => 'Except', 	'actions' => '2133131', 											])
            ->create([	'id' => '2107144', 	'resource' => '2106128', 	'role' => '2104103', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '2107145', 	'resource' => '2106123', 	'role' => '2104104', 	'actions_availability' => 'Only', 	'actions' => '2133185,2133190,2133191,2133192,2133193,2133194', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
