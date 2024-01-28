

<head>
    <base href="/public">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Our Services</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="home/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="home/css/styles.css" rel="stylesheet" />

        <style type="text/css">
        .img_size{
        height: 300px;
        width: 300px;
    }
    </style>
    </head>
    <body id="page-top">
        @include('home.header')

        
<section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Services Young Assets Foundation provide</h3>
                </div>
                <div class="row text-center">
                @foreach($services as $service)
                    <div class="col-md-4">

                            
                                <img class="img_size" alt="image cap" src="image/{{$service->image}}" />
                            
                       
                        <h4 class="my-3">{{$service->name}}</h4>
                        <p class="text-muted">{{$service->detail}}</p>
                    </div>
                    
                @endforeach
                </div>
            </div>
        </section>
        
        @include('home.footer')
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        


    </body>
</html>

