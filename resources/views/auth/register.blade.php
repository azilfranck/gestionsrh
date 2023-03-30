<!DOCTYPE html>
<!-- 
Template Name: Brunette - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Brunette I Signup</title>
<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- Custom CSS -->
<link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
<div class="loader-pendulums"></div>
</div>
<!-- /Preloader -->

<!-- HK Wrapper -->
<div class="hk-wrapper">

<!-- Main Content -->
<div class="hk-pg-wrapper hk-auth-wrapper">

<div class="container-fluid">
<div class="row">
<div class="col-xl-5 pa-0">
<div class="auth-cover-img overlay-wrap" style="background-image:url(dist/img/test.jpg);">
<div class="auth-cover-info py-xl-0 pt-100 pb-50">
<div class="auth-cover-content w-xxl-75 w-sm-90 w-100">
<h1 class="display-3 text-white mb-20"></h1>

</div>
</div>
<div class="bg-overlay bg-trans-dark-50"></div>
</div>
</div>
<div class="col-xl-7 pa-0">
<div class="auth-form-wrap py-xl-0 py-50">
<div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
@if (session('status'))
<a href="#" class="bottom-text-w3ls">{{session('status')}}</a>
@endif
<form action="/register" method="post">
@csrf
<h1 class="display-4 mb-10">Inscription </h1>
<p class="mb-30">Créez votre compte et commencez a utiliser DAF-RHAS</p>



<div class="form-group" >
<x-input-label for="name" :value="__('  ')" />
<x-text-input id="name" class="form-control" placeholder="Nom et prenom" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
<x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>

<!-- Email Address -->
<div class="form-group">
<x-input-label for="email" :value="__('')" />
<x-text-input id="email" class="form-control" placeholder="Adresse Email" type="email" name="email" :value="old('email')" required autocomplete="username" />
<x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<div class="form-group">
<x-input-label for="email" :value="__('')" />
<x-text-input id="matricule" class="form-control" placeholder="matricule" type="text" name="matricule" :value="old('matricule')" required autocomplete="" />
<x-input-error :messages="$errors->get('matricule')" class="mt-2" />
</div>

<!-- Password -->
<div class="form-group">

<x-input-label for="password" :value="__('')" />
<x-text-input id="password" class="form-control " placeholder="Mot de Passe" type="password" name="password"  required autocomplete="new-password" />

<x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>
<br>

<!-- Confirm Password -->
<div class="form-group">
<input-label for="password_confirmation" :value="__('')" />

<x-text-input id="password_confirmation" class="form-control " placeholder="Confirmer Mot de Passe" type="password" name="password_confirmation" required autocomplete="new-password" />

<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>

<div class="form-group">
<a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
{{ __('Avez deja un compte?') }}
</a>



<button type="submit" class="btn btn-primary">
{{ __('Enregistrer') }}
</button>


</div>



</form>

</div>
</div>
</div>
</div>
</div>
</div>
<!-- /Main Content -->

</div>
<!-- /HK Wrapper -->

<!-- jQuery -->
<script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>

<!-- FeatherIcons JavaScript -->
<script src="{{asset('dist/js/feather.min.js')}}"></script>

<!-- Init JavaScript -->
<script src="{{asset('dist/js/init.js')}}"></script>

</body>

</html>