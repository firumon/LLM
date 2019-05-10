<?php

    namespace Firumon\LLM\Seeder;

    namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

    class TempSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {
            $_ = \DB::statement('SELECT @@GLOBAL.foreign_key_checks');
            \DB::statement('set foreign_key_checks = 0');
            \Milestone\Appframe\Model\User::query()
                ->create([	'id' => '2101101', 	'name' => 'Setup', 	'email' => 'setup@llm.com', 	'password' => '123456', 												])
                ->create([	'id' => '2101102', 	'name' => 'Developer', 	'email' => 'dev@llm.com', 	'password' => '123456', 												])
                ->create([	'id' => '2101103', 	'name' => 'Administrator', 	'email' => 'admin@llm.com', 	'password' => '123456', 												])
                ->create([	'id' => '2101104', 	'name' => 'Firose Hussain', 	'email' => 'firose@llm.com', 	'password' => '123456', 												])
            ;

            \Milestone\Appframe\Model\GroupUser::query()
                ->create([	'id' => '2103101', 	'group' => '1', 	'user' => '2101101', 													])
                ->create([	'id' => '2103102', 	'group' => '2', 	'user' => '2101102', 													])
                ->create([	'id' => '2103103', 	'group' => '3', 	'user' => '2101103', 													])
                ->create([	'id' => '2103104', 	'group' => '2102101', 	'user' => '2101104', 													])
                ->create([	'id' => '2103105', 	'group' => '2102102', 	'user' => '2101104', 													])
            ;
            \DB::statement('set foreign_key_checks = ' . $_);

        }
    }
