<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insertOrIgnore(['id' => 1, 'name' => 'Admin', 'email' => 'email@email.com', 'password' => '$2y$10$1lraEM9g2aG7dbtMx0cC9O0A3uTjc24R1KguRatcDl.LSJkZFSqMK']);
        User::insertOrIgnore(['id' => 2, 'name' => 'Jeymsson', 'email' => 'email1@email.com', 'password' => '$2y$10$1lraEM9g2aG7dbtMx0cC9O0A3uTjc24R1KguRatcDl.LSJkZFSqMK']);
        User::insertOrIgnore(['id' => 3, 'name' => 'Joao', 'email' => 'email2@email.com', 'password' => '$2y$10$1lraEM9g2aG7dbtMx0cC9O0A3uTjc24R1KguRatcDl.LSJkZFSqMK']);
        User::insertOrIgnore(['id' => 4, 'name' => 'Tiago', 'email' => 'email3@email.com', 'password' => '$2y$10$1lraEM9g2aG7dbtMx0cC9O0A3uTjc24R1KguRatcDl.LSJkZFSqMK']);

    }
}
