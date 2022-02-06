<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alquiler $alquiler
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Alquiler'), ['action' => 'edit', $alquiler->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Alquiler'), ['action' => 'delete', $alquiler->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alquiler->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Alquiler'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Alquiler'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alquiler view content">
            <h3><?= h($alquiler->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= h($alquiler->user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Book') ?></th>
                    <td><?= h($alquiler->book) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($alquiler->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('StatusFine') ?></th>
                    <td><?= h($alquiler->statusFine) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($alquiler->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fine') ?></th>
                    <td><?= $this->Number->format($alquiler->fine) ?></td>
                </tr>
                <tr>
                    <th><?= __('StartDate') ?></th>
                    <td><?= h($alquiler->startDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('EndDate') ?></th>
                    <td><?= h($alquiler->endDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('DeliveryDate') ?></th>
                    <td><?= h($alquiler->deliveryDate) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
