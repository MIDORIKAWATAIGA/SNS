<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(Request $request){

        if($request->isMethod('post')){

            $username = $request->input('username');
            $request->session()->put('username', $username);
            $mail = $request->input('mail');
            $password = $request->input('password');

            $request->validate([
              'username' => 'required|unique:users,username,name|min:2|max:12',
              'mail' => 'required|unique:users,mail|email|min:5|max:40',
              'password' => 'required|alpha_num|confirmed:password|min:8|max:20',
            ],['mail.required' => 'メールアドレスは必須です。',
        'mail.email' => '正しいメールアドレスの形式で入力してください。',
        'mail.unique' => 'このメールアドレスは既に使用されています。',
        'mail.max' => 'メールアドレスは40文字以内で入力してください。',
        'username.required' => 'ユーザー名は必須です。',
        'username.string' => 'ユーザー名は文字列で入力してください。',
        'username.min' => 'ユーザー名は2文字以上で入力してください。',
        'username.max' => 'ユーザー名は12文字以内で入力してください。',
        'password.required' => 'パスワードは必須です。',
        'password.string' => 'パスワードは文字列で入力してください。',
        'password.alpha_num' => 'パスワードは英数字のみで入力してください。',
        'password.min' => 'パスワードは8文字以上で入力してください。',
        'password.max' => 'パスワードは20文字以内で入力してください。',
        'password.confirmed' => 'パスワードが確認用と一致していません。',
        'password_confirmation.required' => 'パスワード確認用は必須です。',
        'password_confirmation.string' => 'パスワード確認用は文字列で入力してください。',
        'password_confirmation.alpha_num' => 'パスワード確認用は英数字のみで入力してください。',
        'password_confirmation.min' => 'パスワード確認用は8文字以上で入力してください。',
        'password_confirmation.max' => 'パスワード確認用は20文字以内で入力してください。',
        ]);

            User::create([
                'username' => $username,
                'mail' => $mail,
                'password' => bcrypt($password),
            ]);

            return redirect('added');
        }
        return view('auth.register');
    }

    public function added(){
        return view('auth.added');
    }
}
