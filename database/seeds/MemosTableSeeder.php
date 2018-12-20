<?php

use Illuminate\Database\Seeder;

class MemosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("folders")->insert([
            "title" => "開発フォルダ1",
            "tag" => "開発",
            // "image" => ""
            "folder_id" => 0
        ]);

        DB::table("folders")->insert([
            "title" => "開発フォルダ2",
            "tag" => "開発",
            // "image" => ""
            "folder_id" => 1
        ]);

        DB::table("folders")->insert([
            "title" => "遊びフォルダ3",
            "tag" => "遊び",
            // "image" => ""
        ]);

        DB::table("memos")->insert([
            "title" => "ナイスなメモ",
            "tag" => "開発用",
            // "image" => "",
            "text" => "これは開発用のデータその1です",
            "folder_id" => 1, 
            "del_flag" => false
        ]);

        DB::table("memos")->insert([
            "title" => "グッドなメモ",
            "tag" => "布教用",
            // "image" => "",
            "text" => "これは開発用のデータその2です",
            "folder_id" => 3, 
            "del_flag" => false
        ]);

        DB::table("memos")->insert([
            "title" => "グレートなメモ",
            "tag" => "開発用",
            // "image" => "",
            "text" => "これは開発用のデータその3です",
            "folder_id" => 3, 
            "del_flag" => false
        ]);

        DB::table("memos")->insert([
            "title" => "イケてるメモ",
            "tag" => "分類用",
            // "image" => "",
            "text" => "これは開発用のデータその4です",
            "folder_id" => 2, 
            "del_flag" => false
        ]);
    }
}
