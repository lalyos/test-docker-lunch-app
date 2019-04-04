<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use App\Notifications\AvatarUploaded;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $recipes = Recipe::get();

        return view('home', compact('recipes'));
    }

    public function recipe($id)
    {
        $recipe = Recipe::findOrFail($id);

        return view('recipe', compact('recipe'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function updateprofile(Request $request)
    {
        $path = $request->file('avatar')->store('public/avatars');
        $user = auth()->user();
        $user->avatar = $path;
        $user->save();

        $user->notify(new AvatarUploaded());

        return back();
    }

}
