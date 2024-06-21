@include('layout.header')

<section class="cover-background full-screen bg-dark-gray ipad-top-space-margin position-relative section-dark md-h-auto"
    style="background-image: url('{{asset('frontend/vdc_images/stu2.jpg') }}')">
    <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
        data-particle-options='{"particles": {"number": {"value": 12,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#ed00a8", "#ed00a8", "#ed00a8", "#ed00a8"]},"shape": {"type": "edge","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.8,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 5,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
    </div>
    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-xl-7 col-lg-8 col-md-10 text-white position-relative text-center text-lg-start">
                <div class="fs-55 sm-fs-60 xs-fs-40 fw-600 -mb-20px ls-minus-2px overflow-hidden">
                    <div class="d-inline-block"
                        data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900 }'>
                        All the skills you need in 
                        <div class="highlight-separator" data-shadow-animation="true" data-animation-delay="1500">
                             one place
                        </div>
                    </div>
                </div>
                <div class="fs-18 fw-300 mb-30px w-80 sm-w-100 opacity-6 d-block mx-auto mx-lg-0 overflow-hidden">
                    <span class="d-inline-block lh-32"
                        data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 300 }'>Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Quis a cumque omnis esse cum, facilis porro
                        inventore.</span>
                </div>
                <div class="overflow-hidden pt-5px">
                    <a href="#"
                        class="btn btn-extra-large btn-yellow btn-rounded  btn-box-shadow btn-switch-text d-inline-block me-15px xs-m-10px align-middle fw-600"
                        data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 500 }'>
                        <span>
                            <span class="btn-double-text" data-text="Book Now">Book</span>
                            <span><i class="feather icon-feather-arrow-right"></i></span>
                            
                        </span>
                    </a>
                    <div class="text-white fs-15 d-inline-block last-paragraph-no-margin align-middle"
                        data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 700 }'>
                        <div class="-opacity-6 ls-minus-05px text-white d-inline-block cursor-pointer">
                            <i class="feather icon-feather-map-pin" aria-hidden="true"></i>
                            <span class="fw-500 d-inline-block">Kerala</span>
                        </div>
                    </div>
               
                </div>
            </div>
            <div class="col-xl-5 col-lg-4">
            </div>
        </div>
    </div>
</section>



@include('layout.footer')

