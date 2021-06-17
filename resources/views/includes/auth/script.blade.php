<!-- JS Global Compulsory  -->
<script src="{{ asset('/front-design/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/front-design/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('/front-design/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- JS Implementing Plugins -->
<script src="{{ asset('/front-design/assets/vendor/hs-header/dist/hs-header.min.js') }}"></script>
<script src="{{ asset('/front-design/assets/vendor/hs-go-to/dist/hs-go-to.min.js') }}"></script>
<script src="{{ asset('/front-design/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js') }}"></script>
<script src="{{ asset('/front-design/assets/vendor/hs-unfold/dist/hs-unfold.min.js') }}"></script>
<script src="{{ asset('/front-design/assets/vendor/typed.js/lib/typed.min.js') }}"></script>

<!-- JS Front -->
<script src="{{ asset('/front-design/assets/js/theme.min.js') }}"></script>

{{-- third party --}}
<script src="{{ url('https://unpkg.com/boxicons@latest/dist/boxicons.js') }}"></script>

<!-- JS Plugins Init. -->
<script>
  $(document).on('ready', function () {
    // INITIALIZATION OF HEADER
    // =======================================================
    var header = new HSHeader($('#header')).init();

    
    // INITIALIZATION OF MEGA MENU
    // =======================================================
    var megaMenu = new HSMegaMenu($('.js-mega-menu')).init();

    
    // INITIALIZATION OF UNFOLD
    // =======================================================
    var unfold = new HSUnfold('.js-hs-unfold-invoker').init();


    // INITIALIZATION OF TEXT ANIMATION (TYPING)
    // =======================================================
    var typed = $.HSCore.components.HSTyped.init(".js-text-animation");
  });
</script>