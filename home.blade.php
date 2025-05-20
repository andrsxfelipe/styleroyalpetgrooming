<!doctype html>
<html lang="en">
    <head>
        <!-- Smith -->
        <!-- Head Section -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Style Royal Pet Grooming offers professional mobile dog grooming services in South Florida and North Miami. Quality care, personalized attention, and convenient grooming for your pet.">
        <meta name="keywords" content="Mobile Pet Grooming, Dog Grooming, Pet Grooming South Florida, Pet Grooming Miami, Flea Treatment, Rabbit Grooming, Miami Pet Grooming, Cat Grooming">
        <meta name="author" content="Style Royal Pet Grooming">
        <meta name="google-site-verification" content="_aHggsfMZZVNtGijG2uXBT-WtgZf2u3ekmcc2zhCAf4" />

        <link rel="icon" type="image/png" href="{{ asset('images/pata.png') }}"/>
        <title>Style Royal Pet Grooming</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- Leaflet CSS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap" rel="stylesheet">

        <!-- Laravel Assets -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/templatemo-ebook-landing.css') }}" rel="stylesheet">
        
        <!--

TemplateMo 588 ebook landing

https://templatemo.com/tm-588-ebook-landing

-->
    </head>
    
    <body>

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- <i class="navbar-brand-icon bi-scissors me-2"></i> -->
                        <img src="{{ asset('images/StyleRoyal.jpg') }}" class="scrollspy-example-item-image img-fluid" style="width: 50px;" alt="">
                        <span>Groom!</span>
                    </a>

                    <div class="d-lg-none ms-auto me-3">
                        <a href="#section_5" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                            <i class="btn-icon bi-calendar-check"></i>
                            <span>Set appointment</span><!-- duplicated another one below for mobile -->
                        </a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto me-lg-4">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Gallery</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Coverage</a>
                            </li>

                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="#section_5" class="btn custom-btn custom-border-btn btn-naira btn-inverted click-scroll">
                                <i class="btn-icon bi-calendar-check"></i>
                                <span>Set appointment</span><!-- duplicated above one for mobile -->
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Seccion Home -->
            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12 mb-5 pb-5 pb-lg-0 mb-lg-0">
                            <div>
                                <a class="link--kale me-4" href="https://www.instagram.com/style_royal0221/" target="_blank">
                                    <i class="bi bi-instagram fs-4"></i>
                                </a>
                                <a class="link--kale me-4" href="https://wa.me/19545290436" target="_blank">
                                    <i class="bi bi-whatsapp fs-4"></i>
                                </a>
                                <a class="link--kale me-4" href="https://www.facebook.com/profile.php?id=61573643033624" target="_blank">
                                    <i class="bi bi-facebook fs-4"></i>
                                </a>
                            </div>
                            <h6 class="mt-4">Mobile grooming services</h6>
                            <h1 class="text-white mb-4">Style Royal Pet Grooming</h1>
                            <div>
                                <a class="link link--kale mb-2" href="tel:+19545290436">
                                    <i class="bi bi-telephone" style="margin-right: 5px;"></i>
                                    +1 (954) 529-0436
                                </a>
                            </div>
                        </div>
                        <div class="hero-image-wrap col-lg-6 col-12 mt-3 mt-lg-0">
                            <img src="{{ asset('images/Nacho.png') }}" class="hero-image img-fluid" width=400px; alt="education online books">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Mini seccion de mascotas -->
            <section class="featured-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12">
                            <div class="avatar-group d-flex flex-wrap align-items-center">

                                <img src="{{ asset('images/avatar/1.jpg') }}" class="img-fluid avatar-image" alt="">
                                <img src="{{ asset('images/avatar/2.jpg') }}" class="img-fluid avatar-image avatar-image-left" alt="">
                                <img src="{{ asset('images/avatar/3.jpg') }}" class="img-fluid avatar-image avatar-image-left" alt="">
                                <img src="{{ asset('images/avatar/4.jpg') }}" class="img-fluid avatar-image avatar-image-left" alt="">
                                <img src="{{ asset('images/avatar/5.jpg') }}" class="img-fluid avatar-image avatar-image-left" alt="">
                                <img src="{{ asset('images/avatar/6.jpg') }}" class="img-fluid avatar-image avatar-image-left" alt="">
                                <!-- <div class="reviews-group mt-3 mt-lg-0">
                                    <strong>4.5</strong>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                    <small class="ms-3"><strong>Mobile Grooming</strong></small>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-lg-5"></section>

            <!-- Seccion services -->
            <section class="book-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12 text-center">
                            <h6>About us</h6>
                            <h2>Our Services</h2>
                        </div>

                        <p class="mb-5">We are a mobile pet grooming company serving South Florida. While we don’t have a physical location, our equipped vans come directly to your home—from North Miami and Hialeah to Pompano Beach. We focus on the hygiene and well-being of your pets, working with dogs, cats, and even rabbits. Our mission is to provide gentle, stress-free grooming while prioritizing your pets’ health and happiness. We value your time and always strive to be punctual and efficient during our visits.</p>

                        <div class="col-lg-4 col-12">
                            <nav id="navbar-example3" class="h-100 flex-column align-items-stretch">
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link smoothscroll" href="#item-1"><strong>Full Bath</strong></a>
                                    <a class="nav-link smoothscroll" href="#item-2"><strong>Full Grooming</strong></a>
                                    <a class="nav-link smoothscroll" href="#item-3"><strong>Deep Dental Cleaning</strong></a>
                                    <a class="nav-link smoothscroll" href="#item-4"><strong>Pet Colorimetry</strong></a>
                                    <a class="nav-link smoothscroll" href="#item-5"><strong>Anti-Flea Treatment</strong></a>
                                </nav>
                            </nav>
                        </div>

                        <div class="col-lg-8 col-12">
                            <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">

                                <div class="scrollspy-example-item" id="item-1">
                                    <h5>Full Bath Package (FB)</h5>
                                    <p>Our Full Bath service provides a complete grooming experience to keep your pet clean, healthy, and feeling fresh. This package includes:</p>
                                    <p><strong>Bath:</strong> A thorough wash using high-quality, pet-friendly shampoos that cleanse and nourish the coat.</p>
                                    <p><strong>Nail Trimming:</strong> Careful clipping of nails to a safe and comfortable length, promoting healthy paws and preventing discomfort.</p>
                                    <p><strong>Teeth Brushing:</strong> Gentle brushing to reduce plaque buildup, support oral hygiene, and keep breath fresh.</p>
                                    <p><strong>Sanitary Trim:</strong> Neat trimming around sensitive areas to maintain cleanliness and hygiene.</p>
                                    <p><strong>Anal Gland Expression:</strong> Professional expression of anal glands to ensure your pet's comfort and prevent health issues.</p>
                                </div>

                                <div class="scrollspy-example-item" id="item-2">
                                    <h5>Full Grooming Package (FG)</h5>
                                    <p>The <strong>Full Grooming</strong> service includes everything from the Full Bath (FB) package, plus a haircut according to your preferences.</p>
                                    <p><strong>Haircut:</strong> A precise haircut based on your instructions, including the desired length, style, or specific breed standards. Our groomers ensure a clean, polished finish while keeping your pet comfortable and well-groomed.</p>
                                    <div class="row">

                                        <div class="col-lg-6 col-12 mb-3">
                                            <img src="{{ asset('images/D_Macey1.jpg') }}" class="scrollspy-example-item-image img-fluid" style="width: 300px;" alt="">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3">
                                            <img src="{{ asset('images/D_Difirka1.jpg') }}" class="scrollspy-example-item-image img-fluid" style="width: 300px;" alt="">
                                        </div>

                                    </div>
                                </div>

                                <div class="scrollspy-example-item" id="item-3">
                                    <h5>Deep Dental Cleaning</h5>
                                    <p>Our <strong>Deep Dental Cleaning</strong> offers a thorough cleaning that goes beyond regular brushing to keep your pet's teeth and gums healthy. This service removes plaque and tartar, cares for the gums, and helps eliminate bad breath, ensuring better oral hygiene and overall well-being. It's ideal for pets that need a more complete dental cleaning to stay healthy and comfortable.</p>
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-12 mb-3">
                                        <img src="{{ asset('images/Dental_before.jpg') }}" class="scrollspy-example-item-image img-fluid" alt="">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3">
                                        <img src="{{ asset('images/Dental_after.jpg') }}" class="scrollspy-example-item-image img-fluid" alt="">
                                        </div>

                                    </div>
                                </div>

                                <div class="scrollspy-example-item" id="item-4">
                                    <h5>Pet Colorimetry</h5>
                                    <p>Our <strong>Pet Colorimetry</strong> service uses safe, pet-friendly products to enhance your pet’s natural color or achieve a stylish, customized look. Whether you want to brighten their coat, cover stains, or create unique patterns, we ensure a beautiful and professional finish while keeping your pet’s comfort and safety a priority.</p>
                                    <img src="{{ asset('images/Pet_Colorimetry.jpg') }}" class="scrollspy-example-item-image img-fluid mb-3 d-block mx-auto" style="width: 400px;" alt="">
                                </div>

                                <div class="scrollspy-example-item" id="item-5">
                                    <h5>Anti-Flea Treatment</h5>
                                    <p>Our Anti-Flea Treatment effectively removes and prevents fleas using safe, high-quality products designed specifically for pets. This treatment helps protect your pet from itching, irritation, and potential health issues caused by fleas, ensuring they stay comfortable and healthy.</p>
                                    <img src="{{ asset('images/Bath.jpg') }}" class="scrollspy-example-item-image img-fluid mb-3 d-block mx-auto" style="width: 400px;" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seccion Gallery -->
            <section class="gallery-section section-padding" id="section_3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="text-center">
                                <h2>Gallery</h2>
                                <h6>Some of our happy customers</h6>
                            </div>
                            <!--Carrusel-->
                            <div id="petCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <!--Primer item del carrusel-->       
                                    <div class="carousel-item active">
                                        <div class="p-4 bg-light rounded shadow">
                                            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                                                <div class="me-md-3 mb-3 mb-md-0 text-center">
                                                    <img src="{{ asset('images/carrusel/1.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                                <div>
                                                    <img src="{{ asset('images/carrusel/2.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Segundo par-->
                                    <div class="carousel-item">
                                        <div class="p-4 bg-light rounded shadow">
                                            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                                                <div class="me-md-3 mb-3 mb-md-0 text-center">
                                                    <img src="{{ asset('images/carrusel/3.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                                <div class="ms-md-3 text-center">
                                                    <img src="{{ asset('images/carrusel/4.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="carousel-item">
                                        <div class="p-4 bg-light rounded shadow">
                                            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                                                <div class="me-md-3 mb-3 mb-md-0 text-center">
                                                    <img src="{{ asset('images/carrusel/5.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                                <div class="ms-md-3 text-center">
                                                    <img src="{{ asset('images/carrusel/6.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="carousel-item">
                                        <div class="p-4 bg-light rounded shadow">
                                            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                                                <div class="me-md-3 mb-3 mb-md-0 text-center">
                                                    <img src="{{ asset('images/carrusel/7.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                                <div class="ms-md-3 text-center">
                                                    <img src="{{ asset('images/carrusel/8.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="carousel-item">
                                        <div class="p-4 bg-light rounded shadow">
                                            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                                                <div class="me-md-3 mb-3 mb-md-0 text-center">
                                                    <img src="{{ asset('images/carrusel/9.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                                <div class="ms-md-3 text-center">
                                                    <img src="{{ asset('images/carrusel/10.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="carousel-item">
                                        <div class="p-4 bg-light rounded shadow">
                                            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                                                <div class="me-md-3 mb-3 mb-md-0 text-center">
                                                    <img src="{{ asset('images/carrusel/11.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                                <div class="ms-md-3 text-center">
                                                    <img src="{{ asset('images/carrusel/12.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="carousel-item">
                                        <div class="p-4 bg-light rounded shadow">
                                            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                                                <div class="me-md-3 mb-3 mb-md-0 text-center">
                                                    <img src="{{ asset('images/carrusel/13.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                                <div class="ms-md-3 text-center">
                                                    <img src="{{ asset('images/carrusel/14.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="carousel-item">
                                        <div class="p-4 bg-light rounded shadow">
                                            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                                                <div class="me-md-3 mb-3 mb-md-0 text-center">
                                                    <img src="{{ asset('images/carrusel/15.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                                <div class="ms-md-3 text-center">
                                                    <img src="{{ asset('images/carrusel/16.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="carousel-item">
                                        <div class="p-4 bg-light rounded shadow">
                                            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                                                <div class="me-md-3 mb-3 mb-md-0 text-center">
                                                    <img src="{{ asset('images/carrusel/17.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                                <div class="ms-md-3 text-center">
                                                    <img src="{{ asset('images/carrusel/18.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="carousel-item">
                                        <div class="p-4 bg-light rounded shadow">
                                            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                                                <div class="me-md-3 mb-3 mb-md-0 text-center">
                                                    <img src="{{ asset('images/carrusel/19.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                                <div class="ms-md-3 text-center">
                                                    <img src="{{ asset('images/carrusel/20.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="carousel-item">
                                        <div class="p-4 bg-light rounded shadow">
                                            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                                                <div class="me-md-3 mb-3 mb-md-0 text-center">
                                                    <img src="{{ asset('images/carrusel/21.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                                <div class="ms-md-3 text-center">
                                                    <img src="{{ asset('images/carrusel/22.jpg') }}" class="img-fluid rounded" style="width: 350px; height: 350px; object-fit: cover;" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Controles del carrusel -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#petCarousel" data-bs-slide="prev" style="filter: brightness(0.4);">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Anterior</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#petCarousel" data-bs-slide="next" style="filter: brightness(0.4);">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Siguiente</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seccion Coverage -->
            <section class="map-section section-padding" id="section_4">
                <div class="container">
                    <div class="row align-items-center">

                        <!-- Texto -->
                        <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                            <div class="text-container">
                                <h6>Pompano Beach - North Miami &</h6>
                                <h6>Weston - Hollywood</h6>
                                <h2>Coverage</h2>
                                <p>We cover a portion of Florida. In the northern area, we reach as far as Pompano Beach, and in the southern area, up to Hialeah.</p>
                                <p>In the western area, our coverage extends from Weston to the eastern area of Hollywood.</p>
                                <p>Some of the main areas we cover include Fort Lauderdale, Hollywood, Pembroke Pines, Pompano Beach, Miramar, Tamarac, Coral Springs, Davie, Weston, Plantation, and Broward County.</p>
                            </div>
                        </div>

                        <!-- Mapa -->
                        <div class="col-lg-4 col-8 mx-auto">
                            <div id="coverage-map" style="height: 400px; width: 100%;"></div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Precio y Cita Seccion -->
            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                        <!-- Formulario de calcular precio -->
                        <div class="col-lg-6 col-12 mb-5">
                            <form class="custom-form ebook-download-form bg-white shadow" id="precio-form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="text-center mb-5">
                                    <h2 class="mb-1">Price Calculator</h2>
                                </div>
                                
                                <div class="ebook-download-form-body">
                                    <div class="input-group mb-4">
                                        <select name="servicio" id="servicio" required class="form-control mb-3">
                                            <option value="" disabled selected>-- Select a service --</option>
                                            @foreach ($servicios as $servicio)
                                                <option value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="input-group mb-4">
                                        <select name="raza" id="raza" required class="form-control mb-3">
                                            <option value="" disabled selected>-- Select a breed  --</option>
                                            @foreach ($razas as $raza)
                                                <option value="{{ $raza->id }}">{{ $raza->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="input-group mb-4">
                                        <select name="peso" id="peso" required class="form-control mb-3">
                                            <option value="" disabled selected>-- Select the size --</option>
                                            <option value="0">0 - 25 pounds</option>
                                            <option value="10">26 - 40 pounds</option>
                                            <option value="20">41 - 50 pounds</option>
                                            <option value="30">51 - 60 pounds</option>
                                            <option value="40">60+ pounds</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-8 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Calculate Price</button>
                                    </div>
                                </div>

                                <br>
                                <h3 id="resultado"></h3> <!-- Texto oculto para mostrar el precio -->

                            </form>
                        </div>

                        <!-- Segundo formulario -->
                        <div class="col-lg-6 col-12">

                            @if (session('success'))
                                <script>
                                    Swal.fire({
                                        icon: 'success',
                                        title: '¡Éxito!',
                                        text: '{{ session('success') }}',
                                    });
                                </script>
                            @endif

                            <form class="custom-form ebook-download-form bg-white shadow" id="formulario" action="{{ route('appointment.send') }}" method="POST">
                                @csrf

                                <div class="text-center mb-5">
                                    <h2 class="mb-1">Schedule an appointment</h2>
                                </div>

                                <div class="ebook-download-form-body">

                                    <div class="input-group mb-4">
                                        <input type="text" name="nombre" class="form-control" placeholder="Your name" required maxlength="50">
                                        <span class="input-group-text"><i class="custom-form-icon bi-person"></i></span>
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="tel" name="celular" class="form-control" placeholder="Phone number" required pattern="[0-9]+" inputmode="numeric" maxlength="13">
                                        <span class="input-group-text"><i class="custom-form-icon bi-phone"></i></span>
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="email" name="email" class="form-control" placeholder="Email address" required maxlength="50">
                                        <span class="input-group-text"><i class="custom-form-icon bi-envelope"></i></span>
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="text" name="mascota" class="form-control" placeholder="Pet's name" required maxlength="15">
                                        <span class="input-group-text"><i class="custom-form-icon bi-hearts"></i></span>
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="date" name="Fecha" class="form-control" value="1000-01-01" min="{{ date('Y-m-d') }}" required>
                                        <!--<span class="input-group-text"><i class="custom-form-icon bi-calendar-check"></i></span>-->
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="time" name="Hora" class="form-control" min="08:00" max="18:00" value="00:00" required>
                                        <!--<span class="input-group-text"><i class="custom-form-icon bi-watch"></i></span>-->
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="text" name="Direccion" class="form-control" placeholder="e.g. 1234 SW 8th St miami fl 33135" required maxlength="50">
                                        <span class="input-group-text"><i class="custom-form-icon bi-house"></i></span>
                                    </div>

                                    <div class="col-lg-8 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control" id="submit-cita">Set Appointment</button>
                                    </div>

                                    <div id="advertencia" class="link2" style="display: none; margin-top: 10px;">
                                        Please, calculate price first
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
            <div class="text-center text-sm text-gray-600 mt-10 p-4 border-t">
              Style Royal Pet Grooming – Serving Davie, Tamarac, Plantation, Fort Lauderdale, Coral Springs, Pompano Beach, and surrounding areas in South Florida.
            </div>
        </main>

        <!-- JAVASCRIPT FILES -->
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/click-scroll.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>