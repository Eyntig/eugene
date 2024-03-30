<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="{{asset('images1.png')}}">
    <link rel="stylesheet" href="{{asset('asset/bootstrap/icons/font/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<style>
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
        .cc {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
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





        </li>
      </ul>
    </div>
  </div>
</header>
@show


<header>
        <h1>About Us</h1>
        <p>Learn more about CarsView and our mission.</p>
    </header>
    <div class="cc">
        <section>
            <h2>Who We Are</h2>
            <p>CarsView is a passionate team of automotive enthusiasts dedicated to providing comprehensive and unbiased information about cars. We believe in empowering consumers with knowledge to make informed decisions when it comes to purchasing, maintaining, and enjoying their vehicles.</p>
        </section>
        <section>
            <h2>Our Mission</h2>
            <p>Our mission is to become the go-to destination for car enthusiasts seeking reliable reviews, insightful articles, and helpful resources. We strive to deliver high-quality content that educates, entertains, and inspires our audience.</p>
        </section>
        <section>
            <h2>Why Choose CarsView</h2>
            <ul>
                <li>Expertise: Our team consists of seasoned automotive professionals with years of experience in the industry.</li>
                <li>Unbiased Reviews: We provide honest and unbiased reviews of various car models, helping consumers make informed decisions.</li>
                <li>Comprehensive Coverage: From new releases to classic cars, we cover a wide range of topics to cater to diverse interests.</li>
                <li>Community Engagement: We foster a vibrant community of car enthusiasts, encouraging discussions and sharing of knowledge.</li>
            </ul>
        </section>
    </div>



<section class="features">
  <div class="container">
    <div class="feature">
      <i class="fas fa-car"></i>
      <h2>Wide Selection</h2>
      <p>Explore a wide range of car models from various manufacturers.</p>
    </div>
    <div class="feature">
      <i class="fas fa-search"></i>
      <h2>Easy Search</h2>
      <p>Quickly find your dream car using our intuitive search filters.</p>
    </div>
    <div class="feature">
      <i class="fas fa-info-circle"></i>
      <h2>Detailed Information</h2>
      <p>Get detailed specifications, photos, and reviews for each car.</p>
    </div>
    <div class="feature">
      <i class="fas fa-hand-holding-usd"></i>
      <h2>Financing Options</h2>
      <p>Discover flexible financing and leasing options for your purchase.</p>
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