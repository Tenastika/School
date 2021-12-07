<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<title>Digital School</title>
				<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">
		<!-- <link rel="stylesheet" href="css/fonts/style.css"> -->



		{% block styles %}
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css" media="(max-width: 1920px)">
		{% endblock %}	
	</head>

	<body id="body">

		{% block blocks %}
		<div class="wrapper">
		{% include 'header/block.php' %}
		{% include 'school/block.php' %}
		{% include 'courses/block.php' %}
		</div>

		{% endblock %}
		{% block scripts %}
		<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
		<script src="js/script.js"></script>
		
		{% endblock %}
	</body>
</html>