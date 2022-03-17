<div>
    <div class="w-100 min-h-full" style="background-color:#DAA520;">
        <h2 class="font-jumbo text-center font-title font-weight-bold" style="width:100%;">
            {{ __('Services') }}
        </h2>
        <div class="container h-75 min-h-fit">
            <div id="carouselExampleIndicators" class="carousel slide h-100 min-h-fit car-indicators-padding carbox" data-ride="carousel">
                <ol class="carousel-indicators p-5">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner shadow" style="height:100%;">
                    <div class="carousel-item h-100 border shadow rounded active" style="background: linear-gradient(#3D0C01, #7C0A01);">
                        <div class="container d-block w-100  text-center cwhite" alt="First slide">
                            <h1>{{ __('products.tax-preparation.title') }}</h1>
                            <h2 class="text-base mobile-text-big">
                                {{ __('products.tax-preparation.description') }}
                            </h2>
                        </div>
                    </div>
                    <div class="carousel-item h-100 border shadow rounded bg-hue-dark">
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
</div>