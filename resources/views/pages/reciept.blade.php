
@include('layout.header')
<section class="pt-20px pb-20px top-space-margin page-title-big-typography cover-background round-cursor"
        style="background-image: url({{ asset('frontend/vdc_images/pay.jpg') }}); margin-top: 141px;">
        <div class="container">
            <div class="row h-150px align-items-center">
                <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small appear anime-child anime-complete"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
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

    <div class="container">
        <div class="row">
            <div class="col-12" style="text-align: right;">
                <button id="downloadReportBtn" class="btn btn-success">
                    <i class="bi bi-download"></i>
                    Download report
                </button>
            </div>
        </div>
    </div>
    <div class="payment-info" style="border: 2px solid #ccc; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 700px; margin: auto; background-color: #fff;">
        <h2>Payment Information:</h2>
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Registration Number:</strong> {{ $regno }}</p>
        <p><strong>Payment ID:</strong> {{ $r_payment_id }}</p>
        <p><strong>Method:</strong> {{ $method }}</p>
        <p><strong>Amount:</strong> {{ $amount }}/-</p>
    </div>
  
   
    <script>
        document.getElementById('downloadReportBtn').addEventListener('click', function() {
       
            const element = document.querySelector('.payment-info'); 
    
            
            const options = {
                margin: 1,
                filename: 'payment_receipt.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
    
          
            html2pdf().from(element).set(options).save();
        });
    </script>
    

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

    @include('layout.footer')
