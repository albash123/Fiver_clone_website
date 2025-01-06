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

    </div>



    <x-jquery>

    </x-jquery>
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
