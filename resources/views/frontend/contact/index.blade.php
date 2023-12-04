@extends('frontend.layouts.master')


@section('content')
    <!-- Contact Start -->

    <div class="container-fluid pt-5">
        <div class="d-flex flex-column text-center mb-5 pt-5">
            <h4 class="text-secondary mb-3">Contact Us</h4>
            <h1 class="display-4 m-0">Contact For <span class="text-primary">Any Query</span></h1> <br> <br>
            <h5> Thank you for your interest in VetHub. <br> We welcome your feedback, comments and questions.
                Please call us <br> or send us an e-mail and we will reply shortly.</h5>
        </div> <br>

        <div class="row mb-5 contactusinfo">
            <div class="col-md-3">
                <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-map-marker"></span>
                    </div>
                    <div class="text">
                        <p><span>Address:</span> Irbid, Jordan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-phone"></span>
                    </div>
                    <div class="text">
                        <p><span>Phone:</span> <a href="tel://1234567920">+ 962 797974754</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-paper-plane"></span>
                    </div>
                    <div class="text">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@example.com</a></p>
                    </div>
                </div>
            </div>

        </div>

        <br>

        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="{{ route('contact.store') }}" method="POST" name="sentMessage" id="contactForm" novalidate="novalidate">

@csrf                      
  <center>
                            <h4 class="text-primary mb-3">Send us a Message</h4>
                        </center>
                        <br>
                        <div class="control-group">
                            <input type="text" name="name" class="form-control p-4" id="name"
                                placeholder="Your Name" required="required"
                                data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" name="email" class="form-control p-4" id="email"
                                placeholder="Your Email" required="required"
                                data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>


                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                                required="required" name="subject"
                                data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>


                        <div class="control-group">
                            <textarea class="form-control p-4" rows="6" id="message" name="message" required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>

                        <div>
                            <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact End -->
@endsection
