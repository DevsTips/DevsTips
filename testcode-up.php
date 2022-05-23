<html>

<head>
    <metacharset="utf-8" />
    <title>Ceci est une page HTML de test pour le code</title>
</head>

<body>
    <h2>Page de test pour le code</h2>
    <p>
        Cette page contient des exemple de code.

        Ici Exemple <strong>uniquement</strong> du code HTML.<br />
        Voici quelques petits tests avec style:
    </p>
    <p>Ceci est une page de test <?php /* Code PHP */ ?></p>
    <?php echo ("Celle-ci a été écrite entièrement en PHP."); ?>
    <ul>
        <li style="color: blue;">Texte écrit en bleu</li>
        <li style="color: red;">Texte écrit en rouge</li>
        <li style="color: green;">Texte écrit en vert</li>
    </ul>
    <p> Test pour date et eureur </p>
    <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
    <?php
    /* Le code PHP se met ici
Et ici
Et encore ici */
    ?>


</body>

</html>