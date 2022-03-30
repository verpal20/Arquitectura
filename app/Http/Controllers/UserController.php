<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Has;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;
use Laravel\Passport\RefreshToken;
use Laravel\Passport\Token;
use Symfony\Component\CssSelector\Parser\Token as ParserToken;

use function PHPSTORM_META\elementType;

class UserController extends Controller
{
    //
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json([
            "status" => 1,
            "msg" => "Registro de usuario exitoso",
        ]);
    }
    public function login(Request $request)
    {

        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $user = User::where("email", "=", $request->email)->first(); //tambien se puede utilizar all() que me trae todos
        //revisamos si el id es existente
        if (isset($user->id)) {
            //revisamos la incriptacion
            if (Hash::check($request->password, $user->password)) {
                //creamos el token
                $token = $user->createToken("auth_token")->plainTextToken;
                //si esta todo es correcto
                return response()->json([
                    "status" => 1,
                    "msg" => "Usuario correctamente logeado",
                    "acceso token" => $token
                ]);
            } else {
                return response()->json([
                    "status" => 0,
                    "msg" => "Usuario no registrado"
                ]);
            }
        }
    }
    public function userprofile()
    {
        return response()->json([
            "status" => 0,
            "msg" => "Acerca del perfil del usuario",
            "data" => auth()->user()
        ]);
    }

    public function logout (Request $request){

        $request->validate([
            "token"=>"required"
        ]);
        $token = $request->token;
        if ($token !=""){
            $token="";
            Auth::logout();
        return response()->json([
            "status" => 1,
            "msg"=>"cierre de sesion",
            "token"=>$token
        ]);
        }else{
            return response()->json([
                "status"=>1,
                "msg"=>"No existe ningun token",
                "token"=>$token
            ]);
        }
        /*Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
         auth()->user()->tokens()->delete();

        return response()->json([
            "status"=>1,
            "msg"=>"El usuario se desconectó con éxito"]); */
    }
}



