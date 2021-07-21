<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Usahawan Social Biz</title>
		<meta name="description" content="Usahawan Social Biz membawakan seminar PKS maya yang menempatkan bisnes setempat untuk sokongan, latihan, perangkaian, media dan banyak lagi.">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<link rel="shortcut icon" href="{{ asset('media/logo.png') }}"/>
	</head>
	<body>
		<header >
			<div class="menu-container" style="background: linear-gradient(to left, #560060,#1312c9);">
				<div class="grt-menu-row">
					<div class="grt-menu-logo">
						<a href="{{ url('/') }}" class="grt-logo"><img height="80" style="padding: 5px;" src="{{ asset('media/logo3.png') }}"></a>
						<span class="float-right" style="padding: 20px 10px;"><img height="30" src="{{ asset('media/omnia-logo.png') }}"></span>
					</div>
				</div>
			</div>
		</header>
	
		<div class="container mt-3">
			<div class="row">
				<div class="col-12 text-center">
					<img class="img-fluid" src="{{ asset('media/bani.jpeg') }}">

					<p class="px-5 text-center mt-4 description">
						Hai usahawan PKS! Perkasakan potensi sebenar bisnes anda bersama Usahawan Social Biz (USB).<br/><br/>
						Usahawan Social Biz membawakan seminar PKS maya yang menempatkan bisnes setempat untuk sokongan, latihan, perangkaian, media dan banyak lagi. Dengan menjadi ahli USB, temui tokoh usahawan, program eksklusif dan akses media yang tidak dapat anda perolehi di tempat lain! Inilah penyelesaian bisnes menang-menang yang jangan anda lepaskan. <br/><br/>
						Daftar sekarang untuk mendapat maklumat lanjut mengenai pelancaran USB yang bakal berlaku pada 18 Ogos ini.
					</p>
				</div>
			</div>
			<hr />

			<!-- Rsvp -->
			<div id="rsvp_form" class="row mt-4">
				<div class="col-12 px-5">
					<h2 class="text-center" style="font-weight: 600;">
						<span style="color:red;">Reserve</span> Your Spot
						<div style="border-bottom: 3px solid red; width: 10%; margin: 10px auto;"></div>
					</h2>

					<br>
					@if ($message = Session::get('success'))
						<div height="40" class="alert alert-info">
							{{ $message }}
						</div>
					@endif

					<form class="form-horizontal" method="post" action="{{ route('reserve.store') }}">
						@csrf
						<div class="row">
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="first">Name / Nama</label>
									<input type="text" class="form-control" name="name" placeholder="Name / Nama">
									@error('name')
									<div style="color:darkred;">{{ $message }}</div>
									@enderror
								</div>

								<div class="form-group">
									<label for="first">Emel / Email</label>
									<input type="text" class="form-control" name="email" placeholder="Enter Your Emel / Email">
									@error('email')
									<div style="color:darkred;">{{ $message }}</div>
									@enderror
								</div>

								<div class="form-group">
									<label>No Telefon Bimbit / Handphone Number</label>
									<input type="text" class="form-control " name="number" placeholder="No Telefon Bimbit / Handphone Number">
									@error('number')
									<div style="color:darkred;">{{ $message }}</div>
									@enderror
								</div>
							</div>

							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="first">Nama Syarikat / Company Name</label>
									<input type="text" class="form-control" name="company" placeholder="Nama Syarikat / Company Name">
									@error('company')
									<div style="color:darkred;">{{ $message }}</div>
									@enderror
								</div>

								<div class="form-group" >
									<label for="first">No Pendaftaran Syarikat / Co Reg No</label>
									<input type="text" class="form-control" name="company_no" placeholder="No Pendaftaran Syarikat / Company Registration No">
									@error('company_no')
									<div style="color:darkred;">{{ $message }}</div>
									@enderror
								</div>

								<div class="form-group">
									<label for="first"> Lokasi / location</label>
									<select class="form-control" name="location">
										<option valu="">- Please Select -</option>
										<option value="Johor">Johor</option>
										<option value="Kedah">Kedah</option>
										<option value="Kelantan">Kelantan</option>
										<option value="Kuala Lumpur">Kuala Lumpur</option>
										<option value="Labuan">Labuan</option>
										<option value="Melaka">Melaka</option>
										<option value="Negeri Sembilan">Negeri Sembilan</option>
										<option value="Pahang">Pahang</option>
										<option value="Penang">Penang</option>
										<option value="Perak">Perak</option>
										<option value="Perlis">Perlis</option>
										<option value="Putrajaya">Putrajaya</option>
										<option value="Terengganu">Terengganu</option>
										<option value="Sabah">Sabah</option>
										<option value="Sarawak">Sarawak</option>
										<option value="Selangor">Selangor</option>
									</select>

									@error('location')
									<div style="color:darkred;">{{ $message }}</div>
									@enderror
								</div>
							</div>

							<div class="col-12 text-center">
								<div class="form-group">
									<input type="checkbox" value="agree" name="checkbox"> I agree to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.
									@error('checkbox')
									<div style="color:darkred;">{{ $message }}</div>
									@enderror
								</div>
							</div>
						</div>

						<div class="row">
			 				<div class="col-12">
								<div class="form-group text-center">
										<button type="submit" class="btn btn-primary" style="font-size: 20px;">I'm Interested</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- End rsvp -->
		</div>
			 
		<style>
			body{
				background-image: url("{{ asset('media/bg.jpeg') }}");
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				height: auto;
				font-family: poppins;
			}

			.container{
				background-color: white;
				height: auto;
				width: 60%;
				padding: 20px 0px 0px 0px;
				padding-bottom: 20px;
				margin-bottom: 40px;
				border-radius: 5px;
			}

			.box{
					margin-left: -80px;
					margin-top: 50px;
			}

			h2{
				color: #000066;
				font-family: inherit;
			}

			.description {
				color: #74298e;
			}

			.sub{
				margin-left: -200px;
			}

			.logo{
				margin-top: 40px;
				width: 100%;
				height: 50%;
				margin-left: -60px;
			}

			/* Desktop only style */
			@media (min-width:768px) {
				.menu-container{height: 80px}

				.form{
					margin: 20px;
					box-shadow: 0 0 10px;
				}

				.ban{
					height: 70px; width: 300px; margin-left: 280px;
				}

				.list{
					margin-left: -50px;
				}

				.btn1{
					margin-left: -20px;
					margin-top: 100px;
				}

				.checkbox{
					margin-left: -380px;
				}
			}

			/* Tablet only style */
			@media (min-width:768px) and (max-width:991px) {	
			}

			/* Mobile only style */
			@media (max-width:767px) {
				.container{
					background-color: white;
					height: auto;
					width: 90%;
					padding: 0;
					border-radius: 5px;
				}

				.logo{
					margin-left: 70px;
					height: 100px;
					width: 100px;
				}

				.box{
					padding: 0px 0px 0px 90px;
				}

				.members{
					padding: 0px 0px 0px 90px ;
					font-size: 15px;
				}

				.member{
					padding: 0px 0px 40px 165px;
					font-size: 16px;
				}

				.sub{
					padding: 0px 0px 0px 184px;
				}

				.list{
					margin-left: -50px;
					margin-bottom: 47px;
					margin-right: 20px;
				}

				.list1{
					margin-left: 15px;
					margin-bottom: 47px;
					margin-right: 20px;
				}

				.sub1{
					margin-left: 10px;
				}

				.form{
					width: 100%; box-shadow: 0 0 10px; padding: 20px 20px 20px 20px;
				}

				.btn1{
					text-align: center;
					margin-left: 100px;
				}

				.ban{
					margin-right: 100px;
				}
			}
		</style>

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
			$(function(){
				@if(isset($message) || count($errors) > 0)
					$('html, body').animate({
						scrollTop: $("#rsvp_form").offset().top
					}, 500);
				@endif
			})
		</script>
	</body>
</html>
