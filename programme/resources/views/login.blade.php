@extends('layout')

@section('content') 
<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container mt-5">

		<div class="row">
			
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent " >
				<header class="page-header">
					<h1 class="page-title">Connexion</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Connectez-vous </h3>
							<hr>
							
							<form>
								<div class="top-margin">
									<label>Nom d'utilisateur/Email <span class="text-danger">*</span></label>
									<input type="text" class="form-control" required>
								</div>
								<div class="top-margin">
									<label>Mot de passe <span class="text-danger">*</span></label>
									<input type="password" class="form-control" required>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<b><a href="">Mot de passe oublié?</a></b>
									</div>
									<div class="col-lg-4 text-right">
										<a class="btn btn-action" role="button" href="{{url('admhome')}}">Connexion</a>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	
@endsection 