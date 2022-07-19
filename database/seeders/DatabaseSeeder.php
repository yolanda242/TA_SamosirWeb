<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Event;
use App\Models\JenisReview;
use App\Models\ObjekWisata;
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

        ObjekWisata::create([
            'nama_objek' => 'Siallagan',
            'gambar' => 'Huta Siallagan.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam unde laboriosam eaque, magni nisi a architecto enim, similique dolore, earum explicabo repellat commodi debit',
            'lokasi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam unde laboriosam eaque, magni nisi a architecto enim, similique dolore, earum explicabo repellat commodi debitis cumque quasi hic eum officia. Sunt doloremque blanditiinumquam ipsa aliquid in cumque minima, exc',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Tele',
            'gambar' => 'TELE.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam unde laboriosam eaque, magni nisi a architecto enim, similique dolore, earum explicabo repellat commodi debitis cumque quasi hic eum officia. Sunt doloremque blanditiis quo et. Voluptas consectetur sequi deleniti iure praesentium, culpa veritatis obcaecati adipisci modi doloremque eaque aut nulla repellat temporibus unde ducimusrro.',
            'lokasi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam unde laboriosam eaque, magni nisi a architecto enim, similique dolore, earum explicabo repellat commodi debitis cumque quasi hic eum officia. Sunt doloremque blanditiis quo et. Voluptas consectetur sequi deleniti iure praesentium, culpa veritatis obcaecati adipisci modi doloremque eaque aut nulla repellat temp aliquid in cumque minima, exc',
        ]);
        ObjekWisata::create([
            'nama_objek' => 'Siallagan',
            'gambar' => 'Huta Siallagan.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam unde laboriosam eaque, magni nisi a architecto enim, similique dolore, earum explicabo repellat commodi debit',
            'lokasi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam unde laboriosam eaque, magni nisi a architecto enim, similique dolore, earum explicabo repellat commodi debitis cumque quasi hic eum officia. Sunt doloremque blanditiinumquam ipsa aliquid in cumque minima, exc',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Tele',
            'gambar' => 'TELE.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam unde laboriosam eaque, magni nisi a architecto enim, similique dolore, earum explicabo repellat commodi debitis cumque quasi hic eum officia. Sunt doloremque blanditiis quo et. Voluptas consectetur sequi deleniti iure praesentium, culpa veritatis obcaecati adipisci modi doloremque eaque aut nulla repellat temporibus unde ducimusrro.',
            'lokasi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam unde laboriosam eaque, magni nisi a architecto enim, similique dolore, earum explicabo repellat commodi debitis cumque quasi hic eum officia. Sunt doloremque blanditiis quo et. Voluptas consectetur sequi deleniti iure praesentium, culpa veritatis obcaecati adipisci modi doloremque eaque aut nulla repellat temp aliquid in cumque minima, exc',
        ]);
        ObjekWisata::create([
            'nama_objek' => 'Siallagan',
            'gambar' => 'Huta Siallagan.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam unde laboriosam eaque, magni nisi a architecto enim, similique dolore, earum explicabo repellat commodi debit',
            'lokasi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam unde laboriosam eaque, magni nisi a architecto enim, similique dolore, earum explicabo repellat commodi debitis cumque quasi hic eum officia. Sunt doloremque blanditiinumquam ipsa aliquid in cumque minima, exc',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Tele',
            'gambar' => 'TELE.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam unde laboriosam eaque, magni nisi a architecto enim, similique dolore, earum explicabo repellat commodi debitis cumque quasi hic eum officia. Sunt doloremque blanditiis quo et. Voluptas consectetur sequi deleniti iure praesentium, culpa veritatis obcaecati adipisci modi doloremque eaque aut nulla repellat temporibus unde ducimusrro.',
            'lokasi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam unde laboriosam eaque, magni nisi a architecto enim, similique dolore, earum explicabo repellat commodi debitis cumque quasi hic eum officia. Sunt doloremque blanditiis quo et. Voluptas consectetur sequi deleniti iure praesentium, culpa veritatis obcaecati adipisci modi doloremque eaque aut nulla repellat temp aliquid in cumque minima, exc',
        ]);

        Event::create([
            'nama_event' => 'Event',
            'gambar' => 'TELE.jpg',
            'deskripsi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam voluptate asperiores dolor, sed voluptates magni porro perspiciatis pariatur deserunt voluptas facere vel ad aliquid doloribus eos nam quo. Velit, perferendis animi obcaecati saepe temporibus quisquam autem! Laudantium delectus, molestiae expedita explicabo in maxime eveniet fuga vitae quia? Temporibus, architecto repellendus!',
            'lokasi' => 'random'
        ]);

        Event::create([
            'nama_event' => 'Event',
            'gambar' => 'TELE.jpg',
            'deskripsi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam voluptate asperiores dolor, sed voluptates magni porro perspiciatis pariatur deserunt voluptas facere vel ad aliquid doloribus eos nam quo. Velit, perferendis animi obcaecati saepe temporibus quisquam autem! Laudantium delectus, molestiae expedita explicabo in maxime eveniet fuga vitae quia? Temporibus, architecto repellendus!',
            'lokasi' => 'random'
        ]);

        Event::create([
            'nama_event' => 'Event',
            'gambar' => 'TELE.jpg',
            'deskripsi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam voluptate asperiores dolor, sed voluptates magni porro perspiciatis pariatur deserunt voluptas facere vel ad aliquid doloribus eos nam quo. Velit, perferendis animi obcaecati saepe temporibus quisquam autem! Laudantium delectus, molestiae expedita explicabo in maxime eveniet fuga vitae quia? Temporibus, architecto repellendus!',
            'lokasi' => 'random'
        ]);

        Event::create([
            'nama_event' => 'Event',
            'gambar' => 'TELE.jpg',
            'deskripsi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam voluptate asperiores dolor, sed voluptates magni porro perspiciatis pariatur deserunt voluptas facere vel ad aliquid doloribus eos nam quo. Velit, perferendis animi obcaecati saepe temporibus quisquam autem! Laudantium delectus, molestiae expedita explicabo in maxime eveniet fuga vitae quia? Temporibus, architecto repellendus!',
            'lokasi' => 'random'
        ]);

        Event::create([
            'nama_event' => 'Event',
            'gambar' => 'TELE.jpg',
            'deskripsi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam voluptate asperiores dolor, sed voluptates magni porro perspiciatis pariatur deserunt voluptas facere vel ad aliquid doloribus eos nam quo. Velit, perferendis animi obcaecati saepe temporibus quisquam autem! Laudantium delectus, molestiae expedita explicabo in maxime eveniet fuga vitae quia? Temporibus, architecto repellendus!',
            'lokasi' => 'random'
        ]);

        Event::create([
            'nama_event' => 'Event',
            'gambar' => 'TELE.jpg',
            'deskripsi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam voluptate asperiores dolor, sed voluptates magni porro perspiciatis pariatur deserunt voluptas facere vel ad aliquid doloribus eos nam quo. Velit, perferendis animi obcaecati saepe temporibus quisquam autem! Laudantium delectus, molestiae expedita explicabo in maxime eveniet fuga vitae quia? Temporibus, architecto repellendus!',
            'lokasi' => 'random'
        ]);
    }
}
