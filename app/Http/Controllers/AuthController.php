<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $token = $user->createToken('authToken')->plainTextToken;
        $user->update(['token' => $token]);

        return response()->json(['user' => $user, 'token' => $token]);
    }

    public function logout(Request $request)
    {
        try {
            $user = $request->user();
            if (!$user) {
                throw ValidationException::withMessages(['message' => 'User not authenticated']);
            }

            $user->currentAccessToken()->delete();
            $user->update(['token' => null]);

            return response()->json(['success' => true, 'message' => 'Logged out successfully']);
        } catch (ValidationException $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 401);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'An error occurred during logout'], 500);
        }
    }


    public function user(Request $request)
    {
        try {
            $user = $request->user();
            if (!$user) {
                throw ValidationException::withMessages(['message' => 'User not authenticated']);
            }

            return response()->json(['success' => true, 'user' => $user]);
        } catch (ValidationException $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 401);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'An error occurred while getting user information'], 500);
        }
    }

    public function token(Request $request)
    {
        if ($request->hasHeader('Authorization')) {
            $token = $request->header('Authorization');
            $token = str_replace('Bearer ', '', $token);
            // Check if there is an authenticated user before accessing the token
            $user = User::find($request->userID);
            if ($user->token === $token) {
                $request->merge(['sanctum_token' => $token]);
                return response()->json(['status' => "true"]);
            }
        }

        return response()->json(['status' => "false"]);
    }
}
