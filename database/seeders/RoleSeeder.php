<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Right;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        // define roles
        $roles = [
            ['name' => 'admin', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'grader', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'team', 'created_at' => $now, 'updated_at' => $now],
        ];

        // define rights per role
        $rightsRoles = [
            'admin' => ['all'],
            'grader' => ['question.all', 'answer.all', 'user.read'],
            'team' => ['question.read', 'answer.create', 'answer.read']
        ];

        // create roles
        Role::insert($roles);

        // assign rights
        foreach ($rightsRoles as $role => $rights) {
            $roleModel = Role::where(['name' => $role])->first();
            foreach ($rights as $right) {
                $rightModel = Right::where(['name' => $right])->first();
                $roleModel->rights()->attach($rightModel->id);
            }
        }
    }
}
