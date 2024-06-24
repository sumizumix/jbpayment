<script>
    function displaySelectedImage(event) {
        var fileInput = event.target;
        var files = fileInput.files;
        if (files && files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var selectedImage = document.getElementById('existing-image');
                selectedImage.src = e.target.result;
            };
            reader.readAsDataURL(files[0]);
        }
    }
</script>
<script src="{{ asset('backend-assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('backend-assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend-assets/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('backend-assets/js/app.min.js') }}"></script>
<script src="{{ asset('backend-assets/js/dashboard.js') }}"></script>
<script src="{{ asset('backend-assets/js/customscript.js') }}"></script>
</body>

</html>
