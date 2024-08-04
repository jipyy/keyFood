<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $adminRole = Role::updateOrCreate(
            ['name' => 'admin',],
            ['name' => 'admin',]
        );

        $sellerRole = Role::updateOrCreate(
            ['name' => 'seller',],
            ['name' => 'seller',]
        );

        $buyerRole = Role::updateOrCreate(
            ['name' => 'buyer',],
            ['name' => 'buyer',]
        );

        $permission = Permission::updateOrCreate(
            ['name' => 'categories',],
            ['name' => 'categories']
        );

        $permission2 = Permission::updateOrCreate(
            ['name' => 'userCRUD',],
            ['name' => 'userCRUD']
        );

        $permission3 = Permission::updateOrCreate(
            ['name' => 'productCRUD',],
            ['name' => 'productCRUD']
        );

        $permission4 = Permission::updateOrCreate(
            ['name' => 'product_transactions',],
            ['name' => 'product_transactions']
        );





        $adminRole->givePermissionTo($permission);
        $adminRole->givePermissionTo($permission2);
        $sellerRole->givePermissionTo($permission3);
        $sellerRole->givePermissionTo($permission4);

        //Menmbahkan manual kepada id user role tertentu
        $user = User::find(4);
        $user->assignRole($sellerRole);
    }
}
