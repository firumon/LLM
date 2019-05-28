<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceListScopeTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceListScope::query()
            ->create([	'id' => '2124101', 	'resource_list' => '2123101', 	'scope' => '2108101', 													])
            ->create([	'id' => '2124102', 	'resource_list' => '2123104', 	'scope' => '2108102', 													])
            ->create([	'id' => '2124103', 	'resource_list' => '2123105', 	'scope' => '2108103', 													])
            ->create([	'id' => '2124104', 	'resource_list' => '2123124', 	'scope' => '2108105', 													])
            ->create([	'id' => '2124105', 	'resource_list' => '2123124', 	'scope' => '2108106', 													])
            ->create([	'id' => '2124106', 	'resource_list' => '2123125', 	'scope' => '2108107', 													])
            ->create([	'id' => '2124107', 	'resource_list' => '2123127', 	'scope' => '2108111', 													])
            ->create([	'id' => '2124108', 	'resource_list' => '2123128', 	'scope' => '2108112', 													])
            ->create([	'id' => '2124109', 	'resource_list' => '2123106', 	'scope' => '2108104', 													])
            ->create([	'id' => '2124110', 	'resource_list' => '2123129', 	'scope' => '2108113', 													])
            ->create([	'id' => '2124111', 	'resource_list' => '2123130', 	'scope' => '2108114', 													])
            ->create([	'id' => '2124112', 	'resource_list' => '2123131', 	'scope' => '2108115', 													])
            ->create([	'id' => '2124113', 	'resource_list' => '2123132', 	'scope' => '2108116', 													])
            ->create([	'id' => '2124114', 	'resource_list' => '2123133', 	'scope' => '2108117', 													])
            ->create([	'id' => '2124115', 	'resource_list' => '2123134', 	'scope' => '2108118', 													])
            ->create([	'id' => '2124116', 	'resource_list' => '2123135', 	'scope' => '2108119', 													])
            ->create([	'id' => '2124117', 	'resource_list' => '2123136', 	'scope' => '2108120', 													])
            ->create([	'id' => '2124118', 	'resource_list' => '2123137', 	'scope' => '2108121', 													])
            ->create([	'id' => '2124119', 	'resource_list' => '2123138', 	'scope' => '2108118', 													])
            ->create([	'id' => '2124120', 	'resource_list' => '2123138', 	'scope' => '2108119', 													])
            ->create([	'id' => '2124121', 	'resource_list' => '2123139', 	'scope' => '2108118', 													])
            ->create([	'id' => '2124122', 	'resource_list' => '2123139', 	'scope' => '2108120', 													])
            ->create([	'id' => '2124123', 	'resource_list' => '2123140', 	'scope' => '2108118', 													])
            ->create([	'id' => '2124124', 	'resource_list' => '2123140', 	'scope' => '2108121', 													])
            ->create([	'id' => '2124125', 	'resource_list' => '2123141', 	'scope' => '2108122', 													])
            ->create([	'id' => '2124126', 	'resource_list' => '2123141', 	'scope' => '2108115', 													])
            ->create([	'id' => '2124127', 	'resource_list' => '2123142', 	'scope' => '2108116', 													])
            ->create([	'id' => '2124128', 	'resource_list' => '2123142', 	'scope' => '2108123', 													])
            ->create([	'id' => '2124129', 	'resource_list' => '2123143', 	'scope' => '2108108', 													])
            ->create([	'id' => '2124130', 	'resource_list' => '2123143', 	'scope' => '2108115', 													])
            ->create([	'id' => '2124131', 	'resource_list' => '2123144', 	'scope' => '2108124', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
