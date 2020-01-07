@extends('layouts')

@section('content')

<div class="container py-4 my-2">
    <div class="row">
        <div class="col-md-4 pr-md-5">
            <img class="w-100 rounded border" src="https://cdn.bootstrapsnippet.net/assets/image/dummy-avatar.jpg" />
            <!--<div class="pt-4 mt-2">-->
            <!--    <section class="mb-4 pb-1">-->
            <!--        <h3 class="h6 font-weight-light text-secondary text-uppercase">Work Experiences</h3>-->
            <!--        <div class="work-experience pt-2">-->
            <!--            <div class="work mb-4">-->
            <!--                <strong class="h5 d-block text-secondary font-weight-bold mb-1">Prodesign Inc</strong>-->
            <!--                <strong class="h6 d-block text-warning mb-1">Front End Developer</strong>-->
            <!--                <p class="text-secondary">Southern Street Floral Park, NY 11001</p>-->
            <!--            </div>-->
            <!--            <div class="work mb-4">-->
            <!--                <strong class="h5 d-block text-secondary font-weight-bold mb-1">Blue Tech</strong>-->
            <!--                <strong class="h6 d-block text-warning mb-1">Senior Programmer</strong>-->
            <!--                <p class="text-secondary">George Avenue Mobile, AL 36608</p>-->
            <!--            </div>-->
            <!--        </div>    -->
            <!--    </section>-->
            <!--</div>-->
        </div>
        <div class="col-md-8">
            <div class="d-flex align-items-center">
                <h2 class="font-weight-bold m-0">
                    {{ $friend->name }}
                </h2>
                <address class="m-0 pt-2 pl-0 pl-md-4 font-weight-light text-secondary">
                    <i class="fa fa-map-marker"></i>
                    Garden City, NY
                </address>
            </div>
            <p class="h5 text-primary mt-2 d-block font-weight-light">
                {{ $friend->category }}
            </p>
            <p class="lead mt-4">{{ $friend->memo }} </p>

        </div>
    </div>
</div>
@endsection('content')