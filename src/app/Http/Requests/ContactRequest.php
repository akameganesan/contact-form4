<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
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
            
        'secondname' => ['required', 'string', 'max:255'],
        'firstname' => ['required', 'string', 'max:255'],
        'gender' => ['required', 'string', 'max:255'],
        //'email' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email'],
        'postcode' => ['required', 'numeric', 'digits_between:7,7'],
        'adress' => ['required', 'string', 'max:255'],
        //'bilding' => ['required', 'string', 'max:255'],
        'bilding' => ['string', 'max:255'],
        'content' => ['required', 'string', 'max:255'],

            ];
            

    }

    public function messages()
     {
         return [
             'secondname.required' => '名前を入力してください',
             'secondname.string' => '名前を文字列で入力してください',
             'secondname.max' => '名前を255文字以下で入力してください',

             'firstname.required' => '名前を入力してください',
             'firstname.string' => '名前を文字列で入力してください',
             'firstname.max' => '名前を255文字以下で入力してください',

             'gender.required' => '性別を選択してください',
             

             'email.required' => 'メールアドレスを入力してください',
             'email.string' => 'メールアドレスを文字列で入力してください',
             'email.email' => '有効なメールアドレス形式を入力してください',
             'email.max' => 'メールアドレスを255文字以下で入力してください',

             'postcode.required' => '郵便番号を入力してください',
             'postcode.numeric' => '電話番号を数値で入力してください',
             'postcode.digits_between' => '郵便番号を7桁で入力してください',

             'adress.required' => '住所を入力してください',
             'adress.string' => '住所を文字列で入力してください',
             'adress.max' => '住所を255文字以下で入力してください',

             'content.required' => 'ご意見を入力してください',
             'content.string' => 'ご意見を文字列で入力してください',
             'content.max' => 'ご意見を255文字以下で入力してください',

             //'adress.required' => '電話番号を入力してください',
             //'adress.numeric' => '電話番号を数値で入力してください',
             //'adress.digits_between' => '電話番号を10桁から11桁の間で入力してください',
         ];
     }

       /*protected function getRedirectUrl()
        {
            return 'index';
        }*/

    
}


