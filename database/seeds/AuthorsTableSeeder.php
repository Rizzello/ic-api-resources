<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'id'         => 1,
            'first_name' => 'John',
            'last_name'  => 'Doe',
            'biography'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a tellus elit. Vivamus luctus vitae eros semper varius. Donec quis sollicitudin tortor. Curabitur vel sollicitudin diam. Sed dignissim dapibus porta.',
        ]);

        DB::table('authors')->insert([
            'id'         => 2,
            'first_name' => 'Jack',
            'last_name'  => 'Smith',
            'biography'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a tellus elit. Vivamus luctus vitae eros semper varius. Donec quis sollicitudin tortor. Curabitur vel sollicitudin diam. Sed dignissim dapibus porta.',
        ]);

        DB::table('authors')->insert([
            'id'         => 3,
            'first_name' => 'Alexander',
            'last_name'  => 'Williams',
            'biography'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a tellus elit. Vivamus luctus vitae eros semper varius. Donec quis sollicitudin tortor. Curabitur vel sollicitudin diam. Sed dignissim dapibus porta.',
        ]);
    }
}
