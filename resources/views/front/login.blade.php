@extends('front.layouts.app')
@section('content')
<section class="form-container">
   <form action="" method="POST">      
      @csrf
      <h3>login now</h3>
      <input type="email" name="email" class="box" placeholder="enter your email" required>
      <input type="password" name="pass" class="box" placeholder="enter your password" required>
      <input type="submit" value="login now" class="btn" name="submit">
      <p>don't have an account? <a href="register.html">register now</a></p>
   </form>
</section>
@endsection