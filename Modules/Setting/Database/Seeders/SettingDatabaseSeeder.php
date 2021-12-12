<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\Entities\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'company_name' => 'POS Master',
            'company_email' => 'beabrandkenya@gmail.com',
            'company_phone' => '+254720626415',
            'notification_email' => 'timothykimemia01@gmail.com',
            'default_currency_id' => 1,
            'default_currency_position' => 'prefix',
            'footer_text' => 'POS Master © 2021 || Developed by <strong><a target="_blank" href="https://about.me/timothykimemia">Timothy Kimemia</a></strong>',
            'company_address' => 'Mwangi Riika, Ngara'
        ]);
    }
}
