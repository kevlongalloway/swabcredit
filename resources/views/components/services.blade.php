<style>
    #timeline {
        display: flex;
        background-color: #FFFFFF;
    }

    #timeline:hover .tl-item {
        width: 23.3333%;
    }

    .tl-item {
        transform: translate3d(0, 0, 0);
        position: relative;
        width: 25%;
        height: 60vh;
        min-height: 600px;
        color: #fff;
        overflow: hidden;
        transition: width 0.5s ease;
    }

    .tl-item:before,
    .tl-item:after {
        transform: translate3d(0, 0, 0);
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
    }

    .tl-item:after {
        background: rgba(124, 10, 1, 0.85);
        opacity: 1;
        transition: opacity 0.5s ease;
    }

    .tl-item:before {
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, black 75%);
        z-index: 1;
        opacity: 0;
        transform: translate3d(0, 0, 0) translateY(50%);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .tl-item:hover {
        width: 30% !important;
    }

    .tl-item:hover:after {
        opacity: 0;
    }

    .tl-item:hover:before {
        opacity: 1;
        transform: translate3d(0, 0, 0) translateY(0);
        transition: opacity 1s ease, transform 1s ease 0.25s;
    }

    .tl-item:hover .tl-content {
        opacity: 1;
        transform: translateY(0);
        transition: all 0.75s ease 0.5s;
    }

    .tl-item:hover .tl-bg {
        filter: grayscale(0);
    }

    .tl-content {
        transform: translate3d(0, 0, 0) translateY(25px);
        position: relative;
        z-index: 1;
        text-align: center;
        margin: 0 1.618em;
        top: 55%;
        opacity: 0;
    }

    .tl-content h1 {
        font-family: 'Pathway Gothic One', Helvetica Neue, Helvetica, Arial, sans-serif;
        text-transform: uppercase;
        color: #1779cf;
        font-size: 1.44rem;
        font-weight: normal;
    }

    .tl-year {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        z-index: 1;
        border-bottom: 1px solid #fff;
    }

    .tl-year p {
        font-family: 'Pathway Gothic One', Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 20px;
        line-height: 0;
        padding: 0.5em 0;
    }

    .tl-bg {
        transform: translate3d(0, 0, 0);
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-size: cover;
        background-position: center center;
        transition: filter 0.5s ease;
        filter: grayscale(100%);
    }
