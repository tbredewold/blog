<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>

	{{ HTML::style('css/admin.css') }}
</head>
<body>

<header>
	<div class="container">
		<h1>Admin Panel</h1>
	</div>
</header>

<main class="container">
	@yield('content')
</main>

<footer>
	<div class="container">
		&copy {{ date('Y') }} Company
	</div>
</footer>

</body>
</html>