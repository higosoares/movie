<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:44
 */

namespace App\Http\Controllers\Web\Admin\Category;

use App\Enum\CategoryEnum;
use App\Traits\LancadorDeExcecao;
use Illuminate\Http\Request;
use App\Exceptions\MovieException;
use App\Http\Controllers\Controller;
use App\Interfaces\Category\CategoryServiceInterface;
use Illuminate\View\View;

class CategoryController extends Controller
{
    use LancadorDeExcecao;

    protected $categoryServiceInterface;

    public function __construct(CategoryServiceInterface $categoryServiceInterface)
    {
        $this->middleware('auth');
        $this->categoryServiceInterface = $categoryServiceInterface;
    }

    /**
     * Show index page
     *
     * @return View
     */
    public function index()
    {
        $categories = $this->categoryServiceInterface->list();

        return view(CategoryEnum::viewIndex)->with(['categories' => $categories]);
    }

    /**
     * Show category page
     *
     * @param Request $request
     * @param $id
     * @return View|void
     * @throws MovieException
     */
    public function show(Request $request, $id)
    {
        try {
            $category = $this->categoryServiceInterface->retrieveById($id);
            return view(CategoryEnum::viewShow)->with(['category' => $category]);
        } catch (MovieException $exception) {
            $this->excecao($exception->getMessage(), CategoryEnum::notFound, $exception->getCode());
        }
    }

    /**
     * Show register form
     *
     * @return View
     */
    public function registerForm()
    {
        return view(CategoryEnum::viewRegisterForm);
    }

    /**
     * Show edit form
     *
     * @param Request $request
     * @param $id
     * @return View|void
     * @throws MovieException
     */
    public function editForm(Request $request, $id)
    {
        try {
            $category = $this->categoryServiceInterface->retrieveById((int) $id);
            return view(CategoryEnum::viewEditForm)->with(['category' => $category,]);
        } catch (MovieException $exception) {
            $this->excecao($exception->getMessage(), CategoryEnum::notFound, $exception->getCode());
        }
    }
}
