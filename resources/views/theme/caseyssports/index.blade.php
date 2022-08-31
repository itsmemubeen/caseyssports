@extends('theme.caseyssports.website')
@section('content')
<div class="banner">
    <div class="banner__bg wow fadeInUp">
        <img src="{{ asset('public/theme/caseyssports/images/banner-bg-1.png') }}" alt="image" class="imgFluid">
    </div>
    <div class="container wow zoomIn">
        <div class="row">
            <div class="col-12 col-lg">
                <div class="banner__img">
                    <img src="{{ asset('public/theme/caseyssports/images/banner-img-1.png') }}" alt="image" class="imgFluid">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="banner__content section-content section-content--light text-center">
                    <div class="subHeading">CASEY’S SPORTS COLLECTIBLES</div>
                    <img src="{{ asset('public/theme/caseyssports/images/banner-img-signature.gif') }}" alt="image" class="imgFluid">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime inventore praesentium omnis
                        obcaecati, nulla nemo tempora sit error voluptatibus voluptates numquam. Voluptate non
                        necessitatibus labore.</p>
                    <a href="#" class="themeBtn themeBtn--center">Shop Now</a>
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="banner__img banner__img--right">
                    <img src="{{ asset('public/theme/caseyssports/images/banner-img-3.png') }}" alt="image" class="imgFluid">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Offers -->
<div class="offers">
    <div class="container">
        <ul class="offers__content wow bounceInRight">
            <li>Deal ends soon!</li>
            <li>48 hours only!</li>
            <li> nfl sale!</li>
            <div class="discount">
                <span>up to</span>
                <h4>75% off</h4>
            </div>
        </ul>
    </div>
</div>

<!-- Products -->
<div class='products mar-y'>
    <div class='container'>
        <div class='row justify-content-center'>
            <div class='col-12 col-lg-8'>
                <div class='section-content text-center'>
                    <h3 class="heading heading--primary">Shop By <span>Category</span> </h3>
                    <p>Guaranteed authentic autographed ! Shop fan-favorite sports autographs. Signed baseballs, football helmets, jerseys and more.</p>
                </div>
            </div>
        </div>
        <div class='row productSlider'>
            @php $trending_categories = \App\Entity\Category\Category::whereIn('id', get_option('trending_categories'))->get(); @endphp
                @foreach($trending_categories as $trending_category)
                @php $products = $trending_category->products; @endphp
                @foreach($trending_categories as $trending_category)
                    <div class='col-12 col-lg-3 wow bounceInUp' data-wow-duration="1s">
                        <div class='products-card'>
                            <div class='products-card__img'>
                                <a href="{{ url('/categories/'.$trending_category->slug) }}">
                                    <img src="https://demo.amgdigitalagency.com/cassey-sports/v2/images/product-img-1.png" alt='image' class='imgFluid'>
                                </a>
                                <a href="{{ url('/categories/'.$trending_category->slug) }}" class="overlay">
                                    <h6>{{ $trending_category->translation->name }}</h6>
                                </a>
                                {{-- <a href="" class="wishlist">
                                    <i class='bx bxs-heart'></i>
                                </a> --}}
                            </div>
                            <div class='products-card__content'>
                                <a href="{{ url('/categories/'.$trending_category->slug) }}" class="themeBtn themeBtn--outline themeBtn--center">Shop Now<i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                        @endforeach
                @endforeach
        </div>
    </div>
</div>

<!-- Sub Banner -->
<div class='subBanner subBanner--alt'>
    <img src="{{ asset('public/theme/caseyssports/images/subBanner-bg-2.png') }}" alt='image' class='imgFluid subBanner-bg'>
    <div class='container-fluid'>
        <div class='row align-items-center no-gutters'>
            <div class='col-12 col-lg-5'>
                <div class="subBanner__img wow bounceInLeft">
                    <img src="{{ asset('public/theme/caseyssports/images/subBanner-img-2.png') }}" alt='image' class='imgFluid'>
                </div>
            </div>
            <div class='col-12 col-lg-7'>
                <div class="subBanner__content wow bounceInRight">
                    <h6>Lawrence Taylor Signed</h6>
                    <h3>Inscription</h3>
                    <h4>Blue Football Helmet</h4>
                    <a href="#" class="themeBtn themeBtn--white ">shop now<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Categories -->
