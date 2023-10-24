<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string',
            'apellido' => ['required','string','max:255'],
            'genero'=> ['required','string','max:2'],
            'fecha_nacimiento' => ['required','date'],
            'telefono' => ['required','string','max:12'],
            'correo' => ['required','email','max:255'],
            'direccion' => ['required','string','max:255'],
            'ciudad' => ['required','string','max:255'],
            'pais' => ['required','string','max:255']
        ];
    }

    public function messages():array
    {
        return [
            'nombre.required' => 'El nombre del cliente es requerido',
            'apellido.required' => 'El apellido del cliente es requerido',
            'genero.required' => 'El genero del cliente es requerido',
            'fecha_nacimiento.required' => 'La fecha de nacimiento del cliente es requerido',
            'telefono.required' => 'El telefno del cliente es requerido',
            'correo.required' => 'El género del cliente es requerido',
            'direccion.required' => 'La dirección del cliente es requerida',
            'ciudad.required' => 'La ciudad del cliente es requerida',
            'pais.required' => 'El pais del cliente es requerido'

        ];
    }
}
