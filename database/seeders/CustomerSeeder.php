<?php

namespace Database\Seeders;

use App\Models\customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'firstName' => "John",
            'lastName' => "Doe",
            'username' => "johndoe",
            'gender' => "Male",
            'address' => "123 Main St",
            'contact_number' => "123-456-7890",
            'email' => "johndoe@test.com",
            'phone' => "01712345678",
            'password' => Hash::make("12345678"),
        ]);
    }
}
