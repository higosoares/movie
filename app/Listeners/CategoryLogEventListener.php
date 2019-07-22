<?php

namespace App\Listeners;

use App\Events\CategoryEvent;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CategoryLogEventListener
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
     * @param  CategoryEvent $event
     * @return void
     */
    public function handle(CategoryEvent $event)
    {
        Log::channel('category')->info($event->message.':'.json_encode($event->category));
    }

    /**
     * Handle a job failure.
     *
     * @param  CategoryEvent  $event
     * @param  \Exception  $exception
     * @return void
     */
    public function failed(CategoryEventd $event, $exception)
    {
        //
    }
}
