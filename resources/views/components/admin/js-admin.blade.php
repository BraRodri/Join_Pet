<script src="{{ asset('vendor/jquery/jquery-3.5.1.min.js') }}"></script>
<!-- Swal alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="{{ asset('js/app.js') }}" defer></script>


<script src="{{ asset('js/sb-admin-2.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}" defer></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fh-3.2.2/r-2.2.9/rg-1.1.4/sc-2.0.5/sp-2.0.0/sl-1.3.4/datatables.min.css"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fh-3.2.2/r-2.2.9/rg-1.1.4/sc-2.0.5/sp-2.0.0/sl-1.3.4/datatables.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/i18n/es.js"></script>

<!-- jquery-typeahead -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" ></script>

<!-- CSS -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- dropzone -->
<script src={{ asset('vendor/dropzone/dropzone.min.js') }}></script>

<!-- fullcalendar -->
<script src="{{ asset('vendor/fullcalendar/main.js') }}"></script>
<script src="{{ asset('vendor/fullcalendar/locales-all.js') }}"></script>

<script>
    $('.select2').select2();

    const options2 = {
        style: 'currency',
        currency: 'COP'
    };
    const numberFormat2 = new Intl.NumberFormat('es-CO', options2);

</script>

<!-- FANCYBOX 3 -->
<script type="text/javascript" src={{ asset('vendor/fancybox/jquery.fancybox.js') }}></script>
<script type="text/javascript">
    $('[data-fancybox]').fancybox({
        image: {
            protect: true
        },
        loop: false,
        speed: 320,
        slideShow: false
    });
</script>
<!-- END -->

{{$slot}}
