	<header>
		<!-- NAV -->
		<img src="{{asset('public/img/equipamento.png')}}" alt="Equipamentos" class="wow fadeInUp EquipamentoS" data-wow-delay="1s">			
		<nav class="navbar navbar-expand-lg navbar1 py-2 wow fadeIn">
			<a class="navbar-brand" href="">
				<img src="{{asset('public/img/logo.png')}}" alt="Logomarca" class="Logo1">
			</a>
			<button class="navbar-toggler" 0type="button" data-toggle="collapse" data-target="#navbarA" aria-controls="navbarA" aria-label="Toggle navigation">
				<i class="fas fa-align-justify text-white fa-2x"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarA">
				<ul class="mr-auto"></ul>
				<ul class="nav navbar-nav smooth-scroll">
					<li class="nav-item active AnimeA">
						<a class="nav-link wow fadeInUp" data-wow-delay="0.2s" href="#top-section">Home</a>
					</li>
					<li class="nav-item AnimeA">
						<a class="nav-link wow fadeInUp" data-wow-delay="0.3s" href="#Bloco2">Sobre Nós</a>
					</li>
					<li class="nav-item AnimeA">
						<a class="nav-link wow fadeInUp" data-wow-delay="0.4s" href="#Bloco3">Produtos</a>
					</li>
					<li class="nav-item AnimeA">
						<a class="nav-link wow fadeInUp" data-wow-delay="0.5s" href="#Bloco4">Serviços</a>
					</li>
					<li class="nav-item AnimeA">
						<a class="nav-link wow fadeInUp" data-wow-delay="0.6s" href="#Bloco5">Portifolio</a>
					</li>
					<li class="nav-item AnimeA">
						<a class="nav-link wow fadeInUp" data-wow-delay="0.7s" href="#Contato">Contato</a>
					</li>
				</ul>
				<ul class="md-form navbar-nav nav-flex-icons smooth-scroll Soci Mobi">
					@if($s->facebook !='')
					<li class="nav-item Anime">
						<a href="{{$s->facebook}}" target="_blank" data-tooltip="tooltip" data-placement="bottom" title="Facebook" data-wow-delay="0.2s" class="wow Anime3">
							<i class="fab fa-facebook-square fa-2x"></i>
						</a>
					</li>
					@endif
					@if($s->instagram !='')
					<li class="nav-item Anime">
						<a href="{{$s->instagram}}" target="_blank" data-tooltip="tooltip" data-placement="bottom" title="Instagram" data-wow-delay="0.4s" class="wow Anime3">
							<i class="fab fa-instagram fa-2x"></i>
						</a>
					</li>
					@endif
					@if($s->youtube !='')
					<li class="nav-item Anime">
						<a href="{{$s->youtube}}" target="_blank" data-tooltip="tooltip" data-placement="bottom" title="Youtube" data-wow-delay="0.6s" class="wow Anime3">
							<i class="fab fa-youtube fa-2x"></i>
						</a>
					</li>
					@endif
					@if($s->twitter !='')
					<li class="nav-item Anime">
						<a href="{{$s->twitter}}" target="_blank" data-tooltip="tooltip" data-placement="bottom" title="Twitter" data-wow-delay="0.8s" class="wow Anime3">
							<i class="fab fa-twitter fa-2x"></i>
						</a>
					</li>
					@endif
					@if($s->google !='')
					<li class="nav-item Anime">
						<a href="{{$s->google}}" target="_blank" data-tooltip="tooltip" data-placement="bottom" title="Google+" data-wow-delay="1s" class="wow Anime3">
							<i class="fab fa-google fa-2x"></i>
						</a>
					</li>
					@endif
					@if($s->whatsapp1 !='')
					<li class="nav-item Anime">
						<a href="https://api.whatsapp.com/send?phone={{$s->whatsapp1}}0&text=..." target="_blank" data-tooltip="tooltip" data-placement="bottom" title="Whatsapp" data-wow-delay="1.2s" class="wow Anime3">
							<i class="fab fa-whatsapp fa-2x"></i>
						</a>
					</li>
					@endif
				</ul>
			</div>
		</nav>
		<!-- CARROSSEL -->
		<div id="Banner" class="carousel slide carousel-fade z-depth-4" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#Banner" data-slide-to="0" class="active"></li>
				<li data-target="#Banner" data-slide-to="1"></li>
				<li data-target="#Banner" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="view">
						<img class="ImgBanner" src="{{asset('public/img/banner1.jpg')}}" alt="Banner 01">
						<div class="mask pattern-4 rgba-black-slight"></div>
					</div>
					<div class="carousel-caption">
						<h3 class="h2-responsive">{{$s->dest1}}</h3>
					</div>
				</div>
				<div class="carousel-item">
					<div class="view">
						<img class="ImgBanner" src="{{asset('public/img/banner2.jpg')}}" alt="Banner 02">
						<div class="mask pattern-4 rgba-black-slight"></div>
					</div>
					<div class="carousel-caption">
						<h3 class="h2-responsive">{{$s->dest2}}</h3>
					</div>
				</div>
				<div class="carousel-item">
					<div class="view">
						<img class="ImgBanner" src="{{asset('public/img/banner3.jpg')}}" alt="Banner 03">
						<div class="mask pattern-4 rgba-black-slight"></div>
					</div>
					<div class="carousel-caption">
						<h3 class="h2-responsive">{{$s->dest3}}</h3>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#Banner" role="button" data-slide="prev">
				<i class="fas fa-angle-left fa-3x"></i>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#Banner" role="button" data-slide="next">
				<i class="fas fa-angle-right fa-3x"></i>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="endereco">
			<p><b>{{$s->slogan}}</b> | <b>CNPJ</b> {{$s->cnpj}}<br />
        	<b>{{$s->endereço}} <br />
        	<b>Fone:</b>{{$s->fone1}} - <b>Fone/Fax:</b>{{$s->fone2}}</p>
		</div>
	</header>