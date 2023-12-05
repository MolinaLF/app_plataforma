<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Error 404 - Página no encontrada</title>
	<style>
		body {
			background-color: #f8f8f8;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
			text-align: center;
		}

		h1 {
			font-size: 3em;
			margin-bottom: 0.5em;
			color: #555;
		}

		p {
			font-size: 1.2em;
			margin-top: 0;
			color: #777;
		}

		button {
			background-color: #007bff;
			color: #fff;
			border: none;
			border-radius: 4px;
			padding: 10px 20px;
			font-size: 1em;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		button:hover {
			background-color: #0062cc;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Error 404 - Página no encontrada</h1>
		<p>Lo sentimos, la página que buscas no existe.</p>
		<button onclick="window.location.href='../index.php'">Intentar de nuevo</button>

	</div>
</body>
</html>