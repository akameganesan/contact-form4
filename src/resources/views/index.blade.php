@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>お問い合わせ</h2>
  </div>
  <form class="form" action="contacts/confirm2" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__group2">
        <div class="form__input--text-2">
          <input type="text" name="secondname" placeholder="山田" value="{{ old('name') }}" class="boder__none" />
        </div>
         <div class="form__input--text-1">
          <input type="text" name="firstname" placeholder="太郎" value="{{ old('name') }}" class="boder__none" />
        </div>

        </div>
        <div class="form__error">
          @error('secondname')
          {{ $message }}
          @enderror
          @error('firstname')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div> 
    
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">性別</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="radio_name__space">
        <div class="redio__move">
          <label class="redio-text__space"><input type="radio" name="gender" value="男性です" style="transform:scale(3.0);" checked/></label>
        </div>

        <div class="redio-text__move-1">
        <div>男性</div>
        </div>
        
         <div class="redio__move-2">
            <label><input type="radio" name="gender" value="女性です" style="transform:scale(3.0);" /></label>
        </div>
             
        <div class="redio-text__move-2">    
        <div>女性</div>
        </div>   
    </div>
        <div class="form__error">
          @error('gender')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <div class="radio_frex">
        <span class="form__label--item">郵便番号</span>
        <span class="form__label--required">※</span>

        <span class="form__label--post">〒</span>
        </div>
      </div>
      <div class="form__group-content">
        <div class="input-change__size">
          <input type="postcode" name="postcode" placeholder="1234567" value="{{ old('postcode') }}" />
        </div>
        <div class="form__error">
          @error('postcode')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="adress" name="adress" placeholder="〇〇県〇〇市～" value="{{ old('adress') }}" />
        </div>
        <div class="form__error">
          @error('adress')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
        <!--<span class="form__label--required">※</span>-->
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="building" name="building" placeholder="〇〇ビル" value="{{ old('building') }}" />
        </div>
        <div class="form__error">
          @error('building')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">ご意見</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="content" placeholder="〇〇を改善してほしいです。">{{ old('content') }}</textarea>
        </div>
      </div>
      <div class="form__error">
          @error('content')
          {{ $message }}
          @enderror
        </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">確認</button>
    </div>
  </form>
</div>
@endsection