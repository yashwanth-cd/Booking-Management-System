@extends('Layout.baseview')
@section('title','Login')
@section('style')
<style>
    .navbar-brand img {
        width: 60px;
    }

    .navbar-nav {
        align-items: center;
    }

    .navbar .navbar-nav .nav-link {

        font-size: 1.1em;
        padding: 0.5em 1em;
    }

    @media screen and (min-width: 768px) {
        .navbar-brand img {
            width: 80px;
        }

        .navbar-brand {
            margin-right: 0;
            padding: 0 1em;
        }
    }
</style>
@endsection
@section('content')

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbar1">
                    <div class="navbar-nav mx-auto text-black">

                        <a href="#" class="nav-item nav-link active">Home</a>
                        <a href="{{url('page/team')}}" class="nav-item nav-link active">Team</a>
                        <a href="#" class="navbar-brand d-none d-md-block">
                            <i class="fa-solid fa-book"></i>
                        </a>
                        <a href="{{url('page/about-us')}}" class="nav-item nav-link active">About-us</a>
                        <a href="{{url('page/contact-us')}}" class="nav-item nav-link active">Contact-Us</a>

                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="m-5">
        {!! isset($data->html)?$data->html : 'Page Not Found' !!}
    </main>
    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="container m-5">
                        <i class="fa-solid fa-book"></i>
                        <div>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati nulla maxime, at culpa ipsa aliquam exercitationem deserunt odit incidunt a neque voluptas suscipit maiores quae dolor dolore tenetur corrupti dolorem!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container m-5">
                        <p class="text-white fs-5">Quick Links</p>
                        <ul class="remove-bullets remove-text-decoration">
                            <li><a href="#" class="remove-text-decoration text-white">About Us</a></li>
                            <li><a href="#" class="remove-text-decoration text-white">Contact Us</a></li>C
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-white text-center">
                    <p>All rights reserved &copy 2022, <a href="1stop.ai">1Stop.ai</a></p>
                </div>
            </div>
        </div>
    </footer>
</body>
@endsection
@section('customjs')
<script>
</script>
@endsection