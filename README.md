<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="rosidmustofa.com,personal webiste" />
		<link href="./src/css/output.css" rel="stylesheet">

		<link
			href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
			rel="stylesheet" />
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
		<title>Rosid Mustofa | Offical Personal Website</title>
	</head>
	<body class="bg-background overflow-x-hidden">
		<!-- header -->
		<header
			class="fixed top-0 right-0 left-0 md:py-1 transition-all duration-300">
			<nav
				class="max-w-7xl mx-auto bg-gray-800 md:bg-transparent p-5 order-[10001]">
				<div class="flex items-center justify-between">
					<a
						href="/"
						class="text-white font-bold text-lg flex items-center gap-3"><img
							src="src/img/logobranding.png" alt class="w-27 h-12" />
					</a>
					<!-- only for large device -->
					<div class="hidden md:flex space-x-10">
						<a href="#home"
							class="block text-white  mt-3 hover:bg-gray-700 rounded-md">Home</a>
						<a href="#skills"
							class="block text-white mt-3  hover:bg-gray-700 rounded-md">Skills</a>
						<a
							href="#portofolio"
							class="block text-white mt-3 hover:bg-gray-700 rounded-md">Portofolio</a>
						<a href="#about-me"
							class="block text-white mt-3  hover:bg-gray-700 rounded-md ">About
							Me</a>
						<a href="#"
							class="block bg-green-500 hover:bg-gray-700 text-white font-bold py-2 px-8 rounded-md">
							Download CV
						</a>

					</div>
					<!-- menu btn, only disply on mobile -->
					<div class="md:hidden">
						<button id="mobile-menu-button" class="text-white text-2xl">
							<i class="bx bx-menu"></i>
						</button>
					</div>
				</div>

				<!-- mobile menu -->
				<div id="mobile-menu" class="hidden md:hidden">
					<a href="#home"
						class="block text-white py-2 mt-3 hover:bg-gray-700 rounded-md">Home</a>
					<a href="#skills"
						class="block text-white py-2 hover:bg-gray-700 rounded-md">Skills</a>
					<a href="#portofolio"
						class="block text-white py-2 hover:bg-gray-700">Portofolio</a>
					<a href="#about-me"
						class="block text-white py-2 hover:bg-gray-700 rounded-md">About
						Me</a>

					<a href="#resume"
						class="block text-white py-2 hover:bg-gray-700 rounded-md">Download
						CV</a>
				</div>
			</nav>
		</header>
		<!-- banner section -->
		<section class="max-w-7xl mx-auto px-5 my-12" id="home">
			<div
				class="flex md:flex-row flex-col justify-between items-center text-white gap-4 py-10">
				<div class="md:w-1/2">
					<p class="text-xl font-medium mb-4">
						Hello, <span class="text-textheading">I'm</span>
					</p>
					<h1
						class="font-bold text-4xl tracking-[3.22px] mb-5 text-textheading">Rosid
						Mustofa</h1>
					<p class="text-2xl font-montserrat mb-5 text-textheading">
						Fullstack Web & Mobile Developement
					</p>
					<p class="text-xl mb-12 md:w-3/4 text-justify leading-8">
						I am committed to finding innovative solutions and continuously
						experimenting to help my clients achieve their goals about mobile &
						website technology
					</p>
					<button class="py-4 px-10 rounded-md bg-green-500 text-white font-bold">
						Let's Talk
					</button>
					<!-- social btn -->
					<div class="mt-12 mb-8 flex gap-4 items-center">
						<p>Check out My:</p>
						<div class="flex space-x-3">
							<a href="#"><img src="src/icons/instagram.svg" alt class="w-8 h-8" /></a>
							<a href="#"><img src="src/icons/linkedIn.svg" alt class="w-8 h-8" /></a>
							<a href="#"><img src="src/icons/twitter.svg" alt class="w-8 h-8" /></a>

						</div>
					</div>
				</div>
				<div class="md:w-1/2 order-first md:order-none">
					<img src="src/img/hero.svg" alt class="md:ml-20 w-full" />
				</div>
			</div>
		</section>
		<!-- service section -->
		<section class="max-w-7xl mx-auto px-5 my-6 text-white" id="skills">
			<div class="text-center">
				<p class="mb-3 font-montserrat font-medium">My Skills</p>
				<h3 class="text-primary text-3xl text-textheading mb-16">What I Do</h3>
			</div>
			<!-- service cards -->
			<div
				class="my-16 flex flex-col md:flex-row justify-around items-center gap-12">
				<div
					class="w-[354px] px-5 py-8 rounded-lg border border-primary shadow-[#5dadec3b] cursor-pointer shadow-xl">
					<img
						src="src/img/mob-dev.svg"
						alt
						class="w-[196px] mb-12 mx-auto" />
					<h5 class="text-center my-5 text-xl">Mobile Flutter Development</h5>
					<p class="text-justify">
						strive to create visually impact designs that effectively communicate
						,messages & meet their unique needs.
					</p>
				</div>
				<div
					class="w-[354px] px-5 py-8 rounded-lg border border-primary shadow-[#5dadec3b] cursor-pointer shadow-xl">
					<img
						src="src/img/fullstack.svg"
						alt
						class="w-[196px] mb-12 mx-auto" />
					<h5 class="text-center my-5 text-xl">Fustack Web Development</h5>
					<p class="text-justify">
						delivering intuitive, user-centered designs that bring my clients' vision
						to life by combining technical expertise, and development Front end also
						Bcckend
					</p>
				</div>
				<div
					class="w-[354px] px-5 py-8 rounded-lg border border-primary shadow-[#5dadec3b] cursor-pointer shadow-xl">
					<img
						src="src/img/ui.svg"
						alt
						class="w-[196px] mb-12 mx-auto" />
					<h5 class="text-center my-5 text-xl">UI/ UX Development</h5>
					<p class="text-justify">
						passion for creating user-friendly experiences and a drive to stay current
						with the design trends & technologies to deliver designs.
					</p>
				</div>
			</div>
		</section>
		<!-- projects -->
		<section class="px-5 my-32 mx-auto max-w-7xl" id="portofolio">
			<div class="text-center text-white">
				<h3 class="text-3xl font-bold mb-5">
					Recent <span class="text-primary">Projects</span>
				</h3>
				<p class="mb-6 md:w-3/4 mx-auto">
					I bring a passion for creating user-friendly experiences and a drive
					design trends and technologies to deliver top-notch designs that meet
					needs and exceed their expectations
				</p>
			</div>
			<div
				class="flex md:flex-row flex-col items-center justify-between gap-8 my-20">
				<div
					class="border border-primary shadow-xl shadow-[#5dadec3b] md:w-[741px] md:h-96 mx-auto rounded-2xl p-5 md:p-0">
					<img src="src/img/project-1.svg" alt class="p-5 w-full" />
				</div>
				<div
					class="border border-primary shadow-xl shadow-[#5dadec3b] md:w-[741px] md:h-96 mx-auto rounded-2xl p-5">
					<img src="src/img/project-2.svg" alt class="w-full p-5" />
				</div>
				<div
					class="border border-primary shadow-xl shadow-[#5dadec3b] md:w-[741px] md:h-96 mx-auto rounded-2xl p-5 md:p-0">
					<img src="src/img/project-1.svg" alt class="p-5 w-full" />
				</div>
			</div>
			<div
				class="flex md:flex-row flex-col items-center justify-between gap-8 my-20">
				<div
					class="border border-primary shadow-xl shadow-[#5dadec3b] md:w-[741px] md:h-96 mx-auto rounded-2xl p-5 md:p-0">
					<img src="src/img/project-1.svg" alt class="p-5 w-full" />
				</div>
				<div
					class="border border-primary shadow-xl shadow-[#5dadec3b] md:w-[741px] md:h-96 mx-auto rounded-2xl p-5">
					<img src="src/img/project-2.svg" alt class="w-full p-5" />
				</div>
				<div
					class="border border-primary shadow-xl shadow-[#5dadec3b] md:w-[741px] md:h-96 mx-auto rounded-2xl p-5 md:p-0">
					<img src="src/img/project-1.svg" alt class="p-5 w-full" />
				</div>
			</div>
			<!-- about me -->
			<section class="max-w-7xl mx-auto px-5 my-12" id="about-me">
				<div class="text-center text-white">
					<h3 class="text-3xl font-bold mb-5">
						About <span class="text-textheading">Me</span>
					</h3>

				</div>
				<div
					class="flex md:flex-row flex-col justify-between items-center text-white gap-4 py-10">
					<div class="md:w-1/2 order-first md:order-none">
						<img src="src/img/photoaboutme.svg" alt class="md:ml-20" />
					</div>

					<div class="md:w-1/2 order-first md:order-none">
						<img src="src/img/rectangle.svg" alt class="md:ml-200 w-full" />
					</div>
				</div>
			</section>
		</section>
		<!-- Footer -->
		<footer class="max-w-7xl mx-auto px-5 my-16">
			<h4 class="text-2xl text-textheading pt-12 mb-12">RMdC - Rosid Mustofa dot
				com</h4>
			<div
				class="text-white md:ml-16 flex flex-col md:flex-row justify-between md:items-center gap-2">
				<div class="md:w-1/5">
					<img src="src/img/logobranding.png" alt class="w-27 h-12" />
				</div>
				<div class="md:w-1/3 md:pl-10">
					<h5 class="mb-3">Company</h5>
					<a href="#" class="block my-2 text-sm text-slate-300">About Us</a>
					<a href="#" class="block my-2 text-sm text-slate-300">Why Choose me</a>
					<a href="#" class="block my-2 text-sm text-slate-300">Pricing</a>
					<a href="#" class="block my-2 text-sm text-slate-300">Testimonial</a>
				</div>
				<div class="md:w-1/3">
					<h5 class="mb-3">Resources</h5>
					<a href="#" class="block my-2 text-sm text-slate-300">Privacy Policy</a>
					<a href="#" class="block my-2 text-sm text-slate-300">Terms and
						Condition</a>
					<a href="#" class="block my-2 text-sm text-slate-300">Blog</a>
					<a href="#" class="block my-2 text-sm text-slate-300">Contact Us</a>
				</div>

				<div class="md:w-1/3">
					<h5 class="mb-5">Subscribe to our Newsletter</h5>
					<div class="relative">
						<input type="email" name="email" id="email" placeholder="Enter your Email"
							class="bg-[#2B2E3C] py-5 pl-5 rounded-lg">
						<input type="submit" value="Subscribe"
							class="bg-primary py-4 px-8 rounded-lg absolute left-44 top-1">
					</div>
				</div>

			</div>
		</footer>
		<section class="max-w-7xl mx-auto px-5 my-12" id="home">
			<div class="text-center text-white">
				<h5 class="text-7 text-textheading mb-5">
					========= Copyright &copy 2024 ==========
				</h3>

			</div>

		</section>
		<!-- script tags -->
		<script src="src/js/app.js"></script>
		<script
			src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
		<script src="src/review.js"></script>
	</body>
</html>
