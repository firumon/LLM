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
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
