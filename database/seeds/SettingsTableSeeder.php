<?php

// UsersTableSeeder.php
use Illuminate\Database\Seeder;
use Efriandika\LaravelSettings\Settings as Settings; // to use Eloquent Model

class SettingsTableSeeder extends Seeder {
    public function run() {
        // clear table
        //Settings::truncate();

        settings_set('title', 'Spice Island Charter');
        settings_set('description', 'Spice Island Charter');
        settings_set('keywords', 'Spice Island Charter');
        settings_set('site_url', 'http://localhost/tour/public/');
        settings_set('copyright', '&copy; 2015 Spice Island Charter');
    }
}