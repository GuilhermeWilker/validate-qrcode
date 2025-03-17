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
        $csvFile = base_path('database/data/data.csv');

        if (!file_exists($csvFile)) {
            $this->command->error('Arquivo CSV não encontrado em: ' . $csvFile);
            return;
        }

        $csv = Reader::createFromPath($csvFile, 'r');
        $csv->setHeaderOffset(0);

        $records = $csv->getRecords();

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

        $this->command->info('Dados importados com sucesso do seu arquivo .csv!!');
    }
}
