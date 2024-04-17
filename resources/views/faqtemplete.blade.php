<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="{{asset('images1.png')}}">
    <link rel="stylesheet" href="{{asset('asset/bootstrap/icons/font/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* CSS styles for the page layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
          background-color: #f2f2f2;
            color: black;
            padding: 20px;
            text-align: center;
        }
        .ff {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .faq-item {
            border-bottom: 1px solid #ccc;
            padding: 20px 0;
        }
        .faq-item h2 {
            margin-top: 0;
        }
        .faq-item p {
            margin-top: 5px;
        }
        </style>
<head>
        <title>CarsView - @yield('title')</title>
    </head>
<body>


@section('header')
<header class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <div class="logo">
      <a href="/"><img src="images/1.png" alt="Car View Site"></a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cars">Cars</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="services">Services</a></li>
            <li><a class="dropdown-item" href="contact">Contact</a></li>
            <li><a class="dropdown-item" href="faq">FAQ</a></li>
          </ul>
        </li>
        @guest
                         <li class="nav-item">
                             <a class="nav-link " href="{{ route('login') }}">Login</a>
            
                            <li class="nav-item">
                             <a class="nav-link " href="{{ route('registration') }}">Register</a>
              
                         @else
                         <span class="nav-item"><p class="nav-link">{{ auth()->user()->name }}</p></span>
                         <li class="nav-item">
                                <a class="nav-link " href="{{ route('logout') }}">Logout</a>
                            </li>
                         @endguest

      </ul>
    </div>
  </div>
</header>
@show


<header>
        <h1>Frequently Asked Questions</h1>
        <p>Find answers to common questions about CarsView.</p>
    </header>
    <div class="ff">
        <div class="faq-item">
            <h2>How can I buy a car through CarsView?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget eros nec ipsum placerat ultricies.</p>
        </div>
        <div class="faq-item">
            <h2>What types of payment do you accept?</h2>
            <p>Nulla facilisi. Nullam commodo elit non ullamcorper elementum. Suspendisse potenti.</p>
        </div>
        <div class="faq-item">
            <h2>Do you offer financing options?</h2>
            <p>Vivamus at nisi id sapien vulputate ultrices. Integer mattis dui et purus suscipit, in varius justo vulputate.</p>
        </div>
        <!-- Add more FAQ items here -->
    </div>

@section('about')
<section class="about">
  <div class="container">
    <div class="about-content">
      <h2>About Us</h2>
      <p>Welcome to CarView, your one-stop destination for exploring the latest and greatest in the world of automobiles. Our mission is to provide car enthusiasts with a seamless and enjoyable experience as they search for their dream ride.</p>
      <p>With a passion for cars and a commitment to excellence, our team works tirelessly to curate a diverse selection of vehicles and provide comprehensive information to help you make informed decisions.</p>
    </div>
    <div class="about-image">
      <img src="images/3.png" alt="About Us Image">
    </div>
  </div>
</section>
@show

@section('testi')
<section class="testimonials">
  <div class="container">
    <h2>Testimonials</h2>
    <div class="testimonial">
      <div class="testimonial-content">
        <p>"CarView helped me find the perfect car for my family. The selection was great, and the detailed information provided made the decision-making process a breeze."</p>
        <cite>John Doe</cite>
      </div>
    </div>
    <div class="testimonial">
      <div class="testimonial-content">
        <p>"I had a fantastic experience shopping for a car on CarView. The website was easy to navigate, and the customer service was top-notch. Highly recommended!"</p>
        <cite>Jane Smith</cite>
      </div>
    </div>
  </div>
</section>
@show




@section('footer')
<footer class="footer">
  <div class="container">
    <div class="footer-content">
      <h3>Contact Us</h3>
      <p>Email: info@carview.com</p>
      <p>Phone: 123-456-7890</p>
      <p>Address: 123 Main Street, City, Country</p>
    </div>
    <div class="footer-social">
      <h3>Follow Us</h3>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"><img src="images/8.png"></i></a>
        <a href="#"><i class="fab fa-twitter"><img src="images/9.png"></i></a>
        <a href="#"><i class="fab fa-instagram"><img src="images/10.png"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"><img src="images/11.png"></i></a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <p>&copy; 2024 CarView. All rights reserved.</p>
    </div>
  </div>
</footer>
@show


<!-- Rest of your HTML content goes here -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>