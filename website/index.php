<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
        }
        main {
            padding: 20px;
        }
        footer {
            background-color: #ddd;
            color: #555;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenue sur Mon Site Web</h1>
    </header>
    <main>
        <p>Ceci est une page HTML simple pour tester la configuration Docker avec Apache.</p>
        <p>La date et l'heure actuelles sont : <?php echo date('d/m/Y H:i:s'); ?></p>
    </main>
    <footer>
        <p>&copy; 2024 Mon Site Web</p>
    </footer>
</body>
</html>
