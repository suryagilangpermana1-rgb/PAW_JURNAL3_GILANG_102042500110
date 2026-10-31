<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        // TODO 1 : Buat akun awal untuk Dosen.
        // Hint:
        // - Gunakan email sebagai identitas akun.
        // - Lengkapi nama, password yang di-hash, role Dosen,dan nomor induk.
       User::updateOrCreate(
    ['email' => 'surya.permana@celoe.test'],
    [
        'name' => 'Dr. Ir. Surya Gilang, M.T.',
        'password' => Hash::make('gilang2007'),
        'role' => 'dosen',
        'nomor_induk' => '102042500110',
    ]
);

User::updateOrCreate(
    ['email' => 'surya.gilang@celoe.test'],
    [
        'name' => 'Surya Gilang Permana',
        'password' => Hash::make('gilang2007'),
        'role' => 'mahasiswa',
        'nomor_induk' => '102042500110',
    ]
);
    }
}
