<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create([
            'name' =>'omar',
            'email' =>'omar@omar.com',
            'password' =>bcrypt('12345678'),
            'roles_name' =>['super user'],
            'status' => 1,
        ]);
        $role=Role::create(['name'=>'super user']);
        $permission =Permission::pluck('id','id')->all();
        $role->syncpermissions($permission);
        $user->assignRole([$role->id]);
    }
}
