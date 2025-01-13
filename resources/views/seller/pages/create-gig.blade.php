<x-layout>


    <style>
        body {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        }

        .form-container {
            max-width: 900px;
            margin: 2rem auto;
            padding: 10px;
            box-shadow: 10px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(231, 97, 97, 0.08);
        }

        .section-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 24px;
            background: linear-gradient(90deg, #2d3436 0%, #636e72 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #1dbf73 0%, #19a463 100%);
            border-radius: 2px;
        }

        .form-label {
            font-weight: 500;
            color: #2d3436;
            margin-bottom: 8px;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #e4e5e7;
            padding: 12px 16px;
            transition: all 0.3s ease;
            background: linear-gradient(to bottom, #ffffff 0%, #fafafa 100%);
        }

        .form-control:focus {
            border-color: #1dbf73;
            box-shadow: 0 0 0 3px rgba(29, 191, 115, 0.1);
            background: white;
        }

        .package-input {
            background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);
            border: 1px solid #e4e5e7;
        }

        .platform-type {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 16px;
            padding: 16px;
            background: linear-gradient(to bottom, #ffffff 0%, #f8f9fa 100%);
            border-radius: 8px;
            border: 1px solid #e4e5e7;
        }

        .form-check {
            padding: 8px;
            border-radius: 6px;
            transition: all 0.2s ease;
        }

        .form-check:hover {
            background: rgba(29, 191, 115, 0.05);
        }

        .btn-primary {
            background: linear-gradient(90deg, #1dbf73 0%, #19a463 100%);
            border: none;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #19a463 0%, #168f54 100%);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(29, 191, 115, 0.2);
        }

        .file-upload {
            background: linear-gradient(to bottom, #ffffff 0%, #f8f9fa 100%);
            border: 2px dashed #e4e5e7;
            padding: 32px;
            border-radius: 12px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .file-upload:hover {
            border-color: #1dbf73;
            background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);
        }

        section {
            padding: 24px;
            margin-bottom: 32px;
            border-radius: 12px;
            background: linear-gradient(to bottom, #ffffff 0%, #fafafa 100%);
            border: 1px solid rgba(228, 229, 231, 0.6);
        }
    </style>
    <x-nav />
    <x-sidebar />


    <div class="container-fluid ">
        <div class="form-container shadow-lg">
            <form action="/seller/add-gig" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6"> <!-- Overview Section -->
                        <section>
                            <h2 class="section-title">Overview</h2>

                            <div class="mb-4">
                                <label for="gigTitle" class="form-label">Gig Title</label>
                                <input name="title" type="text" class="form-control"
                                    placeholder="I will do marketing design for your business">
                            </div>

                            <div class="mb-4">
                                <label for='category' class="form-label">Category</label>
                                <select name="category" class="form-select form-control" id="category">
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Platform Type</label>
                                <div class="types"></div>
                                <x-loader />
                                {{-- <div class="platform-type p-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="facebook">
                                        <label class="form-check-label" for="facebook">Facebook</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="instagram">
                                        <label class="form-check-label" for="instagram">Instagram</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="linkedin">
                                        <label class="form-check-label" for="linkedin">LinkedIn</label>
                                    </div>

                                </div> --}}
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Search Tags</label>
                                <input type="text" class="form-control" placeholder="Enter tags separated by commas">
                            </div>
                            <section>
                                <h2 class="section-title">Description & FAQ</h2>
                                <div class="mb-4">
                                    <label class="form-label">Description</label>
                                    <textarea name='desc' class="form-control" rows="3" placeholder="Write a detailed description of your gig"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">FAQ</label>
                                    <textarea name='faq' class="form-control" rows="2" placeholder="Add frequently asked questions"></textarea>
                                </div>
                            </section>
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <!-- Pricing Section -->
                        <section>
                            <h2 class="section-title">Pricing</h2>
                            <div class="mb-4">
                                <label class="form-label">Basic Package</label>
                                <input name="base_package" type="text" class="form-control package-input"
                                    placeholder="Enter basic package price">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Standard Package</label>
                                <input name='standard_package' type="text" class="form-control package-input"
                                    placeholder="Enter standard package price">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Premium Package</label>
                                <input name='premium_package' type="text" class="form-control package-input"
                                    placeholder="Enter premium package price">
                            </div>
                            <!-- Gallery Section -->
                            <section>
                                <h2 class="section-title">Gallery</h2>
                                <div class="mb-4">
                                    <label class="form-label">Upload Images</label>
                                    <div class="file-upload">
                                        <input name="images" type="file" class="form-control" id="gallery-upload"
                                            multiple accept="image/*">
                                        <p class="text-muted mt-3 mb-0">Drag and drop your images here or click to
                                            browse
                                        </p>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <h2 class="section-title">search tags</h2>
                                <div class="mb-4">
                                    <label class="form-label">Upload search tags</label>
                                    <div class="">
                                        <input name="tags" type="text" class="form-control package-input"
                                            placeholder="search tags">

                                    </div>
                                </div>
                            </section>
                        </section>
                    </div>
                </div>
                <!-- Save Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary ">Save & Continue</button>
                </div>

            </form>




        </div>
    </div>
    <x-jquery />

    <script>
        $('#category').on('change', function() {
            let option = $(this).val();
            let _token = $('meta[name="csrf-token"]').attr('content');
            console.log(_token); // Corrected here, use _token

            $.ajax({
                url: '/seller/get-relevent-values',
                type: 'POST',
                data: {
                    option,
                    _token
                },

                beforeSend: function() {
                    $('.skeleton-loader').removeClass('d-none')
                    $('.types').addClass('d-none')
                },
                success: function(response) {
                    console.log(response);
                    let data = ''
                    response.forEach(function(item, index) {
                        data += `<div class="form-check">
                            
                            <input value="${item}" name='category_values' class="form-check-input" type="checkbox"  id="checkbox-${index}">
                            
                            <label class="form-check-label" for="checkbox-${index}">${item}</label>

                                </div>`
                    })
                    $('.types').removeClass('d-none')
                    $('.types').html(data)
                    $('.skeleton-loader').addClass('d-none')


                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        });
    </script>

</x-layout>
