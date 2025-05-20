<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
<!-- Barra de navegación -->
    <nav class="navbar">
        <div class="logo">TM</div>

        <form class="search-form" action="buscar.php" method="get">
            <input type="text" name="q" placeholder="Buscar...">
            <button type="submit">🔍</button>
        </form>
        <div class="navbar-buttons">
        <a class="home-btn" href="index.php">Inicio</a>
        <a class="logout-btn" href="logout.php">Cerrar sesión</a>
    </nav>

    <!-- Contenido principal -->
    <div class="contenido">
        <h1></h1>
    </div>


    <div class="card" style="width: 18rem;">
  <img src="IMG/zapatos.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Zapatos deportivos</h5>
    <p class="card-text">Vendo o intercambio zapatos marca addidas que ofrecen</p>
    <a href="#" class="btn btn-primary">Realizar oferta</a>
  </div>
  <div class="card" style="width: 18rem;">
  <img src="IMG/clases.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Clases de ingles</h5>
    <p class="card-text">Buen dia, intercambio tres clases de ingles por algun electrodomestico, que ofrecen?</p>
    <a href="#" class="btn btn-primary">Realizar oferta</a>
  </div>
</div>
</div>
</body>
</html>