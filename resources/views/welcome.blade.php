<x-layout>
    <x-nav>

    </x-nav>
    <div class="hero">
        <div class="container p-4">
            <h1 class="display-4 font-bold text-white">
                Welcome Back,username

            </h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3 p-2 shadow border-0 rounded-4">
                        <p class="text-semibold text-uppercase text-secondary">
                            recomended for you
                        </p>

                        <div class="d-flex aligm-items-center">

                            <div
                                class="p-3 clip-circle d-flex justify-content-center align-items-center bg-light shadow">

                                <i class="bi book"></i>
                            </div>

                            <div class="">

                                <h6>Post a project brief</h6>
                                <p class="text-secondary">


                                    Get tailerd offer for your need
                                </p>

                            </div>

                        </div>

                    </div>



                </div>
                <div class="col-md-6">
                    <div class="card mb-3 p-2 shadow border-0 rounded-4">
                        <p class="text-semibold text-uppercase text-secondary">
                            recomended for you
                        </p>

                        <div class="d-flex aligm-items-center">

                            <div
                                class="p-3 clip-circle d-flex justify-content-center align-items-center bg-light shadow">

                                <i class="bi book"></i>
                            </div>

                            <div class="">

                                <h6>Post a project brief</h6>
                                <p class="text-secondary">


                                    Get tailerd offer for your need
                                </p>

                            </div>

                        </div>

                    </div>
                </div>

            </div>


        </div>


    </div>

    <div class="container mt-2">
        <h4>Based on your browsing history</h4>

        <ul class="mt-3 mb-0 text-secondary list-unstyled text-capitalize fw-semibold fs-6 d-flex gap-3">
            <li class="active fw-bold relevent-li cursor-pointer">
                Keep exploring

            </li>
            <li class="fw-bold text-secondary relevent-li cursor-pointer ">
                Python development
            </li>
            <li class="fw-bold text-secondary relevent-li cursor-pointer ">
                js

            </li>
            <li class="fw-bold text-secondary relevent-li cursor-pointer ">
                web

            </li>
            <li class="fw-bold text-secondary relevent-li cursor-pointer ">
                Ai

            </li>
        </ul>
        <hr class="m-0">
        <div class="row p-3">
            @foreach ($gigs as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">

                    <a href="/seller/single-gig/{{ $item->id }}"
                        class="card text-decoration-none shadow-lg rounded-3 border-0">
                        <img class="rounded-3 rounded-bottom-0" width="100%" height="200px" class=""
                            style="object-fit: cover" src="{{ asset('/storage/' . $item->images) }}" alt="">
                        <div class="py-4 px-2">

                            <div class="d-flex gap-2 align-items-center">
                                <div class="img user-image">
                                    <img src="https://plus.unsplash.com/premium_photo-1683121366070-5ceb7e007a97?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D"
                                        width="20px" class="rounded-circle border border-success  object-fit-contain"
                                        height="20px" alt="user image">
                                </div>
                                <h6 class="username m-0 text-capitalize">username</h6>
                            </div>
                            <p class="text-secondary-emphasis fw-semibold my-2">
                                {{ $item->desc }}
                            </p>
                            <div class="d-flex">
                                ⭐ <span class="fw-bolder">5.0</span> <span class="text-secondary">
                                    (24)
                                </span>
                            </div>
                            <h6>From $135</h6>
                        </div>
                    </a>
                </div>
            @endforeach


        </div>







        <x-jquery />
        <script>
            let btn = $('.sidebar-btn');
            $('.sidebar').on('click', (e) => {
                e.stopPropagation()
            })
            btn.on('click', function() {
                $('.underlay').removeClass('translate-nx-100');
                setTimeout(() => {

                    $('.sidebar').removeClass('translate-nx-100')

                }, 400);
            });

            $('.underlay').on('click', function() {
                $('.sidebar').addClass('translate-nx-100')

                setTimeout(() => {

                    $('.underlay').addClass('translate-nx-100')

                }, 400);



            });



            $('.close-sidebar').on('click', function() {
                $('.sidebar').addClass('translate-nx-100')

                setTimeout(() => {

                    $('.underlay').addClass('translate-nx-100')

                }, 400);



            });

            $('.relevent-li').each(function(index) {


                $(this).on('click', function() {

                    $('.relevent-li').each(function() {

                        $(this).removeClass('active')

                    })
                    $(this).addClass('active')



                })










            })
        </script>

</x-layout>
