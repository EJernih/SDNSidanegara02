<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Log;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat slider permissions
        $slider_permissions = ['view sliders', 'create sliders', 'update sliders', 'delete sliders'];
        foreach ($slider_permissions as $slider_permission) {
        Permission::create(['name' => $slider_permission]);
        }

        // Membuat permissions
        foreach ($slider_permissions as $slider_permission) {
            Permission::create(['name' => $slider_permission]);
        }

        // Membuat role dan assign permissions
        $SuperAdminRole = Role::create(['name' => 'SuperAdmin']);
        $SuperAdminRole->givePermissionTo($slider_permissions);

        // Memberikan role kepada user
        $user = User::where('email', 'sidanegara2.cilteng@gmail.com')->first();
        
        if ($user) { // Pastikan user ditemukan sebelum memberikan role
            $user->assignRole('SuperAdmin');
        } else {
            // Jika user tidak ditemukan, bisa menambahkan log atau penanganan error lainnya
            Log::warning('User with email sidanegara2.cilteng@gmail.com not found.'); // Use the Log facade here
        }
    }
}
