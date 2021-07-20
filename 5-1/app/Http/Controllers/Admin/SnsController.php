<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Sns;


class SnsController extends Controller
{
    //
    public function add()
  {
      return view('admin.sns.create');
  }
  public function create(Request $request)
  {
      // Varidationを行う
      $this->validate($request, Sns::$rules);

      $sns = new Sns;
      $form = $request->all();

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      unset($form['user_id']);
      
      $id = Auth::id();
      $form['user_id'] = $id;
      

      // データベースに保存する
      $sns->fill($form);
      $sns->save();

      // admin/news/createにリダイレクトする
      return redirect('admin/sns/');
  }

  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Sns::where('user_id', $cond_title)
            ->where('deleted_at', NULL)
            ->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts= Sns::all();
          $posts = User::leftjoin('posts', 'users.id', '=', 'posts.user_id')
            ->where('posts.deleted_at', NULL)
            ->get();
      }

      return view('admin.sns.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }

  

  public function deleteData(Request $request)
  {
    $user = User::find($request->input('id'));
    $user->delete();
  }

    /*
     * force delete Person
     */
    public function forceDelete($id)
    {
        Person::onlyTrashed()->find($id)->forceDelete(); //forceDeleteメソッドで物理削除

        return redirect()->to('delete');
    }

    public function delete(Request $request)
  {
      // 該当するNews Modelを取得
      $sns = Sns::find($request->id);
      // 削除する
      $sns->delete();
      return redirect('admin/sns/');
  }  


}
