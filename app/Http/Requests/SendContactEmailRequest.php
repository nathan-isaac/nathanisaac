<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SendContactEmailRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required|max:200',
			'company' => 'max:200',
			'phone' => 'required_without:email|numeric|digits_between:8,25',
			'email' => 'required_without:phone|email|max:200',
			'subject' => 'required|max:200',
			'message' => 'required|max:1000'
		];
	}

}
