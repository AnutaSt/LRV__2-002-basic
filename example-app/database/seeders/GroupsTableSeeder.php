<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Group::create([
            'title' => 'FS-01',
            'start_from' => '2024-01-10',
            'is_active' => true,
        ]);

        Group::create([
            'title' => 'FS-02',
        ]);
    }
}