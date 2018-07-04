<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    //身份
    public function authorize()
    {
        return $this->user()->can('建立測驗');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    //規則
    public function rules()
    {
        return [
            'title' => 'required|min:2|max:255',
        ];
    }

    //自訂訊息﹙預設不會產生此function，要自己建﹚
    public function messages()
    {
        return [
            'required' => '「:attribute」為必填欄位',
            'min'      => '「:attribute」至少要 :min 個字',
            'max'      => '「:attribute」最多只能 :max 個字',
        ];
    }

    //為某些欄位重新命名label
    public function attributes()
    {
        return [
            'title' => '測驗標題',
        ];
    }
}
