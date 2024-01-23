
<section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                @foreach($services as $service)
                    <div class="col-md-4">

                            
                                <img class="rounded border border-5" alt="image cap" src="image/{{$service->image}}" />
                            
                       
                        <h4 class="my-3">{{$service->name}}</h4>
                        <p class="text-muted">{{$service->detail}}</p>
                    </div>
                    
                @endforeach
                </div>
            </div>
        </section>