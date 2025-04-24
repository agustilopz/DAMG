<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestió de Productes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <a href="index.html" class="btn btn-outline-primary mb-3">Tornar a l'inici</a>
        <a href="gestioCategories.php" class="btn btn-outline-secondary mb-3">Tornar a la gestió de categories</a>

        <h2 class="text-center mb-4">🛍️ Gestió de Productes</h2>

        <div class="row">
            <?php
            $db = new SQLite3('database/damg.db');
            //$id = $_GET['id'];
            $resultats = $db->query("SELECT * FROM productes");

            while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
                $imagePath = htmlspecialchars($fila['prod_imatge']);
                echo '
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="' . $imagePath . '" class="card-img-top" alt="' . htmlspecialchars($fila['prod_nom']) . '">
                        <div class="card-body">
                            <h5 class="card-title">' . htmlspecialchars($fila['prod_nom']) . '</h5>
                            <p class="card-text">' . htmlspecialchars($fila['prod_descripcio']) . '</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Preu: €' . number_format($fila['prod_preu'], 2) . '</small>
                        </div>
                    </div>
                </div>';
            }

            $db->close();
            ?>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
