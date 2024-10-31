<?php

namespace Database\Seeders;

use App\Models\anggota;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        anggota::create([
            'nama'=> 'haikal',
            'hp'=> '089602668498'       
            
        ]);
        anggota::create([
            'nama'=> 'said',
            'hp'=> '089602668497'       
       
    
        ]);
        anggota::create([
            'nama'=> 'maul',
            'hp'=> '0896026684967'       
       
    
        ]);
        
    }
}
