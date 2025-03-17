<?php

namespace App\Http\Controllers;

use League\Csv\Reader;
use Illuminate\Http\Request;
use Database\Seeders\UserSeeder;
use Database\Seeders\DatabaseSeeder;

class CsvController extends Controller
{
    public function index()
    {
        return view('add-csv');
    }

    public function generateDataFromCsv(Request $request)
    {
        $request->validate([
            'csv' => 'required|mimes:csv,txt|max:2048',
        ]);

        $csvFile = $request->file('csv')->getRealPath();

        $csv = Reader::createFromPath($csvFile, 'r');
        $csv->setHeaderOffset(0);

        $records = $csv->getRecords();

        $seeder = new UserSeeder();
        $seeder->importCsvData($records);

        return redirect()
            ->route('home')
            ->with('success', 'Dados importados com sucesso!');
    }
}
