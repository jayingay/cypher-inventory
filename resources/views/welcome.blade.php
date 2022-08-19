<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('asset/style.css')}}" rel="stylesheet">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand"><img class="logo" src="{{asset('asset/images/cipherlogo3.png')}}" alt="head"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-success mx-3"> <i class="fa fa-user nav-icon"></i>&nbsp;&nbsp; Log in</a>
                          
                        @endauth
                    </div>    
                @endif
              </div>
            </div>
        </nav>

          <section id="banner">
            <div class="container text-center">
                <div class="hero-img col-lg-12">
                    <img src="{{asset('asset/images/cipherlogo.png')}}" alt="">
                </div>
            </div>
          </section>

          <section id="content">
            <div class="content-block container bg-light">
                    <h1 class="text-center">= TRENDING NOW =</h1>
                    <div class="row contentdiv1">
                    
                        <div class="contentpar col-lg-6">
                            <p class="paragraph1">Our hoodies are super new comfortable and the quality is very good,<br> 
                                they are manufactured with cotton fibers to ensure comfort and durability.<br>
                                Polyester fibers are extremely strong, resistant to most chemicals, 
                                along with shrinkage.<br><br>
                                <b>50% cotton, 50% polyester.</b><br><br>
                                The size chart is in the <a href="https://cdn.shopify.com/s/files/1/1050/3672/files/SIZE_CHART_Unisex_Hoodie.jpg?v=1551799033"><b style="color:green">link</b></a>
                                and if you want it to look like this oversized style, choose 2 to 3 sizes larger than you normally use. 
                                Example: if you use size S choose between L or XL.</p>
                            
                            <div class="rickside">
                            <h2>Peace Rick Jacket</h2><br>
                            <p>
                            Design by our very own Pop Artist <b>"Vher"</b> he uses vibrant colors and bold patterns as a visual language of hope and happiness. 
                            He has been credited with the largest art installation in Hyde Park history, exhibited and was receat the 
                            Carousel du Louvre in the Salon de la Société Nationale des Beaux-Arts. Vher's art appeals to all!
                            </p> 
                            </div>
                        </div>
                    
                        <div class="jacket col-lg-6">
                            <img src="{{asset('asset/images/nickjacket.png')}}" alt="">
                        </div>
                    </div>
            </div>
          </section>

          <section id="stylefeed">
            <div class="feed container mt-5">
                <div class="row">
                    <div class="main_card col-lg-4">
                        <div class="card">
                            <div class="card-pic">
                                <img src="{{asset('asset/images/protone.jpg')}}" alt="">
                            </div>
                            <div class="card-body ">
                                <h2>Pro Tone</h2>
                                <p>
                                    A gray handmade comfy hoodie that made of 8 oz., 50% cotton, 50% polyester.<br><br>
                                    Heather Sport colors are 60% polyester, 40% cotton
                                    1x1 ribbed cuffs and waistband with spandex<br><br>
                                    Double-needle stitching throughoutPill-resistant air jet yarn
                                    Double-lined hoodTear-away label to choice from and very comfy for active human beings.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="main_card col-lg-4 ">
                        <div class="card">
                            <div class="card-pic">
                                <img src="{{asset('asset/images/coolpatterns.jpg')}}" alt="">
                            </div>
                            <div class="card-body">
                                <h2>Cool Patterns</h2>
                                <p>
                                    Printed graphic hoodie with High-Quality, Eco-Friendly Ink
                                    Material: Cotton, Polyester<br><br>
                                    
                                    Our sizing runs small, so be sure to buy 1-2 sizes bigger than usual for a comfy fit.<br><br>
                                    • 70% polyester, 27% cotton, 3% elastane<br>
                                    • Fabric weight: 8.85 oz/yd² (300 g/m²), weight may vary by 5%<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="main_card col-lg-4">
                        <div class="card">
                            <div class="card-pic">
                                <img src="{{asset('asset/images/yourstyle.jpg')}}" alt="">
                            </div>
                            <div class="card-body">
                                <h2>Your style</h2>
                                <p>
                                    Customize it with your name, text and a color and make it yours!<br><br>
            
                                    M A T E R I A L S<br><br>
            
                                    → All our simple color ones like White and Black are 100% Cotton.<br>
                                    → All our Heathered Colors are cotton/polyester blend and they are super comfy soft!<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
          </section>

          <footer class="footermain">
            <div class="row m-3 text-light">
                <div class="footerdiv1 col-lg-4">
                    <h2>Contact Us</h2><br>
                    <span>cipherclothing@gmail.com</span><br><br>
                    <h3>Address</h3><br>
                    <p>0000 Manual Road, Brgy.123Sometimes Plesant,  WalaNanamang Tulugan <br>
                    Philippines</p>
                </div>
                <div class="footericons col-lg-4 text-center mt-5">
                    <a href="https://www.facebook.com/"><img src="{{asset('asset/images/facebook.png')}}" alt="" style="width: 19%"></a>
                    <a href="https://www.instagram.com/"><img src="{{asset('asset/images/instagram.png')}}" alt="" style="width: 19%"></a>
                    <a href="https://www.tiktok.com/"><img src="{{asset('asset/images/tiktok.png')}}" alt="" style="width: 19%"></a>
                </div>
                <div class="col-lg-4"></div>
        </div>
        </footer>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script> --}}
    </body>
</html>