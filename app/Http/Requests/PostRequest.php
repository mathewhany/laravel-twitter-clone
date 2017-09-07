<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class PostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {   
        return $this->route('posts') ? Auth::id() == $this->route('posts')->user_id : Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'content' => 'required'
        ];
    }
}
