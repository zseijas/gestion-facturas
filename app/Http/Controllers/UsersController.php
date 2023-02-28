<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('login');
    }

    /**
     * Login Function
     *
     * Logs a user in based on the credentials they
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        try {
            $credentials = $request->only('email', 'password');
            $user = \DB::table('users')->select('*')->where('email', $credentials['email'])->where('password', $credentials['password'])->first();

            if (!$user) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }

            //dd($user);

            // verificar si es admin para redirigir
            if($user->admin){
                return redirect('invoices')->with('status', '200');
            } else {
                return redirect('shopping')->with('status', '200');
            }

            /* return response()->json(
                [
                    'token' => $token,
                    'user' => $user,
                ]
            ); */
            
        } catch (\Exception $e) {
            print($e);
            return redirect('login')->with('status', '500');
            // return response()->json(['error' => 'failed_to_create_token'], 500);
        }
    }
}
