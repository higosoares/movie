<?php

namespace App\Http\Resource;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GenericResource extends JsonResource
{
    /**
     * Transform the resource into an json.
     *
     * @param $request
     * @return JsonResponse
     */
    public function toJson($request)
    {
        return parent::toResponse($request);
    }
}
