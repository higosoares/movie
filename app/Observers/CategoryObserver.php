<?php

namespace App\Observers;

use App\Enum\CategoryEnum;
use App\Models\Category;
use App\Events\CategoryEvent;

class CategoryObserver
{
    /**
     * Handle the category "created" event.
     *
     * @param  Category  $category
     * @return void
     */
    public function created(Category $category)
    {
        event(new CategoryEvent($category, CategoryEnum::created));
    }

    /**
     * Handle the category "created" event.
     *
     * @param  Category  $category
     * @return void
     */
    public function saving(Category $category)
    {
        //
    }

    /**
     * Handle the category "updated" event.
     *
     * @param  Category  $category
     * @return void
     */
    public function updated(Category $category)
    {
        // Dispatching Event
        event(new CategoryEvent($category, CategoryEnum::updated));
    }

    /**
     * Handle the category "updated" event.
     *
     * @param  Category  $category
     * @return void
     */
    public function updating(Category $category)
    {
        //
    }

    /**
     * Handle the category "deleted" event.
     *
     * @param  Category  $category
     * @return void
     */
    public function deleted(Category $category)
    {
        //
    }

    /**
     * Handle the category "restored" event.
     *
     * @param  Category  $category
     * @return void
     */
    public function restored(Category $category)
    {
        //
    }

    /**
     * Handle the category "force deleted" event.
     *
     * @param  Category  $category
     * @return void
     */
    public function forceDeleted(Category $category)
    {
        //
    }
}
