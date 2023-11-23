<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true; // 여기 true로 하지 않으면 에러가 발생한다. 
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    return [
      'title' => ['required', 'string', 'max:50'],
      'name' => ['required', 'string', 'max:20'],
      'email' => ['required', 'email', 'max:255'],
      'type' => ['required'],
      'region' => ['required'],
      'contact' => ['required', 'string', 'max:200'],
      // 'contact' => ['required', 'text'],
      'caution' => ['required', 'accepted']
    ];
  }
}
