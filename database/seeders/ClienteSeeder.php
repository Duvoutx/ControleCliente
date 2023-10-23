<?php

namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{

    public function run(): void
    {
       Cliente::Factory(5)->create();
        
    }
}
