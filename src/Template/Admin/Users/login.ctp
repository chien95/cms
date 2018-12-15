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
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <?= $this->Html->css('plugins/bootstrap/css/bootstrap.css') ?>
    <?= $this->Html->css('plugins/node-waves/waves.css') ?>
    <?= $this->Html->css('plugins/animate-css/animate.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('admin.css') ?>
<body class="login-page">
    <div class="login-box">
        <div class="alert alert-danger">
            <?= __('Username or password is incorrect') ?>
        </div>
        <div class="card">
            <div class="body">
                <?= $this->Form->create('Users',['id'=>"sign_in"]) ?>
                    <h1 class="text-center"><?= __('SIGN IN')?></h1>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <?= $this->Form->button(__('SIGN IN'),["class"=>"btn btn-block bg-pink waves-effect","type"=>"submit"]) ?>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="sign-up.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
    <?= $this->Html->script('plugins/jquery/jquery.min.js') ?>
    <?= $this->Html->script('plugins/bootstrap/js/bootstrap.js') ?>
    <?= $this->Html->script('plugins/node-waves/waves.js') ?>
    <?= $this->Html->script('plugins/jquery-validation/jquery.validate.js') ?>
    <?= $this->Html->script('admin.js') ?>
    <?= $this->Html->script('pages/examples/sign-in.js') ?>
</body>
</html>
