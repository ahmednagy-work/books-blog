<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User as ModelsUser;
use App\Models\User;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
//use Session;
use Validator,Redirect,Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;

class UserController extends Controller
{
    public function __construct(){
        //$this->middleware("auth");
    }
    public function LoginForm()
    {
        return view('auth.login');
    }

    public function RegisterForm()
    {
        return view('auth.register');
    }

    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
        //        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('dashboard');
        }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('home');
        }
        return redirect('login');

        //return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
    public function postRegistration(Request $request)
    {
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $data = $request->input();

        //$check = $this->creat;
        return redirect('login');

        //return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
    public function dashboard()
    {
        $books = Book::all();
        $count = Book::count();
        if(Auth::check()){
        return view('auth.dashboard', compact('books','count'));
      }

      return redirect('login');

       //return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function logout() {
        //Session::forget();
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

}
