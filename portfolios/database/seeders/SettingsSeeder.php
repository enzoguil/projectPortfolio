<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->truncate();
        Setting::create(['key' => 'x', 'value' => 'https://twitter.com/GameBlackRC', 'user_id' => 1]);
        Setting::create(['key' => 'instagram', 'value' => 'https://www.instagram.com/gameblackrc/', 'user_id' => 1]);
        Setting::create(['key' => 'youtube', 'value' => 'https://www.youtube.com/channel/UChBImNicxtKOVsTjSfpf6kw', 'user_id' => 1]);
        Setting::create(['key' => 'discord', 'value' => 'https://discord.gg/bfwQWHU', 'user_id' => 1]);
        Setting::create(['key' => 'github', 'value' => 'https://github.com/GameBlackRC', 'user_id' => 1]);

        Setting::create(['key' => 'x', 'value' => null, 'user_id' => 2]);
        Setting::create(['key' => 'instagram', 'value' => null, 'user_id' => 2]);
        Setting::create(['key' => 'youtube', 'value' => null, 'user_id' => 2]);
        Setting::create(['key' => 'discord', 'value' => null, 'user_id' => 2]);
        Setting::create(['key' => 'github', 'value' => null, 'user_id' => 2]);
    }
}
