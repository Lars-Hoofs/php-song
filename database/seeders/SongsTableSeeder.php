<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $songs = [
            ['title' => 'Jail house rock', 'singer' => 'Elvis presley'],
            ['title' => 'erika', 'singer' => 'Duitse painter gozer'],
            ['title' => 'Samsong rock', 'singer' => 'Samson & gert'],
            ['title' => 'GUCCI GANG', 'singer' => 'Lil pump'],
           ['title' => 'Het is een nacht', 'singer' => 'Guus Meeuwis']            
        ];
        DB::table('songs')->insert($songs);
    }
}
