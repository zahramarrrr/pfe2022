@extends($type)
@section("content")
<<main id="main" class="main">

	<div class="pagetitle">
		<h1>Contact</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
				<li class="breadcrumb-item active">Contact</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->

	<section class="section contact">

		<div class="row gy-4">

			<div class="col-xl-6">

				<div class="row">

					<div class="col-lg-6">
						<div class="info-box card">
							<i class="bi bi-Telephone"></i>
							<h3>Télèphone</h3>
							<p>+1 5589 55488 55<br>+1 6678 254445 41</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="info-box card">
							<i class="bi bi-envelope"></i>
							<h3>Adresse d'email:</h3>
							<p>info@example.com<br>contact@example.com</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="info-box card">
							<i class="bi bi-clock"></i>
							<h3>Horaire de travail</h3>
							<p>Lundi-Samdi<br>9:00 - 17:00</p>
						</div>
					</div>
				</div>

			</div>

			<div class="col-xl-6">
				<div class="card p-4">
					@if(Session::has('email'))
					<div class="alert alert-success" role="alert">

						{{Session::get('email')}}
					</div>
					@endif
					<form class="register-form" id="register-form" method="post" action="{{route('savemessage')}}">
						@csrf

						<div class="row gy-4">

							<div class="col-md-6">
								<input type="text" name="Prenom" class="form-control" placeholder="Your Name" value={{$agent->Prenom}} required>
								@if ($errors->has('Prenom'))
								<span class="text-danger">{{ $errors->first('Prenom') }}</span>
								@endif
							</div>


							<div class="col-md-6">
								<input type="text" name="Nom" class="form-control" placeholder="Your Name" value={{$agent->Nom}} required>
								@if ($errors->has('Nom'))
								<span class="text-danger">{{ $errors->first('Nom') }}</span>
								@endif
							</div>
							<div class="col-md-12">
								<input type="text" class="form-control" name="email" placeholder="email" value={{$agent->email}} required>
								@if ($errors->has('email'))
								<span class="text-danger">{{ $errors->first('email') }}</span>
								@endif
							</div>

							<div class="col-md-12">
								<textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
							</div>

							<div class="col-md-12 text-center">


								<button type="submit" class="btn2" id="submit">Envoyer</button>
							</div>

						</div>
					</form>
				</div>

			</div>

		</div>

	</section>

	</main><!-- End #main -->


	@endsection