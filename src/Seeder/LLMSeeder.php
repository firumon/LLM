<?php

    namespace Firumon\LLM\Seeder;

    namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

    class LLMSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {
            $this->call([
                HubTableSeeder::class,
                ServiceTableSeeder::class,
                ItemTableSeeder::class,
                ItemServiceTableSeeder::class,
                UserServiceTableSeeder::class,
                HubUserTableSeeder::class,
                ShelfTableSeeder::class,
                HubDefaultShelfTableSeeder::class,
                PricelistTableSeeder::class,
                PricelistContentTableSeeder::class,
                CustomerTableSeeder::class,
                IdentityLabelTableSeeder::class,
                OrderTableSeeder::class,
                OrderItemTableSeeder::class,
                OrderItemServiceTableSeeder::class,
                InvoiceTableSeeder::class,
                InvoiceItemTableSeeder::class,
                OrderItemServiceUserTableSeeder::class,
                ReceiptTableSeeder::class,
                DeliveryTableSeeder::class,
                DeliveryItemTableSeeder::class,
                HubShiftTableSeeder::class,
                HubShiftItemTableSeeder::class,
                ImageTableSeeder::class,
            ]);
        }
    }
