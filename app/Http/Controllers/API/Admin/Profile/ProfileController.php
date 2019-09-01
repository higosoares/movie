<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:45
 */

namespace App\Http\Controllers\Api\Admin\Profile;

use App\Exceptions\MovieException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\ProfileRequest;
use App\Models\Profile;
use App\Services\Profile\ProfileService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     *
     * @var ProfileService
     */
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->middleware('auth');
        $this->profileService = $profileService;

    }

    /**
     * Show index page
     * @return \Illuminate\View\View
    */

    public function index()
    {
        $profiles = $this->profileService->list();
        return response()->json($profiles);

    }

    /**
     * Show register form
     * @return \Illuminate\View\View
     */
    public function registerForm()
    {
        return view('profile.registerForm');
    }

    /**
     * Register new profile
     * @param Request $request
     * @return Response
     */
    public function register(Request $request)
    {
        DB::beginTransaction();
        try {
            $params = new \stdClass();
            $params->tx_name_profile = $request->input('tx_name_profile');

            $profile = $this->profileService->register($params);
            $retorno = [
                'status' => 201,
                'resultado' => $profile
            ];
            DB::commit();
        } catch(MovieException $e) {
            DB::rollback();
            $retorno = [
                'status' => $e->getCode(),
                'resultado' => $e->retorno
            ];
        }
        return response()->json($retorno)->setStatusCode($retorno['status']);
    }

    /**
     * Show edit form
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function editForm($id)
    {
        $profile = $this->profileService->retrieveById((int) $id);

        return view('profile.editForm')->with([
            'profile' => $profile,
        ]);
    }

    /**
     * Edit profile
     * @param int $id
     * @param ProfileRequest $request
     * @return Response
     */
    public function edit($id, ProfileRequest $request)
    {
        DB::beginTransaction();
        try {
            $params = new \stdClass();
            $params->tx_name_profile = $request->input('tx_name_profile');

            $profile = $this->profileService->edit($id, $params);
            $retorno = [
                'status' => 200,
                'resultado' => $profile
            ];
            DB::commit();
        } catch(MovieException $e) {
            DB::rollback();
            $retorno = [
                'status' => $e->getCode(),
                'resultado' => $e->retorno
            ];
        }
        return response()->json($retorno)->setStatusCode($retorno['status']);
    }

    /**
     * Delete profile
     * @param $id
     * @return Response
     */
    public function delete($id)
    {
        try {
            $this->profileService->delete((int) $id);
            $retorno = [
                'status' => 203
            ];
        } catch(MovieException $e) {
            $retorno = [
                'status' => $e->getCode(),
                'resultado' => $e->retorno
            ];
        }
        return response()->json($retorno)->setStatusCode($retorno['status']);
    }

}
