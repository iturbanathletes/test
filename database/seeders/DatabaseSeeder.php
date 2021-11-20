<?php

namespace Database\Seeders;

use App\Models\Club;
use App\Models\Divisi;
use App\Models\Jabatan;
use App\Models\Karyawan;
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
        Club::Create([
            'nama_club'=>'CLUB A',
            'alamat'=>'SURABAYA'
        ]);
        Club::Create([
            'nama_club'=>'CLUB B',
            'alamat'=>'MALANG'
        ]);
        Divisi::Create([
            'nama_divisi'=>'HRD',
        ]);
        Divisi::Create([
            'nama_divisi'=>'IT',
        ]);

        Jabatan::Create([
            'nama_jabatan'=>'MANAGER',
        ]);
        Jabatan::Create([
            'nama_jabatan'=>'STAFF',
        ]);
        Karyawan::Create([
            'nik'=>'12345',
            'nama_karyawan'=>'ANDI',
            'club'=>'1',
            'divisi'=>'1',
            'jabatan'=>'1',
            'jenis_kelamin'=>'Laki laki'
        ]);
        Karyawan::Create([
            'nik'=>'54321',
            'nama_karyawan'=>'DINA',
            'club'=>'2',
            'divisi'=>'1',
            'jabatan'=>'2',
            'jenis_kelamin'=>'Perempuan'
        ]);
    }
}
