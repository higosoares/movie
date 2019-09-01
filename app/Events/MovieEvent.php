<?php

namespace App\Events;

use App\Models\Movie;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MovieEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $movie;
    public $message;

    /**
     * Create a new event instance.
     *
     * @param Movie $movie
     * @param string $message
     * @return void
     */
    public function __construct(Movie $movie, string $message)
    {
        $this->movie = $movie;
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
