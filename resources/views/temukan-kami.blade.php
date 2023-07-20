@extends('template.index')
@section('content')

<div class="temukan-kami">
    <div class="heading-section-page">
        <h1>Temukan Minimarket.id</h1>
    </div>
    
    <div class="temukan-kami-layout width">
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.066406890583!2d108.21179757433153!3d-7.346440172269702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5710ed55b3c3%3A0xd81b607ae8e27146!2sPerumahan%20Alexandria!5e0!3m2!1sid!2sid!4v1689837651365!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="swiper temukanKami">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="temukan-kami__box">
                    <div class="temukan-kami__box-icon">
                        <iconify-icon icon="ri:whatsapp-fill"></iconify-icon>
                    </div>
                    <div class="temuka-kami__box-content">
                        <h3>Whatsapp</h3>
                        <span>+62 895 6104 1991</span>
                    </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="temukan-kami__box">
                    <div class="temukan-kami__box-icon">
                        <iconify-icon icon="basil:instagram-solid"></iconify-icon>
                    </div>
                    <div class="temuka-kami__box-content">
                        <h3>Instagram</h3>
                        <span>@minimarket.id</span>
                    </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="temukan-kami__box">
                    <div class="temukan-kami__box-icon">
                        <iconify-icon icon="mdi:facebook"></iconify-icon>
                    </div>
                    <div class="temuka-kami__box-content">
                        <h3>Facebook</h3>
                        <span>Minimarket.id</span>
                    </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    
</div>

@endsection