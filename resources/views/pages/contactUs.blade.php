@extends('layouts.app')
<head>
    <link rel="stylesheet" href="./css/contact.css">
</head>

@section('title', 'Contact Us')
@section('main-content')
<div class="header-page" id="contact-us-background">
   <div class="overlay-page"></div>
   <h1>CONTACT US</h1>
</div>
@include('inc.messages')
<div class="content-page col-11 mx-auto d-flex flex-wrap justify-content-center mt-5">
   <form class="col-11 col-lg-8 mt-5 d-flex flex-column align-items-center" method="post" action="{{ route('contactus.store')}}">
      {{ csrf_field() }}
      <div class="form-row">
         <div class="col-md-4 mb-3">
            <label>Your Name</label>
            <input type="text" name="name" class="form-control"  placeholder="Your Name" required>
         </div>
         <div class="col-md-4 mb-3">
            <label>Your Comapny's Name</label>
            <input type="text" name="company_name" class="form-control" placeholder="Company's Name" required>
         </div>
         <div class="col-md-4 mb-3">
            <label>Your Email Address</label>
            <div class="input-group">
               <input type="email" name="email" class="form-control"  placeholder="Email Address" required>
            </div>
         </div>
         <div class="col-md-12 mb-3 mx-auto">
            <label>Tell Us About Your Project</label>
            <div class="input-group">
               <textarea class="form-control" name="message" rows="6" placeholder="Your Project" required></textarea>
            </div>
         </div>
      </div>
      <button class="btn btn-danger mr-auto" type="submit">Submit</button>
   </form>
   {{-- <hr class="my-5"> --}}
   <div class="contact-info d-flex flex-column align-items-center col-11 col-lg-4 mt-5 text-center">
       <h2>Mr. Gamification Co.</h2>
       <p class="text-center">Tehran, Ferdows, South Golestan Street, West Sonbol, No 4/1, Unit 10</p>
       <p>Tel: <a href="tel:+989120257856" class="styled-anchor">+98 21 4495 0371</a></p>
       <p>Email: <a href="mailto:info@mrgamification.com" class="styled-anchor">info@mrgamification.com</a></p>
   </div>
</div>
@endsection