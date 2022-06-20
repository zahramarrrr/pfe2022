
@extends("layouts.login")
 @section("content")
 
		<div class="container-contact100">
			
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="assets/contact/images/img.png" alt="IMG">
				</div>

				<form class="contact100-form validate-form">
					<span class="contact100-form-title">
						Contactez-nous
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="Nom et prénom" placeholder="Nom et prénom"">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="input100" name="message" placeholder="Message"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn">
							Envoyer
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	@endsection
