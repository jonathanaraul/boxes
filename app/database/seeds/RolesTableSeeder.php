<?php

class RolesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('roles')->delete();

        $adminRole = new Role;
        $adminRole->name = 'admin';
        $adminRole->save();

        $commentRole = new Role;
        $commentRole->name = 'comment';
        $commentRole->save();

        $user = User::where('username', '=', 'admin')->first();
        $user->attachRole($adminRole);

        $user = User::where('username', '=', 'user')->first();
        $user->attachRole($commentRole);

        $user = User::where('username', '=', 'jonathan.araul')->first();
        $user->attachRole($adminRole);

        $user = User::where('username', '=', 'cloker')->first();
        $user->attachRole($adminRole);

    }

}
