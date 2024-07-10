<?php

namespace Database\Seeders;

use App\Models\Git;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Git::create([
            'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.",
        ]);

        Git::create([
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
        ]);
    }
}
