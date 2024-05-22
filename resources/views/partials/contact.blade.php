    <div class="container">
        <div class="row">
            <!-- Image with Text (Left Column) -->
            <div class="col-md-6">
                <div class="text-center">
                    <img src="{{ Storage::url($page->image) }}" class="img-fluid" alt="Contact Form Image">
                </div>
            </div>
            <!-- Form (Right Column) -->
            <div class="col-md-6">
                <h2>Contact Us</h2>
                    <form action="/enquiry/store" method="post">
                        @csrf
                            <div class="form-group col-12">
                                <input type="text" class="form-control" name="full_name" id="enterName" aria-describedby="emailHelp" placeholder="Enter Your Name" required>
                            </div>
                            <div class="form-group col-12">
                                <input type="email" class="form-control" name="email" id="enterEmail" aria-describedby="emailHelp" placeholder="Enter Email Address" required>
                            </div>
                            <div class="form-group col-12">
                                <input type="text" class="form-control" name="phone" id="enterPhone" placeholder="Enter Phone Number" required>
                            </div>
                            <div class="form-group col-12">
                                <textarea class="form-control" name="message" id="aboutYourself" rows="10" placeholder="Enter your message"></textarea>
                            </div>
                            <div class="form-check col-12 ml-3">
                                <input type="checkbox" class="form-check-input pl-3" id="gdpr_checkbox" required>
                                <label class="form-check-label" for="gdpr_checkbox"><p>I have read and accept the <a href="/privacy-policy" target="_blank">Privacy Notice.</a></p></label>
                                <label class="form-check-label">This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.</label>
                            </div>
                            <div class="col-12 my-4">
                                <button type="submit" class="btn btn-submit btn-block">
                                    <span class="d-block float-left">Submit Enquiry</span>
                                    <i class="fas fa-long-arrow-alt-right float-right mt-1"></i>
                                </button>
                            </div>
                            @if(Session::has('success'))
                              {!! Session::get('success') !!}
                             @endif


                        @if(Session::has('danger'))
                           {!! Session::get('danger') !!}
                        @endif
                    </form>
            </div>
        </div>
    </div>
