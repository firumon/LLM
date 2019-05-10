<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class GroupRoleTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\GroupRole::query()
            ->create([	'id' => '2105101', 	'group' => '2102102', 	'role' => '2104101', 													])
            ->create([	'id' => '2105102', 	'group' => '2102103', 	'role' => '2104102', 													])
            ->create([	'id' => '2105103', 	'group' => '2102105', 	'role' => '2104103', 													])
            ->create([	'id' => '2105104', 	'group' => '2102106', 	'role' => '2104104', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
