<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
 public function run(): void
 {
 User::updateOrCreate(
 ['email' => 'admin@example.com'],
 [
 'name' => 'Administrator',
 'password' => Hash::make('admin123'),
//  TOKEN BEARER: 1|6avVeiUeFqmjaKryXW0nNfFAXczYE3tqs55vpcHP2972a24c
 ]
 );
 }
}