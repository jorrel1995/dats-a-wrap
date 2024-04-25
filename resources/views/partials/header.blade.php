<!doctype html>
<html lang="en">
	<head>
		<title>{{$page->title}}</title>
		<meta name="description" content="{!! $page->meta_description !!}">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="/css/app.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/41131f2a3b.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link Custom CSS -->
    <link rel="stylesheet" href="styles.css">		<link href="/css/fa-css/all.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.typekit.net/ije4get.css">
		<script src="https://www.google.com/recaptcha/api.js?render=6LdPVrcpAAAAAO0pjxTphkhvZCmc4juZxy-oz7HU"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

		<link rel="apple-touch-icon" sizes="57x57" href="/images/icon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/images/icon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/images/icon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/images/icon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/images/icon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/images/icon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/images/icon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/images/icon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/images/icon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/images/icon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/images/icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/images/icon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/images/icon/favicon-16x16.png">
		<link rel="manifest" href="/images/icon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">


 		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha256-qvCL5q5O0hEpOm1CgOLQUuHzMusAZqDcAZL9ijqfOdI=" crossorigin="anonymous" />

		 <style>
    #video-banner {
        position: relative;
        width: 100vw; /* Set width to 100vw (viewport width) */
        height: 100vh; /* Set height to 100vh (viewport height) */
        overflow: hidden;
    }

    #video-banner video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%; /* Set width to 100% to cover the entire width */
        height: 100%; /* Set height to 100% to cover the entire height */
        object-fit: cover;
    }

    #video-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        text-align: center;
        z-index: 1;
    }

    /* Additional styles for the content */
    #video-content h1 {
        font-size: 3rem;
    }

    #video-content p {
        font-size: 1.5rem;
    }
</style>


	</head>
	<body>
	<header>
        @php
// Get the current URL
$url = Request::url();

// Parse the URL to get the path
$path = parse_url($url, PHP_URL_PATH);

// Get the last segment of the path, which represents the slug
$slug = basename($path);
        @endphp
  <!-- Bootstrap Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand mr-auto" href="/">
                <img src="{{ Storage::url('pages/DAWlogo.png') }}" alt="Logo" style="max-height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    @foreach(Page::getAllActive() as $page)
                    <li class="nav-item active">
                        <a class="nav-link"   href="{{ $page->slug }}">
                        {{ $page->title }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>
</div>