<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')|{{ config('app.name') }}</title>
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
	<div class="all-container">
		<div class="container -theme chee">
			<div class="contents -theme">
				<div class="container -lp">
					<div class="contents -lp">
						<div class="container -howtouse">
							<div class="header -lp">
								<h1 class="-appname">{{config('app.name')}}</h1>
							</div>
							<div class="contents -howtouse">
								<h1 class="-headline">@yield('title')</h1>
								<div class="area -howtouse">
									<h2 class="-item">@yield('message')</h2>
									<p class="-detail">@yield('detail')</p>
									@yield('link')
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>