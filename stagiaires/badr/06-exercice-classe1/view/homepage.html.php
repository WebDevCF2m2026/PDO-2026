
<?php
// Tu peux ajouter du PHP ici si besoin plus tard
$title = "Voyage & Découverte";
$date = date("Y");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
h2{
    margin : 20px;
}
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(90deg, rgba(70, 163, 235, 1) 0%, rgba(65, 166, 217, 0.59) 0%, rgba(109, 133, 132, 1) 100%);
            margin: 0;
        }
p{
    font-family: 'Courier New', Courier, monospace;
    font-size: 1.2rem;
}
        header {
            height: 50vh;
            background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e') no-repeat center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            
        }

        header h1 {
            font-size: 2rem;
            background: rgba(54, 92, 124, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
h2{
    font-family: 'Courier New', Courier, monospace;
    font-size: 2rem;
}
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(0,0,0,0.6);
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .section {
            padding: 50px;
            text-align: center;
        }

        .gallery {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            width: 260px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card h3 {
            padding: 10px;
            background: white;
        }

        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }
                 nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

<nav>
    <a href="?page=homepage">Accueil</a>
    <a href="?p=add">Ajouter avis</a>
    <a href="?p=list">Voir avis</a>
</nav>

<header>

</header>

<section class="section">
    <h2>Nos destinations</h2>

    <div class="gallery">

        <?php
        $destinations = [
            ["Paris ", "https://th.bing.com/th/id/R.ab551fbaf54e5d79306bed1702c19e1f?rik=TRn7zBnlFTIFEQ&pid=ImgRaw&r=0"],
            ["Bali 🌴", "https://d22ir9aoo7cbf6.cloudfront.net/wp-content/uploads/sites/4/2019/08/Ulun-Danu-Beratan-in-Bedugul-Bali-Indonesia-.jpg"],
            ["New York 🗽", "https://wallup.net/wp-content/uploads/2019/10/972979-new-york-city-cities-brooklyn-bridge-manhattan-ville-usa-building-2.jpg"],
            ["Sahara 🏜️", "https://www.icietlabas.fr/wp-content/uploads/2018/03/Mergouza-Maroc-Sahara-desertsahara-voyage-blog-blogvoyage-desert-icietlabas-69.jpg"]
        ];

        foreach ($destinations as $d):
        ?>
            <div class="card">
                <img src="<?= $d[1] ?>" alt="">
                <h3><?= $d[0] ?></h3>
            </div>
        <?php endforeach; ?>

    </div>
</section>

<section class="section">
    <h2>Pourquoi voyager avec nous ?</h2>
    <p>✈️ Meilleurs prix<br>🌟 Expériences uniques<br>📞 Support 24/7</p>
</section>

<footer>
    <p>© <?= $date ?> <?= $title ?></p>
</footer>

</body>
</html>
