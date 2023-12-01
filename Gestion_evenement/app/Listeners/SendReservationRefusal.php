<?php

namespace App\Listeners;

use App\Events\ReservationRefused;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendReservationRefusal
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ReservationRefused $event): void
    {
        //
    }
}
