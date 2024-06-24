@include('layout.header')
<section class="pt-20px pb-20px top-space-margin page-title-big-typography cover-background round-cursor"
        style="background-image: url({{ asset('frontend/vdc_images/pay.jpg') }}); margin-top: 141px;">
        <div class="container">
            <div class="row h-150px align-items-center">
                <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small appear anime-child anime-complete"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium">
                        {{-- <span
                            class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span> --}}
                    </h1>
                    <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Payment</h4>
                </div>
                <div class="col">
                    <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white"
                        data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                        <ul>
                            <li>Home</li>
                            <li>Payment</li>
                        </ul>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    
<div class="card card-default">
    <div class="card-header">
   
    </div>
    <div class="card-body text-center">
        <form action="{{ route('razorpay.payment.store') }}" id="paymentForm" method="POST">
            @csrf
            <div class="container mt-5">
                <div class="mb-2">
                    <label class="form-label text-primary">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
                  
                </div>
                <div class="mb-2">
                    <label class="form-label text-primary">Register Number</label>
                    <input type="text" class="form-control" name="regno" id="regno" placeholder="Enter Your register number">
                  
                </div>
                <div class="mb-2">
                    <label class="form-label text-primary">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your email">
                  
                </div>
                <div class="mb-2">
                    <label class="form-label text-primary">Course Name</label>
                    <select name="cname" class="form-control" id="course">
                        <option value="">Select Course</option>
                        @foreach($views as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label class="form-label text-primary">fee Type</label>
                    <select name="ctype" class="form-control">
                        <option value="">Select type</option>
                        @foreach($data as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
          
                <div class="mb-2">
                    <label class="form-label text-primary">Amount</label>
                    <input type="text" class="form-control" name="amount" id="amountInput" onchange="updateRazorpayAmount()" placeholder="Amount">
                    <input type="hidden" class="form-control" name="razorpay_payment_id" id="razorpay_id" value="" >
                </div>


                <button type="button" id="payButton" class="btn btn-primary mt-3">Proceed to Payment</button>
              
                {{-- <a href="{{ url('/payment/receipt' . $cat->id) }}" type="button" id="payButton" class="btn btn-primary mt-3">Proceed to Payment</a> --}}
            
            </form>
        
     
        </div>
    </div>  

                <div style="border: 2px solid #ccc; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 700px; margin: auto; background-color: #fff;">
                    {{-- <div class="container">
                        <div class="row">
                            <div class="col-12" style="text-align: rcenterght;">
                                <button id="downloadReportBtn" class="btn btn-success">
                                    <i class="bi bi-download"></i>
                                   
                                       
                                    Download report
                                </button>
                            </div>
                        </div>
                    </div> --}}
                    <h6>payment Details</h6>
                    <div>
                        <label style="display: inline-block; font-weight: bold; width: 150px;">Register Number:</label>
                        <span id="displayRegno"></span>
                    </div>
                    <div>
                        <label style="display: inline-block; font-weight: bold; width: 100px;">Name:</label>
                        <span id="displayName"></span>
                    </div>
                    <div>
                        <label style="display: inline-block; font-weight: bold; width: 100px;">Course:</label>
                        <span id="displayCourse"></span>
                    </div>
                    <div>
                        <label style="display: inline-block; font-weight: bold; width: 100px;">Amount:</label>
                        <span id="displayAmount"></span>
                    </div>
                    <div>
                        <label style="font-weight: bold;">GST:</label><span> 18%</span>
                    </div>
                    <div>
                        <label style="font-weight: bold;">Total Amount:</label>
                        <span id="displayTotalAmount"> 0.00</span>
                    </div>
                </div>
               
                <!-- Payment Button -->
               
            </div>
            <script>
       
                function updateDisplayValues() {
                    var regno = document.getElementById('regno').value;
                    var name = document.getElementById('name').value;
                    var course = document.getElementById('course').options[document.getElementById('course').selectedIndex].text;
                    var amount = parseFloat(document.getElementById('amountInput').value) || 0;
        
                    document.getElementById('displayRegno').innerText = regno;
                    document.getElementById('displayName').innerText = name;
                    document.getElementById('displayCourse').innerText = course;
                    document.getElementById('displayAmount').innerText = amount.toFixed(2);
        
                    var totalAmount = amount + 54; 
                    document.getElementById('displayTotalAmount').innerText = totalAmount.toFixed(2);
                }
        
           
                document.getElementById('regno').addEventListener('input', updateDisplayValues);
                document.getElementById('name').addEventListener('input', updateDisplayValues);
                document.getElementById('course').addEventListener('change', updateDisplayValues);
                document.getElementById('amountInput').addEventListener('input', updateDisplayValues);

document.getElementById('downloadReportBtn').addEventListener('click', function () {
            html2canvas(document.querySelector(".container.mt-5")).then(canvas => {
                var imgData = canvas.toDataURL('image/png');
                var doc = new jsPDF();
                doc.addImage(imgData, 'PNG', 10, 10);
                doc.save('report.pdf');
            });
        });

            </script> 


   



            <!-- Razorpay Checkout Script -->
            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
            <script>
                // Function to initialize Razorpay with default amount
                function initializeRazorpay(amount) {
                    var options = {
                        key: "{{ env('RAZORPAY_KEY') }}",
                        amount: amount * 100 , // Amount in paise (since Razorpay expects amount in smallest currency unit)
                        currency: "INR", // Replace with your currency code
                        name: "Your Company Name",
                        description: "Payment Description",
                        image: "/images/logo-icon.png",
                        prefill: {
                            name: "ABC",
                            email: "abc@gmail.com"
                        },
                        theme: {
                            color: "#ff7529"
                        },
                        handler: function(response) {
                            // alert('Payment successful. Payment ID: ' + response.razorpay_payment_id);
                            // Optionally, submit the form or perform other actions 
                            document.getElementById('razorpay_id').value = response.razorpay_payment_id;

                            // Submit the form with all details
                            setTimeout(() => {
                                document.getElementById('paymentForm').submit();
                            }, 100);
                        }
                    };
        
                    // Create Razorpay instance
                    var rzp = new Razorpay(options);
        
                    // Open Razorpay Checkout on button click
                    document.getElementById('payButton').addEventListener('click', function(e) {
                        rzp.open();
                        e.preventDefault();
                    });
                }
        
                // Function to update Razorpay amount based on user input
                function updateRazorpayAmount() {
                    var amount = parseFloat($('#displayTotalAmount').text());
                    console.log(amount)
                    if (amount && !isNaN(amount)) {
                        initializeRazorpay(amount); // Reinitialize Razorpay with updated amount
                    } else {
                        // alert('Please enter a valid amount.');
                    }
                }
      
                updateRazorpayAmount();
            </script>
     


     <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
@include('layout.footer')
