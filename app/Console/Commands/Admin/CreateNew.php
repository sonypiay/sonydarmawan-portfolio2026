<?php

namespace App\Console\Commands\Admin;

use App\Models\Admin;
use Illuminate\Console\Command;

class CreateNew extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new admin';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            Admin::create([
                'name' => fake()->name,
                'email' => fake()->unique()->safeEmail,
                'password' => bcrypt('admin123'),
            ]);

            $this->info('Admin created successfully');
        } catch(\Throwable $th) {
            $this->error('Failed to create admin: ' . $th->getMessage());
        }

        return 0;
    }
}
