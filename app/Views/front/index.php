<?php
require_once 'functions.php';
$site = site();
?>

<?= $this->extend('front/layouts') ?>

<?= $this->section('content') ?>

<section class="hero d-flex align-items-center" style="background-image: url('/images/hero-1.jpg')">
	<div class="overlay"></div>
	<div class="hero-item container">
		<div class="row">
			<div class="col-12 col-md-8">
				<h3 class="hero-subtitle"><?= $site["hero_subtitle"] ?></h3>
				<h1 class="hero-title"><?= $site["hero_title"] ?></h1>
				<span class="hero-tagline"><?= $site['hero_tagline'] ?></span>
			</div>
			<div class="col-12 col-md-4 d-flex align-items-center justify-content-center" style="min-height: 150px;">
				<button class="btn btn-primary rounded-circle" style="padding: 26px 26px;"><i class="fa fa-play fa-fw fa-lg"></i></button>
			</div>
		</div>

	</div>
</section>

<section class="tingkat-sekolah container" id="tingkat-sekolah">
	<div class="title-container">
		<h1 class="upcoming-section-title">Tingkat Sekolah</h1>
	</div>
	<div class="row">
		<div class="col-12 col-md-4">
			<div class="card jenjang-card bg-info">
				<img class="card-img" src="/images/ic-_kelas.svg">
				<div class="card-body text-center">
					<h4 class="card-title">TK</h4>
					<div class="product-description">
						<p class="card-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-4">
			<div class="card jenjang-card bg-warning">
				<img class="card-img" src="/images/ic-_mahasiswa.svg">
				<div class="card-body text-center">
					<h4 class="card-title">PAUD</h4>
					<div class="product-description">
						<p class="card-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-4">
			<div class="card jenjang-card bg-success">
				<img class="card-img" src="/images/ic-_program studi.svg">
				<div class="card-body text-center">
					<h4 class="card-title">MI</h4>
					<div class="product-description">
						<p class="card-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="contact-us-section" id="contact-us">
	<div class="overlay"></div>
	<div class="container contact-us-container">
		<h1 class="contact-us-title">Daftar Sekarang!</h1>
		<div class="contact-us-content text-center">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<a href="#" class="btn btn-primary">Daftar Sekarang!</a>
		</div>
	</div>
</section>


<?= $this->endSection() ?>