<?php
//課題４のターミナルで実行したコマンド： $ php artisan make:controller Admin/ProfileController
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Profile;

use App\Models\Profile_history;
use Carbon\Carbon;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create(Request $request)
    {
                // Validationを行う
        $this->validate($request, Profile::$rules);

        $profile = new Profile;
        $form = $request->all();
       
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);

        // データベースに保存する
        $profile->fill($form);
        $profile->save();

        return redirect('admin/profile/create');
    }

    public function edit(Request $request)
    {
         // Profile Modelからデータを取得する
         $profile = Profile::find($request->id);
         if (empty($profile)) {
             abort(404);
         }
        return view('admin.profile.edit', ['profile_form' => $profile]);
    }

    public function update(Request $request)
    {
         // Validationをかける
         $this->validate($request, Profile::$rules);
          // Profile Modelからデータを取得する
          $profile = Profile::find($request->id);
          // 送信されてきたフォームデータを格納する
          $profile_form = $request->all();
  
          // 該当するデータを上書きして保存する
          $profile->fill($profile_form)->save();
  
          $profile_history = new Profile_history();
          $profile_history->profile_id = $profile->id;
          $profile_history->edited_at = Carbon::now();
          $profile_history->save();

        return redirect('admin/profile/edit?id=' . intval($request->id));
    }
}
