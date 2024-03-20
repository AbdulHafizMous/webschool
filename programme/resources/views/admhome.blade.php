@extends('admlayout')

@section('content') 
<header id="head" class="secondary"></header>
	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">La gestion de Scolaire</h2>
		<p class="text-muted">
			La plateform qui vous permet désormais de gerer les notes des apprenants du collège.
		</p>
	</div>
	<!-- /Intro-->

	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Choisissez une option</h3>
			
			<div class="row">

				<div class="col-md-4 col-lg-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-keyboard-o" aria-hidden="false"></i><a href="{{url('saisie_nt')}}">
						<button class="btn btn-action btn-lg">Saisie de notes</button></a></h4></div>
					<div class="h-body text-center">
						<p>Cette option permet l'enrégistrement des notes obtenues par les apprenants en interrogations comme en devoir. Veuillez faire un peu attention lors du remplissage du formulaire de saisie de note.</p>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-edit" aria-hidden="true"></i><a href="{{url('modif_nt')}}">
						<button class="btn btn-action btn-lg">Modification de notes </button></a></h4></div>
					<div class="h-body text-center">
						<p>Avec cette option vous avez la possibilité de modifier des notes saisies interrogations comme devoir. Veuillez faire un peu attention lors du remplissage du formulaire de modification de note.</p>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-bookmark-o" aria-hidden="true"></i><a href="{{url('moyenne')}}">
						<button class="btn btn-action btn-lg">Calcul de moyenne </button></a></h4></div>
					<div class="h-body text-center">
						<p>L'option ci-dessus permet d'éffectuer le calcul des moyennes de vos apprenants dans chaque matiere.</p>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-bar-chart-o" aria-hidden="true"></i><a href="{{url('stat')}}">
						<button class="btn btn-action btn-lg">Statistiques</button></a></h4></div>
					<div class="h-body text-center">
						<p>L'option statistique vous permet d'effectuer un bilan par matière sur vos apprenants afin de degager leur performance.</p>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-bookmark-o" aria-hidden="true"></i><a href="{{url('cond')}}">
						<button class="btn btn-action btn-lg">Conduites</button></a></h4></div>
					<div class="h-body text-center">
						<p>L'option ci-dessus permet d'éffectuer le calcul des moyennes de vos apprenants dans chaque matiere.</p>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-bookmark-o" aria-hidden="true"></i><a href="{{url('validsess')}}">
						<button class="btn btn-action btn-lg">Valider la Session</button></a></h4></div>
					<div class="h-body text-center">
						<p>L'option ci-dessus permet d'éffectuer le calcul des moyennes de vos apprenants dans chaque matiere.</p>
					</div>
				</div>
				<div class="col-md-4 col-lg-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-bookmark-o" aria-hidden="true"></i><a href="{{url('validan')}}">
						<button class="btn btn-action btn-lg">Valider l'Année Scolaire</button></a></h4></div>
					<div class="h-body text-center">
						<p>L'option ci-dessus permet d'éffectuer le calcul des moyennes de vos apprenants dans chaque matiere.</p>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-bookmark-o" aria-hidden="true"></i><a href="{{url('bull')}}">
						<button class="btn btn-action btn-lg">Bulletins</button></a></h4></div>
					<div class="h-body text-center">
						<p>L'option ci-dessus permet d'éffectuer le calcul des moyennes de vos apprenants dans chaque matiere.</p>
					</div>
				</div>
				
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->
	<!-- container -->
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->

@endsection 




