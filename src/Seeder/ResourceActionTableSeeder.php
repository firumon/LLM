<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceActionTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceAction::query()
            ->create([	'id' => '2133101', 	'resource' => '2106103', 	'name' => 'NewOwnerFormAction', 		'title' => 'New Owner', 		'menu' => 'New Owner', 									])
            ->create([	'id' => '2133102', 	'resource' => '2106104', 	'name' => 'NewEmployeeFormAction', 		'title' => 'New Employee', 		'menu' => 'New Employee', 									])
            ->create([	'id' => '2133103', 	'resource' => '2106104', 	'name' => 'NewProviderFormAction', 		'title' => 'New Service Provider', 		'menu' => 'New Service Provider', 									])
            ->create([	'id' => '2133104', 	'resource' => '2106105', 	'name' => 'NewCustomerFormAction', 		'title' => 'New Customer', 		'menu' => 'New Customer', 									])
            ->create([	'id' => '2133105', 	'resource' => '2106107', 	'name' => 'NewHubAction', 		'title' => 'New Hub', 		'menu' => 'New Hub', 									])
            ->create([	'id' => '2133106', 	'resource' => '2106108', 	'name' => 'AddServiceAction', 		'title' => 'New Service', 		'menu' => 'New Service', 									])
            ->create([	'id' => '2133107', 	'resource' => '2106109', 	'name' => 'AddItemAction', 		'title' => 'New Item', 		'menu' => 'New Item', 									])
            ->create([	'id' => '2133108', 	'resource' => '2106113', 	'name' => 'CreateShelfAction', 		'title' => 'New Shelf', 		'menu' => 'New Shelf', 									])
            ->create([	'id' => '2133109', 	'resource' => '2106114', 	'name' => 'AssignDefaultShelfAction', 		'title' => 'Assign Defaulf Shelf', 		'menu' => 'Assign Defaulf Shelf', 									])
            ->create([	'id' => '2133110', 	'resource' => '2106115', 	'name' => 'NewPLAction', 		'title' => 'New Price List', 		'menu' => 'New Price List', 									])
            ->create([	'id' => '2133111', 	'resource' => '2106117', 	'name' => 'NewILAction', 		'title' => 'New Identity Label', 		'menu' => 'New Identity Label', 									])
            ->create([	'id' => '2133112', 	'resource' => '2106118', 	'name' => 'NewOrderAction', 		'title' => 'New Order', 		'menu' => 'New Order', 									])
            ->create([	'id' => '2133113', 	'resource' => '2106124', 	'name' => 'NewReceiptAction', 		'title' => 'New Receipt', 		'menu' => 'New Receipt', 									])
            ->create([	'id' => '2133114', 	'resource' => '2106125', 	'name' => 'NewDeliveryAction', 		'title' => 'New Delivery', 		'menu' => 'New Delivery', 									])
            ->create([	'id' => '2133115', 	'resource' => '2106127', 	'name' => 'NewHubShiftAction', 		'title' => 'New Hub Shift', 		'menu' => 'New Hub Shift', 									])
            ->create([	'id' => '2133116', 	'resource' => '2106103', 	'name' => 'OwnerListAction', 		'title' => 'Owners', 		'menu' => 'Owners', 									])
            ->create([	'id' => '2133117', 	'resource' => '2106104', 	'name' => 'EmployeeListAction', 		'title' => 'Employees', 		'menu' => 'Employees', 									])
            ->create([	'id' => '2133118', 	'resource' => '2106104', 	'name' => 'ManagerListAction', 		'title' => 'Managers', 		'menu' => 'Managers', 									])
            ->create([	'id' => '2133119', 	'resource' => '2106104', 	'name' => 'ProviderListAction', 		'title' => 'Service Providers', 		'menu' => 'Service Providers', 									])
            ->create([	'id' => '2133120', 	'resource' => '2106105', 	'name' => 'CustomerListAction', 		'title' => 'Customers', 		'menu' => 'Customers', 									])
            ->create([	'id' => '2133121', 	'resource' => '2106107', 	'name' => 'HubListAction', 		'title' => 'Hubs', 		'menu' => 'Hubs', 									])
            ->create([	'id' => '2133122', 	'resource' => '2106108', 	'name' => 'ServiceListAction', 		'title' => 'Services', 		'menu' => 'Services', 									])
            ->create([	'id' => '2133123', 	'resource' => '2106109', 	'name' => 'ItemListAction', 		'title' => 'Items', 		'menu' => 'Items', 									])
            ->create([	'id' => '2133124', 	'resource' => '2106113', 	'name' => 'ShelfListAction', 		'title' => 'Shelves', 		'menu' => 'Shelves', 									])
            ->create([	'id' => '2133125', 	'resource' => '2106115', 	'name' => 'PriceListAction', 		'title' => 'Price List', 		'menu' => 'Price List', 									])
            ->create([	'id' => '2133126', 	'resource' => '2106117', 	'name' => 'LabelListAction', 		'title' => 'Identity Labels', 		'menu' => 'Identity Labels', 									])
            ->create([	'id' => '2133127', 	'resource' => '2106118', 	'name' => 'OrderListAction', 		'title' => 'Orders', 		'menu' => 'Orders', 									])
            ->create([	'id' => '2133128', 	'resource' => '2106121', 	'name' => 'InvoiceListAction', 		'title' => 'Invoices', 		'menu' => 'Invoices', 									])
            ->create([	'id' => '2133129', 	'resource' => '2106124', 	'name' => 'ReceiptListAction', 		'title' => 'Receipts', 		'menu' => 'Receipts', 									])
            ->create([	'id' => '2133130', 	'resource' => '2106125', 	'name' => 'DeliveryListAction', 		'title' => 'Deliveries', 		'menu' => 'Deliveries', 									])
            ->create([	'id' => '2133131', 	'resource' => '2106127', 	'name' => 'HubShiftListAction', 		'title' => 'Hub Shifts', 		'menu' => 'Hub Shifts', 									])
            ->create([	'id' => '2133132', 	'resource' => '2106107', 	'name' => 'HubEmployeeManageAction', 		'title' => 'Mange Employees', 											])
            ->create([	'id' => '2133133', 	'resource' => '2106104', 	'name' => 'ManagersManageHubAction', 		'title' => 'Add/Remove Hubs', 											])
            ->create([	'id' => '2133134', 	'resource' => '2106104', 	'name' => 'ProvidersManageHubs', 		'title' => 'Add/Remove Hubs', 											])
            ->create([	'id' => '2133135', 	'resource' => '2106104', 	'name' => 'ProvidersManageServices', 		'title' => 'Add/Remove Services', 											])
            ->create([	'id' => '2133136', 	'resource' => '2106104', 	'name' => 'EmployeeDataAction', 		'title' => 'View Details', 											])
            ->create([	'id' => '2133137', 	'resource' => '2106108', 	'name' => 'UserServicesListAction', 		'title' => 'View Providers', 											])
            ->create([	'id' => '2133138', 	'resource' => '2106107', 	'name' => 'HubServicesListAction', 		'title' => 'View Services', 											])
            ->create([	'id' => '2133139', 	'resource' => '2106108', 	'name' => 'ServiceHubsListAction', 		'title' => 'View Hubs', 											])
            ->create([	'id' => '2133140', 	'resource' => '2106104', 	'name' => 'UpdateEmployeeAction', 		'title' => 'Edit Employee', 											])
            ->create([	'id' => '2133141', 	'resource' => '2106107', 	'name' => 'HubDataAction', 		'title' => 'View Details', 											])
            ->create([	'id' => '2133142', 	'resource' => '2106107', 	'name' => 'UpdateHubAction', 		'title' => 'Edit Hub', 											])
            ->create([	'id' => '2133143', 	'resource' => '2106105', 	'name' => 'CustomerDataAction', 		'title' => 'View Details', 											])
            ->create([	'id' => '2133144', 	'resource' => '2106105', 	'name' => 'UpdateCustomerAction', 		'title' => 'Edit Customer', 											])
            ->create([	'id' => '2133145', 	'resource' => '2106108', 	'name' => 'ServiceDataAction', 		'title' => 'View Details', 											])
            ->create([	'id' => '2133146', 	'resource' => '2106108', 	'name' => 'UpdateServiceAction', 		'title' => 'Edit Service', 											])
            ->create([	'id' => '2133147', 	'resource' => '2106107', 	'name' => 'ListHubShelvesAction', 		'title' => 'List Shelves', 											])
            ->create([	'id' => '2133148', 	'resource' => '2106107', 	'name' => 'AddHubShelfAction', 		'title' => 'Add Shelf', 											])
            ->create([	'id' => '2133149', 	'resource' => '2106115', 	'name' => 'ListPLContentsAction', 		'title' => 'List Contents', 											])
            ->create([	'id' => '2133150', 	'resource' => '2106115', 	'name' => 'AddPLContentsAction', 		'title' => 'Add Content', 											])
            ->create([	'id' => '2133151', 	'resource' => '2106109', 	'name' => 'ListItemsServicesAction', 		'title' => 'Service List', 											])
            ->create([	'id' => '2133152', 	'resource' => '2106109', 	'name' => 'AddServiceToItemAction', 		'title' => 'Add Service', 											])
            ->create([	'id' => '2133153', 	'resource' => '2106108', 	'name' => 'ServiceDiffPriceList', 		'title' => 'Prices', 											])
            ->create([	'id' => '2133154', 	'resource' => '2106118', 	'name' => 'OrderItemsListAction', 		'title' => 'View Items', 											])
            ->create([	'id' => '2133155', 	'resource' => '2106119', 	'name' => 'OISListAction', 		'title' => 'Service Details', 											])
            ->create([	'id' => '2133156', 	'resource' => '2106120', 	'name' => 'OISUListAction', 		'title' => 'User Progress', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
