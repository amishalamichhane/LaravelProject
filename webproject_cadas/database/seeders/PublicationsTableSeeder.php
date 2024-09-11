<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publication;

class PublicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publication::create([
            'title' => 'A cross-cultural examination of adverse childhood experiences in low-and middle-income countries and their relation with adolescent educational aspirations.',
            'authors' => 'Melissa Alcaraz, Hayley Pierce, Natalie D. Eggum, Bertha Lidia Nuño-Gutiérrez, Dirgha Ghimire',
            'journal' => 'Child Abuse & Neglect',
            'year' => 2024,
            'citation' => 'Alcaraz, M., Pierce, H., Eggum, N. D., Nuño-Gutiérrez, B. L., & Ghimire, D. (2024). A cross-cultural examination...'
        ]);

        // Add more publications as needed
    }
}

