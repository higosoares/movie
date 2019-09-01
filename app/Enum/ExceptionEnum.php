<?php
/**
 * Created by PhpStorm.
 * User: Alex Alexandre <alexalexandrejr@gmail.com>
 * Date: 01/12/17
 * Time: 21:09
 */

namespace App\Enum;

class ExceptionEnum
{
    //Views
    const view400 = 'error.400';
    const view404 = 'error.404';
    const view500 = 'error.500';

    //Messages
    const response400 = 'Bad Request.';
    const response403 = 'Forbidden.';
    const response404 = 'Not Found.';
    const response500 = 'Internal Server Error.';
}
