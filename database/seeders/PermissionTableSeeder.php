<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{


$permissions = [

        'invoices',
        'list',
        'Paid bills',
        'Partially paid bills',
        'Unpaid bills',
        'Invoice archive',
        'Reports',
        'Billing reports',
        'Customer reports',
        'Users',
        'list of user',
        'User permissions',
        'settings',
        'products',
        'section',


        'Add Invoices',
        'delete Invoice',
        'تصدير EXCEL',
        'change condition paying off',
        'Modify Invoice',
        'archive the invoice',
        'Print the invoice',
        'Add attachment',
        'delete attachment',

        'Add User',
        'modify user',
        'delete user',

        'view permission',
        'Add permission',
        'modify permission',
        'delete permission',

        'Add product',
        'Update product',
        'Delete product',

        'Add section',
        'update section',
        'delete section',
        'notifications',

];



foreach ($permissions as $permission) {

Permission::create(['name' => $permission]);
}


}
}
