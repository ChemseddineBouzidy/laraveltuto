{{--
<x-master title="login">




	<h3>login</h3>
	<form method="POST" action="{{ route('login') }}">

		@csrf
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email </label>
			<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
			@error('email')
			<div class="text-danger">{{$message}}</div>
			@enderror
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			<input type="password" name="password" class="form-control" id="exampleInputPassword1">
			<div class="d-grid">

				<button type="submit" class="btn btn-primary block-btn">Login</button>

			</div>
	</form>
</x-master> --}}
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<script src="https://cdn.tailwindcss.com"></script>
	<!-- This is an example component -->


	<title>Welcome to </title>

</head>
<style>
	/* Fade-in animation */
	@keyframes fadeIn {
	  0% {
		opacity: 0;
	  }
	  100% {
		opacity: 1;
	  }
	}
  
	/* Slide-up animation */
	@keyframes slideUp {
	  0% {
		opacity: 0;
		transform: translateY(20px);
	  }
	  100% {
		opacity: 1;
		transform: translateY(0);
	  }
	}
  
	/* Apply fade-in animation */
	.fade-in {
	  animation: fadeIn 1s ease-out forwards;
	}
  
	/* Apply slide-up animation */
	.slide-up {
	  animation: slideUp 1s ease-out forwards;
	}
  </style>
  
<body>
	<div class="h-screen md:flex">
		<div
			class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 i justify-around items-center hidden fade-in">
			<img src="{{ asset('/ANIMATEDHERO.gif') }}" class="btn-" />
			<div>
				
				<div class="">
					<h1 class="text-white font-bold text-4xl font-sans ">GoChat</h1>
					<p class="text-white mt-1">The most popular peer to peer lending at SEA</p>
					<button type="submit"
						class="block w-28 bg-white text-indigo-800 mt-4 py-2 rounded-2xl font-bold mb-2">Read
						More</button>
				</div>

			</div>
			<div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8">
			</div>
			<div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8">
			</div>
			<div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
			<div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
		</div>
		<div class="flex md:w-1/2 justify-center py-10 items-center bg-white slide-up">
			<form class="bg-white" method="POST" action="{{ route('login') }}">
				@csrf
				<h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
				<p class="text-sm font-normal text-gray-600 mb-7">Welcome Back</p>
			
				
				<div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
						viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
					</svg>
					<input class="pl-2 outline-none border-none" type="text" name="email" id=""
						placeholder="Email Address" />
						@error('email')
			<div class=" text-red-700">{{$message}}</div>
			@enderror
				</div>
				<div class="flex items-center border-2 py-2 px-3 rounded-2xl">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
						fill="currentColor">
						<path fill-rule="evenodd"
							d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
							clip-rule="evenodd" />
					</svg>
					<input class="pl-2 outline-none border-none" type="password" name="password" id=""
						placeholder="password" />
						@error('password')
						<div class=" text-red-700">{{$message}}</div>
						@enderror
				</div>
				@isset($message)
					<p>{{ $message }}</p>
					
				@endisset
				<button type="submit" name="bt1"
					class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
				<span class="text-sm ml-2 hover:text-blue-500 cursor-pointer">Forgot Password ?</span>
			</form>
		</div>
	</div> 

  