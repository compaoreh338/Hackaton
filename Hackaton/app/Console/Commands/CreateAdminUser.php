<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-admin-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $admin = new User;
        $admin->name = "Admin";
        $admin->email = "admin@example.com";
        $admin->password = bcrypt("password");
        $admin->role = "admin";
        $admin->save();

        $this->info('Admin user created successfully.');
    }
}
