<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/* 🟢 StoreComunityRequest 🟢 */

class StoreComunityRequest extends FormRequest
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
      'title' => ['required', 'string', 'max:50'],
      'name' => ['required', 'string', 'max:20'],
      'email' => ['required', 'email', 'max:255'],
      'contact' => ['required', 'string', 'max:200'],
    ];
  }
}
