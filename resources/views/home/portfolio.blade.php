<section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Prorgams</h2>
                    <h3 class="section-subheading text-muted">PUTTING YOUTH AT THE FRONT OF CHANGE AND DEVELOPMENT FOR THEMSELVES AND THEIR COMMUNITY</h3>
                </div>
                <div class="row">
                    @foreach($programs as $program)
                    <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="image/{{$program->image}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$program->name}}</h5>
    <p class="card-text">{{$program->detail}}</p>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  More
</button>



  </div>
</div>

</div>
                    @endforeach   
            
                </div>
                <span style="padding-top:20px;">

            {!!$programs->withQueryString()->links('pagination::bootstrap-5')!!}
            </span>
               
            </div>
            
        </section>