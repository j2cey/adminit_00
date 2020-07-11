<?php

    use App\State;
    use App\User;
    use Illuminate\Database\Seeder;
    use Spatie\Permission\Models\Role;
    use Spatie\Permission\Models\Permission;

    class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'rootdev',
            'email' => 'rootdev@adminit.com',
            'is_local' => true,
            'state_id' => State::active()->first()->id,
            'password' => bcrypt('rootdevP@ssw0rd')
        ]);

        $role = Role::create([
            'name' => 'Admin',
            'description' => 'Administrateur Principal du Système',
        ]);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

        // Création du Role default user
        /*$role_default = Role::create([
            'name' => 'Default User',
            'description' => 'Utilisateur par défaut',
            'state_id' => State::actif()->first()->id,
        ]);
        $permissions_default = Permission::whereIn('name', ['commande-list','commande-create','commande-edit'])->pluck('id','id')->all();
        $role_default->syncPermissions($permissions_default);*/
    }
}
