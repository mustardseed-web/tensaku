<div class="row mb-3">
  <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

  <div class="col-md-6">
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
      value="{{ old('name') }}" required autocomplete="name" autofocus>

    @error('name')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
</div>

{{-- クラブ --}}
<div class="row mb-3">
  <label for="club" class="col-md-4 col-form-label text-md-end">{{ __('クラブ') }}</label>

  <div class="col-md-6">
    <input id="club" type="text" class="form-control @error('club') is-invalid @enderror" name="club"
      value="{{ old('club') }}" required autocomplete="club" autofocus>

    @error('club')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
</div>

{{-- メールアドレス--}}
<div class="row mb-3">
  <label for="club" class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>

  <div class="col-md-6">
    <input id="mail" type="text" class="form-control @error('mail') is-invalid @enderror" name="mail"
      value="{{ old('mail') }}" required autocomplete="mail" autofocus>

    @error('mail')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
</div>

{{-- パスワード　--}}
<div class="row mb-3">
  <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('パスワード') }}</label>

  <div class="col-md-6">
    <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password"
      value="{{ old('password') }}" required autocomplete="password" autofocus>

    @error('password')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
</div>

{{-- パスワード確認　--}}
<div class="row mb-3">
  <label for="password_confirm" class="col-md-4 col-form-label text-md-end">{{ __('パスワード（確認用）') }}</label>

  <div class="col-md-6">
    <input id="password_confirm" type="text" class="form-control @error('password_confirm') is-invalid @enderror" name="password_confirm"
      value="{{ old('password_confirm') }}" required autocomplete="password" autofocus>

    @error('password_confirm')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
</div>