<div class="categories mar-y">
    <div class="container">
        <div class="categories-singleWrapper">
            <div class="categories-single wow bounceInLeft">
                <img src="{{ asset('public/theme/caseyssports/images/categories-bg-1.png') }}" alt='image' class='imgFluid categories-bg'>
                <div class="row align-items-end">
                    <div class="col-12 col-lg-6">
                        <div class="categories-single__content">
                            <h4>New</h4>
                            <h5>Basketballs Signatures</h5>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="categories-single__img">
                            <img src="{{ asset('public/theme/caseyssports/images/categories-img-1.png') }}" alt='image' class='imgFluid'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="categories-single wow bounceInRight">
                <img src="{{ asset('public/theme/caseyssports/images/categories-bg-2.png') }}" alt='image' class='imgFluid categories-bg'>
                <div class="row align-items-end ">
                    <div class="col-12 col-lg-6">
                        <div class="categories-single__img">
                            <img src="{{ asset('public/theme/caseyssports/images/categories-img-2.png') }}" alt='image' class='imgFluid'>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="categories-single__content">
                            <h4>New</h4>
                            <h5>trading card Signatures</h5>
                            <a href="#" class="themeBtn mr-auto">shop now<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="categories-single categories-single--lg wow bounceInLeft">
                <img src="{{ asset('public/theme/caseyssports/images/categories-bg-2.png') }}" alt='image' class='imgFluid categories-bg'>
                <img src="{{ asset('public/theme/caseyssports/images/categories-img-3.png') }}" alt='image' class='imgFluid categories-img'>
                <div class="row align-items-end justify-content-end">
                    <div class="col-12 col-lg-6">
                        <div class="categories-single__content categories-single__content--up text-right">
                            <h4>bulls</h4>
                            <h5>Football shirts collections</h5>
                            <a href="#" class="themeBtn">shop now<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="categories-single wow bounceInRight">
                <img src="{{ asset('public/theme/caseyssports/images/categories-bg-1.png') }}" alt='image' class='imgFluid categories-bg'>
                <div class="row align-items-end">
                    <div class="col-12 col-lg-6">
                        <div class="categories-single__content">
                            <h4>New</h4>
                            <h5>Basketballs Signatures</h5>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="categories-single__img">
                            <img src="{{ asset('public/theme/caseyssports/images/categories-img-4.png') }}" alt='image' class='imgFluid'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Us -->
<div class='about mar-y'>
    <img src="{{ asset('public/theme/caseyssports/images/about-bg.png') }}" alt='image' class='imgFluid about-bg'>
    <div class='container'>
        <div class='row align-items-center'>
            <div class='col-12 col-lg-6'>
                <div class='about__img wow bounceInLeft'>
                    <img src="{{ asset('public/theme/caseyssports/images/about-img.png') }}" alt='image' class='imgFluid'>
                </div>
            </div>
            <div class='col-12 col-lg-6'>
                <div class='about__content wow bounceInRight'>
                    <h6>The best products</h6>
                    <h3>who we <span>are</span> </h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.
                    </p>
                    <P>
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Deals -->
<div class='deals wow bounceInUp'>
    <img src="{{ asset('public/theme/caseyssports/images/deals-bg.png') }}"  alt='image' class='imgFluid deals-bg'>
    <div class='container'>
        <div class='row justify-content-center '>
            <div class='col-12'>
                <div class="deals__contentWrapper">
                    <div class="deals__content">
                        <div class="discount">
                            <span>up to</span>
                            <h4>75% off</h4>
                        </div>
                        <h5>exclusive <span>offers</span> on fan favorites</h5>
                    </div>
                    <a href="#" class="themeBtn themeBtn--center">see current deals<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Products -->
