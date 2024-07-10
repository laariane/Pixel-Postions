<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RegisterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {

        return view('register.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $userValidated=request()->validate([
            "name"=>"required|max:20|min:3",
            "email"=>["required","unique:users","confirmed"],
            "password"=>["required",Password::min(8)->mixedCase()->symbols(),"confirmed"]
        ]);

        $employerValidated=request()->validate([
            "employer"=>"required|max:20|min:3",
            "logo"=>["required","image"],
        ]);

        $user = new User($userValidated);
        $user->save();
        $logoPath=$request->logo->store("logos");
        $user->employer()->create([
            "name"=>$employerValidated["employer"],
            "logo"=>$logoPath
        ]);
        Auth::login($user);
        return redirect('/');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
