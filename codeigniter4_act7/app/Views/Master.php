<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <!-- Agrega aquí tus enlaces a hojas de estilo CSS y otros recursos -->
</head>
<body>
    <header>
        <!-- Contenido del encabezado, como el logotipo y menú de navegación -->
        <h1>Carrito de Compras</h1>
        <nav>
            <ul>
                <li><a href="<?= base_url('contactos') ?>">Inicio</a></li>
            </ul>
        </nav>
        <hr>
    </header>

    <main>
        <!-- Contenido específico de la página -->
        <?= $content ?>
    </main>

    <footer>
        <hr>
        <center><FOOTER></center>
    </footer>
</body>
</html>
