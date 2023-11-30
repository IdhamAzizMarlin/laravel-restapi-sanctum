<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $user_service;

    public function __construct()
    {
        $this->user_service = new UserService();
    }
    /**
     * Display a listing of the resource.
     */
    public function register(RegisterRequest $request)
    {
        if(!$this->user_service->create($request->validated())) {
            return response()->sendError(__('messages.save_failed', ['action' => 'User',]));
        }

        return response()->sendResponse(__('messages.save_success', ['action' => 'User',]),null, 201);
    }

    public function login(LoginRequest $request)
    {
        if(!Auth::attempt($request->only('email', 'password'))) {
            return response()->sendError(__('auth.failed'), null, 401); 
        }

        $user = Auth::user();

        $data = [
            'token' => $user->createToken('TOKEN')->plainTextToken,
            'name' => $user->name,
            'email' => $user->email,
        ];

        return response()->sendResponse(__('messages.login_success', ['user' => $user->name,]), $data);
    }
   
    public function logout()
    {
        Auth::user()->tokens()->delete();

        return response()->sendResponse(__('messages.logout_success'));
    }
}
