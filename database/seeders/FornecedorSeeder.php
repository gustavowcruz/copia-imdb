<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fornecedores = [
            ['nome' => 'Fornecedor A', 'saldo' => 1000.00],
            ['nome' => 'Fornecedor B', 'saldo' => 2000.00],
            ['nome' => 'Fornecedor C', 'saldo' => 3000.00],
            ['nome' => 'Fornecedor A', 'saldo' => 4000.00]
        ];

        foreach ($fornecedores as $fornecedor) {
            \App\Models\Fornecedor::create($fornecedor);
        }
    }
}
