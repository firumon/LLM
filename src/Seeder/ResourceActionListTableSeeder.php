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
            ->create([	'id' => '2136120', 	'resource_action' => '2133154', 	'resource_list' => '2123114', 													])
            ->create([	'id' => '2136121', 	'resource_action' => '2133155', 	'resource_list' => '2123121', 													])
            ->create([	'id' => '2136122', 	'resource_action' => '2133156', 	'resource_list' => '2123122', 													])
            ->create([	'id' => '2136123', 	'resource_action' => '2133157', 	'resource_list' => '2123103', 													])
            ->create([	'id' => '2136124', 	'resource_action' => '2133158', 	'resource_list' => '2123108', 													])
            ->create([	'id' => '2136125', 	'resource_action' => '2133159', 	'resource_list' => '2123111', 													])
            ->create([	'id' => '2136126', 	'resource_action' => '2133160', 	'resource_list' => '2123111', 													])
            ->create([	'id' => '2136127', 	'resource_action' => '2133161', 	'resource_list' => '2123107', 													])
            ->create([	'id' => '2136128', 	'resource_action' => '2133154', 	'resource_list' => '2123125', 													])
            ->create([	'id' => '2136129', 	'resource_action' => '2133162', 	'resource_list' => '2123121', 													])
            ->create([	'id' => '2136130', 	'resource_action' => '2133164', 	'resource_list' => '2123120', 													])
            ->create([	'id' => '2136131', 	'resource_action' => '2133165', 	'resource_list' => '2123113', 													])
            ->create([	'id' => '2136132', 	'resource_action' => '2133166', 	'resource_list' => '2123112', 													])
            ->create([	'id' => '2136133', 	'resource_action' => '2133167', 	'resource_list' => '2123110', 													])
            ->create([	'id' => '2136134', 	'resource_action' => '2133168', 	'resource_list' => '2123114', 													])
            ->create([	'id' => '2136135', 	'resource_action' => '2133169', 	'resource_list' => '2123114', 													])
            ->create([	'id' => '2136136', 	'resource_action' => '2133169', 	'resource_list' => '2123125', 													])
            ->create([	'id' => '2136137', 	'resource_action' => '2133170', 	'resource_list' => '2123107', 													])
            ->create([	'id' => '2136138', 	'resource_action' => '2133171', 	'resource_list' => '2123115', 													])
            ->create([	'id' => '2136139', 	'resource_action' => '2133173', 	'resource_list' => '2123107', 													])
            ->create([	'id' => '2136140', 	'resource_action' => '2133171', 	'resource_list' => '2123127', 													])
            ->create([	'id' => '2136141', 	'resource_action' => '2133174', 	'resource_list' => '2123127', 													])
            ->create([	'id' => '2136142', 	'resource_action' => '2133175', 	'resource_list' => '2123127', 													])
            ->create([	'id' => '2136143', 	'resource_action' => '2133175', 	'resource_list' => '2123115', 													])
            ->create([	'id' => '2136144', 	'resource_action' => '2133178', 	'resource_list' => '2123122', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
