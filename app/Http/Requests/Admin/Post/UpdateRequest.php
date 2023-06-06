<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'content' => ['required', 'string'],
            'preview_image' => ['nullable', 'file'],
            'main_image' => ['nullable', 'file'],
            'category_id' => ['required', 'integer' ,'exists:categories,id'],
            'tag_ids' => ['nullable', 'array'],
            'tag_ids.*' => ['nullable', 'integer', 'exists:tags,id'],
        ];
    }

    public function messages()
    {
        return [
            'title' => 'Необходимо заполнить это поле',
            'content' => 'Необходимо добавить наполнение',
            'preview_image' => 'Необходимо выбрать превью',
            'main_image' => 'Необходимо выбрать главное изображение',
            'category_id' => 'Необходимо выбрать категорию',
            'tags_ids' => 'Необходимо выбрать тэги'
        ];
    }
}
