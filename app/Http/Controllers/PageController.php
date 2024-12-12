<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Category;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        return redirect('/home');
    }

    public function home()
    {
        $categories = Category::all();
        return view('home', compact('categories'));
    }

    public function post()
    {
        if(Auth::check()){
            $categories = Category::all();
            $services = Service::where('user_id', Auth::user()->id)->get();
            return view('post', ['categories' => $categories, 'services' => $services]);
        }
        else return redirect('/login');
    }

    public function explore(Request $request)
    {
        $search = '';
        $category = '';
        if($request->search){
            $search = $request->search;
            $services = Service::where('title', 'like', '%'.$search.'%')
                ->orWhere('description', 'like', '%'.$search.'%')
                ->where('user_id', '!=', Auth::id())
                ->paginate(10);
        }
        elseif($request->category){
            $category = $request->category;
            $services = Service::where('category_id', $category)->where('user_id', '!=', Auth::id())->paginate(10);
        }
        else{
            $services = Service::where('user_id', '!=', Auth::id())->paginate(10);
        }
        return view('explore', ['services' => $services, 'search' => $search]);
    }

    public function service(Request $request)
    {
        $service = Service::find($request->id);
        $user = $service->user()->first()->name;
        $name = str_replace(' ', '+', $user);
        $picture = "https://avatar.oxro.io/avatar.svg?name=" . $name
            . "&background=ff6b6b&caps=3";
        return view('service', ['service' => $service, 'picture' => $picture]);
    }

    public static function getPicture(string $data):string {
        $name = str_replace(' ', '+', $data);
        return "https://avatar.oxro.io/avatar.svg?name=" . $name
            . "&background=ff6b6b&caps=3";
    }
    
    public function portfolio()
    {
        $applications = Application::where('user_id', Auth::user()->id)->get();
        $jobs = Application::whereIn('service_id', Service::where('user_id', Auth::user()->id)->pluck('id'))->get();

        return view('portfolio', ['applications' => $applications, 'jobs' => $jobs]);
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function profile(Request $request)
    {
        $user = Auth::user();
        $name = str_replace(' ', '+', $user->name);
        $picture = "https://avatar.oxro.io/avatar.svg?name=" . $name
            . "&background=ff6b6b&caps=3";
        if($request->id){
            $user = User::find($request->id);
        }
        return view('profile', ['user' => $user, "picture" => $picture]);
    }
}
