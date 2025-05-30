<!-- resources/views/components/footer.blade.php -->
<footer class="text-white pt-5 pb-4" style="background-color: #14375A;">
    <div class="container text-md-left">
        <div class="row text-md-left">
            <!-- Logo and About -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold">Your Company</h5>
                <p>
                    We provide high quality services for clients all around the world.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold">Quick Links</h5>
                <p><a href="{{ route('home') }}" class="text-white text-decoration-none">Home</a></p>
                <p><a href="{{ route('about') }}" class="text-white text-decoration-none">About</a></p>
                <p><a href="{{ route('services') }}" class="text-white text-decoration-none">Services</a></p>
                <p><a href="{{ route('contact') }}" class="text-white text-decoration-none">Contact</a></p>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold">Contact</h5>
                <p><i class="fa fa-home mr-3"></i> Phnom Penh, Cambodia</p>
                <p><i class="fa fa-envelope mr-3"></i> info@example.com</p>
                <p><i class="fa fa-phone mr-3"></i> +855 12 345 678</p>
            </div>

            <!-- Social Media -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold">Follow Us</h5>
                <a class="btn btn-outline-light btn-floating m-1" href="#"><i class="fa fa-facebook"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#"><i class="fa fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#"><i class="fa fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>

        <hr class="mb-4">

        <!-- Footer Bottom -->
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-8">
                <p class="text-white">
                    © {{ now()->year }} Your Company. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
