<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facedes\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       FacadesDB::table('bookshelfs')->insert([
        'code' => 'B5001',
        'name' => 'Novel'
       ]);
       Book::create([

        
       'title'        =>'Asep Balon Tea',
       'author'       =>'GTA',
       'year'         =>'1965',
       'publisher'    =>'kang ibing',
       'city'         =>'Majalaya',
       'cover'        =>'placeholder.com/512px.png',
       'bookshelf_id' =>'1'
    
       ]);
    }
}
