<section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
   
                <form id="contactForm" action="{{route('send')}}" method="POST">
                    @csrf
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            @if(Session::has('message'))
                            <p class="alert alert-success">{{Session::get('message')}}</p>
                            @endif
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" name="name" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                @error('name')
                                    <spam class="text-red-500">{{$message}}</spam>
                                @enderror
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                @error('email')
                                    <spam class="text-red-500">{{$message}}</spam>
                                @enderror
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" name="phone" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                @error('phone')
                                    <spam class="text-red-500">{{$message}}</spam>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" name="message" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                @error('message')
                                    <spam class="text-red-500">{{$message}}</spam>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase "  type="submit">Send Message</button></div>
                </form>
            </div>
        </section>