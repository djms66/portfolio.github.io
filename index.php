<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Créateur d'Affiches</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <?php
            // Charge la page demandée via le paramètre 'page'
            $page = $_GET['page'] ?? 'about';
            $allowed_pages = ['about', 'gallery', 'blog', 'contact'];
            if (in_array($page, $allowed_pages)) {
                include $page . '.php';
            } else {
                include 'about.php';
            }
        ?>
    </main>

    <?php include 'footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>