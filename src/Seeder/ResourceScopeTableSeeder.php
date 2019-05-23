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
            ->create([	'id' => '2108110', 	'resource' => '2106116', 	'name' => 'ActivePL', 	'description' => 'Content which has active price list master', 	'method' => 'activePL', 											])
            ->create([	'id' => '2108111', 	'resource' => '2106121', 	'name' => 'PendingInvoices', 	'description' => 'Invoices which are not paid', 	'method' => 'pending', 											])
            ->create([	'id' => '2108112', 	'resource' => '2106121', 	'name' => 'PaidInvoices', 	'description' => 'Invoices which are paid', 	'method' => 'paid', 											])
            ->create([	'id' => '2108113', 	'resource' => '2106107', 	'name' => 'OwnHubs', 	'description' => 'Only hubs which are assigned to the request user', 	'method' => 'ownHubs', 											])
            ->create([	'id' => '2108114', 	'resource' => '2106119', 	'name' => 'OwnHubItems', 	'description' => 'The order items which belongs to the hubs assigned to the requestor', 	'method' => 'ownHubItems', 											])
            ->create([	'id' => '2108115', 	'resource' => '2106118', 	'name' => 'OwnHubOrders', 	'description' => 'The orders which are created from within hubs assigned', 	'method' => 'ownHub', 											])
            ->create([	'id' => '2108116', 	'resource' => '2106120', 	'name' => 'OwnHubOrderItemServices', 	'description' => 'The services which are to be performed from within assiged hubs', 	'method' => 'ownHub', 											])
            ->create([	'id' => '2108117', 	'resource' => '2106123', 	'name' => 'OwnHubOISUs', 	'description' => 'The Jobs which are available within own hub', 	'method' => 'ownHub', 											])
            ->create([	'id' => '2108118', 	'resource' => '2106123', 	'name' => 'OwnJobs', 	'description' => 'Jobs/Tasks which are assigned to the current user', 	'method' => 'myJobs', 											])
            ->create([	'id' => '2108119', 	'resource' => '2106123', 	'name' => 'NewJobs', 	'description' => 'Jobs which are assigned but not started', 	'method' => 'new', 											])
            ->create([	'id' => '2108120', 	'resource' => '2106123', 	'name' => 'InServiceJobs', 	'description' => 'Jobs which are started but not finished', 	'method' => 'inService', 											])
            ->create([	'id' => '2108121', 	'resource' => '2106123', 	'name' => 'CompletedJobs', 	'description' => 'Jobs which are finished', 	'method' => 'completed', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
