<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\Group::query()
            ->create([	'id' => '2102101', 	'name' => 'llm_users', 	'description' => 'All users of the application', 	'title' => 'Users', 												])
            ->create([	'id' => '2102102', 	'name' => 'owners', 	'description' => 'The owners of the organization', 	'title' => 'Owners', 												])
            ->create([	'id' => '2102103', 	'name' => 'customers', 	'description' => 'The customers of the organization', 	'title' => 'Customers', 												])
            ->create([	'id' => '2102104', 	'name' => 'employees', 	'description' => 'All employees of the organization', 	'title' => 'Employees', 												])
            ->create([	'id' => '2102105', 	'name' => 'managers', 	'description' => 'Managers of the organizations', 	'title' => 'Managers', 												])
            ->create([	'id' => '2102106', 	'name' => 'service_providers', 	'description' => 'The users who are responsible to provide item services', 	'title' => 'Service Providers', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
