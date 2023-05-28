
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

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> <strong>Hand</strong>Craft </a>

    @include('front.layouts.nav')

    <div id="menu-btn" class="fas fa-bars"></div>

</header>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<section class="shopping-cart">

   <h1 class="title">products added</h1>
   <table id="customers">
      <tr>
         <th>Serial No</th>
         <th>Product Name</th>
         <th>Price</th>
         <th>Action</th>
      </tr>
      @php
         $carts = \App\Models\Cart::where('user_id',Auth::guard('customer')->user()->id)->get();
      @endphp
      @foreach ($carts as $cart)
      <tr>
         
         <td>{{ $loop->iteration }}</td>
         <td>{{ $cart->name }}</td>
         <td>{{ $cart->price }}</td>
         <td>
            <a href="{{ route('addcartremove',$cart->id) }}">Remove</a>
         </td>
         
      </tr>
      @endforeach
    </table>
   

</section>



<script src="js/script.js"></script>

</body>
</html>