@extends("layouts.index")
@section("content")
<div class="container-contact100">
	<div class="contact100-pic js-tilt" data-tilt>
		<img src="assets/contact/images/img-01.png" alt="IMG">

		@if(Session::has('email'))
        <span>{{Session::get('email')}} </span>
        @endif
		<form class="register-form" id="register-form" method="post" action="{{ route('savemessage') }}">
			@csrf

			<span class="contact100-form-title">
				Comment nous pouvons vous aider?
			</span>

			<div class="wrap-input100 validate-input">
				<input class="input100" type="hiden" name="Nom"  value={{$user->Nom}} >
				
				<span class="focus-input100"></span>
				<span class="symbol-input100">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</span>
			</div>
			<div class="wrap-input100 validate-input">
				<input class="input100" type="text" name="Prenom" value={{$user->Prenom}} >
				<span class="focus-input100"></span>
				<span class="symbol-input100">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</span>
			</div>
			<div class="wrap-input100 validate-input">
				<input class="input100" type="text" name="email" value={{$user->email}} >
				<span class="focus-input100"></span>
				<span class="symbol-input100">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</span>
			</div>
			<div class="wrap-input100 validate-input">
				<input class="input100" type="hiden" name="telephone"  value={{$user->telephone}}>
				
				<span class="focus-input100"></span>
				<span class="symbol-input100">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</span>
			</div>

			<div class="wrap-input100 validate-input" >
				<input  class="input100" type="text" name="message"  placeholder="Message"/>
				<span class="focus-input100"></span>
			</div>

			<div class="container-contact100-form-btn">
				<input class="btn btn--radius-2 btn--red" type="submit" value="Envoyer" id="submit" name="submit">
			</div>
		</form>
	</div>
</div>

	@endsection