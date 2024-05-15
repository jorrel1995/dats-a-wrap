
       <!-- Services Section -->
       <div id="services">
            <div class="container-fluid p-0">
                @include('partials.services')
            </div>
        </div>
        <!-- End of Services Section -->

        <!-- Gallery Section -->

        <div id="portfolio">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="{{ Storage::url($page->image) }}" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{ Storage::url($page->image) }}" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{ Storage::url($page->image) }}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        </div>
               <!--End of   Gallery-->

               <!-- Contact Form-->
         <div id="contact">
            <div class="container-fluid p-0">
                @include('partials.contact')
            </div>
        </div>
        <!-- End of Contact Form -->