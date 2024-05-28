
        <!-- about Section -->
         <div id="about">
            <div class="container-fluid p-0">
                @include('partials.about')
            </div>
        </div>
        <!-- End of about Section -->
       
       <!-- Services Section -->
       @if(!empty($page->service_title))
       <div id="services">
            <div class="container-fluid p-0">
            @include('partials.services')
            </div>
        </div> 
        @endif
        <!-- End of Services Section -->

        <!-- Gallery Section -->
    @if(!empty($gallery))
        <div id="gallery">
        <div class="container-fluid p-0">
                @include('partials.gallery')
            </div>
        </div>
      @endif  
               <!--End of   Gallery-->

               <!-- Contact Form-->
         <div id="contact">
            <div class="container-fluid p-0">
                @include('partials.contact')
            </div>
        </div>
        <!-- End of Contact Form -->