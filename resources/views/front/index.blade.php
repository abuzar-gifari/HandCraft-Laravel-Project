@extends('front.layouts.app')
<!-- home section starts  -->
@section('content')
<section class="home" id="home">
   <div class="image">
      <img src="{{ asset('image/a.jpg') }}">
   </div>
   <div class="content">
      <h3>We know your traditional choose</h3>
      <p> Choose best traditional & handcraft product.</p>
      <a href="products.html" class="btn"> SEE PRODUCTS <span class="fas fa-chevron-right"></span> </a>
   </div>
</section>
<!-- home section ends -->
<!-- icons section starts  -->
<section class="icons-container">
   <div class="icons">
      <i class="fa fa-male" ></i>
      <h3>150+</h3>
      <p>workers</p>
   </div>
   <div class="icons">
      <i class="fas fa-users"></i>
      <h3>1030+</h3>
      <p>satisfied customer</p>
   </div>
   <div class="icons">
      <i class="fa fa-gift" ></i>
      <h3>150+</h3>
      <p>offer facility</p>
   </div>
   <div class="icons">
      <i class="fa fa-shopping-bag"></i>
      <h3>400+</h3>
      <p>available shops</p>
   </div>
</section>
<!-- icons section ends -->
<!-- about section starts  -->
<section class="about" id="about">
   <h1 class="heading"> <span>about</span> us </h1>
   <div class="row">
      <div class="image">
         <img src="{{ asset('image/b.jpg') }}" alt="">
      </div>
      <div class="content">
         <h3>Make your Life fashionable</h3>
         <p> The fabrics used in handmade clothes are chosen carefully, and you have a say in the choice of fabric. Many companies which make their clothes with the hand, choose fabrics which are eco-friendly, such as hand-loomed silk and wool, which have no emissions or use of electricity and water.</p>
         <p>We are creating oportunity to people finding different type o qualityful product</p>
         <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>
   </div>
</section>
<!-- about section ends -->
<!-- services section starts  -->
<section class="services" id="services">
   <h1 class="heading"> our <span>services</span> </h1>
   <div class="box-container">
      <div class="box">
         <i class="fa fa-shopping-bag"></i>
         <h3> Best products</h3>
         <p>Find the product suits you and become more fashionable.</p>
         <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>
      <div class="box">
         <i class="fa fa-car"></i>
         <h3>24/7 Delivery</h3>
         <p>We are prodiving you easy and most effective delivery system.</p>
         <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>
      <div class="box">
         <i class="fas fa-users"></i>
         <h3>expert workers</h3>
         <p>Here are many expert workers . They always doing their best to give you our best service.</p>
         <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>
      <div class="box">
         <i class="fa fa-home" ></i>
         <h3>Different shops</h3>
         <p>You can find different type of product from different shop.</p>
         <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>
      <div class="box">
         <i class="fa fa-gift" ></i>
         <h3>Offer facility</h3>
         <p>We are providing many offer to make your shopping experience more beautiful.</p>
         <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>
      <div class="box">
         <i class="fa fa-heart" ></i>
         <h3>total care</h3>
         <p>we care about your time and provide best product to save your money from waste.</p>
         <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>
   </div>
</section>
<!-- services section ends -->
@endsection
