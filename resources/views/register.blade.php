<x-header />

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6 col-md-6">
            <h2 class="text-center mt-3">Create New Account</h2>

            <div class="contact__form mt-5">
                <form action="{{route('save')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="name" placeholder="Name">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="col-lg-12">
                            <input type="file" name="file" placeholder="Email">
                        </div>
                        <div class="col-lg-12">
                            <input type="password" name="password" id="" placeholder="Password"> 
                            <button type="submit" class="site-btn">SIGN UP</button>
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