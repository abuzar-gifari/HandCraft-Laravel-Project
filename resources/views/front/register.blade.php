@extends('front.layouts.app')
@section('content')
<section class="form-container">
   <form action="{{ route('registration-submit') }}" enctype="multipart/form-data" method="POST">
      @csrf
      <h3>register now</h3>
      <input type="text" name="name" class="box" placeholder="enter your name" required>
      <input type="email" name="email" class="box" placeholder="enter your email" required>
      <input type="password" name="password" class="box" placeholder="enter your password" required>
      <input type="password" name="confirm_password" class="box" placeholder="confirm your password" required>
      <input type="submit" value="register now" class="btn" name="submit">
      <p>already have an account? <a href="{{ route('login') }}">login now</a></p>
   </form>
</section>
@endsection
