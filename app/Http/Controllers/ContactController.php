<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;  //追記

class ContactController extends Controller
//以下追記
{
    public function index()   //コンタクトフォームを表示
    {
        return view('contact.index');
    }

    public function send(Request $request)  //メールの自動送信設定
    {
        Mail::send('emails.text', [], function($data){
            $data->to('record.skmtsr@gmail.com')
                ->subject('送信メールの表題');
        });

        return back()->withInput($request->only(['name']))
                     ->with('sent', '再設定用の認証コードを送付しました。');  //送信完了を表示
    }
}
