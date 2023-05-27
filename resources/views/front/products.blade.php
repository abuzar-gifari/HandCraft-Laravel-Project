<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>handcraft</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/abc.css">
    <link rel="stylesheet" href="css/products.css">
    

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> <strong>Hand</strong>Craft </a>

    @include('front.layouts.nav')

    <div id="menu-btn" class="fas fa-bars"></div>

</header>
<!-- header section ends -->

<section class="home" id="home">

    <div class="image">
       <h1>Our Product Gallery</h1>
    </div>

</section>

<div class="container">
    
    <div class="top-content">
            <h3>PRODUCTS</h3>
    </div>
    @php
        $products = \App\Models\Product::get();
    @endphp

    @foreach ($products as $product)

    <form action="{{ route('addcart') }}" method="post">
    @csrf
    <div class="photo-gallery">
        <div class="product">
            <div class="name">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <h2>{{ $product->name }}</h2>
            </div>
            <div class="pic">
                <img src="{{ asset('uploads/'.$product->photo) }}" alt="">
            </div>
            <div class="price">
                <div class="txt">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <h2>${{ $product->price }}</h2>
                </div>
                <div class="button">
                    <button type="submit">Add To Cart</button>
                </div>
            </div>
        </div>
    </div>
    </form>
    
    @endforeach

</div>

</body>
</html>