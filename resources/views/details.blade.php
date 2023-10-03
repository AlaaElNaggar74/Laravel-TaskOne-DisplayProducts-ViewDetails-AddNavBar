@extends('layouts.app')

@section('content')
 <div class="container">
    <h1 class="text-center mt-3 mb-5"> The Product Details Is :  </h1>
    <div class="dis d-flex justify-content-center align-items-center">
        
    <div class="col-md-6 m-2">
        <img src="{{$productId['images']}}" class="card-img-top w-100" alt="...">
    </div>
    
    <div class="col-md-6 m-2">
       <div class="" >
         <div class="">
            <h3 class="">ID :  <span class="text-danger">{{$productId['id']}}</span></h3>
            <h5 class="">Title : <span class="text-danger">{{$productId['title']}}</span></h5>
            <h5 class="">Description :<span class="text-danger">{{$productId['description']}}</span></h5>
            <h5  >Price <span class="text-danger">{{$productId['price']}} $</span></h5>
         </div>
      </div>
    </div>
    </div>
   <div class="aaa text-center"  >
    <a href="/products" class="btn btn-primary">Back</a>

   </div>
 </div>
@endsection