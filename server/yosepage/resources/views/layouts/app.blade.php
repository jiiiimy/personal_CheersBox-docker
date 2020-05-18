<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ config('app.name') }}</title>
	<meta property="og:title" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="{{ url('/') }}" />
	<meta property="og:image" content="{{ asset('img/meta/cb_thumbnail.jpeg')}}" />
	<meta property="og:site_name" content="CheersBox" />
	<meta property="og:description" content="CheersBoxは、みんなで誰かに言葉を贈るためのWebアプリ。これからはもっと、贈られる言葉が増えますように！" />
	<meta property="fb:app_id" content="2471674503145611" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@jiiiimy00" />
	<meta name="twitter:player" content="@jiiiimy00" />
	<link rel="shortcut icon" href="{{ asset('img/meta/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('img/meta/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ asset('img/meta/android-chrome-512x512.png') }}">
	<link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
	@yield('content')
	<script type="module" src="{{ asset('js/main.js') }}"></script>
	<script type="module" src="{{ asset('js/models.js') }}"></script>
</body>

</html>