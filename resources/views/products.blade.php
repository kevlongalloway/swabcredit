<x-home-layout>
    <x-landing-navbar :services="$services"/>

    <div class="w-100">
    <!-- Component Call To Action 1 Start -->
        <section class="py-5 mt-5" style="background:#F7E976; margin-top:4rem !important; min-height:400px;">
    	   <div class="container">
    		  <div class="row shadow" style="min-height:400px;">
                    <div class="col-md-8 mx-auto text-center align-middle shadow-lg" style="background:url('{{ url('../images/splash1.jpg') }}'); background-size:cover;">
    			     	<h1 class="my-3 font-title font-weight-bold mobile-text-title cwhite">{{ __('products.tax-preparation.title') }}</h1>
    				    <p class="paragraph font-title p-3 mobile-text-bigger cwhite">{{ __('products.tax-preparation.description2') }}</p>

                    </div>
                <div class="col-md-4 mx-auto text-center d-flex justify-content-center align-center" style="background:#3D0C01;">
                    <a class="my-4 btn btn-warning d-flex mobile-text-big" href="{{ url('services/tax-preparation') }}">{{ __('Get Started Today') }}</a>
                </div>
    	   </div>
        </section>
    </div>
    <!-- Component Call To Action 1 End -->

    <!-- Component List Services -->
    <div style="background:linear-gradient(180deg, #F7E976, #C23B21);">
        <div class="container">
            <section class="feature-style-7 p-relative font-title mx-2" style="padding:1.5rem; border-radius:10px;">
                <div class="container">
                    <div class="row py-4 cwhite p-relative">
                        <div class="col-12 col-md-4">
                            <div class="content-feature text-center  py-3 px-2 my-3 border-light rounded shadow" style="background:url('{{ url('../images/taxprep.jpg') }}'); background-size:cover;">
                                <i class="fa fa-code title-icon my-3"></i>
                                <h4 class="title">{{ __('Tax Prep') }}</h4>
                                <p class="py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, hic illum. Molestias corporis quo esse optio ducimus repellendus ullam aspernatur laboriosam architecto debitis? Illum deserunt ipsa laudantium sit, nostrum sint.</p>
                                <a href="#" class="uppercase p-2 csuccess bolder">Learn More</a>
                            </div>

                        </div>
                        <div class="col-12 col-md-4">
                            <div class="content-feature text-center py-3 px-2 my-3 border-light rounded shadow" style="background:url('{{ url('../images/taxprep.jpg') }}'); background-size:cover;">
                                <i class="fa fa-cubes title-icon my-3"></i>
                                <h4 class="title">{{ __('Accounting') }}</h4>
                                <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error quasi tempora voluptates fugiat ad ducimus quibusdam corporis culpa quam, modi reiciendis id eveniet, harum aperiam laboriosam tenetur nam quas? Deserunt?</p>
                                <a href="#" class="uppercase p-2 csuccess bolder">Learn More</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="content-feature text-center py-3 px-2 my-3 border-light rounded shadow" style="background:url('{{ url('../images/taxprep.jpg') }}'); background-size:cover;">
                                <i class="fa fa-money title-icon my-3"></i>
                                <h4 class="title">{{ __('Notary') }}</h4>
                                <p class="py-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero perferendis aut enim quidem, illo in, praesentium dolorem libero esse eveniet, odio ducimus fugit inventore dolorum magnam pariatur sequi. Eius, corrupti!</p>
                                <a href="#" class="uppercase p-2 csuccess bolder">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
        </div>
    </div>
    <!-- Component List Services End-->

    <svg class="p-relative"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
            <linearGradient id="ycurve">
                <stop offset="5%" stop-color="#414345" />
                <stop offset="95%" stop-color="#232526" />
            </linearGradient>
            <linearGradient id="rcurve" gradientTransform="rotate(90)">
                <stop offset="5%" stop-color="#C23B21" />
                <stop offset="95%" stop-color="#7C0A01" />
            </linearGradient>
        </defs> 
        <path fill="url('#rcurve')" fill-opacity="1" d="M0,160L120,176C240,192,480,224,720,218.7C960,213,1200,171,1320,149.3L1440,128L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
    </svg>

</x-home-layout>
