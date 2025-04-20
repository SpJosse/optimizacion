<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema Académico</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<link rel="css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="dashboard">
		<header class="header">
			<h1><i class="fas fa-graduation-cap"></i> Sistema Académico</h1>
		</header>

		<section class="content">
			<div class="card">
				<h2><i class="fas fa-users"></i> Integrantes</h2>
				<ul class="team-list">
					<li><i class="fas fa-user"></i> GAVILAN AYALA JUAN JOSE</li>
					<li><i class="fas fa-user"></i> FRANCO LOPEZ JORGE JESUS</li>
					<li><i class="fas fa-user"></i> RAMOS MANTARI EDUARDO</li>
					<li><i class="fas fa-user"></i> ROMERO CONDOR DENNIS ROLANDO</li>
					<li><i class="fas fa-user"></i> YATACO PACHAS KEVIN ORLANDO</li>
				</ul>
			</div>

			<div class="card actions">
				<h2><i class="fas fa-cogs"></i> Acciones</h2>
				<div class="button-grid">
					<a href="agregar_estudiante.php" class="btn">
						<i class="fas fa-user-plus"></i> Añadir Estudiantes
					</a>
					<a href="agregar_materia.php" class="btn">
						<i class="fas fa-book"></i> Añadir Materias
					</a>
					<a href="inscribir_estudiante.php" class="btn">
						<i class="fas fa-edit"></i> Inscribir Estudiantes
					</a>
					<a href="ver_inscripciones.php" class="btn">
						<i class="fas fa-eye"></i> Ver Inscripciones
					</a>
				</div>
			</div>
		</section>

		<footer class="footer">
			<p>&copy; 2025 Sistema Académico</p>
		</footer>
	</div>
</body>
</html>
