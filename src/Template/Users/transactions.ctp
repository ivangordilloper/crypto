<?php
$this->layout="ecommerce";
?>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-5">
<div class="transactions index large-9 medium-8 columns content">
    <h3><?= __('Transactions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('status') ?></th>
            <th scope="col"><?= $this->Paginator->sort('cost') ?></th>
            <th scope="col"><?= $this->Paginator->sort('description') ?></th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($transactions as $transaction): ?>
            <tr>
                <td><?= $this->Number->format($transaction->id) ?></td>
                <td><?= $this->Number->format($transaction->status) ?></td>
                <td><?= $this->Number->format($transaction->cost) ?></td>
                <td><?=  h($transaction->description) ?></td>


            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
           </div>
</div>
    </div>
</div>
