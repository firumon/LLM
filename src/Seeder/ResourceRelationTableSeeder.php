<?php

namespace Firumon\LLM\Seeder;

use Illuminate\Database\Seeder;

class ResourceRelationTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceRelation::query()
            ->create([	'id' => '2109101', 	'resource' => '2106101', 	'name' => 'GroupUsers', 	'description' => 'The list of users in a group', 	'method' => 'Users', 	'type' => 'belongsToMany', 	'relate_resource' => '2106102', 									])
            ->create([	'id' => '2109102', 	'resource' => '2106102', 	'name' => 'UserGroups', 	'description' => 'The groups where the user belongs to', 	'method' => 'Groups', 	'type' => 'belongsToMany', 	'relate_resource' => '2106101', 									])
            ->create([	'id' => '2109103', 	'resource' => '2106103', 	'name' => 'OwnerGroups', 	'description' => 'The groups where the user belongs to', 	'method' => 'Groups', 	'type' => 'belongsToMany', 	'relate_resource' => '2106101', 									])
            ->create([	'id' => '2109104', 	'resource' => '2106104', 	'name' => 'EmployeeServices', 	'description' => 'All services assigned to a user', 	'method' => 'Services', 	'type' => 'belongsToMany', 	'relate_resource' => '2106108', 									])
            ->create([	'id' => '2109105', 	'resource' => '2106104', 	'name' => 'EmployeeGroup', 	'description' => 'The groups where the employee belongs', 	'method' => 'Groups', 	'type' => 'belongsToMany', 	'relate_resource' => '2106101', 									])
            ->create([	'id' => '2109106', 	'resource' => '2106104', 	'name' => 'EmployeeHubs', 	'description' => 'List of hubs a employee belongs', 	'method' => 'Hubs', 	'type' => 'belongsToMany', 	'relate_resource' => '2106107', 									])
            ->create([	'id' => '2109107', 	'resource' => '2106107', 	'name' => 'Hub-HubUsers', 	'description' => 'Users belongs to a hub. Users are responsible to provide services', 	'method' => 'HubUsers', 	'type' => 'hasMany', 	'relate_resource' => '2106112', 									])
            ->create([	'id' => '2109108', 	'resource' => '2106107', 	'name' => 'HubUsers', 	'description' => 'List of users belongs to a hub', 	'method' => 'Users', 	'type' => 'belongsToMany', 	'relate_resource' => '2106102', 									])
            ->create([	'id' => '2109109', 	'resource' => '2106107', 	'name' => 'HubServices', 	'description' => 'The services that are available in a hub', 	'method' => 'Services', 	'type' => 'hasManyThrough', 	'relate_resource' => '2106111', 									])
            ->create([	'id' => '2109110', 	'resource' => '2106107', 	'name' => 'HubShelves', 	'description' => 'Storage racks in a hub', 	'method' => 'Shelves', 	'type' => 'hasMany', 	'relate_resource' => '2106113', 									])
            ->create([	'id' => '2109111', 	'resource' => '2106107', 	'name' => 'HubDefaultShelf', 	'description' => 'The default rack used to store all non storage specified items', 	'method' => 'DefaultShelf', 	'type' => 'belongsToMany', 	'relate_resource' => '2106113', 									])
            ->create([	'id' => '2109112', 	'resource' => '2106107', 	'name' => 'HubOrders', 	'description' => 'The orders placed in this hub', 	'method' => 'Orders', 	'type' => 'hasMany', 	'relate_resource' => '2106118', 									])
            ->create([	'id' => '2109113', 	'resource' => '2106107', 	'name' => 'HubDeliveries', 	'description' => 'The deliveries done from the hub', 	'method' => 'Deliveries', 	'type' => 'hasMany', 	'relate_resource' => '2106125', 									])
            ->create([	'id' => '2109114', 	'resource' => '2106107', 	'name' => 'ShiftFromHub', 	'description' => 'The items shifts initiated from this hub', 	'method' => 'ShiftsFrom', 	'type' => 'hasMany', 	'relate_resource' => '2106127', 									])
            ->create([	'id' => '2109115', 	'resource' => '2106107', 	'name' => 'ShiftToHub', 	'description' => 'The items shifts which are targeing this hub', 	'method' => 'ShiftsTowards', 	'type' => 'hasMany', 	'relate_resource' => '2106127', 									])
            ->create([	'id' => '2109116', 	'resource' => '2106108', 	'name' => 'SerivceProvider', 	'description' => 'The users who provide this service', 	'method' => 'Providers', 	'type' => 'belongsToMany', 	'relate_resource' => '2106102', 									])
            ->create([	'id' => '2109117', 	'resource' => '2106108', 	'name' => 'ServiceHubs', 	'description' => 'The hubs where this service is available', 	'method' => 'Hubs', 	'type' => 'hasManyThrough', 	'relate_resource' => '2106107', 									])
            ->create([	'id' => '2109118', 	'resource' => '2106108', 	'name' => 'ServiceItems', 	'description' => 'The items where this service can applicable', 	'method' => 'Items', 	'type' => 'belongsToMany', 	'relate_resource' => '2106109', 									])
            ->create([	'id' => '2109119', 	'resource' => '2106108', 	'name' => 'ServicePrice', 	'description' => 'Price of service for different items', 	'method' => 'Prices', 	'type' => 'belongsToMany', 	'relate_resource' => '2106116', 									])
            ->create([	'id' => '2109120', 	'resource' => '2106108', 	'name' => 'NewItems', 	'description' => 'The new items which are to be serviced', 	'method' => 'Unassigned', 	'type' => 'hasMany', 	'relate_resource' => '2106120', 									])
            ->create([	'id' => '2109121', 	'resource' => '2106108', 	'name' => 'AssignedItems', 	'description' => 'The service which are assigned', 	'method' => 'Assigned', 	'type' => 'hasMany', 	'relate_resource' => '2106120', 									])
            ->create([	'id' => '2109122', 	'resource' => '2106108', 	'name' => 'ProcessingItems', 	'description' => 'The items which are servicing', 	'method' => 'Processing', 	'type' => 'hasMany', 	'relate_resource' => '2106120', 									])
            ->create([	'id' => '2109123', 	'resource' => '2106108', 	'name' => 'AwaitingItems', 	'description' => 'The items which are awaiting for this service', 	'method' => 'Awaiting', 	'type' => 'hasMany', 	'relate_resource' => '2106120', 									])
            ->create([	'id' => '2109124', 	'resource' => '2106109', 	'name' => 'ItemServices', 	'description' => 'Services available for the item', 	'method' => 'Services', 	'type' => 'hasMany', 	'relate_resource' => '2106110', 									])
            ->create([	'id' => '2109125', 	'resource' => '2106109', 	'name' => 'ItemServiceCost', 	'description' => 'Prices for each service for this item', 	'method' => 'Prices', 	'type' => 'belongsToMany', 	'relate_resource' => '2106116', 									])
            ->create([	'id' => '2109126', 	'resource' => '2106109', 	'name' => 'NewService', 	'description' => 'Items which are unassigned in the order items', 	'method' => 'Unassigned', 	'type' => 'hasManyThrough', 	'relate_resource' => '2106120', 									])
            ->create([	'id' => '2109127', 	'resource' => '2106109', 	'name' => 'AssignedService', 	'description' => 'Items which are assigned in the order items', 	'method' => 'Assigned', 	'type' => 'hasManyThrough', 	'relate_resource' => '2106120', 									])
            ->create([	'id' => '2109128', 	'resource' => '2106109', 	'name' => 'ProcessingService', 	'description' => 'Items which are processing from the order items', 	'method' => 'Processing', 	'type' => 'hasManyThrough', 	'relate_resource' => '2106120', 									])
            ->create([	'id' => '2109129', 	'resource' => '2106109', 	'name' => 'AwaitingService', 	'description' => 'Items which are awaiting for service from the order items', 	'method' => 'Awaiting', 	'type' => 'hasManyThrough', 	'relate_resource' => '2106120', 									])
            ->create([	'id' => '2109130', 	'resource' => '2106109', 	'name' => 'ServicingUsers', 	'description' => 'The users who are servicing this item from order items', 	'method' => 'ServicingUsers', 	'type' => 'hasManyThrough', 	'relate_resource' => '2106120', 									])
            ->create([	'id' => '2109131', 	'resource' => '2106110', 	'name' => 'ItemDetail', 	'description' => 'Details of item of particular entry', 	'method' => 'Item', 	'type' => 'belongsTo', 	'relate_resource' => '2106109', 									])
            ->create([	'id' => '2109132', 	'resource' => '2106110', 	'name' => 'ServiceDetail', 	'description' => 'Details of service of particular entry', 	'method' => 'Service', 	'type' => 'belongsTo', 	'relate_resource' => '2106108', 									])
            ->create([	'id' => '2109133', 	'resource' => '2106110', 	'name' => 'ItemServicePrices', 	'description' => 'Prices for each item service', 	'method' => 'Price', 	'type' => 'hasMany', 	'relate_resource' => '2106116', 									])
            ->create([	'id' => '2109134', 	'resource' => '2106111', 	'name' => 'UserDetail', 	'description' => 'Details of user', 	'method' => 'User', 	'type' => 'belongsTo', 	'relate_resource' => '2106102', 									])
            ->create([	'id' => '2109135', 	'resource' => '2106111', 	'name' => 'ServiceDetail', 	'description' => 'Details of service of particular entry', 	'method' => 'Service', 	'type' => 'belongsTo', 	'relate_resource' => '2106108', 									])
            ->create([	'id' => '2109136', 	'resource' => '2106112', 	'name' => 'HubDetail', 	'description' => 'Details of Hub', 	'method' => 'Hub', 	'type' => 'belongsTo', 	'relate_resource' => '2106107', 									])
            ->create([	'id' => '2109137', 	'resource' => '2106112', 	'name' => 'UserDetail', 	'description' => 'Details of user', 	'method' => 'User', 	'type' => 'belongsTo', 	'relate_resource' => '2106102', 									])
            ->create([	'id' => '2109138', 	'resource' => '2106113', 	'name' => 'HubDetail', 	'description' => 'Detail of Hub where this shelf belongs to', 	'method' => 'Hub', 	'type' => 'belongsTo', 	'relate_resource' => '2106107', 									])
            ->create([	'id' => '2109139', 	'resource' => '2106113', 	'name' => 'OrderItems', 	'description' => 'The order items in the specified shelf', 	'method' => 'Items', 	'type' => 'hasMany', 	'relate_resource' => '2106119', 									])
            ->create([	'id' => '2109140', 	'resource' => '2106114', 	'name' => 'HubDetail', 	'description' => 'Detail of Hub where this shelf belongs to', 	'method' => 'Hub', 	'type' => 'belongsTo', 	'relate_resource' => '2106107', 									])
            ->create([	'id' => '2109141', 	'resource' => '2106114', 	'name' => 'ShelfDetail', 	'description' => 'Detail of shelf', 	'method' => 'Shelf', 	'type' => 'belongsTo', 	'relate_resource' => '2106113', 									])
            ->create([	'id' => '2109142', 	'resource' => '2106115', 	'name' => 'Contents', 	'description' => 'Contents of a price list', 	'method' => 'Contents', 	'type' => 'hasMany', 	'relate_resource' => '2106116', 									])
            ->create([	'id' => '2109143', 	'resource' => '2106116', 	'name' => 'PLDetail', 	'description' => 'Primary details of the price list', 	'method' => 'Pricelist', 	'type' => 'belongsTo', 	'relate_resource' => '2106115', 									])
            ->create([	'id' => '2109144', 	'resource' => '2106116', 	'name' => 'ItemService', 	'description' => 'Detail of item service', 	'method' => 'ItemService', 	'type' => 'belongsTo', 	'relate_resource' => '2106110', 									])
            ->create([	'id' => '2109145', 	'resource' => '2106117', 	'name' => 'LabelledItem', 	'description' => 'The item to which this label attached', 	'method' => 'Item', 	'type' => 'hasOne', 	'relate_resource' => '2106119', 									])
            ->create([	'id' => '2109146', 	'resource' => '2106118', 	'name' => 'OrderItems', 	'description' => 'The serviceable items in a order', 	'method' => 'Items', 	'type' => 'hasMany', 	'relate_resource' => '2106119', 									])
            ->create([	'id' => '2109147', 	'resource' => '2106118', 	'name' => 'CustomerDetail', 	'description' => 'Customer detail', 	'method' => 'Customer', 	'type' => 'belongsTo', 	'relate_resource' => '2106102', 									])
            ->create([	'id' => '2109148', 	'resource' => '2106118', 	'name' => 'HubDetail', 	'description' => 'Hub Detail', 	'method' => 'Hub', 	'type' => 'belongsTo', 	'relate_resource' => '2106107', 									])
            ->create([	'id' => '2109149', 	'resource' => '2106118', 	'name' => 'OrderInvoice', 	'description' => 'Generated Invoice', 	'method' => 'Invoice', 	'type' => 'hasOne', 	'relate_resource' => '2106121', 									])
            ->create([	'id' => '2109150', 	'resource' => '2106118', 	'name' => 'OrderDeliveries', 	'description' => 'Deliveries done on the basis of this order', 	'method' => 'Deliveries', 	'type' => 'hasMany', 	'relate_resource' => '2106125', 									])
            ->create([	'id' => '2109151', 	'resource' => '2106118', 	'name' => 'OrderReceipts', 	'description' => 'Receipts based on a order', 	'method' => 'Receipts', 	'type' => 'hasManyThrough', 	'relate_resource' => '2106124', 									])
            ->create([	'id' => '2109152', 	'resource' => '2106119', 	'name' => 'OrderDetail', 	'description' => 'The detail of order this item belongs to', 	'method' => 'Order', 	'type' => 'belongsTo', 	'relate_resource' => '2106118', 									])
            ->create([	'id' => '2109153', 	'resource' => '2106119', 	'name' => 'ItemDetail', 	'description' => 'Item detail', 	'method' => 'Item', 	'type' => 'belongsTo', 	'relate_resource' => '2106109', 									])
            ->create([	'id' => '2109154', 	'resource' => '2106119', 	'name' => 'Label', 	'description' => 'Detail of the label attached', 	'method' => 'Label', 	'type' => 'belongsTo', 	'relate_resource' => '2106117', 									])
            ->create([	'id' => '2109155', 	'resource' => '2106119', 	'name' => 'ShelfDetail', 	'description' => 'Detail of the shelf this item placed', 	'method' => 'Shelf', 	'type' => 'belongsTo', 	'relate_resource' => '2106113', 									])
            ->create([	'id' => '2109156', 	'resource' => '2106119', 	'name' => 'ItemServices', 	'description' => 'List of services to be applied', 	'method' => 'Services', 	'type' => 'hasMany', 	'relate_resource' => '2106120', 									])
            ->create([	'id' => '2109157', 	'resource' => '2106119', 	'name' => 'ItemShifts', 	'description' => 'Details of the shifts of this item', 	'method' => 'Shifts', 	'type' => 'hasMany', 	'relate_resource' => '2106128', 									])
            ->create([	'id' => '2109158', 	'resource' => '2106120', 	'name' => 'OrderItemDetail', 	'description' => 'Detail of order item', 	'method' => 'OrderItem', 	'type' => 'belongsTo', 	'relate_resource' => '2106119', 									])
            ->create([	'id' => '2109159', 	'resource' => '2106120', 	'name' => 'ServiceDetail', 	'description' => 'Detail of service', 	'method' => 'Service', 	'type' => 'belongsTo', 	'relate_resource' => '2106108', 									])
            ->create([	'id' => '2109160', 	'resource' => '2106120', 	'name' => 'ServiceUsers', 	'description' => 'The list of users responsible to provide service', 	'method' => 'Users', 	'type' => 'hasMany', 	'relate_resource' => '2106123', 									])
            ->create([	'id' => '2109161', 	'resource' => '2106121', 	'name' => 'OrderDetail', 	'description' => 'Order details this invoice belongs to', 	'method' => 'Order', 	'type' => 'belongsTo', 	'relate_resource' => '2106118', 									])
            ->create([	'id' => '2109162', 	'resource' => '2106121', 	'name' => 'CustomerDetail', 	'description' => 'Customer to which invoice generated', 	'method' => 'Customer', 	'type' => 'belongsTo', 	'relate_resource' => '2106102', 									])
            ->create([	'id' => '2109163', 	'resource' => '2106121', 	'name' => 'InvoiceItems', 	'description' => 'List of items and service in the invoice', 	'method' => 'Items', 	'type' => 'hasMany', 	'relate_resource' => '2106122', 									])
            ->create([	'id' => '2109164', 	'resource' => '2106121', 	'name' => 'Receipts', 	'description' => 'List of receipts on the basis of this invoice', 	'method' => 'Receipts', 	'type' => 'hasMany', 	'relate_resource' => '2106124', 									])
            ->create([	'id' => '2109165', 	'resource' => '2106122', 	'name' => 'InvoiceDetail', 	'description' => 'Primary details of the invoice', 	'method' => 'Invoice', 	'type' => 'belongsTo', 	'relate_resource' => '2106121', 									])
            ->create([	'id' => '2109166', 	'resource' => '2106122', 	'name' => 'ItemDetail', 	'description' => 'Item details', 	'method' => 'Item', 	'type' => 'belongsTo', 	'relate_resource' => '2106109', 									])
            ->create([	'id' => '2109167', 	'resource' => '2106122', 	'name' => 'ServiceDetail', 	'description' => 'Service details', 	'method' => 'Service', 	'type' => 'belongsTo', 	'relate_resource' => '2106108', 									])
            ->create([	'id' => '2109168', 	'resource' => '2106123', 	'name' => 'ItemService', 	'description' => 'Detail of order item service', 	'method' => 'Service', 	'type' => 'belongsTo', 	'relate_resource' => '2106120', 									])
            ->create([	'id' => '2109169', 	'resource' => '2106123', 	'name' => 'UserDetail', 	'description' => 'User detail', 	'method' => 'User', 	'type' => 'belongsTo', 	'relate_resource' => '2106102', 									])
            ->create([	'id' => '2109170', 	'resource' => '2106124', 	'name' => 'InvoiceDetail', 	'description' => 'Detail of invoice this receipt is generating', 	'method' => 'Invoice', 	'type' => 'belongsTo', 	'relate_resource' => '2106121', 									])
            ->create([	'id' => '2109171', 	'resource' => '2106125', 	'name' => 'OrderDetail', 	'description' => 'Order details of which this delivery is', 	'method' => 'Order', 	'type' => 'belongsTo', 	'relate_resource' => '2106118', 									])
            ->create([	'id' => '2109172', 	'resource' => '2106125', 	'name' => 'HubDetail', 	'description' => 'Hub Detail', 	'method' => 'Hub', 	'type' => 'belongsTo', 	'relate_resource' => '2106107', 									])
            ->create([	'id' => '2109173', 	'resource' => '2106125', 	'name' => 'Items', 	'description' => 'List of Order Items', 	'method' => 'Items', 	'type' => 'hasMany', 	'relate_resource' => '2106126', 									])
            ->create([	'id' => '2109174', 	'resource' => '2106126', 	'name' => 'DeliveryDetail', 	'description' => 'Primary delivery detail', 	'method' => 'Delivery', 	'type' => 'belongsTo', 	'relate_resource' => '2106125', 									])
            ->create([	'id' => '2109175', 	'resource' => '2106126', 	'name' => 'OrderItemDetail', 	'description' => 'Order item detail', 	'method' => 'Item', 	'type' => 'belongsTo', 	'relate_resource' => '2106119', 									])
            ->create([	'id' => '2109176', 	'resource' => '2106126', 	'name' => 'ShelfDetail', 	'description' => 'Shelf detail', 	'method' => 'Shelf', 	'type' => 'belongsTo', 	'relate_resource' => '2106113', 									])
            ->create([	'id' => '2109177', 	'resource' => '2106127', 	'name' => 'FromHub', 	'description' => 'Source hub detail', 	'method' => 'Source', 	'type' => 'belongsTo', 	'relate_resource' => '2106107', 									])
            ->create([	'id' => '2109178', 	'resource' => '2106127', 	'name' => 'ToHub', 	'description' => 'Destination hub detail', 	'method' => 'Target', 	'type' => 'belongsTo', 	'relate_resource' => '2106107', 									])
            ->create([	'id' => '2109179', 	'resource' => '2106127', 	'name' => 'Item', 	'description' => 'Lists of order items in a shift', 	'method' => 'Items', 	'type' => 'hasMany', 	'relate_resource' => '2106128', 									])
            ->create([	'id' => '2109180', 	'resource' => '2106128', 	'name' => 'HubShift', 	'description' => 'Primary shift detail of a hub shift item', 	'method' => 'Shift', 	'type' => 'belongsTo', 	'relate_resource' => '2106127', 									])
            ->create([	'id' => '2109181', 	'resource' => '2106128', 	'name' => 'ShiftItem', 	'description' => 'Detail of order item', 	'method' => 'Item', 	'type' => 'belongsTo', 	'relate_resource' => '2106119', 									])
            ->create([	'id' => '2109182', 	'resource' => '2106105', 	'name' => 'CustomerOrders', 	'description' => 'List of orders the customer placed', 	'method' => 'Order', 	'type' => 'hasMany', 	'relate_resource' => '2106118', 									])
            ->create([	'id' => '2109183', 	'resource' => '2106105', 	'name' => 'CustomerInvoices', 	'description' => 'List of invoices created for the customer', 	'method' => 'Invoice', 	'type' => 'hasMany', 	'relate_resource' => '2106121', 									])
            ->create([	'id' => '2109184', 	'resource' => '2106105', 	'name' => 'CustomerReceipts', 	'description' => 'Receipts created for the customer', 	'method' => 'Receipts', 	'type' => 'hasManyThrough', 	'relate_resource' => '2106124', 									])
            ->create([	'id' => '2109185', 	'resource' => '2106105', 	'name' => 'CustomerDetail', 	'description' => 'Extra details of a customer', 	'method' => 'Detail', 	'type' => 'hasOne', 	'relate_resource' => '2106106', 									])
            ->create([	'id' => '2109186', 	'resource' => '2106105', 	'name' => 'CustomerGroup', 	'description' => 'The details of group a customer belongs to', 	'method' => 'Groups', 	'type' => 'belongsToMany', 	'relate_resource' => '2106101', 									])
            ->create([	'id' => '2109187', 	'resource' => '2106104', 	'name' => 'EmployeeGroup-Displayable', 	'description' => 'The groups which can be viewable while fetching employee groups', 	'method' => 'GroupsDisplayable', 	'type' => 'belongsToMany', 	'relate_resource' => '2106101', 									])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}