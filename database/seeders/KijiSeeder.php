<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KijiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // テーブル内のデータを一旦全削除
        \Illuminate\Support\Facades\DB::table('kiji')->truncate();
        
        //データのインサート
        DB::table('kiji')->insert([
            'user_id' => 1,
            'title' => 'タイトル',
            'body' => '本文',
            'created_at' => '2025-03-11 12:12:12',
            'updated_at' => '2025-03-11 13:13:13'
        ]
        );
    }
}
