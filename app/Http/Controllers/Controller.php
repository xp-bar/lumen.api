<?php

namespace XpBar\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Laravel\Lumen\Routing\Controller as BaseController;
use XpBar\Traits\ApplicationMetadata as Meta;

class Controller extends BaseController
{
    /**
     * Try to respond with data
     *
     * @param array $data
     * @return JsonResponse
     */
    protected function respond(array $data = []): JsonResponse
    {
        return new JsonResponse(Meta::with($data), 200);
    }

    /**
     * Try to respond with data
     *
     * @param array $data
     * @return JsonResponse
     */
    protected function respondIncorrectInput(array $data = []): JsonResponse
    {
        return new JsonResponse(Meta::with($data), 422);
    }

    /**
     * Try to respond with data
     *
     * @param array $data
     * @return JsonResponse
     */
    protected function respondNotFound(): JsonResponse
    {
        return new JsonResponse(Meta::get(), 404);
    }

    /**
     * respond with errors
     *
     * @param array $errors
     * @return JsonResponse
     */
    protected function scream(array $errors = []): JsonResponse
    {
        if (empty($errors)) {
            $errors = [
                "errors" => "Sorry, something is broken - please contact the author."
            ];
        }

        return new JsonResponse(Meta::with($errors), 500);
    }

    /**
     * Respond with just meta - fallback
     *
     * @return JsonResponse
     */
    protected function meta(): JsonResponse
    {
        return new JsonResponse(Meta::get(), 200);
    }
}
