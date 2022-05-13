
<script src="{{ asset('js/jquery.js') }}"></script> <!-- JQuery -->
<script src="{{ asset('js/backtop.js') }}"></script><!-- BackTop -->

<!-- Navigation -->
<script src="{{ asset('vendor/dropdown-mega-navigation/script.js') }}"></script>

<!-- animaciones -->
<script src="{{ asset('vendor/aos/aos.js') }}"></script>

<!-- Carrusel -->
<script src="{{asset('vendor/bxslider/jquery.bxslider.min.js')}}"></script>

<!-- cotador nuevo de productos -->
<script src="{{ asset('js/jquery.input-counter.js') }}"></script>

<!-- SWIPER JS -->
<script src="{{ asset('vendor/swiper/swiper.min.js') }}"></script> <!-- Swiper Js -->

<!-- BackTop -->
<script src="{{ asset('js/backtop.js') }}"></script>

<!-- Cookialert -->
<script src="{{ asset('js/cookiealert.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/navigation.js') }}"></script>
<script>
    var navigation = new Navigation(document.getElementById("navigation"),{
    submenuTrigger: "click"
});
</script>

<script>

(function() {
  "use strict";

    /**
     * Animation on scroll
    */
    window.addEventListener('load', () => {
        AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
        })
    });

    })()

    $(document).ready(function(){

        $("#myModal").modal('show');

        $('.slider2').bxSlider({
            slideWidth: 200,
            auto: true,
            minSlides: 2,
            maxSlides: 5,
            slideMargin: 20,
            autoHover: true,
            pause: 2000,
            speed: 800,
            pager: false,
            controls: true,
            mode: 'horizontal',
            moveSlides: 1,
            responsive: true
        });

        // $('.slider-productos').bxSlider({
        //     slideWidth: 260,
        //     auto: true,
        //     minSlides: 2,
        //     maxSlides: 4,
        //     slideMargin: 20,
        //     autoHover: true,
        //     pause: 2000,
        //     speed: 800,
        //     pager: false,
        //     controls: true,
        //     mode: 'horizontal',
        //     moveSlides: 1,
        // });

        var swiper1 = new Swiper('.swiper-marcas', {
            slidesPerView: 6,
            spaceBetween: 10,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
              },
            autoplay: {
                delay: 3400,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                180: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 6,
                    spaceBetween: 10,
                },
            }
        });

        var swiper_prod_destacados = new Swiper('.swiper-productos-destacados', {
            slidesPerView: 4,
            spaceBetween: 10,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
              },
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                180: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
            }
        });
    });

    var options = {
        selectors: {
            addButtonSelector: '.btn-add',
            subtractButtonSelector: '.btn-subtract',
            inputSelector: '.counter',
        },
        settings: {
            checkValue: true,
            isReadOnly: true,
        },
    };

    $(".input-counter").inputCounter(options);

</script>
