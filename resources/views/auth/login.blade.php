@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
   @if ($errors->has('password'))
         <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
    @endif
    <form class="col s12" method="POST" action="{{ route('login') }}">
    	{{ csrf_field() }}
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">perm_identity</i>
			<input id="email" type="email" class="validate">
            <label for="email" data-error="to nie jest email" data-success=" ">Email</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock_open</i>
          <input name="password" id="icon_telephone" type="password" class="validate">
          <label for="icon_password">Hasło</label>
        </div>
      </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Zaloguj
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>


@endsection
