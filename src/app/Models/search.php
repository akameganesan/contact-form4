<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class search extends Model
{
    use HasFactory;

    Public function products()
  {
       $products = Products::all(); 
        // productsテーブルの全てのレコードを取得します
       $任意の変数名 = モデル名::all();
        // モデル名は命名のルールとして頭文字が大文字になっています

       return view('user.index')->with('products', $products);

        // viewのファイルまでのパスは以下の設定です
        // プロジェクト¥resources¥views¥user¥index.blade.php

        // return view の引数にはビューが格納されているフォルダ名と
        // viewのファイル名を拡張子などを省略して記述します

        // withメソッドはビューへ変数の情報を個別で渡すことができます
        // 開くviewに対して -> withメソッドで変数情報を渡します。
        // withメソッドの引数は次のようになります
        // ('viewファイルで使いたい変数の名前','$テーブル情報を代入した変数')
  }
}
