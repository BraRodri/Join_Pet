<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
{{-- <meta name="google-site-verification" content="{{ $datos->googlecode }}" /> --}}

<meta name="revisit-after" content="1 day">
{{-- <meta name="robots" content="{{ $datos->robots }}"> --}}
<meta name="author" content=""/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Google / Search Engine Tags -->
<meta itemprop="image" content="{{ asset('images/logotipo-bp.png') }}">

<!-- contiene title y url, name de google -->
{{ $slot }}
<meta property="og:image" content="{{ asset('images/logotipo.png') }}" />
<meta name="twitter:site" content="{{ route('home') }}" />
<meta name="twitter:creator" content="" />
<meta name="twitter:card" content="app" />
