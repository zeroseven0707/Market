@extends('template.index')
@section('content')
    <div class="banner">
    <img src="images/banner.png" alt="">
</div>
<div class="section-1">
    <div class="heading-section-1">
        <h1>Temukan <span>Produk Berkualitas</span> di Setiap Kategori!</h1>
    </div>
    <div class="swiper categorySlide swiper__categoryProduct">
        <div class="swiper-wrapper">
            @foreach ($category['data'] as $cat)
            <div class="swiper-slide">
                <a href="">
                    <div class="box-category">
                        <div class="image-box-category">
                            <img src="images/bahan-pokok.png" alt="">
                        </div>
                        <div class="content-box-category">
                            <h4>{{ $cat['namaKategoriBarang'] }}</h4>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<div class="section__product width">
    <div class="heading-section-2">
        <h1>Jaga Kesehatanmu!</h1>
        <a href="#"><button>Lihat Semua</button></a>
    </div>
    <div class="swiper jagaKesehatan swiper__product">
        <div class="swiper-wrapper">
         @foreach ($product['data'] as $item)
            <div class="swiper-slide">
                <a href="/produk/{{ $item['posVarianId'] }}">
                    <div class="box-category box-category__product">
                        <div class="image-box-category image-box-category__product">
                            <img src="images/masker.png" alt="">
                        </div>
                        <div class="content-box-category content-box-category__product">
                            <h4>{{ $item['namaVarian'] }}</h4>
                            <span>{{ $item['hargaJual'] }}</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<div class="section__product width">
    <div class="heading-section-2">
        <h1>Segar dalam setiap tegukan</h1>
        <a href="#"><button>Lihat Semua</button></a>
    </div>
    <div class="swiper minuman swiper__product">
        <div class="swiper-wrapper">
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<div class="section__product width">
    <div class="heading-section-2">
        <h1>Kelezatan Praktis yang Mengisi Hari Kamu!</h1>
        <a href="#"><button>Lihat Semua</button></a>
    </div>
    <div class="swiper makananRingan swiper__product">
        <div class="swiper-wrapper">
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<div class="section__product width">
    <div class="heading-section-2">
        <h1>Diskon Hebat, Belanja Lebih Hemat!</h1>
        <a href="#"><button>Lihat Semua</button></a>
    </div>
    <div class="swiper diskonSlide swiper__product">
        <div class="swiper-wrapper">
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<div class="video">
    <img src="images/video.jpg" alt="">
</div>
@endsection
