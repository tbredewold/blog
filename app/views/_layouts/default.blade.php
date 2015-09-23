<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>

	{{ HTML::style('css/style.css') }}
</head>
<body>

<header>
	<div class="container">
		<h1>My Blog</h1>
		<p>Blogtutorial, created with <strong><a class="title_link" href="http://laravel.com/">laravel</a> laravel</strong> and the help of <strong><a class="title_link" href="http://tutsplus.com/authors/joost-van-veen">Joost van Veen</a>.</strong></p>
	</div>
</header>

<main class="container">
	@yield('content')
</main>

<footer>
	<div class="container">
		&copy {{ date('Y') }} Company |
		{{ link_to_route('admin.posts.index', 'Admin') }}
	</div>
</footer>

</body>
</html>