</style>
<div style="background-color:#FFFFFF;">
    <div class="container h-100 min-h-full">
        <h2 class="font-jumbo text-center font-title font-weight-bold" style="width:100%;">
            {{ __('Services') }}
        </h2>
        <div class="row">
            <div id="carouselExampleIndicators"
                class="carousel slide h-100 min-h-fit car-indicators-padding carbox col-12"
                style="min-height:450px; overflow:hidden;" data-ride="carousel">
                <ol class="carousel-indicators p-5">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner shadow card" style="height:100%;">
                    <div class="carousel-item h-100 border shadow rounded active card"
                        style="background: linear-gradient(#3D0C01, #7C0A01);">
                        <div class="container d-block w-100  text-center cwhite" alt="First slide">
                            <h1>{{ __('products.tax-preparation.title') }}</h1>
                            <h2 class="text-base mobile-text-big">
                                {{ __('products.tax-preparation.description') }}
                            </h2>
                        </div>
                    </div>
                    <div class="carousel-item h-100 border shadow rounded bg-hue-dark card">
                        <div class="container d-block w-100 text-center cwhite" alt="Second slide">
                            <h1>{{ __('products.business-formation.title') }}</h1>
                            <h2 class="text-base mobile-text-big">
                                {{ __('products.business-formation.description') }}
                            </h2>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">{{ __('Previous') }}</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">{{ __('Next') }}</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row py-3 sm:col">
            <div class="col sm:row mx-auto">
                <img class="py-3 overflow-hidden w-100" src="{{ url('../images/couple.webp') }}" alt=""
                    style="max-height:450px;">
            </div>
            <div class="col sm:row">
                <div class="container py-4 text-left">
                    <h2 class="text-left font-title font-weight-bold mobile-text-big w-100">
                        {{ __('We Will Help You Rebuild Your Present') }}
                    </h2>
                    <p class="text-base mobile-text w-100">
                        {{ __('Our mission is to provide the best services to our clients. We are always looking for new
                        ways to improve our services.') }}
                    </p>

                </div>
            </div>
        </div>
        <div class="row py-3 sm:col">
            <div class="col sm:row">
                <div class="container py-4 text-left">
                    <h2 class="text-left font-title font-weight-bold mobile-text-big w-100">
                        {{ __('We Will Help You Rebuild Your Present') }}
                    </h2>
                    <p class="text-base mobile-text w-100">
                        {{ __('Our mission is to provide the best services to our clients. We are always looking for new
                        ways to improve our services.') }}
                    </p>

                </div>
            </div>
            <div class="col sm:row mx-auto">
                <img class="py-3 overflow-hidden w-100" src="{{ url('../images/couple.webp') }}" alt=""
                    style="max-height:450px;">
            </div>
        </div>
    </div>

    <section id="timeline" class="container mx-auto px-0 py-3 relative">

        <div class="tl-item">
            <!-- https://placeimg.com/ used to generate photos until permanent photos are found-->
            <div class="tl-bg" style="background-image: url(https://placeimg.com/801/801/nature)"></div>

            <div class="tl-year">
                <p class="f2 heading--sanSerif mobile-text-big">{{ __('In 10 Days') }}</p>
            </div>

            <div class="tl-content">
                <h1>Lorem ipsum dolor sit</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
            </div>

        </div>

        <div class="tl-item">

            <div class="tl-bg" style="background-image: url(https://placeimg.com/802/802/nature)"></div>

            <div class="tl-year">
                <p class="f2 heading--sanSerif mobile-text-big">{{ __('In 45 Days') }}</p>
            </div>

            <div class="tl-content">
                <h1 class="f3 text--accent ttu">Vestibulum laoreet lorem</h1>
                <p>Suspendisse potenti. Sed sollicitudin eros lorem, eget accumsan risus dictum id. Maecenas dignissim
                    ipsum vel mi rutrum egestas. Donec mauris nibh, facilisis ut hendrerit vel, fringilla sed felis.
                    Morbi sed nisl et arcu.</p>
            </div>

        </div>

        <div class="tl-item">

            <div class="tl-bg" style="background-image: url(https://placeimg.com/803/803/nature)"></div>

            <div class="tl-year">
                <p class="f2 heading--sanSerif mobile-text-big">{{ __('In 90 Days') }}</p>
            </div>

            <div class="tl-content">
                <h1 class="f3 text--accent ttu">Phasellus mauris elit</h1>
                <p>Mauris cursus magna at libero lobortis tempor. Suspendisse potenti. Aliquam interdum vulputate neque
                    sit amet varius. Maecenas ac pulvinar nisi. Fusce vitae nunc ultrices, tristique dolor at, porttitor
                    dolor. Etiam id cursus arcu, in dapibus nibh. Pellentesque non porta leo. Nulla eros odio, egestas
                    quis efficitur vel, pretium sed.</p>
            </div>

        </div>

        <div class="tl-item">

            <div class="tl-bg" style="background-image: url(https://placeimg.com/800/800/nature)"></div>

            <div class="tl-year">
                <p class="f2 heading--sanSerif mobile-text-big">{{ __('In 180 Days') }}</p>
            </div>

            <div class="tl-content">
                <h1 class="f3 text--accent ttu">Mauris vitae nunc elem</h1>
                <p>Suspendisse ac mi at dolor sodales faucibus. Nunc sagittis ornare purus non euismod. Donec vestibulum
                    efficitur tortor, eget efficitur enim facilisis consequat. Vivamus laoreet laoreet elit. Ut ut
                    varius metus, bibendum imperdiet ex. Curabitur diam quam, blandit at risus nec, pulvinar porttitor
                    lorem. Pellentesque dolor elit.</p>
            </div>

        </div>
    </section>
</div>