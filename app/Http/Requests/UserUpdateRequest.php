<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
     public function authorize()
  	{
  		return true;
  	}

  	public function rules()
  	{
  		$id = $this->user;
  		return [
  			'name' => 'required|max:255|unique:users,name,' . $id,
  			'email' => 'required|email|max:255|unique:users,email,' . $id
  		];
  	}
}
