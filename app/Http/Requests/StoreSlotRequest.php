<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSlotRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Разрешаем всем пользователям доступ к этому запросу
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:slots,slug|max:255',
            'image_url' => 'required|file',
        ];
    }
}
