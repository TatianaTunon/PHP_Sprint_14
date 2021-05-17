<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PassportController extends Controller
{
    public function login(Request $request) {
        //return view ('login');
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:7'
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('Personal Access Token')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
                
    }

    public function register(Request $request) {
        //return view ('register');
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:7'
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('Personal Acces Token')->accessToken;

        return response()->json(['token' => $token], 200);
    }

    public function logout(Request $request) {
        $token = Auth::user()->token();
        $token->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
