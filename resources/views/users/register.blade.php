@extends('layout')
@section('content')
<section id="header" class="clearfix cd-secondary-nav">
  <div class="container">
   <div class="row">
    <div class="header_main clearfix">
      <nav class="navbar navbar-default">
                    <div class="navbar-header">
                                 <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                         <span class="sr-only">Toggle navigation</span>
                                         <span class="icon-bar"></span>
                                         <span class="icon-bar"></span>
                                         <span class="icon-bar"></span>
                                 </button>
                                 <a class="navbar-brand" href="#">KinoIzKraja <span>od 1999.</span></a>
                </div>
         
         
         <div class="collapse navbar-collapse js-navbar-collapse">
                 <ul class="nav navbar-nav navbar-right">
                         <li><a class="font_tag" href="/">Početna</a></li>
                         <li><a class="font_tag" href="/repertoar">Repertoar</a></li>
                         <li><a class="font_tag" href="/uskoro">Uskoro</a></li>
                         <li><a class="font_tag" href="/cjenovnik">Cjenovnik</a></li>
                         <li><a class="font_tag border_none_1" href="/kontakt">Kontakt</a></li>
                 </ul>
                 
         </div><!-- /.nav-collapse -->
 </nav>
    </div>
   </div>
  </div>
 </section>
<section name="registers">
<div class="register">
    <h2 class="text-2xl font-bold uppercase mb-1">Registracija</h2>
    <p class="mb-4">Pridruži nam se!</p>
</div>

  <form method="POST" action="/users">
    @csrf
    <div class="mb-6">
      <label for="name" class="inline-block text-lg mb-2"> Ime </label>
      <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}" />

      @error('name')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="email" class="inline-block text-lg mb-2">Email</label>
      <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />

      @error('email')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="password" class="inline-block text-lg mb-2">
        Lozinka
      </label>
      <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
        value="{{old('password')}}" />

      @error('password')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="password2" class="inline-block text-lg mb-2">
        Potvrdi lozinku
      </label>
      <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation"
        value="{{old('password_confirmation')}}" />

      @error('password_confirmation')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
        Registruj se
      </button>
    </div>

    <div class="mt-8">
      <p>
        Već imaš nalog?
        <a href="/login" class="text-laravel">Prijavi se</a>
      </p>
    </div>
  </form>
</section>
  @endsection