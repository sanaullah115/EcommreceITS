<x-header />


<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6 col-md-6">
            <div class="contact__form">
                <h2 class="text-center">Login</h2>
              
                <form action="{{route('LoginUser')}}" method="post" class="mt-5">
                    @csrf
                    <div class="row">
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            <p>{{session()->get('success')}}</p>
                        </div>
                        @endif
        
                        @if (session()->has('error'))
                        <div class="alert alert-danger">
                            <p>{{session()->get('error')}}</p>
                        </div>
                        @endif
                        <div class="col-lg-12">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="col-lg-12">
                            <input type="password" name="password" id="" placeholder="Password">
                            <button type="submit" class="site-btn">LOGIN</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="col-lg-3">

        </div>
    </div>
</div><br>
<x-footer />