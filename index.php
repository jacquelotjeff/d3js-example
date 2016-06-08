<!DOCTYPE html>
<html>
<head>
    <title>TPS 3 Visualisation</title>

    <!-- Inclusion JS (librairie + scripts de création de graph) -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>

    <!-- D3 js -->
    <script type="text/javascript" src="js/d3.min.js"></script>

    <!-- Intégration de Jqplot -->
    <script type="text/javascript" src="js/jquery.jqplot.min.js"></script>
    <script type="text/javascript" src="js/renderer/jqplot.barRenderer.js"></script>
    <script type="text/javascript" src="js/renderer/jqplot.categoryAxisRenderer.js"></script>
    <script type="text/javascript" src="js/renderer/jqplot.highlighter.js"></script>

    <!-- Fichiers surchargés -->
    <script type="text/javascript" src="js/project.js"></script>
    <link href="css/project.css" type="text/css" rel="stylesheet"/>

    <script type="text/javascript" src="js/pourcent_friend_gender.js"></script>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Statistiques</h1>
    </div>

    <div class="first">
        <h3>Première statistique</h3>
        <div id="first"></div>
    </div>

    <div class="second">
        <h3>Deuxième statistique</h3>
        <div id="second"></div>
    </div>

    <div class="first">
        <h3>Troisème statistique</h3>
        <div id="third"></div>
    </div>

    <div class="col-md-12 pourcent_friend_gender">
        <h3>Pourcentage d'amis masculins et féminins</h3>
        <div id="pourcent_friend_gender"></div>
    </div>

</div>

</body>
</html>