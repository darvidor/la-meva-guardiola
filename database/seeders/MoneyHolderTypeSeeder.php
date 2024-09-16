<?php

namespace Database\Seeders;

use App\Models\MoneyHolderType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoneyHolderTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ["Crypto wallet", "Bank Account", "Credit Card", "Vault"];
        foreach($types as $type) {
            MoneyHolderType::factory([
                "name" => $type
            ])->create();
        }
    }
}
