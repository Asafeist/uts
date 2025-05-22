<?php

namespace Database\Seeders;

use App\Models\Kunjungan;
use App\Models\Pasien;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan role 'super_admin' tersedia
        Role::firstOrCreate([
            'name' => 'super_admin',
            'guard_name' => 'web'
        ]);

        // Ambil atau buat user admin
        $user = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('password') // Ganti sesuai kebutuhan
            ]
        );

        // Beri role hanya jika belum punya
        if (!$user->hasRole('super_admin')) {
            $user->assignRole('super_admin');
        }

        // Panggil seeder lainnya
        $this->call([
            KunjunganSeeder::class,
            PasienSeeder::class,
            
        ]);
    }
}
