<?php
$this->layout="ecommerce";

if($id==1){
?>
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-6">

    <?=$this->Html->image('congratulations.png');?>
</div>

<div class="col-lg-3"></div>
</div>

    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6" align="center">

            <h2>Thanks to buy with us.</h2>
        </div>

        <div class="col-lg-3"></div>
    </div>

    <div class="row">

        <div class="col-lg-6">
            <a class="cart  " href="/home/product" style="width: 100%;"  >Buy more...</a>
        </div>
        <div class="col-lg-6">
            <a class="cart " href="/users/transactions" style="width: 100%;"onclick="">Show my products</a>
        </div>
    </div>
<?php}else{
    ?>


<?php
}
?>
