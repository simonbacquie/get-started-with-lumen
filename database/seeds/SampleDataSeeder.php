<?php

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class SampleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tolkien = Author::create([
            'name'          => 'J.R.R. Tolkien',
            'date_of_birth' => '1892-01-03'
        ]);

        Book::create([
            'title'            => 'The Hobbit',
            'publication_date' => '1937-09-21',
            'isbn'             => '9780582186552',
            'author_id'        => $tolkien->id
        ]);

        Book::create([
            'title'            => 'The Silmarillion',
            'publication_date' => '1977-09-15',
            'isbn'             => '9780345325815',
            'author_id'        => $tolkien->id
        ]);

        $karpyshyn = Author::create([
            'name'          => 'Drew Karpyshyn',
            'date_of_birth' => '1971-07-28'
        ]);

        Book::create([
            'title'            => 'The Old Republic: Revan',
            'publication_date' => '2011-11-15',
            'isbn'             => '9780857689009',
            'author_id'        => $karpyshyn->id
        ]);

        Book::create([
            'title'            => 'The Old Republic: Annihilation',
            'publication_date' => '2012-11-13',
            'isbn'             => '9780345529411',
            'author_id'        => $karpyshyn->id
        ]);

        $salvatore = Author::create([
            'name'          => 'R.A. Salvatore',
            'date_of_birth' => '1959-01-20'
        ]);

        Book::create([
            'title'            => 'Homeland',
            'publication_date' => '2004-03-01',
            'isbn'             => '9780786931231',
            'author_id'        => $salvatore->id
        ]);

        Book::create([
            'title'            => 'Attack of the Clones',
            'publication_date' => '2003-04-01',
            'isbn'             => '9780345428820',
            'author_id'        => $salvatore->id
        ]);
    }
}
