<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'barcode', 'description', 'price', 'expiration_date', 'stock', 'image', 'created_by'];

    function rules() {
        return [
            'name' => 'required|string',
            'barcode' => 'required|string|unique:products',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'expiration_date' => 'required|date',
            'stock' => 'required|integer',
            'image' => 'required|string',
            'created_by' => 'required|string',
            //'created_by' => 'required|exists:users,id',
            /*'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'distributor_id' => 'required|exists:distributors,id',*/
        ];
    }

    function feedback() {
        return [
            'name.required' => 'O nome é obrigatório',
            'name.string' => 'O nome deve ser uma string',
            'barcode.required' => 'O código de barras é obrigatório',
            'barcode.string' => 'O código de barras deve ser uma string',
            'barcode.unique' => 'O código de barras já existe',
            'description.required' => 'A descrição é obrigatória',
            'description.string' => 'A descrição deve ser uma string',
            'price.required' => 'O preço é obrigatório',
            'price.numeric' => 'O preço deve ser um número',
            'expiration_date.required' => 'A data de expiração é obrigatória',
            'expiration_date.date' => 'A data de expiração deve ser uma data',
            'stock.required' => 'O estoque é obrigatório',
            'stock.integer' => 'O estoque deve ser um número inteiro',
            'image.required' => 'A imagem é obrigatória',
            'image.string' => 'A imagem deve ser uma string',
            /*'category_id.required' => 'A categoria é obrigatória',
            'category_id.exists' => 'A categoria não existe',
            'brand_id.required' => 'A marca é obrigatória',
            'brand_id.exists' => 'A marca não existe',
            'created_by.required' => 'O usuário é obrigatório',
            'created_by.exists' => 'O usuário não existe',
            'distributor_id.required' => 'O distribuidor é obrigatório',
            'distributor_id.exists' => 'O distribuidor não existe',*/
        ];

    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    /*public function category() {
        return $this->belongsTo(Category::class);
    }

    public function distributor() {
        return $this->belongsTo(Distributor::class);
    }*/

}
