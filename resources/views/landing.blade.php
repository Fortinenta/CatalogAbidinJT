@extends('layouts.app')

@section('content')
<div class="hero" id="home">
    <div class="hero-content">
        <h1>Welcome to CatalogAbidinJT</h1>
        <p>Providing innovative solutions for your business needs.</p>
        <a href="#hubungi-kami" class="btn">Get in Touch</a>
    </div>
</div>

<div class="container tentang-kami-section my-5" id="about">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>About Us</h2>
        <a href="#" class="read-more">Read more →</a>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 mb-4">
            <p>We are CatalogAbidinJT, a leading company dedicated to delivering high-quality services and solutions. Our team of experts works tirelessly to ensure client satisfaction.</p>
        </div>
        <div class="col-lg-6 col-md-12">
            <img src="https://via.placeholder.com/500x300" class="tentang-kami-img" alt="About Us">
        </div>
    </div>
</div>

<div class="container product-section my-5" id="services">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Our Services</h2>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="product-card">
                <div class="card-body">
                    <h5 class="card-title">Web Development</h5>
                    <p class="card-text">Building responsive and modern websites tailored to your needs.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="product-card">
                <div class="card-body">
                    <h5 class="card-title">Mobile Apps</h5>
                    <p class="card-text">Creating user-friendly mobile applications for iOS and Android.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="product-card">
                <div class="card-body">
                    <h5 class="card-title">Consulting</h5>
                    <p class="card-text">Offering expert advice to optimize your business processes.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5" id="contact">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="product-section">Contact Us</h2>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12 mx-auto">
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
        </div>
    </div>
</div>
@endsection