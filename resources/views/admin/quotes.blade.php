@extends('admin.layout')

@section('content')

 <!-- Begin Page Content -->
    <div class="container-fluid">

         <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quotes</h1>
        </div>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                            <meta charset="utf-8" />
                            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
                            <meta name="description" content="" />
                            <meta name="author" content="" />
                            <title>Quotes</title>
                            <!-- Core theme CSS (includes Bootstrap)-->
                            <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
                        </head>
                        <body id="page-top">
                            <!-- Navigation-->
                           
                            <!-- Portfolio-->
                            <div id="portfolio">
                                <div class="container-fluid p-0">
                                    <div class="row g-0">
                                        <div class="col-lg-4 col-sm-6">
                                            <a class="portfolio-box" href="{{asset('portfolio/quotes1.jpg')}}" title="Project Name">
                                                <img class="img-fluid" src="{{asset('portfolio/quotes1.jpg')}}" alt="..." />
                                                
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <a class="portfolio-box" href="{{asset('portfolio/quotes2.jpg')}}" title="Project Name">
                                                <img class="img-fluid" src="{{asset('portfolio/quotes2.jpg')}}" alt="..." />
                                               
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <a class="portfolio-box" href="{{asset('portfolio/quotes5.jpg')}}" title="Project Name">
                                                <img class="img-fluid" src="{{asset('portfolio/quotes5.jpg')}}" alt="..." />
                                                
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <a class="portfolio-box" href="{{asset('portfolio/quotes3.jpg')}}" title="Project Name">
                                                <img class="img-fluid" src="{{asset('portfolio/quotes3.jpg')}}" alt="..." />
                                                
                                            </a>
                                        </div>

                                        <div class="col-lg-4 col-sm-6">
                                            <a class="portfolio-box" href="{{asset('portfolio/quotes.jpg')}}" title="Project Name">
                                                <img class="img-fluid" src="{{asset('portfolio/quotes.jpg')}}" alt="..." />
                                               
                                            </a>
                                        </div>

                                        <div class="col-lg-4 col-sm-6">
                                            <a class="portfolio-box" href="{{asset('portfolio/quotes4.jpg')}}" title="Project Name">
                                                <img class="img-fluid" src="{{asset('portfolio/quotes4.jpg')}}" alt="..." />
                                               
                                            </a>
                                        </div>
                                
                                    </div>
                                </div>
                            </section>
                            <!-- Bootstrap core JS-->
                            <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}"></script>
                            <!-- SimpleLightbox plugin JS-->
                            <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js')}}"></script>
                            <!-- Core theme JS-->
                            <script src="{{asset('js/scripts.js')}}"></script>
                            <script src="{{asset('https://cdn.startbootstrap.com/sb-forms-latest.js')}}"></script>
                        </body>
                    </html>
                    
                </div>
 <!-- /.container-fluid -->
                
     @endsection



