<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceScopeTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceScope::query()
            ->create([	'id' => '2108101', 	'resource' => '2106101', 	'name' => 'EmployeeGroups', 	'description' => 'Groups that assigned for employees', 	'method' => 'employeeGroups', 											])
            ->create([	'id' => '2108102', 	'resource' => '2106104', 	'name' => 'Managers', 	'description' => 'The employees who are managers to the organisation', 	'method' => 'managers', 											])
            ->create([	'id' => '2108103', 	'resource' => '2106104', 	'name' => 'ServiceProviders', 	'description' => 'The employees who are service providers to the organisation', 	'method' => 'providers', 											])
            ->create([	'id' => '2108104', 	'resource' => '2106104', 	'name' => 'RequestorHubServiceProviders', 	'description' => 'The service providers who are assigned to hubs that are assigned to the requestor', 	'method' => 'myHubProviders', 											])
            ->create([	'id' => '2108105', 	'resource' => '2106117', 	'name' => 'AvailableLabels', 	'description' => 'The labels which are available to attach', 	'method' => 'available', 											])
            ->create([	'id' => '2108106', 	'resource' => '2106117', 	'name' => 'ActiveLabels', 	'description' => 'The labels which are active means, not deleted or lost', 	'method' => 'active', 											])
            ->create([	'id' => '2108107', 	'resource' => '2106118', 	'name' => 'RecentOrders', 	'description' => 'The orders which have date beyond the recent limit', 	'method' => 'recent', 											])
            ->create([	'id' => '2108108', 	'resource' => '2106118', 	'name' => 'Undelivered', 	'description' => 'The orders whose progress is not delivered', 	'method' => 'undelivered', 											])
            ->create([	'id' => '2108109', 	'resource' => '2106118', 	'name' => 'Processing', 	'description' => 'The orders whose progress is in service', 	'method' => 'processing', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
