<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContacSeeder extends Seeder
{

    public function run(): void
    {
        Contact::factory(50)->create();
    }
}
