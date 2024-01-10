<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (app()->isLocal()) {
            // 開発環境のみレコードを追加
            DB::table('admins')->insert([
                'name' => '管理者',
                'email' => 'taro.samurai@example.com',
                'password' => Hash::make('password'),
                'created_at' => '2024-01-01 11:00:00',
                'updated_at' => '2024-01-02 12:00:00',
            ]);
        }
    }
}
