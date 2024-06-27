@include('layout.header')
<section class="pt-20px pb-20px top-space-margin page-title-big-typography cover-background round-cursor"
    style="background-image: url({{ asset('frontend-assets/images/banner-image.webp') }}); margin-top: 141px;">
    <div class="container">
        <div class="row h-150px align-items-center">
            <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small appear anime-child anime-complete"
                data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium">
                </h1>
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Receipt</h4>
            </div>
            <div class="col">
                <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Home</li>
                        <li>Receipt</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <button id="downloadReportBtn" class="btn btn-base-color">
                    <i class="bi bi-download"></i>
                    Download Report
                </button>
                <div class="payment-info card shadow-lg border-0 w-100">
                 
                    <div class="card-body p-30px">
                        <h6 class="fw-bold fs-18 border-bottom border-base-color">Payment Information</h6>
                        <div class="border-bottom pb-5px pt-5px">
                            <label class="fw-normal text-start">Name:</label>
                            <span class="float-end fw-bold">{{ $name }}</span>
                        </div>
                        <div class="border-bottom pb-5px pt-5px">
                            <label class="fw-normal text-start">Course:</label>
                            <span class="float-end fw-bold">{{ $cname }} </span>
                        </div>
                        <div class="border-bottom pb-5px pt-5px">
                            <label class="fw-normal text-start">Free Type:</label>
                            <span class="float-end fw-bold">{{ $ctype }}</span>
                        </div>
                        <div class="border-bottom pb-5px pt-5px">
                            <label class="fw-normal text-start">Register Number:</label>
                            <span class="float-end fw-bold">{{ $regno }}</span>
                        </div>
                        <div class="border-bottom pb-5px pt-5px">
                            <label class="fw-normal text-start">Payment ID:</label>
                            <span  class="float-end fw-bold">{{ $r_payment_id }}</span>
                        </div>
                        <div class="border-bottom pb-5px pt-5px">
                            <label class="fw-normal text-start">Method:</label>
                            <span class="float-end fw-bold">{{ $method }}</span>
                        </div>
                        <div class="border-bottom pb-5px pt-5px">
                            <label class="fw-normal text-start">Date:</label>
                            <span class="float-end fw-bold">{{ $created_at }}</span>
                        </div>
                        <div class="pb-5px pt-5px">
                            <label class="fw-normal text-start">Amount:</label>
                            <span class="float-end fw-bold"> {{ $amount }}/-</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.getElementById('downloadReportBtn').addEventListener('click', function() {
        const element = document.querySelector('.payment-info');
        const options = {
            margin: 1,
            filename: 'payment_receipt.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: 'letter',
                orientation: 'portrait'
            }
        };
        html2pdf().from(element).set(options).save();
    });
</script>
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

@include('layout.footer')
