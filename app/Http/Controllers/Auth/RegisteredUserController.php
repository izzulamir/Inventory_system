<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'in:user,admin,staff'], // Ensure role is one of these options
        ]);
    
        // Create the user with the validated data
        $user = User::create([
            'name' => $validated['name'],  // Use the validated name
            'email' => $validated['email'], // Use the validated email
            'password' => Hash::make($validated['password']), // Hash the password
            'role' => $validated['role'], // Use the validated role
        ]);
    
        // Fire the Registered event
        event(new Registered($user));
    
        // Log the user in
        Auth::login($user);
    
        // Redirect the user to the home page or dashboard
        return redirect(RouteServiceProvider::HOME);
    }
    
}
