<?php

/*
Template Name: Home Page
*/
get_header();
?>
<section id="flixita-page" class="Flixita-page st-py-default">
	<div class="container">
		<div class="row gy-lg-0 gy-5 wow fadeInUp">
			<div class="col-6">
				<h1>Continue your journey with a prefect pair of <span>shoes</span></h1>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
					industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
					and scrambled it to make a type specimen book.</p>
				<button type="button" class="btn btn-warning">Buy Now ></button>
			</div>
			<div class="col-6">
				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
							class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
							aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
							aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="http://localhost/KareemShoes/wp-content/uploads/2024/07/Picsart_24-06-26_11-20-31-328.png" class="d-block mx-auto px-4 pb-8 " alt="...">
						</div>
						<div class="carousel-item">
							<img src="http://localhost/KareemShoes/wp-content/uploads/2024/07/Picsart_24-06-26_11-20-31-328.png" class="d-block mx-auto px-4 pb-8 " alt="...">
						</div>
						<div class="carousel-item">
							<img src="http://localhost/KareemShoes/wp-content/uploads/2024/07/Picsart_24-06-26_11-20-31-328.png" class="d-block mx-auto px-4 pb-8 " alt="...">
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>