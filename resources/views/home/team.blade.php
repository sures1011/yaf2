<section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                @foreach($teams as $team)
                    <div class="col-lg-4">
                        <div class="team-member">
                        
                            <img class="mx-auto rounded-circle" src="image/{{$team->image}}" alt="team" />
                            <h2>{{$team->name}}</h2>
                            <h5>{{$team->designation}}</h5>
                            <p class="text-muted">{{$team->message}}</p>

                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                       
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </section>