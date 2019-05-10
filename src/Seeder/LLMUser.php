<?php

    namespace Firumon\LLM\Seeder;

    namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

    class LLMUser extends Seeder
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

            \DB::statement('DELETE FROM users WHERE id > 2101100');
            \DB::statement('DELETE FROM __groups WHERE id > 2102100');
            \DB::statement('DELETE FROM __group_users WHERE id > 2103100');
            \DB::statement('DELETE FROM __roles WHERE id > 2104100');
            \DB::statement('DELETE FROM __group_roles WHERE id > 2105100');

            \DB::statement('ALTER TABLE `users`  AUTO_INCREMENT=2101101');
            \DB::statement('ALTER TABLE `__groups`  AUTO_INCREMENT=2102101');
            \DB::statement('ALTER TABLE `__group_users`  AUTO_INCREMENT=2103101');
            \DB::statement('ALTER TABLE `__group_roles`  AUTO_INCREMENT=2105101');

            \DB::statement('set foreign_key_checks = ' . $_);

            $this->call([
                UserTableSeeder::class,
                GroupTableSeeder::class,
                GroupUserTableSeeder::class,
                RoleTableSeeder::class,
                GroupRoleTableSeeder::class
            ]);
        }
    }
