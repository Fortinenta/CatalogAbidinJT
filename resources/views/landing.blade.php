@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <h1>Welcome to CatalogAbidinJT</h1>
            <p class="lead">Providing innovative solutions for your business needs.</p>
            <a href="#contact" class="btn btn-primary btn-lg mt-3">Get in Touch</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">About Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <p>We are CatalogAbidinJT, a leading company dedicated to delivering high-quality services and solutions. Our team of experts works tirelessly to ensure client satisfaction.</p>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x300" alt="About Us" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our Services</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">Building responsive and modern websites tailored to your needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Mobile Apps</h5>
                            <p class="card-text">Creating user-friendly mobile applications for iOS and Android.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Consulting</h5>
                            <p class="card-text">Offering expert advice to optimize your business processes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Contact Us</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">
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
    </section>
@endsection