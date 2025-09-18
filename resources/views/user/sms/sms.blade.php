@extends('user.product.layout')

@section('content')
    <div class="page-heading contact-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>contact us via SMS</h4>
                        <h2>Send us a Message</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="send-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Send us an SMS</h2>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="contact-form">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form id="smsForm" action="{{ route('sendSms') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Full Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="phone" type="text" class="form-control" id="phone"
                                            placeholder="Phone Number" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your SMS Message"
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Send SMS</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <ul class="accordion">
                        <li>
                            <a>How SMS Works?</a>
                            <div class="content">
                                <p>Enter your name, phone number, and message.
                                    Our system will send it directly via SMS to our support team.</p>
                            </div>
                        </li>
                    </ul>

                    <!-- social icons -->
                    <div class="d-flex justify-content-center mt-4">
                        <ul class="social-icons d-flex gap-3 list-unstyled">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-comment-dots"></i></a></li> <!-- SMS -->
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
