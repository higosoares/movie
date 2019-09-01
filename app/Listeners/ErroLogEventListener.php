<?php

namespace App\Listeners;

use App\Events\ErroEvent;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ErroLogEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  ErroEvent $event
     * @return void
     */
    public function handle(ErroEvent $event)
    {
        Log::channel('erro')->info($event->messageLog);
    }
}
