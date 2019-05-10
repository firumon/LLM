<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceActionListTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceActionList::query()
            ->create([	'id' => '2136101', 	'resource_action' => '2133132', 	'resource_list' => '2123108', 													])
            ->create([	'id' => '2136102', 	'resource_action' => '2133133', 	'resource_list' => '2123104', 													])
            ->create([	'id' => '2136103', 	'resource_action' => '2133134', 	'resource_list' => '2123105', 													])
            ->create([	'id' => '2136104', 	'resource_action' => '2133135', 	'resource_list' => '2123105', 													])
            ->create([	'id' => '2136105', 	'resource_action' => '2133136', 	'resource_list' => '2123103', 													])
            ->create([	'id' => '2136106', 	'resource_action' => '2133137', 	'resource_list' => '2123109', 													])
            ->create([	'id' => '2136107', 	'resource_action' => '2133138', 	'resource_list' => '2123108', 													])
            ->create([	'id' => '2136108', 	'resource_action' => '2133139', 	'resource_list' => '2123109', 													])
            ->create([	'id' => '2136109', 	'resource_action' => '2133140', 	'resource_list' => '2123103', 													])
            ->create([	'id' => '2136110', 	'resource_action' => '2133141', 	'resource_list' => '2123108', 													])
            ->create([	'id' => '2136111', 	'resource_action' => '2133142', 	'resource_list' => '2123108', 													])
            ->create([	'id' => '2136112', 	'resource_action' => '2133143', 	'resource_list' => '2123107', 													])
            ->create([	'id' => '2136113', 	'resource_action' => '2133144', 	'resource_list' => '2123107', 													])
            ->create([	'id' => '2136114', 	'resource_action' => '2133145', 	'resource_list' => '2123109', 													])
            ->create([	'id' => '2136115', 	'resource_action' => '2133146', 	'resource_list' => '2123109', 													])
            ->create([	'id' => '2136116', 	'resource_action' => '2133147', 	'resource_list' => '2123108', 													])
            ->create([	'id' => '2136117', 	'resource_action' => '2133149', 	'resource_list' => '2123112', 													])
            ->create([	'id' => '2136118', 	'resource_action' => '2133151', 	'resource_list' => '2123110', 													])
            ->create([	'id' => '2136119', 	'resource_action' => '2133153', 	'resource_list' => '2123109', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}