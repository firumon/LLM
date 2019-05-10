<?php

    namespace Firumon\LLM\Seeder;

    namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {
            $this->call([
                LLMRefresh::class,
                FrameSeeder::class,
                LLMSeeder::class,
//                LLMUser::class
//                TempSeeder::class,
            ]);
        }
    }
