<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Ressources Relationnelles';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>

    <?= $this->Html->css(['style']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
    <header>
        <div class="logo">
            <?= $this->Html->link($this->Html->image("logo.png", ["alt" => "logoNav"]), "/publication/index", ["escape" => false]); ?>
        </div>
        <?php if (!isset($_SESSION['Auth']['id_user'])): ?>
            <ul class="ressources">
                <li><a href="ressources">Accès aux ressources</a></li>
            </ul>
        <?php else: ?>
            <ul class="user">
                <li><a href="/clmad_app/users/view/<?= $_SESSION['Auth']['id_user'] ?>"><img src="/clmad_app/webroot/img/thumbnail_a1_f1769e813a.png" alt="avatar"><?= $_SESSION['Auth']['prenom_user']." ".$_SESSION['Auth']['nom_user']?></a></li>
            </ul>
        <?php endif; ?>
    </header>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
