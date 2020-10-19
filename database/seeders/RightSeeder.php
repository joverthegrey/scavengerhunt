<?php

namespace Database\Seeders;

use App\Models\Right;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        $rights = [
            // generic
            ['name' => 'all', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'create', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'read', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'update', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'delete', 'created_at' => $now, 'updated_at' => $now],

            // answers
            ['name' => 'answer.all', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'answer.create', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'answer.read', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'answer.update', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'answer.delete', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'answer.grade', 'created_at' => $now, 'updated_at' => $now],

            // questions
            ['name' => 'question.all', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'question.create', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'question.read', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'question.update', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'question.delete', 'created_at' => $now, 'updated_at' => $now],

            // users
            ['name' => 'user.all', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'user.create', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'user.read', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'user.update', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'user.delete', 'created_at' => $now, 'updated_at' => $now]
        ];

        Right::insert($rights);
    }
}
