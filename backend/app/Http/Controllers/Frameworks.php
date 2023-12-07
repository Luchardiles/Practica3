<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frameworks extends Controller
{
    public function update(Request $request, $id)
    {
        try {
            $user = User::where('id', $id)->first();

            // Actualizamos los campos existentes
            $user->name = $request->input('name', $user->name);
            $user->lastname = $request->input('lastname', $user->lastname);
            $user->age = $request->input('age', $user->age);
            $user->city = $request->input('city', $user->city);
            $user->email = $request->input('email', $user->email);
            $user->facebook = $request->input('facebook', $user->facebook);
            $user->instagram = $request->input('instagram', $user->instagram);
            $user->summary = $request->input('summary', $user->summary);
            $user->save();

            $userData = [
                'name' => $user->name,
                'lastname' => $user->lastname,
                'age' => $user->age,
                'city' => $user->city,
                'email' => $user->email,
                'facebook' => $user->facebook,
                'instagram' => $user->instagram,
                'summary' => $user->summary,
            ];

            return response()->json(['message' => 'Datos del usuario actualizados con éxito', 'user' => $userData]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar datos del usuario: ' . $e->getMessage()], 500);
        }
    }
}
