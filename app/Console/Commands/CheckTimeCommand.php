<?php

namespace App\Console\Commands;

use App\Models\Appointment;
use Illuminate\Console\Command;

class CheckTimeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'appointment:date';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'An artisan command to check time of the appointment';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $now = now();
        $appointments = Appointment::where('status_id', '!=', 1)->get();
        foreach ($appointments as $appointment) {
            if($appointment['date_of_appointment']<now()){
                Appointment::where('id',$appointment['id'])->update([
                   'status_id' => 1
                ]);
            } else {
                return 0;
            }
        }
    }
}
