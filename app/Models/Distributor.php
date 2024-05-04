<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'country',
        'postal_code',
        'status'
    ];


    public function rules() {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
            'status' => 'required'
        ];
    }


    public function feedback() {
        return [
            'name.required' => 'O campo Nome é obrigatório',
            'email.required' => 'O campo Email é obrigatório',
            'email.email' => 'O campo Email deve ser um email válido',
            'phone.required' => 'O campo Telefone é obrigatório',
            'address.required' => 'O campo Endereço é obrigatório',
            'city.required' => 'O campo Cidade é obrigatório',
            'state.required' => 'O campo Estado é obrigatório',
            'country.required' => 'O campo País é obrigatório',
            'postal_code.required' => 'O campo CEP é obrigatório',
            'status.required' => 'O campo Status é obrigatório'
        ];
    }

}
