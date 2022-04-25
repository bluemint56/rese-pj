<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScoreRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'score' => 'required|integer',
            'comment' => 'required|string|max:255',
        ];
    }
    public function messages()
    {
        return [
            'score.required' => '※評価を選択してください',
            'score.integer' => '※評価を選択してください',
            'comment.required' => '※レビューを入力してください',
            'comment.string' => '※レビューは文字列で入力してください',
            'comment.max' => '※レビューは255文字以内で入力してください',
        ];
    }
}
