

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0FXCK07K3F"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-0FXCK07K3F');
    </script>

    @stack('show_product_meta')

    <title> ILB Shop | @yield('title')</title>

    <!-- add icon link -->
    {{-- <link rel="icon" href="{{ asset('assets/images/my-shop-logo-1606167361.png" type="image/x-icon') }}"> --}}

    <!-- style -->

    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />

    <link href="style.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('front_office/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_office/assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('front_office/assets/font-awesome-4.6.3/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_office/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_office/assets/css/main.css') }}">

    {{-- <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="{{ asset('front_office/assets/css/intlTelInput.css') }}">
    <link href="toastr.css" rel="stylesheet"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    @yield('css')
    @toastr_css
    @livewireStyles
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</head>
<body>
    {{-- SweetAlert --}}
    @include('sweetalert::alert')

    <!-- navbar -->
    @auth
        @include('front_office.partials.navbar')
    @endauth

    @guest
        @include('front_office.partials.navbar')
    @endguest


    @yield('content')
    @include('sweetalert::alert')

    <!-- button retur top -->
    <!-- Button return top-->
    {{-- <a href="#header">
        <div class="button-return" id="btnReturn" hidden>
            <img src="{{ asset('assets/icones/up-arrow.svg') }}" alt="buttontop">
        </div>
    </a> --}}

    @if ( ! (Request::is('checkout/show')) )
        @include('front_office.partials.footer')
    @endif

    <!-- Script -->
    <script src="{{ asset('front_office/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front_office/assets/js/aos.js') }}"></script>
    <script src="{{ asset('front_office/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front_office/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front_office/assets/js/btntop.js') }}"></script>

    @yield('scripts')
    @livewireScripts



<script type="text/javascript">

    document.addEventListener('DOMContentLoaded', function () {

        window.livewire.on('addNewLetter',itemId  => {
            console.log('test');

            Swal.fire(
                'Bien éffectué !',
                'Votre adresse email a été ajouté à la Newletters !',
                'success'
            )

        });

        window.livewire.on('triggerUpdateProfile',itemId  => {
            console.log('test');

            Swal.fire(
                'Super !',
                'Votre Mise à jour éffectué avec succès !',
                'success'
            )

        });


        window.livewire.on('add-to-cart',()  => {
            toastr.success("Le produit a ete ajouter au panier !", "Bien effectue");
        });

        window.livewire.on('require-auth-user',()  => {
            toastr.warning("L'utilisateur doit etre connecte pour effectuer cette action !", 'Oops Desole');
        });

        window.livewire.on('add-to-favorites', ()=> {
            toastr.info("Produit ajouter aux favoris !" , " Bien Joue");
        });


    })
</script>


<script>
        // init aos
        AOS.init();


        //partenaire
        var owl = $('.owl-carousel');
        owl.owlCarousel({
        items: 5,
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
        0: {
            items: 1,
        },
        540: {
            items: 3,
        },
        600: {
            items: 3,

        },
        1000: {
            items: 4,

        },
        1300: {
            items: 5,
        }
        }
     });
</script>


<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+2250708408040", // WhatsApp number
                call_to_action: "Contactez-nous", // Call to action
                position: "right", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>

    <!-- /GetButton.io widget -->

    <script src={{ asset('assets/js/intlTelInput.js') }}></script>

    <script>
        var input = document.querySelector("#phone_number");
        var errorMsg = document.querySelector("#error-msgPhoneNumber"),
            validMsg = document.querySelector("#valid-msgPhoneNumber");

        // here, the index maps to the error code returned from getValidationError - see readme
        var errorMap = ["Numéro Invalide !", "Code de pays invalide !",
            "Numéro de téléphone Trop Court", "Numéro de téléphone Trop Long",
            "Numéro Invalide"
        ];
        var iti = window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            geoIpLookup: function(success, failure) {
                $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "ci";
                    success(countryCode);
                });
            },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            separateDialCode: true,
            utilsScript: "{{ asset('assets/js/utils.js') }}",
        });

        var reset = function() {
            input.classList.remove("error");
            errorMsg.innerHTML = "";
            errorMsg.classList.add("hide");
            validMsg.classList.add("hide");
        };

        // on blur: validate
        input.addEventListener('blur', function() {
            reset();
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    $("#dial_codePhoneNumber").val(iti.getSelectedCountryData().dialCode);
                    // $("#phone_number").val(iti.);
                    $("#country_codePhoneNumber").val(iti.getSelectedCountryData().iso2.toUpperCase());
                    //console.log(iti.s.phone);
                    validMsg.classList.remove("hide");
                } else {
                    input.classList.add("error");
                    var errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.classList.remove("hide");
                }
            }
        });

        // on keyup / change flag: reset
        input.addEventListener('change', reset);
        input.addEventListener('keyup', reset);

    </script>

    @toastr_js


</body>
</html>
