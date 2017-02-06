<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        // DB::unprepared(file_get_contents(__DIR__ . '/cmsPortoTheme.sql'));
        $sql = file_get_contents(__DIR__ . '/allDatabase.sql');

//        if (! str_contains($sql, ['DELETE', 'TRUNCATE'])) {
//            throw new Exception('Invalid sql file. This will not empty the tables first.');
//        }

        // split the statements, so DB::statement can execute them.
        $statements = array_filter(array_map('trim', explode('--|||', $sql)));

        foreach ($statements as $stmt) {
            DB::unprepared($stmt);
        }

        Model::reguard();
    }
}
