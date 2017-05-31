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
<div class="input text required col-lg-12"><label for="username"></label><input type="text" name="username" required="required" maxlength="50" id="username" placeholder="Username"></div>
<div class="input password required col-lg-12"><label for="password"></label><input type="password" name="password" required="required"  placeholder="Password" id="password"></div>
            <input name="role" value="user" type="hidden"/>
            <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
<div class="col-lg-3"></div>
</div>
