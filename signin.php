 <?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Http\Controllers\Controller;
class AdminLoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function user(Request $request)
    {

        if (Auth::attempt(array('email' => $request->email, 'password' => $request->password))){
            return "success";
        }else{
            return "Wrong Credentials";
        }
        die;
    }
}