@extends('frontend.layout.main')

@section('main-container')


<div class="contact-wrapper">
    <h1 class="contact-header">Get In Touch</h1>

    <!-- ✅ Success Message -->
    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Contact Info Row with BI Icons -->
    <div class="contact-info-row">
        <div class="contact-info-box">
            <i class="bi bi-telephone-fill contact-icon"></i>
            <div class="contact-label">Call Us</div>
            <div class="contact-detail">+91 99681 49430</div>
        </div>

        <div class="contact-info-box">
            <i class="bi bi-envelope-fill contact-icon"></i>
            <div class="contact-label">Email</div>
            <div class="contact-detail">savisawarkars@gmail.com</div>
        </div>

        <div class="contact-info-box">
            <i class="bi bi-geo-alt-fill contact-icon"></i>
            <div class="contact-label">Location</div>
            <div class="contact-detail">S.H.Sawarkar, S-2, A-31/7, Sangam Apartment, Sector-2, Vaishali, Ghaziabad, Uttar Pradesh 201010</div>
        </div>
    </div>

    <!-- Contact Form and Map -->
    <div class="contact-grid">
        <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
            @csrf
            <div class="form-group">
                <label for="name">Your Name *</label>
                <input type="text" id="name" name="name" required placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label for="subject">Subject *</label>
                <input type="text" id="subject" name="subject" required placeholder="Enter subject">
            </div>

            <div class="form-group">
                <label for="message">Your Message *</label>
                <textarea id="message" name="message" required placeholder="Write your message here..."></textarea>
            </div>

            <button type="submit" class="submit-btn">Send Message</button>
        </form>

        <div class="contact-map">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7003.39420126838!2d77.33539463682419!3d28.638838952644633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfad313e02157%3A0xe9311084ec7484a8!2sSector%202%2C%20Vaishali%2C%20Ghaziabad%2C%20Uttar%20Pradesh%20201010!5e0!3m2!1sen!2sin!4v1753082280416!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>

@endsection
