<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PostsImport;

class ImportEscelCommand extends Command
{
    protected $signature = 'import:excel';

    protected $description = 'Get data from excel';

    public function handle()
    {
        ini_set('memory_limit', '-1');
        Excel::import(new PostsImport(), public_path('excel/laravel-import.xlsx'));
    }
}
