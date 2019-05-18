<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceForm::query()
            ->create([	'id' => '2110101', 	'resource' => '2106103', 	'name' => 'NewOwnerForm', 		'title' => 'Owner', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110102', 	'resource' => '2106104', 	'name' => 'NewEmployee', 		'title' => 'New Employee', 	'action_text' => 'Save Employee', 										])
            ->create([	'id' => '2110103', 	'resource' => '2106104', 	'name' => 'NewServiceProvider', 		'title' => 'New Service Provider', 	'action_text' => 'Add Service Provider', 										])
            ->create([	'id' => '2110104', 	'resource' => '2106105', 	'name' => 'NewCustomerForm', 		'title' => 'Customer', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110105', 	'resource' => '2106107', 	'name' => 'NewHubCreateFrom', 		'title' => 'Hubs', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110106', 	'resource' => '2106108', 	'name' => 'AddNewServiceForm', 		'title' => 'Service', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110107', 	'resource' => '2106109', 	'name' => 'AddNewItemForm', 		'title' => 'New Item', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110108', 	'resource' => '2106110', 	'name' => 'AddServicesToItemForm', 		'title' => 'Item Service', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110109', 	'resource' => '2106110', 	'name' => 'UpdateItemsService', 		'title' => 'Item Service', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110110', 	'resource' => '2106113', 	'name' => 'CreateNewShelfForm', 		'title' => 'Shelf', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110111', 	'resource' => '2106114', 	'name' => 'AssignHubsDefaultShelf', 		'title' => 'Default Shelf', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110112', 	'resource' => '2106115', 	'name' => 'CreateNewPLForm', 		'title' => 'Price List', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110113', 	'resource' => '2106116', 	'name' => 'AddContentsToPL', 		'title' => 'Price List Contents', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110114', 	'resource' => '2106116', 	'name' => 'UpdatePLContent', 		'title' => 'Price List Content', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110115', 	'resource' => '2106117', 	'name' => 'NewIdentityLabelForm', 		'title' => 'Identity Label', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110116', 	'resource' => '2106118', 	'name' => 'NewOrderForm', 		'title' => 'Order', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110117', 	'resource' => '2106119', 	'name' => 'AddOrderItemForm', 		'title' => 'Order Items', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110118', 	'resource' => '2106119', 	'name' => 'UpdateOrderItem', 		'title' => 'Order Items', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110119', 	'resource' => '2106123', 	'name' => 'AssignProviderToOIS', 		'title' => 'Add Provider to OIS', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110120', 	'resource' => '2106124', 	'name' => 'NewReceiptForm', 		'title' => 'Receipt', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110121', 	'resource' => '2106125', 	'name' => 'NewOrderDeliveryForm', 		'title' => 'Order Delivery', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110122', 	'resource' => '2106126', 	'name' => 'AddDeliveryItemsForm', 		'title' => 'Delivery Contents', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110123', 	'resource' => '2106127', 	'name' => 'NewHubShiftProcessForm', 		'title' => 'Hub Shift', 	'action_text' => 'Save', 										])
            ->create([	'id' => '2110124', 	'resource' => '2106104', 	'name' => 'UpdateEmployeeDetails', 		'title' => 'Edit Employee Details', 	'action_text' => 'Update Details', 										])
            ->create([	'id' => '2110125', 	'resource' => '2106115', 	'name' => 'EditPricelistForm', 		'title' => 'Edit', 	'action_text' => 'Update', 										])
            ->create([	'id' => '2110126', 	'resource' => '2106109', 	'name' => 'EditItemForm', 		'title' => 'Edit Item', 	'action_text' => 'Update Item', 										])
            ->create([	'id' => '2110127', 	'resource' => '2106118', 	'name' => 'EditOrderForm', 		'title' => 'Edit Order', 	'action_text' => 'Update Order', 										])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
