<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiLoginUserRequest;
use App\Http\Requests\ApiRegisterUserRequest;
use App\Models\User;
use App\Traits\ApiResponses;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use ApiResponses;

    public function register(ApiRegisterUserRequest $request): JsonResponse
    {
        $user = User::create($request->only('name', 'email', 'password'));
        return $this->ok('User created', ['token' => $this->issueToken($user)]);
    }

    public function login(ApiLoginUserRequest $request): JsonResponse
    {
        if (!auth()->attempt($request->only('email', 'password'))) {
            return $this->error('Invalid credentials', 401);
        }
        $user = User::firstWhere('email', $request->email);
        return $this->ok('Authenticated', ['token' => $this->issueToken($user)]);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();
        return $this->ok('Logged out');
    }

    public function issueToken(User $user): string
    {
        return $user->createToken('Subscription Master API Token', ['*'], now()->addMonth())->plainTextToken;
    }
}
