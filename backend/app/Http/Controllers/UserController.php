<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use App\Models\Appointment;
use App\Http\Requests\StoreAppointmentRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
class UserController extends Controller

{
    public function index(){
        return User::with(['Frameworks','Hobbies'])->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreAppointmentRequest $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        Log::info($request->all());

        try {
            DB::beginTransaction();
            $fields = $request->validate(([
                'name' => 'required',
                'lastname' => 'nullable',
                'age' => 'nullable',
                'city' => 'nullable|date',
                'email' => 'nullable'
            ]));

            $User = User::create([
                'name' => $fields['name'],
                'lastname' => $fields['lastname'],
                'age' => $fields['age'],
                'city' => $fields['city'] ?? now(),
                'email' => $fields['email'] ?? '',
                
            ]);
            DB::commit();
            return response()->json($appointment);

        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json(['error' => $exception->getMessage()]);
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateAppointmentRequest $request
     * @param \App\Models\Appointment $appointment
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
        try {
            $user = User::where('id', $id)->first();

            // Actualizamos los campos existentes
            $user->name = $request->input('name', $user->name);
            $user->lastname = $request->input('lastname', $user->lastname);
            $user->age = $request->input('age', $user->age);
            $user->city = $request->input('city', $user->city);
            $user->country = $request->input('country', $user->country);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Appointment $appointment
     * @return JsonResponse
     */
    public function destroy(int $id)
    {
        try {
            DB::beginTransaction();
            $user = User::where('id', $id)->first();;
            
            if (!$user) {
                throw new \Exception('User not found');
            }
    
            $user->delete();
            DB::commit();
            return response()->json(['message' => 'User deleted successfully']);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

}
