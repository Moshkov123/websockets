<?php

namespace App\Console\Commands;

use App\Events\SystemMaintenanceEvent; // Импорт класса события
use Illuminate\Console\Command;

class SystemNotifyMaintenanceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'system:notify-maintenance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to notify about system maintenance';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $time = $this->ask('When should the maintenance start? (Format: Y-m-d H:i:s)');
        event(new SystemMaintenanceEvent($time));
        $this->info('System maintenance event has been fired.');
    }
}