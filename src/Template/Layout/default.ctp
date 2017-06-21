<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('vendor/materialize/css/materialize.css') ?>
    <?= $this->Html->css('vendor/font-awesome/css/font-awesome.css') ?>

    <?= $this->Html->script('vendor/jquery.js') ?>
    <?= $this->Html->script('vendor/materialize.js') ?>
    <?= $this->Html->script('base.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
  <div class="row">
    <div class="col s3">
      <h1><a href="">Pandoro</a></h1>
    </div>
    <div class="col s9">
      <div class="container">
          <?= $this->fetch('content') ?>
      </div>
      <div class="modal bottom-sheet transparent">
        <?= $this->Flash->render() ?>
      </div>
    </div>
  </div>
  <footer>
  </footer>
</body>
</html>
