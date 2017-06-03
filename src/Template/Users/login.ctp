<?php
$this->layout = 'ecommerce';
?>


<div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create( '',['id'=>'login']) ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
    <div class="col-lg-6">
        <a class="cart  " style="width: 100%;"  onclick=" document.getElementById('login').submit() ;">Login</a>
    </div>
    <div class="col-lg-6">
        <a class="cart " href="/users/add" style="width: 100%;"onclick="">Register</a>
    </div><?= $this->Form->end() ?>
</div>
