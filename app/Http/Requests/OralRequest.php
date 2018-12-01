<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OralRequest extends FormRequest {
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize () {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules () {
    return [
      'data' => 'required',
      'horario' => 'required',
      'sala_id' => 'required',
      'avaliador_id' => 'required',
      'ano_id' => 'required'
    ];
  }
}
