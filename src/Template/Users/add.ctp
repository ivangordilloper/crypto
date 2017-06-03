<?php
$this->layout = 'ecommerce';
?>
<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row formulario">
<div class="col-lg-3 "></div>
<div class="col-lg-6">
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Agregar Usuario') ?></legend>
        <?php

            ?>
        <div class="input text required col-lg-6"><label for="nombre"></label><input type="text" name="name" required="required" maxlength="50" id="username" placeholder="Name"></div>
        <div class="input text required col-lg-6"><label for="apellido"></label><input type="text" name="lastname" required="required" maxlength="50" id="username" placeholder="Last Name"></div>

        <div class="input text required col-lg-12"><label for="username"></label><input type="text" name="username" required="required" maxlength="50" id="username" placeholder="Username"></div>

        <div class="input text required col-lg-12"><label for="email"></label><input type="text" name="email" required="required" maxlength="50" id="email" placeholder="Email"></div>
        <div class="input password required col-lg-12"><label for="password"></label><input type="password" name="password" required="required"  placeholder="Password" id="password"></div>
            <input name="role" value="user" type="hidden"/>
            <?php
        ?>
    </fieldset>
    <div class="col-lg-6">
    <input type="submit" class='cart' />
    </div>
    <div class="col-lg-6">
    <a class="cart "onclick="">Buy!</a>
    </div>
    <?= $this->Form->end() ?>
</div>
</div>
<div class="col-lg-3"></div>
</div>
