@include('Frontend.layout.header')


<!-- Menu Page area start -->

<section id="menupage" class="card">
    <div class="card-header">
        <p class="menupage-title">{{ $menupage->title }}</p>

    </div>

    <div class="row mt-4 mb-6">
        <div class="col-md-6 col-lg-6 col-xl-6">
            <img src="{{asset('storage/images/menudetails/' .$menupage->image)}}" alt="page_image" class="w-100 img-fluid menupage-img">
        </div>
        <div class="col-md-6">
            <p class="menupage-description">{{ $menupage->description }}</p>
        </div>

    </div>
</section>

<!-- Menu Page area end -->


@include('Frontend.layout.footer')
