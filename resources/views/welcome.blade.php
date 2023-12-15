@extends('master')
@section('home_content')

<div class="slider-inner">
    <div id="da-slider" class="da-slider" style="background-position: 0% 0%;">
        <div class="da-slide da-slide-toleft">
            <h2><i>Giderpaylaşım<span style="color:#9b9d9c">Çözümleri</span></i></h2>
            <p>Lider ısı gider paylaşımı yazılımı ile ısıtma, soğutma, sıcak su ve soğuk giderlerinizi yönetmeliğe uygun şekilde paylaştırıp, gider bildirimlerini oluşturabilirsiniz.</p>
            <a href="#" class="btn da-link">Bilgi Alın</a>
            <div class="da-img"><img src="/images/slider/giderpaylasim-lider-hizmet3.png" alt=""></div>
        </div>

        <div class="da-slide da-slide-toleft">
            <h2><i>Giderpaylaşım<span style="color:#9b9d9c">Invenio</span></i></h2>
            <p><i>Sayaç okuma yazılımı ile kablolu (mbus) ve kablosuz (wmbus/OMS) ısı sayaçlarını, ısı pay ölçerleri, sıcak su ve soğuk su sayaçlarını kolay ve hızlı bir şekilde okuyabilirsiniz. </i></p>
            <a href="#" class="btn da-link">Bilgi Alın</a>
            <div class="da-img"><img src="/images/slider/invenio-laptop.png" alt=""></div>
        </div>

        <div class="da-slide da-slide-toleft">
            <h2><i>Giderpaylaşım<span style="color:#9b9d9c">Web</span></i></h2>
            <p><i>Isı gider paylaşımı yazılımı ile merkezi sistemle ısınan binalarda gerekli olan ısı tüketim ve gider paylaşımlarını hızlı ve kolay bir şekilde yapabilirsiniz.</i></p>
            <a href="#" class="btn da-link">Bilgi Alın</a>
            <div class="btn da-img"><img src="/images/slider/giderpaylasim-mac2.png" alt=""></div>
        </div>

        <div class="da-slide da-slide-fromright da-slide-current">
            <h2><i>Giderpaylaşım<span style="color:#9b9d9c">Hizmet</span></i></h2>
            <p><i>Sayaçları okumakla, ısı gider paylaşımı yapmakla, gider bildirimlerini bastırmakla uğraşmak istemiyorsanız lider gider paylaşım hizmetimizden yararlanabilirsiniz.</i></p>
            <a href="#" class="btn da-link">Bilgi Alın</a>
            <div class="btn da-img"><img src="/images/slider/giderpaylasim-lider-hizmet4.png" alt=""></div>
        </div>
        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </nav>
    <nav class="da-dots"><span class=""></span><span class=""></span><span class=""></span><span class="da-dots-current"></span></nav></div><!--/da-slider-->
</div>

<div class="slider">  
 <!-- Slider'ımızın ana gövdesi olacak -->   
<div class="kodlayiruk-slider">
    <!--Her bir fade' bir slideshow bölümünü oluşturur.-->
    <div class="slide fade">
        <div class="number">1 / 3</div>
        <img src="{{asset('assets/images/giderpaylasim3.png')}}" class="slide-image" />
        <div class="text">İlk Görsel</div>
    </div>

    <div class="slide fade">
        <div class="number">2 / 3</div>
        <img src="" class="slide-image" />
        <div class="text">İkinci Görsel</div>
    </div>

    <div class="slide fade">
        <div class="number">3 / 3</div>
        <img src="" class="slide-image" />
        <div class="text">Başlık</div>
    </div>

    <!-- İleri-Geri Butonları -->
    <a class="prev" onclick="slideRoute(-1)">&#10094;</a>
    <a class="next" onclick="slideRoute(1)">&#10095;</a>
</div>
<br/>

<!--Slider'ımızın alt kısmında bulunacak pagination bölümü-->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
</div>

<script>
        let slideIndex = 2;
    slideShow(slideIndex);

    function slideRoute(n) {
        slideShow(slideIndex += n);
    }

    function currentSlide(n) {
        slideShow(slideIndex = n);
    }

    function slideShow(n) {
        let i;
        let slides = document.getElementsByClassName("slide");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display="none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";

        dots[slideIndex-1].className +=" active";
    }
</script>

@endsection

