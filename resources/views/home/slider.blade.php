<header class="masthead">
<script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_SANDBOX_CLIENT_ID')}}"></script>

            <div class="container">
                <div class="masthead-subheading">Young Assets Foundation</div>
                <div class="masthead-heading text-uppercase">We seek to help eachother</div>
                @if (Route::has('login'))

                @auth
                <form action="{{ url('charge') }}" method="post">
                @csrf
                <input type="text" name="amount"  placeholder="Donation amount"/>
                <button type="submit"name="submit" value="Pay Now" class="btn btn-primary btn-xl text-uppercase">Donate Today</button>
            
                </form>
                @endauth
                @endif
                @if(\Session::has('error'))
        <div class="alert alert-danger">{{ \Session::get('error') }}</div>
        {{ \Session::forget('error') }}
    @endif

    
    @if(\Session::has('success'))
        <div class="alert alert-success">{{ \Session::get('success') }}</div>
        {{ \Session::forget('success') }}
    @endif
            </div>
        </header>