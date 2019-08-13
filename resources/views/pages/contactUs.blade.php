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
<div class="content-page col-11 mx-auto d-flex flex-wrap mt-5">
   <form class="col-11 col-md-8 mt-5 d-flex flex-column align-items-center">
      <div class="form-row">
         <div class="col-md-4 mb-3">
            <label>Your Name</label>
            <input type="text" class="form-control"  placeholder="Your Name" required>
         </div>
         <div class="col-md-4 mb-3">
            <label>Your Comapny's Name</label>
            <input type="text" class="form-control" placeholder="Company's Name" required>
         </div>
         <div class="col-md-4 mb-3">
            <label>Your Email Address</label>
            <div class="input-group">
               <input type="email" class="form-control"  placeholder="Email Address" required>
            </div>
         </div>
         <div class="col-md-12 mb-3 mx-auto">
            <label>Tell Us About Your Project</label>
            <div class="input-group">
               <textarea class="form-control" rows="6" placeholder="Your Project" required></textarea>
            </div>
         </div>
      </div>
      <button class="btn btn-danger mr-auto" type="submit">Submit</button>
   </form>
   {{-- <hr class="my-5"> --}}
   <div class="contact-info d-flex flex-column align-items-center col-11 col-md-4 mt-5 text-center">
       <h2>Mr. Gamification Co.</h2>
       <p class="text-center">Unit 6, Mahtab Complex, Ilvarchi Alley, Villa St., Tehran-Iran</p>
       <p>Tel: <a href="tel:+989120257856" class="styled-anchor">+98 912 025 7856</a></p>
       <p>Email: <a href="mailto:info@mrgamification.com" class="styled-anchor">info@mrgamification.com</a></p>
   </div>
</div>
@endsection