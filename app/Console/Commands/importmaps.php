<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class importmaps extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:maps';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

      $tablename = 'locations';
        // Drop all data from the maps table.
        DB::table($tablename)->truncate();

        // Import the CSV file into the maps table.
        $path = storage_path('app/misc/data.csv');
        $data = file($path, FILE_IGNORE_NEW_LINES);

        foreach ($data as $row) {
            $data = explode(',', $row);

            DB::table($tablename)->insert([
                'name' => $this->trim_double_quotes($data[0]),
                'latitude' => $this->trim_double_quotes($data[1]),
                'longitude' => $this->trim_double_quotes($data[2]),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        $this->info('Maps data imported successfully.');
    }


    public function trim_double_quotes(string $value) {
      return trim($value, '"');
    }
}