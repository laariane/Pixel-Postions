<?php

namespace App\Http\Controllers;

use App\Models\User;
use illuminate\Validation\ValidationException;
use Illuminate\Contracts\View\View ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
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
    public function create()
    {
        return view('login.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            "email"=>"required|email",
            "password"=>"required"
        ]);
        if(!Auth::attempt($validated)){
            return back()->withErrors(["email"=>"The provided credentials do not match our records."])->onlyInput('email');
        }
        $request->session()->regenerate();

        return redirect("/");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
