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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $alquiler->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $alquiler->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Alquiler'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alquiler form content">
            <?= $this->Form->create($alquiler) ?>
            <fieldset>
                <legend><?= __('Edit Alquiler') ?></legend>
                <?php
                    echo $this->Form->control('user');
                    echo $this->Form->control('book');
                    echo $this->Form->control('startDate');
                    echo $this->Form->control('endDate');
                    echo $this->Form->control('deliveryDate');
                    echo $this->Form->control('status');
                    echo $this->Form->control('statusFine');
                    echo $this->Form->control('fine');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
