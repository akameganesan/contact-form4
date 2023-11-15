@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/management.css') }}">
@endsection

@section('content')

<div class="contact-form__heading">
    <h2>管理システム(失敗)</h2>
</div>

<div class="container">
    <div class="container__line">

        <div class="contact-form__content">
  <!--<div class="contact-form__heading">
    <h2>管理システム</h2>
  </div>-->
            <form class="search-form" action="/todos/search" method="post">
            @csrf
                <div class="form__group">
                    <div class="form__group-name">
                        <p>お名前</p>
                    </div>
                    <div class="form__group-content">
                        <div class="form__group2">




                            <div class="form__input--text-1">
                                <!--<input type="text" name="name" placeholder="テスト太郎" value="{{ old('name') }}" class="boder__none" />-->
                                <input class="search-form__item-input" type="text" name="secondname" value="{{ old('secondname') }}">
                            </div>

                            <div class="form__group-gender">
                                <p>性別</p>
                            </div>

                            <div class="redio__move3">
                                <label class="redio-text__space"><input type="radio" name="gender" style="transform:scale(3.0);" checked/></label>
                            </div>






                            <div class="form__group-gender-all">
                                <p>全て</p>
                            </div>


                            <div class="redio__move4">
                                <label   label class="redio-text__space"><input type="radio" name="gender" style="transform:scale(3.0);" /></label>
                            </div>

                            <div class="form__group-gender-m">
                                <p>男性</p>
                            </div>

                            <div class="redio__move5">
                                <label class="redio-text__space"><input type="radio" name="gender" style="transform:scale(3.0);" /></label>
                            </div>

                            <div   div class="form__group-gender-w">
                                <p>女性</p>
                            </div>

                            <div class="redio__move6">
                                <label class="redio-text__space"><input type="radio" name="gender" style="transform:scale(3.0);" /></label>
                            </div>

                            <div class="space">
                                <p></p>
                            </div>


                        </div>
                    </div>
                </div>


                <div class="form__group">
                    <div class="form__group-name2">
                        <p>登録日</p>
                    </div>
                    <div class="form__group-content">        
                        <div class="form__group2">     

                            <div class="form__input--text-1">
                                <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name') }}" class="boder__none" />
                            </div>

                            <div class="form__group-gender">
                                <p>～</p>
                            </div>

                            <div class="form__input--text-2">
                                <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name') }}" class="boder__none" />
                            </div>
                            <div class="space">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form__group">
                    <div class="form__group-name2">
                        <p>メールアドレス</p>
                    </div>
                    <div class="form__group-content">
                        <div class="form__group2">
                            <div class="form__input--text-1">
                                <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name') }}" class="boder__none" />
                            </div>
                            <div class="space">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form__button">
                    <button class="form__button-submit" type="submit">検索</button>
                </div>

                <div class="form__group">
                    <div class="form__group-name2">
                        <p>リセット</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




        <!--<div class="form__error">
          @error('name')
          {{ $message }}
          @enderror
        </div>-->



<!--<div class="contact-form__heading">-->
    <p>Author</p>
    <table class="table__size">
        <tr>
            <th>ID</th>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th></th>
        </tr>
        <tr>
            <td>お名前</td>
            <td>性別</td>
            <td>メールアドレス</td>
            <td>ご意見</td>
            <td>
                <form>
                    <div class="form__button">
                        <button class="form__button-submit" type="submit">削除</button>
                    </div>
                </form>
            </td>
        </tr>
    </table>


<!--</div>-->   

   

@endsection