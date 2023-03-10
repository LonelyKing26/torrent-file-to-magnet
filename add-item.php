<?php
	include('../config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/admin.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body>

<!-- header -->
<header class="header">
	<div class="header__content">
		<!-- header logo -->
		<a href="index.php" class="header__logo">
			<img src="img/logo.svg" alt="">
		</a>
		<!-- end header logo -->

		<!-- header menu btn -->
		<button class="header__btn" type="button">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<!-- end header menu btn -->
	</div>
</header>
<!-- end header -->

<!-- sidebar -->
<div class="sidebar">
	<!-- sidebar logo -->
	<a href="index.php" class="sidebar__logo">
		<img src="img/logo.svg" alt="">
	</a>
	<!-- end sidebar logo -->
	
	<!-- sidebar user -->
	<div class="sidebar__user">
		<div class="sidebar__user-img">
			<img src="img/user.svg" alt="">
		</div>

		<div class="sidebar__user-title">
			<span>Admin</span>
			<p>John Doe</p>
		</div>

		<button class="sidebar__user-btn" type="button">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z"></path></svg>
		</button>
	</div>
	<!-- end sidebar user -->

	<!-- sidebar nav -->
	<ul class="sidebar__nav">
		<li class="sidebar__nav-item">
			<a href="index.php" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10,13H3a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,20H4V15H9ZM21,2H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,9H15V4h5Zm1,4H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,21,13Zm-1,7H15V15h5ZM10,2H3A1,1,0,0,0,2,3v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,10,2ZM9,9H4V4H9Z"/></svg> Dashboard</a>
		</li>

		<li class="sidebar__nav-item">
			<a href="catalog.php" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,2a1,1,0,0,0-1,1V5H18V3a1,1,0,0,0-2,0V4H8V3A1,1,0,0,0,6,3V5H4V3A1,1,0,0,0,2,3V21a1,1,0,0,0,2,0V19H6v2a1,1,0,0,0,2,0V20h8v1a1,1,0,0,0,2,0V19h2v2a1,1,0,0,0,2,0V3A1,1,0,0,0,21,2ZM6,17H4V15H6Zm0-4H4V11H6ZM6,9H4V7H6Zm10,9H8V13h8Zm0-7H8V6h8Zm4,6H18V15h2Zm0-4H18V11h2Zm0-4H18V7h2Z"/></svg> Catalog</a>
		</li>

		<li class="sidebar__nav-item">
			<a href="users.php" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,2A10,10,0,0,0,4.65,18.76h0a10,10,0,0,0,14.7,0h0A10,10,0,0,0,12,2Zm0,18a8,8,0,0,1-5.55-2.25,6,6,0,0,1,11.1,0A8,8,0,0,1,12,20ZM10,10a2,2,0,1,1,2,2A2,2,0,0,1,10,10Zm8.91,6A8,8,0,0,0,15,12.62a4,4,0,1,0-6,0A8,8,0,0,0,5.09,16,7.92,7.92,0,0,1,4,12a8,8,0,0,1,16,0A7.92,7.92,0,0,1,18.91,16Z"/></svg> Users</a>
		</li>

		<li class="sidebar__nav-item">
			<a href="comments.php" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.61,19.19A7,7,0,0,0,17.87,8.62,8,8,0,1,0,3.68,14.91L2.29,16.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,18H8.69A7,7,0,0,0,15,22h6a1,1,0,0,0,.92-.62,1,1,0,0,0-.21-1.09ZM8,15a6.63,6.63,0,0,0,.08,1H5.41l.35-.34a1,1,0,0,0,0-1.42A5.93,5.93,0,0,1,4,10a6,6,0,0,1,6-6,5.94,5.94,0,0,1,5.65,4c-.22,0-.43,0-.65,0A7,7,0,0,0,8,15ZM18.54,20l.05.05H15a5,5,0,1,1,3.54-1.46,1,1,0,0,0-.3.7A1,1,0,0,0,18.54,20Z"/></svg> Comments</a>
		</li>

		<li class="sidebar__nav-item">
			<a href="reviews.php" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M22,10.1c0.1-0.5-0.3-1.1-0.8-1.1l-5.7-0.8L12.9,3c-0.1-0.2-0.2-0.3-0.4-0.4C12,2.3,11.4,2.5,11.1,3L8.6,8.2L2.9,9C2.6,9,2.4,9.1,2.3,9.3c-0.4,0.4-0.4,1,0,1.4l4.1,4l-1,5.7c0,0.2,0,0.4,0.1,0.6c0.3,0.5,0.9,0.7,1.4,0.4l5.1-2.7l5.1,2.7c0.1,0.1,0.3,0.1,0.5,0.1v0c0.1,0,0.1,0,0.2,0c0.5-0.1,0.9-0.6,0.8-1.2l-1-5.7l4.1-4C21.9,10.5,22,10.3,22,10.1z M15.8,13.6c-0.2,0.2-0.3,0.6-0.3,0.9l0.7,4.2l-3.8-2c-0.1-0.1-0.3-0.1-0.5-0.1V5.7l1.9,3.8c0.1,0.3,0.4,0.5,0.8,0.5l4.2,0.6L15.8,13.6z"/></svg> Reviews</a>
		</li>
		
		<!-- dropdown -->
		<li class="dropdown sidebar__nav-item">
			<a class="dropdown-toggle sidebar__nav-link" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0A.88.88,0,0,0,14.05,2H10A3,3,0,0,0,7,5V6H6A3,3,0,0,0,3,9V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V18h1a3,3,0,0,0,3-3V9S21,9,21,8.94ZM15,5.41,17.59,8H16a1,1,0,0,1-1-1ZM15,19a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V9A1,1,0,0,1,6,8H7v7a3,3,0,0,0,3,3h5Zm4-4a1,1,0,0,1-1,1H10a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1h3V7a3,3,0,0,0,3,3h3Z"/></svg> Pages</a>

			<ul class="dropdown-menu sidebar__dropdown-menu scrollbar-dropdown" aria-labelledby="dropdownMenuMore">
				<li><a href="add-item.php">Add item</a></li>
				<li><a href="edit-user.php">Edit user</a></li>
				<li><a href="signin.php">Sign In</a></li>
				<li><a href="signup.php">Sign Up</a></li>
				<li><a href="forgot.php">Forgot password</a></li>
				<li><a href="404.php">404 Page</a></li>
			</ul>
		</li>
		<!-- end dropdown -->
	</ul>
	<!-- end sidebar nav -->
	
	<!-- sidebar copyright -->
	<div class="sidebar__copyright">© FlixGo, 2018—2022. <br>Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank" rel="noopener">Dmitry Volkov</a>.</div>
	<!-- end sidebar copyright -->
</div>
<!-- end sidebar -->

<!-- main content -->
<main class="main">
	<div class="container-fluid">
		<div class="row">
			<!-- main title -->
			<div class="col-12">
				<div class="main__title">
					<h2>Add new item</h2>
				</div>
			</div>
			<!-- end main title -->
			<div class="col-12 form__content">
				<div class="row">
					<div class="col-8">
						<input type="text" name="" id="tmdb_id" value="453395" class="form__input">
					</div>
					<div class="col-4">
						<button type="button" class="form__btn" id="get_data">Fetch Details</button>
					</div>
				</div>
			</div>
								
			<!-- form -->
			<div class="col-12">
				<form action="#" class="form">
					<div class="row">
						<div class="col-12 col-md-5 form__cover">
							<div class="row">
								<div class="col-12 col-sm-6 col-md-12">
									<div class="form__img">
										<label for="form__img-upload">Upload cover (270 x 400)</label>
										<input id="form__img-upload" name="form__img-upload" type="file" accept=".png, .jpg, .jpeg">
										<div id="form__img">
										<img src="#" alt=" ">

										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-7 form__content">
							<div class="row">
								<div class="col-12">
									<input type="text" id="title" class="form__input" placeholder="Title">
								</div>

								<div class="col-12">
									<textarea id="plot" name="text" class="form__textarea" placeholder="Description"></textarea>
								</div>

								<div class="col-12 col-sm-6 col-lg-3">
									<input type="text" class="form__input" id="release" placeholder="Release year">
								</div>

								<div class="col-12 col-sm-6 col-lg-3">
									<input type="text" class="form__input" id="running" placeholder="Running timed in minutes">
								</div>

								<div class="col-12 col-sm-6 col-lg-3">
									<select class="js-example-basic-single" id="quality">
									<?php 
										$sql = mysqli_query($conn, "SELECT * FROM quality_data WHERE status = 'Active'");
										while($quality = mysqli_fetch_assoc($sql)){
										
									?>
									<option value="<?php echo $quality['id'];?>"><?php echo $quality['quality'];?></option>
									<?php };?>
									</select>
								</div>

								<div class="col-12 col-sm-6 col-lg-3">
									<input type="text" class="form__input" id="rating" placeholder="Rating">
								</div>

								<div class="col-12 col-lg-6">
								<input type="text" class="form__input" id="country" placeholder="country">
								</div>

								<div class="col-12 col-lg-6">
									<input type="text" class="form__input" id="genre" placeholder="genre">
								</div>

								<div class="col-12">
									<div class="form__gallery">
										<label id="gallery1" for="form__gallery-upload">Upload photos</label>
										<input data-name="#gallery1" id="form__gallery-upload" name="gallery" class="form__gallery-upload" type="file" accept=".png, .jpg, .jpeg" multiple>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12">
							<ul class="form__radio">
								<li>
									<span>Item type:</span>
								</li>
								<li>
									<input id="type1" type="radio" name="type" data-toggle="collapse" data-target=".multi-collapse" checked="">
									<label for="type1">Movie</label>
								</li>
								<li>
									<input id="type2" type="radio" name="type" data-toggle="collapse" data-target=".multi-collapse">
									<label for="type2">TV Series</label>
								</li>
							</ul>
						</div>
						
						<div class="col-12">
							<div class="row">
											<!-- episode -->
											<div class="form__episode">
												<div class="row">
													<div class="col-12">
														<span class="form__title">Episode #1</span>
														<button class="form__delete" type="button">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg>
														</button>
													</div>

													<div class="col-12 col-md-6">
														<input type="text" class="form__input" placeholder="Episode title 1">
													</div>

													<div class="col-12 col-md-6">
														<input type="text" class="form__input" placeholder="Air date">
													</div>
													<div class="col-12 col-md-6">
														<input type="text" class="form__input" placeholder="Air date">
													</div>
													<div class="col-12 col-md-6">
														<input type="text" class="form__input" placeholder="Air date">
													</div>
													<div class="col-12 col-md-6">
														<input type="text" class="form__input" placeholder="Air date">
													</div>
													<div class="col-12 col-md-6">
														<input type="text" class="form__input" placeholder="Air date">
													</div>
													<div class="col-12">
														<div class="form__video">
															<label id="s1s1" for="form__video-upload1">Upload episode 1</label>
															<input data-name="#s1s1" id="form__video-upload1" name="s1s1" class="form__video-upload" type="file" accept="video/mp4,video/x-m4v,video/*">
														</div>
													</div>
												</div>
											</div>
											<!-- end episode -->
								<!-- tv series -->
								<div class="col-12">
									<div class="collapse multi-collapse" id="multiCollapseExample2">
										<!-- season -->
										<div class="form__season">
											<div class="form__season-title">
												<div class="row">
													<div class="col-12">
														<span class="form__title">Season #1</span>
													</div>

													<div class="col-12 col-sm-6 col-md-5 col-xl-6">
														<input type="text" class="form__input" placeholder="Season title">
													</div>

													<div class="col-12 col-sm-6 col-md-4 col-xl-4">
														<input type="text" class="form__input" placeholder="Season info">
													</div>

													<div class="col-12 col-sm-4 col-md-3 col-xl-2">
														<button class="form__btn form__btn--add">add season</button>
													</div>
												</div>
											</div>

											<!-- episode -->
											<div class="form__episode">
												<div class="row">
													<div class="col-12">
														<span class="form__title">Episode #1</span>
														<button class="form__delete" type="button">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg>
														</button>
													</div>

													<div class="col-12 col-md-6">
														<input type="text" class="form__input" placeholder="Episode title 1">
													</div>

													<div class="col-12 col-md-6">
														<input type="text" class="form__input" placeholder="Air date">
													</div>

													<div class="col-12">
														<div class="form__video">
															<label id="s1s1" for="form__video-upload1">Upload episode 1</label>
															<input data-name="#s1s1" id="form__video-upload1" name="s1s1" class="form__video-upload" type="file" accept="video/mp4,video/x-m4v,video/*">
														</div>
													</div>
												</div>
											</div>
											<!-- end episode -->

											<!-- episode -->
											<div class="form__episode">
												<div class="row">
													<div class="col-12">
														<span class="form__title">Episode #2</span>
														<button class="form__delete" type="button">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg>
														</button>
													</div>

													<div class="col-12 col-md-6">
														<input type="text" class="form__input" placeholder="Episode title 2">
													</div>

													<div class="col-12 col-md-6">
														<input type="text" class="form__input" placeholder="Air date">
													</div>

													<div class="col-12 col-sm-8 col-md-9 col-xl-10">
														<div class="form__video">
															<label id="s1s2" for="form__video-upload2">Upload episode 2</label>
															<input data-name="#s1s2" id="form__video-upload2" name="s1s2" class="form__video-upload" type="file" accept="video/mp4,video/x-m4v,video/*">
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-3 col-xl-2">
														<button class="form__btn form__btn--add">add episode</button>
													</div>
												</div>
											</div>
											<!-- end episode -->
										</div>
										<!-- end season -->
									</div>
								</div>
								<!-- end tv series -->
								
								<div class="col-12">
									<button type="button" class="form__btn">publish</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<!-- end form -->
		</div>
	</div>
</main>
<!-- end main content -->

<!-- JS -->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script src="js/jquery.mCustomScrollbar.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/admin.js"></script>
<script>
	$(document).ready(function(){
		$("#get_data").click(function(){
			var tmdb_id = $("#tmdb_id").val();

			$.getJSON('https://api.themoviedb.org/3/movie/'+tmdb_id+'?api_key=6311677ef041038470aae345cd71bb78', function(data){
				
				// var title = data.belongs_to_collection['name'];
				var title = data.original_title;
				var plot = data.overview;
				var release = data.release_date;
				var running = data.runtime;
				var rating = data.imdb_id;
				var country = data.production_countries[0];
				var genre = data.genres[name];
				var poster = data.poster_path;
				console.log(data);	
				$("#title").val(title);
				$("#plot").val(plot);
				$("#release").val(release);
				$("#running").val(running);
				$("#rating").val(rating);
				$("#country").val(country);
				$("#genre").val(genre);
				$("#form__img").html('<img src="https://image.tmdb.org/t/p/w300_and_h450_bestv2'+poster+'">');
				
			});
		});
	});
</script>
</body>

</html>