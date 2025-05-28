{{-- resources/views/pages/services.blade.php --}}
@extends('layout.app')

@section('title', 'Services | Profusion')

@section('content')
    <!-- Services Section Start -->
    <div class="service_section layout_padding">
        <div class="container">
            <h1 class="service_taital">Our Classes</h1>
            <div class="service_section_2 layout_padding">
                <div class="owl-carousel owl-theme">
                    @php
                        // Map styles to their corresponding image filenames
                        $images = [
                            'Rock' => 'img-1.png',
                            'Hip Hop' => 'img-2.png',
                            'Style' => 'img-1.png', // Fallback to img-1.png
                        ];
                    @endphp

                    @foreach(['Rock', 'Hip Hop', 'Style', 'Rock', 'Rock', 'Hip Hop', 'Style'] as $style)
                        <div class="item">
                            <div class="image_box">
                                <img src="{{ asset('P/Profusion-1.0.0/images/' . ($images[$style] ?? 'img-1.png')) }}"
                                     alt="{{ $style }} Dance"
                                     onerror="this.src='{{ asset('P/Profusion-1.0.0/images/img-1.png') }}';" />
                            </div>
                            <h3 class="sound_text">{{ $style }} <br>Dance</h3>
                            <div class="buy_bt"><a href="#">Read More</a></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 35,
                nav: true,
                center: true,
                responsive: {
                    0: { items: 1, margin: 0 },
                    575: { items: 1, margin: 0 },
                    768: { items: 3, margin: 0 },
                    1000: { items: 3 }
                }
            });
        });
    </script>
@endsection
