<?php

namespace App\Observers;

use App\Enum\MovieEnum;
use App\Models\Movie;
use App\Events\MovieEvent;

class MovieObserver
{
    /**
     * Handle the category "created" event.
     *
     * @param  Movie $movie
     * @return void
     */
    public function created(Movie $movie)
    {
        event(new MovieEvent($movie, MovieEnum::created));
    }

    /**
     * Handle the category "created" event.
     *
     * @param  Movie $movie
     * @return void
     */
    public function saving(Movie $movie)
    {
        //
    }

    /**
     * Handle the category "updated" event.
     *
     * @param  Movie $movie
     * @return void
     */
    public function updated(Movie $movie)
    {
        // Dispatching Event
        event(new MovieEvent($movie, MovieEnum::updated));
    }

    /**
     * Handle the category "updated" event.
     *
     * @param  Movie $movie
     * @return void
     */
    public function updating(Movie $movie)
    {
        //
    }

    /**
     * Handle the category "deleted" event.
     *
     * @param  Movie $movie
     * @return void
     */
    public function deleted(Movie $movie)
    {
        event(new MovieEvent($movie, MovieEnum::deleted));
    }

    /**
     * Handle the category "restored" event.
     *
     * @param  Movie $movie
     * @return void
     */
    public function restored(Movie $movie)
    {
        //
    }

    /**
     * Handle the category "force deleted" event.
     *
     * @param  Movie $movie
     * @return void
     */
    public function forceDeleted(Movie $movie)
    {
        //
    }
}
