        <!-- Footer-->
        <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">
                {{ setting('admin.title') }} 
                @if(setting('admin.instagram'))
                <a href="{{ setting('admin.instagram') }}" target="_blank" class="me-4"><i class="fab fa-instagram"></i></a>
                @endif
                @if(setting('admin.twitter'))
                <a href="{{ setting('admin.twitter') }}" target="_blank" class="me-4"><i class="fab fa-x-twitter"></i></a>
                @endif
                @if(setting('admin.linked_in'))
                <a href="{{ setting('admin.linked_in') }}" target="_blank" class="me-4"><i class="fab fa-linkedin"></i></a>
                @endif
            </div>
        </div>
        </footer>
         <!-- Bootstrap core JS-->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" rel="stylesheet"></script>

        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js"></script>

		

		<script src="https://www.google.com/recaptcha/api.js?render=6Ld8BN4pAAAAAJzVLVMCYcUtUfuQN89c3iXxhotO"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>
        $('form').submit(function(e) {
            e.preventDefault();
            console.log('submitted');
            var form = $(this);
            grecaptcha.ready(function() {
                grecaptcha.execute('6Ld8BN4pAAAAAJzVLVMCYcUtUfuQN89c3iXxhotO', {action: 'form_submit'}).then(function(token) {
                    form.prepend('<input type="hidden" name="token" value="' + token + '">');
                    form.unbind('submit').submit();
                });;
            });
        });
    </script>
    </body>
</html>
