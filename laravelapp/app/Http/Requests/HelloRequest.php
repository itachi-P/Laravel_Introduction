<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->path() == 'hello') // /hello以外からのアクセスでは利用できないようにしている
        {
            return true;
        } else {
            return false;
        }
    }

    // 適用されるバリデーションのルール設定
    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'email',
            // App\Http\Validators\HelloValidatorのvalidateHelloメソッドで設定したオリジナルルールを使用
            'age' => 'numeric|hello',
        ];
    }

    # エラーメッセージを日本語化する為にmessages()メソッドをオーバーライド
    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力して下さい。',
            'mail.email' => 'メールアドレスが必要です。',
            'age.numeric' => '年齢を整数で記入下さい。',
            // オリジナルルールについてのエラーメッセージ
            'age.hello' => 'Hello!入力は偶数のみ受け付けます。',
        ];
    }

}
