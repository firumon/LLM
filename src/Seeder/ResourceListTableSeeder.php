<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceListTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceList::query()
            ->create([	'id' => '2123101', 	'resource' => '2106101', 	'name' => 'EmployeeGroups', 	'description' => 'The groups that can be assigned to a employee', 	'title' => 'Employee Groups', 	'identity' => 'title', 	'items_per_page' => '10', 									])
            ->create([	'id' => '2123102', 	'resource' => '2106103', 	'name' => 'OwnerList', 		'title' => 'Owners', 	'identity' => 'name', 	'items_per_page' => '10', 									])
            ->create([	'id' => '2123103', 	'resource' => '2106104', 	'name' => 'EmployeeList', 		'title' => 'Employees', 	'identity' => 'name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123104', 	'resource' => '2106104', 	'name' => 'ManagersList', 		'title' => 'Managers', 	'identity' => 'name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123105', 	'resource' => '2106104', 	'name' => 'ServiceProvidersList', 		'title' => 'Service Providers', 	'identity' => 'name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123106', 	'resource' => '2106104', 	'name' => 'MyHubProviderList', 		'title' => 'Service Providers', 	'identity' => 'name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123107', 	'resource' => '2106105', 	'name' => 'CustomerList', 		'title' => 'Customers', 	'identity' => 'name', 	'items_per_page' => '50', 									])
            ->create([	'id' => '2123108', 	'resource' => '2106107', 	'name' => 'HubList', 		'title' => 'Hub', 	'identity' => 'name', 	'items_per_page' => '10', 									])
            ->create([	'id' => '2123109', 	'resource' => '2106108', 	'name' => 'ServiceList', 		'title' => 'Services', 	'identity' => 'name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123110', 	'resource' => '2106109', 	'name' => 'ItemList', 		'title' => 'Items', 	'identity' => 'name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123111', 	'resource' => '2106113', 	'name' => 'ShelveList', 		'title' => 'Shelves', 	'identity' => 'name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123112', 	'resource' => '2106115', 	'name' => 'PriceList', 		'title' => 'Price List', 	'identity' => 'name', 	'items_per_page' => '10', 									])
            ->create([	'id' => '2123113', 	'resource' => '2106117', 	'name' => 'IdentityLabelList', 		'title' => 'Identity Labels', 	'identity' => 'code', 	'items_per_page' => '50', 									])
            ->create([	'id' => '2123114', 	'resource' => '2106118', 	'name' => 'OrderList', 		'title' => 'Orders', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123115', 	'resource' => '2106121', 	'name' => 'InvoiceList', 		'title' => 'All Invoices', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123116', 	'resource' => '2106124', 	'name' => 'ReceiptList', 		'title' => 'Receipts', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123117', 	'resource' => '2106125', 	'name' => 'DeliveryList', 		'title' => 'Deliveries', 	'identity' => 'id', 	'items_per_page' => '20', 									])
            ->create([	'id' => '2123118', 	'resource' => '2106127', 	'name' => 'HubShiftList', 		'title' => 'Hub Shifts', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123119', 	'resource' => '2106116', 	'name' => 'PLContentsList', 		'title' => 'Price List Contents', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123120', 	'resource' => '2106110', 	'name' => 'ItemServiceList', 		'title' => 'Item Services', 	'identity' => 'name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123121', 	'resource' => '2106119', 	'name' => 'OrderItemsList', 		'title' => 'Order Items', 	'identity' => 'name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123122', 	'resource' => '2106120', 	'name' => 'OISList', 		'title' => 'OI Services', 	'identity' => 'name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123123', 	'resource' => '2106123', 	'name' => 'OISUList', 		'title' => 'OIS Users', 	'identity' => 'name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123124', 	'resource' => '2106117', 	'name' => 'AvailableLabelsList', 		'title' => 'Available Labels', 	'identity' => 'code', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123125', 	'resource' => '2106118', 	'name' => 'RecentOrderList', 		'title' => 'Recent Orders', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123126', 	'resource' => '2106122', 	'name' => 'InvoiceItemsList', 		'title' => 'Invoice Items', 	'identity' => 'invoice', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123127', 	'resource' => '2106121', 	'name' => 'PendingInvoiceList', 		'title' => 'Pending Invoices', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '2123128', 	'resource' => '2106121', 	'name' => 'PaidInvoiceList', 		'title' => 'Paid Invoices', 	'identity' => 'id', 	'items_per_page' => '30', 									])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
