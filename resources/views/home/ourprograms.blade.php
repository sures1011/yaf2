

<head>
    <base href="/public">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Our Programs</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="home/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="home/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        @include('home.header')

        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Programs</h2>
                    <h3 class="section-subheading text-muted">PUTTING YOUTH AT THE FRONT OF CHANGE AND DEVELOPMENT FOR THEMSELVES AND THEIR COMMUNITY</h3>
                </div>
                <div class="row">
                    @foreach($programs as $programs)
                    <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="image/{{$programs->image}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$programs->name}}</h5>
    <p class="card-text">{{$programs->detail}}</p>
    <a href="{{url('/contact_us')}}" class="btn btn-primary">More</a>
    

  </div>
</div>

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

