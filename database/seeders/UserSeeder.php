<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\Csv\Reader;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //..
    }

    public function importCsvData($records)
    {
        User::truncate();

        foreach ($records as $record) {
            User::updateOrInsert(
                ['CPF' => $record['CPF']],
                [
                    'NOME' => $record['NOME'],
                    'DATANASC' => $record['DATANASC'],
                    'WHATS' => $record['WHATS'],
                    'EMAIL' => $record['EMAIL'],
                    'DATAFORMACAO' => $record['DATAFORMACAO'],
                    'DATASAIDA' => $record['DATASAIDA'],
                    'FILHOMATRICULADO' => $record['FILHOMATRICULADO'],
                ]
            );
        }
    }
}
