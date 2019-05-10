<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\Role::query()
            ->create([	'id' => '2104101', 	'name' => 'owner', 	'description' => 'Owner have access to all resources', 	'title' => 'Owner', 												])
            ->create([	'id' => '2104102', 	'name' => 'customers', 	'description' => 'Customers of the organization', 	'title' => 'Customer', 												])
            ->create([	'id' => '2104103', 	'name' => 'managers', 	'description' => 'Manages activities related to a hub', 	'title' => 'Manager', 												])
            ->create([	'id' => '2104104', 	'name' => 'service_provider', 	'description' => 'Manages service related activities', 	'title' => 'Service Provider', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
