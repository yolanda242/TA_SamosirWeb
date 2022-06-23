<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\JenisReview;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Admin::create([
            'username' => 'admin',
            'password' => 'admin'
        ]);
        
        Admin::create([
            'username' => 'admin2',
            'password' => 'admin2'
        ]);

        JenisReview::create([
            'kode_review' => 'KR-01',
            'nama_review' => 'Review Objek Wisata'
        ]);

        JenisReview::create([
            'kode_review' => 'KR-02',
            'nama_review' => 'Review Event'
        ]);

        JenisReview::create([
            'kode_review' => 'KR-03',
            'nama_review' => 'Review Fasilitas'
        ]);
    }
}
