<?php

namespace App\Listeners;

use App\Events\Events;
use Illuminate\Support\Facades\DB;


class Listener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Events $event)
    {
        DB::table('logs')->insert([
            'user_id' => auth()->user()->id,
            'log_entry' => $event->log
        ]);
    }
}
