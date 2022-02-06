<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alquiler[]|\Cake\Collection\CollectionInterface $alquiler
 */
?>
<div class="alquiler index content">
    <h3><?= __('Alquiler') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user') ?></th>
                    <th><?= $this->Paginator->sort('book') ?></th>
                    <th><?= $this->Paginator->sort('startDate') ?></th>
                    <th><?= $this->Paginator->sort('endDate') ?></th>
                    <th><?= $this->Paginator->sort('deliveryDate') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('statusFine') ?></th>
                    <th><?= $this->Paginator->sort('fine') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alquiler as $alquiler): ?>
                <tr>
                    <td><?= $this->Number->format($alquiler->id) ?></td>
                    <td><?= h($alquiler->user) ?></td>
                    <td><?= h($alquiler->book) ?></td>
                    <td><?= h($alquiler->startDate) ?></td>
                    <td><?= h($alquiler->endDate) ?></td>
                    <td><?= h($alquiler->deliveryDate) ?></td>
                    <td><?= h($alquiler->status) ?></td>
                    <td><?= h($alquiler->statusFine) ?></td>
                    <td><?= $this->Number->format($alquiler->fine) ?></td>
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
