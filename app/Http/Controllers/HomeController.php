<?php

namespace XpBar\Http\Controllers;

use Illuminate\Http\JsonResponse;

class HomeController extends Controller
{
    /**
     * GET /
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            return $this->meta();
        } catch (\Exception $e) {
            return $this->scream();
        }
    }
}
