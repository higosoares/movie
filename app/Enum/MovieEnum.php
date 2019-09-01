<?php
/**
 * Created by PhpStorm.
 * User: Alex Alexandre <alexalexandrejr@gmail.com>
 * Date: 01/12/17
 * Time: 21:09
 */

namespace App\Enum;

class MovieEnum
{
    //Views
    const viewIndex = 'movie.index';
    const viewShow = 'movie.show';
    const viewRegisterForm = 'movie.registerForm';
    const viewEditForm = 'movie.editForm';

    //Messages
    const notFound = 'Movie not found';
    const idInvalid = 'Id invalid in movie';
    const created = 'Movie created';
    const updated = 'Movie updated';
    const deleted = 'Movie deleted';
    const notCreated = 'Movie not created';
    const notUpdated = 'Movie not updated';
    const notDeleted = 'Movie not deleted';
}
