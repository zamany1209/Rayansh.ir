<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Create_Data_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach(range(1,4) as $item)
        {
            DB::table('data')->insert([
                'title' => "rayansh $item",
                'text_header' => "rayansh $item",
                'text' => "rayansh $item",
                'id_teacher' => "rayansh $item",
                'save_move' => "rayansh $item",
                'wiuo' => "rayansh $item",
                'like_po' => "rayansh $item",
                'cament' => "rayansh $item",
                'url_pikcher' => "rayansh $item",
                'url_movese' => "rayansh $item",
                'Pole' => "Free",
                'name_Post' => "rayansh $item",
                'meta' => "rayansh $item",
                'namber_movis' => "6 $item",
                'namber_sm' => "5 $item",
                'save_clayent' => "rayansh $item",
                'ok' => "yes",
                'url' => "rayansh $item",
                'Groop' => "develop $item",
                'family_teacher' => "zamany $item",
                'vaseyat' => "rayansh",
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
