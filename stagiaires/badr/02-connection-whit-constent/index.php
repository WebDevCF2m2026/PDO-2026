
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries – PDO JSON</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, Arial, sans-serif;
        }

        body {
            background: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        h2 {
            color: #444;
            margin-top: 30px;
            border-bottom: 2px solid #ddd;
            padding-bottom: 8px;
        }

        pre {
            background: #1e1e1e;
            color: #dcdcdc;
            padding: 20px;
            border-radius: 8px;
            overflow-x: auto;
            font-size: 14px;
            line-height: 1.6;
        }

        .debug {
            background: #fff3cd;
            border: 1px solid #ffeeba;
            color: #856404;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            font-size: 14px;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            color: #666;
            font-size: 13px;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Liste des pays (PDO + JSON)</h1>

    <h2>Résultat JSON</h2>

    <?php

        require_once "config.dev.php";

        try{
            $pdo = new PDO(
            dsn: DB_CONNECT_TYPE .
                ":host=" . DB_CONNECT_HOST .
                ";port=" . DB_CONNECT_PORT .
                ";dbname=" . DB_CONNECT_NAME .
                ";charset=" . DB_CONNECT_CHARSET,
                username: DB_CONNECT_USER,
                password: DB_CONNECT_PWD
            );
        } catch(PDOException $e){
            echo "Number : " . $e->getCode();
            echo "<br>Message de l'erreur :" . $e->getMessage();
        }

        $sql = "SELECT * FROM `countries` ORDER BY `population` DESC";
        $request = $pdo->query($sql);
        $resultats = $request->fetchAll(PDO::FETCH_ASSOC);

        $json = json_encode($resultats, JSON_PRETTY_PRINT);
        echo "<pre>$json</pre>";

        echo "<div class='debug'>";

$file = fopen("allContries.json","wr");
  fputs($file,$json);
  fclose($file);


        var_dump($pdo, $request, $resultats);
        echo "</div>";
    ?>

    <footer>
        © 2026 – Badr Dakir · PDO · MariaDB
    </footer>
</div>

</body>
</html>
