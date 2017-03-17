@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<form class="col s12" method="POST" action="{{ route('register') }}">
			{{csrf_field()}}
			<div class="row">
				<div class="input-field col s12">
          			<i class="material-icons prefix">perm_identity</i>
					<input id="name" type="text" name="name" value="{{ old('name') }}" class="validate">
					<label for="name">Login</label>
					 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                     @endif
				</div>
				<div class="input-field col s12">
					<i class="material-icons prefix">email</i>
					<input id="email" type="email" name="email" value="{{ old('email') }}" class="validate">
					<label for="email" data-error="to nie jest email" data-success=" ">Email</label>
					 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
				</div>
				<div class="input-field col s12">
					<i class="material-icons prefix">input</i>
					<input id="password" type="password" name="password" value="{{ old('password') }}" class="validate">
					<label for="password">Hasło</label>
					 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                     @endif
				</div>
				<div class="input-field col s12">
					<i class="material-icons prefix">supervisor_account</i>
					<input id="password-confirm" type="password" name="password_confirmation" class="validate">
					<label for="password-confirm">Powtórz hasło</label>
				</div>
			</div>
			<button class="btn waves-effect waves-light" type="submit" name="action">Zarejestruj
			<i class="material-icons right">send</i>
			</button>
		</form>
	</div>
</div>
@endsection
