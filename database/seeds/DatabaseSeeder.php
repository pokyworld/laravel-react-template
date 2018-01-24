<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $this->call('AccountsTableSeeder');
        $this->command->info('Account table seeded!');        
        $this->call('AddressesTableSeeder');
        $this->command->info('Address table seeded!');        
        $this->call('ProductsTableSeeder');
        $this->command->info('Product table seeded!');        
        $this->call('UnitsTableSeeder');
        $this->command->info('Unit table seeded!');        
        $this->call('UsersTableSeeder');
        $this->command->info('User table seeded!');        

        $this->call('AccountAddressesTableSeeder');
        $this->command->info('AccountAddress table seeded!');        
        $this->call('AccountProductsTableSeeder');
        $this->command->info('AccountProduct table seeded!');        
        $this->call('AccountUsersTableSeeder');
        $this->command->info('AccountUser table seeded!');        
        $this->call('AccountUnitsTableSeeder');
        $this->command->info('AccountUnit table seeded!');        
        $this->call('UnitAddressesTableSeeder');
        $this->command->info('UnitAddress table seeded!');        
        $this->call('UserAddressesTableSeeder');
        $this->command->info('UserAddress table seeded!');        
    }
}
