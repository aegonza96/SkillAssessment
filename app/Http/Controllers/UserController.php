<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Exibe todos os usuários
    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));   
    }

    // Exibe o formulário para adicionar um novo usuário
    public function create()
    {
        return view('add');
    }

    // Adiciona um novo usuário
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|integer|min:18',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'summary' => 'nullable|string',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        return redirect()->route('user.index')->with('success', 'User details saved successfully!');
    }

    // Exibe o formulário para editar um usuário
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    // Atualiza um usuário existente
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
    
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|integer|min:18',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'summary' => 'nullable|string',
        ]);
    
        if ($request->filled('password')) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }
    
        $user->update($validatedData);
    
        return redirect()->route('user.edit', $user->id)->with('success', 'User updated successfully!');
    }
}
