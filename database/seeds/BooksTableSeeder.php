<?php

use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    private $count = 100;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();

        factory(Book::class, $this->count)->create();

    }
}
