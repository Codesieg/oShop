<!DOCTYPE html>
<html lang="fr">
<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= $viewData['urlPrefix'] ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $viewData['urlPrefix'] ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $viewData['urlPrefix'] ?>css/styles.css">
    <link rel="stylesheet" href="<?= $viewData['urlPrefix'] ?>css/404.css">
    <title>oShop</title>
</head>

<div class="box">
    <div class="box__ghost">
        <div class="symbol"></div>
        <div class="symbol"></div>
        <div class="symbol"></div>
        <div class="symbol"></div>
        <div class="symbol"></div>
        <div class="symbol"></div>

        <div class="box__ghost-container">
            <div class="box__ghost-eyes">
                <div class="box__eye-left"></div>
                <div class="box__eye-right"></div>
            </div>
            <div class="box__ghost-bottom">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="box__ghost-shadow"></div>
    </div>

    <div class="box__description">
        <div class="box__description-container">
            <div class="box__description-title">Oh nooonn!</div>
            <div class="box__description-text">Apparement ce que vous chercher n'éxiste plus !!!</div>
        </div>

        <a href="<?= $viewData['urlPrefix'] ?>" target="_blank" class="box__button">Retour à l'accueil</a>

    </div>

</div>

<script src="<?= $viewData['urlPrefix'] ?>js/jquery.min.js"></script>
<script src="<?= $viewData['urlPrefix'] ?>js/popper.min.js"></script>
<script src="<?= $viewData['urlPrefix'] ?>js/bootstrap.min.js"></script>
<script src="<?= $viewData['urlPrefix'] ?>js/app.js"></script>
<script src="<?= $viewData['urlPrefix'] ?>js/404.js"></script>
</body>

</html>