<?php

namespace App\Http\Controllers\Admin;

use App\Services\ResponseService;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AuthController extends Controller {

    protected $responseService;

    public function __construct(ResponseService $responseService)
    {
        $this->responseService = $responseService;
    }

    public function login(Request $request){
        $credentials = $request->only(['email', 'password']);
        $token = auth('admin')->claims(['type' => 'access'])->attempt($credentials);
        
        // Temporarily set TTL for refresh token

        return $this->responseService->ok('User logged successfully',$this->returnJwtResponse($token));

    //    return  User::with('userType')->firstOrFail();
    }

    public function refreshToken(Request $request){
        // Assuming the refresh token is passed in Authorization header
        $refreshToken = $request->refresh_token;
        // Here you would typically verify the refresh token belongs to the user
        JWTAuth::setToken($refreshToken);
        $payload = JWTAuth::getPayload();

        if ($payload->get('type') !== 'refresh') {
            return response()->json(['error' => 'Invalid token type'], 401);
        }
        // JWTAuth::invalidate($refreshToken);
        // Generate a new access token
        $newAccessToken = JWTAuth::claims(['type' => 'access'])->refresh();
        return $this->responseService->ok('User logged successfully',$this->returnJwtResponse($newAccessToken));
        

    }

    function returnJwtResponse($token){
        $defaultTTL =  JWTAuth::factory()->getTTL(); // Save the default TTL
        auth('admin')->factory()->setTTL(config('jwt.refresh_ttl')); // Set TTL for refresh token
        $user = auth('admin')->user();
       
       $data = [
            'user' => Admin::findOrFail($user->id),
            'authorization' =>[
                'access_token' => $token,
                'refresh_token' => auth('admin')->customClaims(['type' => 'refresh'])->fromUser($user),
                'access_token_expires' => $defaultTTL * 60,
                'refresh_token_expires' => config('jwt.refresh_ttl') * 60,
            ]
        ];
        auth('admin')->factory()->setTTL($defaultTTL);
        return $data;
    }

   /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return $this->responseService->ok('User logged successfully',Admin::findOrFail(auth('admin')->user()->id));
    }
}