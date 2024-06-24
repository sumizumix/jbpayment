@include('layout.header')
<section class="pt-20px pb-20px top-space-margin page-title-big-typography cover-background round-cursor"
    style="background-image: url({{ asset('frontend-assets/images/banner-image.webp') }}); margin-top: 141px;">
    <div class="container">
        <div class="row h-150px align-items-center">
            <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small appear anime-child anime-complete"
                data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
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
<section>
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-lg-8">
                <div class="card shadow-lg border-0">
                    <div class="card-body text-start p-40px">
                        <form action="{{ route('razorpay.payment.store') }}" class="row g-3" id="paymentForm"
                            method="POST">
                            @csrf
                            <div class="col-md-6">
                                <label class="form-label text-dark-gray text-capitalize fw-600">Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter Your Name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-dark-gray text-capitalize fw-600">Register Number</label>
                                <input type="text" class="form-control" name="regno" id="regno"
                                    placeholder="Enter Your Register Number">

                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-dark-gray text-capitalize fw-600">Email</label>
                                <input type="text" class="form-control" name="email" id="email"
                                    placeholder="Enter Your Email">

                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-dark-gray text-capitalize fw-600">Course Name</label>
                                <select name="cname" class="form-control" id="course">
                                    <option value="">Select Course</option>
                                    @foreach ($views as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-dark-gray text-capitalize fw-600">fee Type</label>
                                <select name="ctype" class="form-control">
                                    <option value="">Select type</option>
                                    @foreach ($data as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-dark-gray text-capitalize fw-600">Amount</label>
                                <input type="text" class="form-control" name="amount" id="amountInput"
                                    onchange="updateRazorpayAmount()" placeholder="Amount">
                                <input type="hidden" class="form-control" name="razorpay_payment_id" id="razorpay_id"
                                    value="">
                            </div>
                            <div class="col-md-6">
                                {{-- <button type="button" id="payButton" class="btn btn-primary mt-3">Proceed to Payment</button> --}}
                                <button type="button" id="payButton"
                                    class="btn btn-extra-small btn-base-color btn-rounded btn-box-shadow btn-switch-text d-inline-block align-middle fw-600 appear anime-complete"
                                    data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 500 }'>
                                    <span>
                                        <span class="btn-double-text" data-text="Proceed to Payment">Proceed to
                                            Payment</span>
                                        <span><i class="feather icon-feather-arrow-up-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-30px">
                        <h6 class="fw-bold fs-18 border-bottom border-base-color">Payment Details</h6>
                        <div class="border-bottom pb-5px pt-5px">
                            <label class="fw-normal text-start">Register
                                Number:</label>
                            <span id="displayRegno" class="float-end fw-bold"></span>
                        </div>
                        <div class="border-bottom pb-5px pt-5px">
                            <label class="fw-normal text-start">Name:</label>
                            <span id="displayName" class="float-end fw-bold"></span>
                        </div>
                        <div class="border-bottom pb-5px pt-5px">
                            <label class="fw-normal text-start">Course:</label>
                            <span id="displayCourse" class="float-end fw-bold"></span>
                        </div>
                        <div class="border-bottom pb-5px pt-5px">
                            <label class="fw-normal text-start">Amount:</label>
                            <span id="displayAmount" class="float-end fw-bold"></span>
                        </div>
                        <div class="border-bottom pb-5px pt-5px">
                            <label class="fw-normal text-start">GST:</label><span class="float-end fw-bold"> 18%</span>
                        </div>
                        <div class="pt-5px">
                            <label class="fw-normal text-start">Total Amount:</label>
                            <span id="displayTotalAmount" class="float-end fw-bold"> 0.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

    document.getElementById('downloadReportBtn').addEventListener('click', function() {
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
            amount: amount * 100, // Amount in paise (since Razorpay expects amount in smallest currency unit)
            currency: "INR", // Replace with your currency code
            name: "JB International Academy",
            description: "JB International Academy Student Payments",
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
