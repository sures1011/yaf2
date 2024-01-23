

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
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    @foreach($programs as $programs)
                    <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="image/{{$programs->image}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$programs->name}}</h5>
    <p class="card-text">{{$programs->detail}}</p>
    <a href="{{url('programs_detalis',$programs->id)}}" class="btn btn-primary">More</a>
    
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <div class="modal-header">
        <h5 class="modal-title">{{$programs->title}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <h5 class="modal-title" id="exampleModalLongTitle">{{$programs->description}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
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

