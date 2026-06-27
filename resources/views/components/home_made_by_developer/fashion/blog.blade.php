{{-- To make a editable image or text need to be add a "builder editable" class and builder identity attribute with a unique value --}}
{{-- "builder identity" and "builder editable" --}}
{{-- builder identity value have to be unique under a single file --}}
<style> 
.service-area {
    background: #fff;
}

.service-box {
    border: 1px solid #e8e8e8;
    text-align: center;
    padding: 30px 20px;
    height: 100%;
    background: #fff;
    transition: all .3s ease;
}

.service-box img {
    width: 60px;
    height: 60px;
    object-fit: contain;
    display: block;
    margin: 0 auto 20px;
}

.service-box h5 {
    margin: 0;
    font-size: 18px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .5px;
}

.service-box:hover {
    box-shadow: 0 5px 15px rgba(0,0,0,.08);
}

@media (max-width: 767px) {

    .service-box {
        padding: 20px 10px;
    }

    .service-box img {
        width: 45px;
        height: 45px;
    }

    .service-box h5 {
        font-size: 12px;
        line-height: 1.5;
    }
}

.banner-content {
    text-shadow: 0 2px 10px rgba(0,0,0,.35);
}

</style> 


<section class="py-12 bg-white">
    <div class="container mx-auto px-4">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            {{-- Banner 1 --}}
            <a href="#" class="group relative overflow-hidden rounded-lg">
                <img
                    src="{{ asset('assets/frontend/fashion/blog-feature/ba20.webp') }}"
                    class="w-full h-[220px] md:h-[300px] object-cover transition duration-700 group-hover:scale-110">

                <div class="absolute inset-0 flex flex-col justify-center pl-8">
                    <h3 class="text-3xl md:text-4xl font-bold text-white">
                        Quality Food
                    </h3>

                    <p class="mt-2 text-lg md:text-xl text-white">
                        Get 20% Extra
                    </p>
                </div>
            </a>

            {{-- Banner 2 --}}
            <a href="#" class="group relative overflow-hidden rounded-lg">
                <img
                    src="{{ asset('assets/frontend/fashion/blog-feature/ba21.webp') }}"
                    alt="I am so Foody"
                    class="w-full h-[220px] md:h-[300px] object-cover transition duration-700 group-hover:scale-110">

                <div class="absolute inset-0 flex flex-col justify-center pl-8">
                    <h3 class="text-3xl md:text-4xl font-bold text-white">
                        I am so Foody
                    </h3>

                    <p class="mt-2 text-lg md:text-xl text-white">
                        Get 10% Extra
                    </p>
                </div>
            </a>

        </div>

    </div>
</section>

<section class="service-area py-5">
    <div class="container">
        <div class="row g-0">

            <div class="col-6 col-lg-3">
                <div class="service-box">
                    <img src="{{ asset('assets/frontend/fashion/blog-feature/1.avif') }}"
                        alt="Support">

                    <h5>24/7 FRIENDLY SUPPORT</h5>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="service-box">
                    <img src="{{ asset('assets/frontend/fashion/blog-feature/2.png') }}"
                        alt="Shipping">

                    <h5>FREE SHIPPING</h5>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="service-box">
                    <img src="{{ asset('assets/frontend/fashion/blog-feature/3.webp') }}"
                        alt="Return">

                    <h5>7 DAYS EASY RETURN</h5>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="service-box">
                    <img src="{{ asset('assets/frontend/fashion/blog-feature/4.webp') }}"
                        alt="Quality">

                    <h5>QUALITY GUARANTEED</h5>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Latest News Area Start -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mb-30px">
                    <h1 class="mv-title-40px text-center wow animate__fadeInUp  builder-editable" builder-identity="29" data-wow-delay=".3s">{{ get_phrase('Latest News') }}</h1>
                </div>
            </div>
        </div>
        <div class="row gy-4 mb-100px wow animate__fadeInUp" data-wow-delay=".3s">
            @php 
                $blogs = App\Models\Blog::where('status', 1)->get();
            @endphp
            @foreach($blogs->take(3) as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="fsh-blog-card">
                    <a href="{{ route('blog_details', ['slug' => $blog->slug]) }}" class="fsh-blog-banner mb-3">
                        <img class="banner" src="{{ get_image($blog->thumbnail) }}" alt="banner">
                    </a>
                    <div>
                        <p class="al-subtitle2-16px mb-12px">{{ $blog->created_at->format('d M, Y') }}</p>
                        <a href="{{ route('blog_details', ['slug' => $blog->slug]) }}" class="al-title-20px mb-20px text-link2">{{ $blog->title }}</a>
                        <a href="{{ route('blog_details', ['slug' => $blog->slug]) }}" class="btn fsh-btn-dark pe-4 icon-right fsh-blog-card-btn">
                            <span>{{get_phrase('READ MORE')}}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewbox="0 0 19 18" fill="none">
                                <path d="M17.5303 8.46975L12.2802 3.21975C12.1388 3.08313 11.9493 3.00754 11.7527 3.00924C11.5561 3.01095 11.3679 3.08983 11.2289 3.22889C11.0898 3.36794 11.011 3.55605 11.0092 3.7527C11.0075 3.94935 11.0831 4.1388 11.2198 4.28025L15.1895 8.25H2C1.80109 8.25 1.61032 8.32902 1.46967 8.46967C1.32902 8.61032 1.25 8.80109 1.25 9C1.25 9.19891 1.32902 9.38968 1.46967 9.53033C1.61032 9.67098 1.80109 9.75 2 9.75H15.1895L11.2198 13.7197C11.1481 13.7889 11.091 13.8717 11.0517 13.9632C11.0124 14.0547 10.9917 14.1531 10.9908 14.2527C10.9899 14.3523 11.0089 14.451 11.0466 14.5432C11.0843 14.6354 11.14 14.7191 11.2105 14.7895C11.2809 14.86 11.3646 14.9157 11.4568 14.9534C11.549 14.9911 11.6477 15.0101 11.7473 15.0092C11.8469 15.0083 11.9453 14.9876 12.0368 14.9483C12.1283 14.909 12.2111 14.8519 12.2802 14.7803L17.5303 9.53025C17.6709 9.3896 17.7498 9.19887 17.7498 9C17.7498 8.80113 17.6709 8.6104 17.5303 8.46975Z" fill="white"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> 
<!-- Latest News Area End -->



