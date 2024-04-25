<div class="container">
    <div class="row align-items-center">
        <!-- Image Column -->
        <div class="col-md-6">
            <img src="{{Storage::url($page->image) }}" class="img-fluid" alt="Image">
        </div>
        <!-- Text Column -->
        <div class="col-md-6">
            <div class="text-left">
			{!! $page->body !!}
            </div>
        </div>
    </div>
</div>