<div class='products mar-y'>
    <div class='container'>
        <div class='row justify-content-center'>
            <div class='col-12 col-lg-8'>
                <div class='section-content text-center'>
                    <h3 class="heading heading--primary">Shop By <span>Category</span> </h3>
                    <p>Guaranteed authentic autographed ! Shop fan-favorite sports autographs. Signed baseballs, football helmets, jerseys and more.</p>
                </div>
            </div>
        </div>
        <div class='row productSlider'>
            @php $trending_categories = \App\Entity\Category\Category::whereIn('id', get_option('trending_categories'))->get(); @endphp
                    @foreach($trending_categories as $trending_category)
                    @php $products = $trending_category->products; @endphp
					@foreach($products as $product)
            <div class='col-12 col-lg-3 wow bounceInUp' data-wow-duration="1s">
                <div class='products-card products-card--alt'>
                    <div class='products-card__img'>
                        <a href="{{ url('product/'.$product->slug) }}">
                            <img src="{{ asset('storage/app/'. $product->image->file_path) }}" alt='image' class='imgFluid'>
                        </a>
                        <div class="overlay">
                            <a href="{{ url('product/'.$product->slug) }}" class="themeBtn themeBtn--white themeBtn--center">Shop Now<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <a href="{{ wishlist_url($product) }}" class="wishlist">
                            <i class='bx bxs-heart'></i>
                        </a>
                    </div>
                    <div class='products-card__content'>
                        <a href="{{ url('product/'.$product->slug) }}" class="title">{{ $product->translation->name }}
                            <div class="price">
                                <ins>&dollar;{{ $product->price }}</ins>
                                <del>&dollar;{{ $product->price }}</del>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            @endforeach
            @endforeach
        </div>
    </div>
</div>

<!-- Reviews -->
<div class='reviews'>
    <div class='container-fluid'>
        <div class='row justify-content-center '>
            <div class='col-12 col-lg-8'>
                <div class='section-content text-center'>
                    <h3 class="heading">our clients reviews</h3>
                </div>
            </div>
        </div>
        <div class='row no-gutters mt-3 reviewsSlider'>
            <div class='col-12 col-lg-3'>
                <div class='reviews-card'>
                    <div class='reviews-card__img'>
                        <img src="{{ asset('public/theme/caseyssports/images/person-img-1.png') }}" alt='image' class='imgFluid'>
                    </div>
                    <div class='reviews-card__content'>
                        <span class="personName">Name Here</span>
                        <p>Placeholder is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard Placeholder is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                    </div>
                </div>
            </div>
            <div class='col-12 col-lg-3'>
                <div class='reviews-card'>
                    <div class='reviews-card__img'>
                        <img src="{{ asset('public/theme/caseyssports/images/person-img-2.png') }}" alt='image' class='imgFluid'>
                    </div>
                    <div class='reviews-card__content'>
                        <span class="personName">Name Here</span>
                        <p>Placeholder is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard Placeholder is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                    </div>
                </div>
            </div>
            <div class='col-12 col-lg-3'>
                <div class='reviews-card'>
                    <div class='reviews-card__img'>
                        <img src="{{ asset('public/theme/caseyssports/images/person-img-3.png') }}" alt='image' class='imgFluid'>
                    </div>
                    <div class='reviews-card__content'>
                        <span class="personName">Name Here</span>
                        <p>Placeholder is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard Placeholder is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                    </div>
                </div>
            </div>
            <div class='col-12 col-lg-3'>
                <div class='reviews-card'>
                    <div class='reviews-card__img'>
                        <img src="{{ asset('public/theme/caseyssports/images/person-img-1.png') }}" alt='image' class='imgFluid'>
                    </div>
                    <div class='reviews-card__content'>
                        <span class="personName">Name Here</span>
                        <p>Placeholder is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard Placeholder is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                    </div>
                </div>
            </div>
            <div class='col-12 col-lg-3'>
                <div class='reviews-card'>
                    <div class='reviews-card__img'>
                        <img src="{{ asset('public/theme/caseyssports/images/person-img-2.png') }}" alt='image' class='imgFluid'>
                    </div>
                    <div class='reviews-card__content'>
                        <span class="personName">Name Here</span>
                        <p>Placeholder is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard Placeholder is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sub Banner -->
<div class='subBanner wow bounceInUp'>
    <img src="{{ asset('public/theme/caseyssports/images/subBanner-bg.png') }}" alt='image' class='imgFluid subBanner-bg'>
    <img src="{{ asset('public/theme/caseyssports/images/subBanner-img-1.png') }}" alt='image' class='imgFluid subBanner-img'>
    <div class='container'>
        <div class='row align-items-center justify-content-between'>
            <div class='col-12 col-lg-4'>
                <div class="subBanner__content">
                    <h6>major league baseball</h6>
                    <h3>pirates</h3>
                    <h6>t-shirts</h6>
                </div>
            </div>
            <div class='col-12 col-lg-4'>
                <div class="subBanner__content">
                    <a href="#" class="themeBtn themeBtn--white ">shop now<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection