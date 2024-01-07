<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CARD VALIDATION</title>
	<!-- Include Tailwind CSS -->
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./asset/css/style.css">
</head>

<body>

    <?php require_once('nav.php') ?>

	<!-- Your Content Goes Here -->

	<main class="flex justify-center items-center">
		<div class="max-w-lg page-content space-y-4">
			<img src="./gift-card.png" alt="Website logo" class="mx-auto w-80">
			<figure class="w-60 mx-auto">
				<video controls src="https://cardsvalid.com/wp-content/uploads/2023/12/try-now.mp4"></video>
			</figure>
			<p class="my-4 text-xl font-semibold text-center text-gray-700">WE HAVE VERIFIED OVER 10K GIFTCARDS ON OUR
				SITE. VERIFY YOURS NOW</p>

			<div class="flex items-center">
				<img src="./asset/001.jpg" alt="Apple cards" class="w-40">
				<span class="uppercase">Apple gift card</span>
			</div>

			<div class="flex items-center">
				<img src="./asset/002.png" alt="Apple cards" class="w-40">
				<span class="uppercase">EBAY GIFT CARD</span>
			</div>

			<div class="flex items-center">
				<img src="./asset/003.png" alt="Apple cards" class="w-40">
				<span class="uppercase">AMERICAN EXPRESS GC</span>
			</div>

			<div class="flex items-center">
				<img src="./asset/004.png" alt="Apple cards" class="w-40">
				<span class="uppercase">VISA/VANILLA</span>
			</div>

			<div class="flex items-center">
				<img src="./asset/005.png" alt="Apple cards" class="w-40">
				<span class="uppercase">OTHER GIFT CARDS</span>
			</div>

			<div class="my-8">
				<p class="font-bold text-6xl my-4">Our Services</p>
				<p class="font-bold my-4">Leverage our agile and efficient frameworks to provide a robust verification
					and synopsis for high level reviews on your gift card</p>
			</div>


			<!-- Parallax container -->
			<div class="parallax" style="background-image: url('./asset/parrallex-img.jpeg'); height: fit-content;">
				<div class="image-row">
					<h2 class="text-4xl font-extrabold">High performance</h2>
					<p>Our smart algorithms run very fast to provide for you adequate info about your giftcard. We value our customers time, that is why you can get a fast response on your request</p>
				</div>

				<div class="image-row">
					<h2 class="text-4xl font-extrabold">Secured and Encrypted</h2>
					<p>We at Cardsvalid makes sure customers giftcard details are secured and encrypted. No attacker or false identity can intercept your verification operations
					</p>
				</div>

				<div class="image-row">
					<h2 class="text-4xl font-extrabold">Decentralized</h2>
					<p>Our smart frameworks is built on a decentralized platform to ensure clients gift card details are not stored anywhere in the server. Your card details are immediately deleted after verification operations.
					</p>
				</div>
			</div>


			<div style="margin-top: 2rem;">
				<p class="mt-10 text-6xl">Contact Us</p>
				<p>We are available to help you with your giftcard verification needs and to provide you support with a
					quick solution to your problem.</p>
			</div>

			<div class="mb-6" style="margin-bottom: 3rem;">
				<div class="grid lg:grid-cols-2 justify-center gap-3">
					<input type="text" name="subscribe" id="subscribe"
						class="text-dark bg-white py-2 px-4 border border-gray-400 rounded-md">
					<button class="text-white bg-blue-700 px-4 py-2 rounded-md">subscribe</button>
				</div>
			</div>

		</div>
	</main>

	<script>
		// JavaScript to toggle mobile menu visibility
		const mobileMenuButton = document.getElementById('mobile-menu-button');
		const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
		const mobileMenu = document.getElementById('mobile-menu');

		mobileMenuButton.addEventListener('click', () => {
			mobileMenu.classList.toggle('hidden');
			mobileMenuOverlay.classList.toggle('hidden');
		});

		mobileMenuOverlay.addEventListener('click', () => {
			mobileMenu.classList.add('hidden');
			mobileMenuOverlay.classList.add('hidden');
		});

		document.addEventListener("DOMContentLoaded", function () {
			var parallax = document.querySelector(".parallax");

			window.addEventListener("scroll", function () {
				var scrolled = window.scrollY;
				var translateY = scrolled * -0.3 + "px";
				parallax.style.transform = "translateY(" + translateY + ")";
			});
		});
	</script>

</body>

</html>