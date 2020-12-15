<?php

namespace App\Http\Controllers\Api\v1\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\Api\v1\Auth\AuthenticateRequest;


class AuthenticateController extends Controller
{
    public function store(AuthenticateRequest $request)
    {
        $data = $input->validated();
    }
}
