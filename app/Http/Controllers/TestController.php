<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TestPostRequest;

class TestController extends Controller {
  /**
   * トップページ を表示する
   *
   * @return \Illuminate\View\View
   */
  public function index()
  {
    return view('test.index');
  }

  /**
   * 入力を受け取る
   *
   * @return \Illuminate\View\View
   */
  public function input(TestPostRequest $request)
  {
    // バリエーション追加前
    // $email = $request->input('email');
    // $pass = $request->input('password');

    // バリエーション追加後（データ+バリエーション）
    // $validateDate = $request->validate([
    //   'email' => ['required', 'email', 'max:254'],
    //   'password' => ['required', 'max:72']
    // ]);

    // バリエーションをTestPostRequestコントローラに移動後

    // データの取得
    $validateDate = $request->validated();

    // var_dump($validateDate); exit;

    return view('test.input', ['datum' => $validateDate]);
  }
}