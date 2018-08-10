<?php

namespace Furbook\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class CatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Tại sao cái này phải là true (mặc định là false)
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $catId = Request::route('id');
        //dd($catId);
        return [
            'name' => 'required|max:255|unique:cats,name,' . $catId,
                'date_of_birth' => 'required|date:"YY-mm-dd"',
                'breed_id' => 'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Cột :attribute là bắt buộc.'
        ];
    }

    
}
