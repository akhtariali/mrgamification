@extends('layouts.app')
<head>
    <link rel="stylesheet" href="./css/aboutus.css">
</head>

@section('title', 'About Us')
@section('main-content')
<div class="header">
    <div class="overlay"></div>
    <h1>ABOUT US</h1>
</div>
<div class="content col-9 mx-auto mt-5">
    <h2>Who Are We?</h2>
    <p><a href="/" class="styled-anchor">Mr. Gamification</a> is a gamification consultant and a geek! He tries to gamify everything. Whenever he is unhappy, unengaged, or unproductive, he uses the power of gamification to make things more exciting. He loves sharing his passion for behavioral science with others.</p>
    <br>
    <h2>What Do We Do?</h2>
    <p>We use behavioral science to make things more fun and engaging. We design engaging experiences to increase the engagement rate, employer productivity, customer loyalty, or conversion rate. Our job is not gamifying things. We create exciting experiences for the people.</p>
    <br>
    <h2>What Is Gamification?</h2>
    <p>Gamification is the combination of UX design, game design, behavioral design, and neuropsychology.</p>
    <p>The most common definition of gamification is:</p>
    <blockquote class="blockquote">
        <p>"The application of game-design elements and game principles in non-game contexts."</p>
    </blockquote>
    <br>
    <h2>Whom Do We Serve?</h2>
    <p>Everyone who is passionate and curious about the gamification’s power. However, the most common types of our solutions are:</p>
    <ul class="styled-list">
        <li>Customer experience solutions</li>
        <li>Employee engagement solutions</li>
        <li>Learner engagement solutions</li>
    </ul>
    <p>If you have customers, learners, or employees who are not as engaged as you wish, you can count on us!</p>
    <br>
    <h2>What Are Our Values?</h2>
    <p>We admire fun, flow, happiness, and being in the moment. We respect and share engaging experiences. Sometimes this experience is a movie, a video game, a book, or something else. Above all, we value creativity and autonomy. We enjoy playing video games and board games with our friends.</p>
    <p>By the way, we love fruits, especially oranges.</p>
</div>
@endsection