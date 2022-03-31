@push('styles')
<link rel="stylesheet" type="text/css" href="{{ url('/css/components/timeline.css') }}">
@endpush
<div style="background-color:#FFFFFF;">
<div class="container">
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
</div>