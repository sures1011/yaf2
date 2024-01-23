<section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Prorgams</h2>
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
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
  More
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">{{$programs->name}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p class="card-text">{{$programs->detail}}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
    <!-- <a href="{{url('programs_detalis',$programs->id)}}" class="btn btn-primary">More</a> -->
    
    
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
        <button type="button" class="btn btn-primary">Save changes</button>
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