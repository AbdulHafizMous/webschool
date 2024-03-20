@extends('admlayout')



@section('content') 
	<!-- Intro -->
	<header id="head" class="secondary"></header>
	<div class="container text-center">
		<br> <br>
		<h2 class="thin text-success">Type de statistique</h2>
		<p class="text-muted">
			La plateform qui vous permet désormais de gerer les notes des apprenants du collège.
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space " style="background:rgb(224, 224, 222);">
		<div class="container text-dark fs-6">
			
			<h3 class="text-center thin btn-primary">Choisissez une option</h3>
			
			<div>
				<div class="row">
				
				<div class="col-md-4 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-file-o" aria-hidden="false"></i><a href="statnts"><button class="btn btn-primary btn-lg w-50">Notes </button></a></h4></div>
					<div class="h-body text-center">
                    <p>L'option statistique vous permettant d'effectuer un bilan par matière ou Général sur vos apprenants afin de degager leur performance.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-bookmark-o" aria-hidden="true"></i><a href="stat"><button class="btn btn-primary btn-lg w-50">Inscription</button></a></h4></div>
					<div class="h-body text-center">
						<p>L'option ci-dessus permet d'éffectuer la statistique de nombre d'éleves inscrits et vous permet également de faire une statistique par classe.</p>
					</div>
				</div>
				</div>
				
			</div>
			</div>
			     
			<!-- /row  -->
		
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


	@section('jsfiles') 
	<script src="{{url('js/jquery-3.6.0.min.js')}}"></script>
	{{-- <script src="{{url('js/modif.js')}}"></script> --}}
	<script>
	
		
	</script>
	@endsection 
	