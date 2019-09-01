<?php
/**
 * Created by PhpStorm.
 * User: Alex Alexandre <alexalexandrejr@gmail.com>
 * Date: 01/12/17
 * Time: 21:09
 */

namespace App\Enum;

class CategoryEnum
{
    //Views
    const viewIndex = 'admin.category.index';
    const viewShow = 'admin.category.show';
    const viewRegisterForm = 'admin.category.registerForm';
    const viewEditForm = 'admin.category.editForm';

    //Messages
    const notFound = 'Category not found';
    const idInvalid = 'Id invalid in category';
    const created = 'Category created';
    const updated = 'Category updated';
    const deleted = 'Category deleted';
    const notCreated = 'Category not created';
    const notUpdated = 'Category not updated';
    const notDeleted = 'Category not deleted';
}
