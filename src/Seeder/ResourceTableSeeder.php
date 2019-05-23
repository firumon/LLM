<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\Resource::query()
            ->create([	'id' => '2106101', 	'name' => 'Group', 	'description' => 'Groups where the users can accommadate', 	'title' => 'Groups', 	'namespace' => 'Firumon\LLM\Model', 	'table' => '__groups', 										])
            ->create([	'id' => '2106102', 	'name' => 'User', 	'description' => 'Users of the application', 	'title' => 'Users', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'users', 										])
            ->create([	'id' => '2106103', 	'name' => 'Owner', 	'description' => 'Owners of the organization', 	'title' => 'Owners', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'users', 										])
            ->create([	'id' => '2106104', 	'name' => 'Employee', 	'description' => 'Employees of the organization', 	'title' => 'Employees', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'users', 										])
            ->create([	'id' => '2106105', 	'name' => 'Customer', 	'description' => 'Customers of the organization', 	'title' => 'Customers', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'users', 										])
            ->create([	'id' => '2106106', 	'name' => 'CustomerDetail', 	'description' => 'The extra details of a customer', 	'title' => 'Customer Details', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'customer_details', 										])
            ->create([	'id' => '2106107', 	'name' => 'Hub', 	'description' => 'Hub is considered as premises where the services are provided. Hub may be some outlets, service stations or delivery or pickup vehicle', 	'title' => 'Hubs', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'hubs', 										])
            ->create([	'id' => '2106108', 	'name' => 'Service', 	'description' => 'Services provided to customers and available in hubs by each users', 	'title' => 'Services', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'services', 										])
            ->create([	'id' => '2106109', 	'name' => 'Item', 	'description' => 'Items are materials or products that are rady to service', 	'title' => 'Items', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'items', 										])
            ->create([	'id' => '2106110', 	'name' => 'ItemService', 	'description' => 'Services that are applied to an item', 	'title' => 'Item Services', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'item_services', 										])
            ->create([	'id' => '2106111', 	'name' => 'UserService', 	'description' => 'The services that a user can provide', 	'title' => 'User Services', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'user_services', 										])
            ->create([	'id' => '2106112', 	'name' => 'HubUser', 	'description' => 'The users belongs to a hub, each user is able to provide some services', 	'title' => 'Hub Users', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'hub_users', 										])
            ->create([	'id' => '2106113', 	'name' => 'Shelf', 	'description' => 'The rack or small sections in hub where the order items can be stored temporarly', 	'title' => 'Hub Shelves', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'shelf', 										])
            ->create([	'id' => '2106114', 	'name' => 'HubDefaultShelf', 	'description' => 'A default storage shelf for each hub where all or non storage specified items to be placed', 	'title' => 'Default Hub Shelf', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'hub_default_shelf', 										])
            ->create([	'id' => '2106115', 	'name' => 'Pricelist', 	'description' => 'Price lists', 	'title' => 'Price List', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'pricelist', 										])
            ->create([	'id' => '2106116', 	'name' => 'PricelistContent', 	'description' => 'Price of each item to service belongs to specified price list', 	'title' => 'Price List Contents', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'pricelist_contents', 										])
            ->create([	'id' => '2106117', 	'name' => 'IdentityLabel', 	'description' => 'The label tag used to identify and separate the order items while servicing and packing', 	'title' => 'Identity Labels', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'identity_labels', 										])
            ->create([	'id' => '2106118', 	'name' => 'Order', 	'description' => 'Orders are the set of items that are submitted by a customer for servicing', 	'title' => 'Orders', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'orders', 	'controller' => 'OrderController', 	'controller_namespace' => 'Firumon\LLM\Controller', 								])
            ->create([	'id' => '2106119', 	'name' => 'OrderItem', 	'description' => 'The items in the order that submitted by a customer', 	'title' => 'Order Items', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'order_items', 										])
            ->create([	'id' => '2106120', 	'name' => 'OrderItemService', 	'description' => 'The services to be applied on each order item', 	'title' => 'Order Item Services', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'order_item_services', 										])
            ->create([	'id' => '2106121', 	'name' => 'Invoice', 	'description' => 'Invoices which are generated automatiaclly when a order is placed', 	'title' => 'Invoices', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'invoices', 										])
            ->create([	'id' => '2106122', 	'name' => 'InvoiceItem', 	'description' => 'The invoicable items in a invoice', 	'title' => 'Invoice Items', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'invoice_items', 										])
            ->create([	'id' => '2106123', 	'name' => 'OrderItemServiceUser', 	'description' => 'The user who responsible to perform a service on a order item', 	'title' => 'Service Jobs', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'order_item_service_user', 	'controller' => 'OrderItemServiceUserController', 	'controller_namespace' => 'Firumon\LLM\Controller', 								])
            ->create([	'id' => '2106124', 	'name' => 'Receipt', 	'description' => 'Recepits when a customer made payments against a invoice', 	'title' => 'Receipts', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'receipts', 	'controller' => 'ReceiptController', 	'controller_namespace' => 'Firumon\LLM\Controller', 								])
            ->create([	'id' => '2106125', 	'name' => 'Delivery', 	'description' => 'The order items to be delivered', 	'title' => 'Delivery', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'delivery', 										])
            ->create([	'id' => '2106126', 	'name' => 'DeliveryItem', 	'description' => 'Each item of a delivery', 	'title' => 'Delivery Items', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'delivery_items', 										])
            ->create([	'id' => '2106127', 	'name' => 'HubShift', 	'description' => 'Shifting of order items from one hub to another', 	'title' => 'Hub Shift', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'hub_shift', 	'controller' => 'HubShiftController', 	'controller_namespace' => 'Firumon\LLM\Controller', 								])
            ->create([	'id' => '2106128', 	'name' => 'HubShiftItem', 	'description' => 'Each items in a shift', 	'title' => 'Hub Shift Items', 	'namespace' => 'Firumon\LLM\Model', 	'table' => 'hub_shift_items', 										])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
