<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cuisine->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cuisine->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cuisines'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Home Cuisines'), ['controller' => 'HomeCuisines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Cuisine'), ['controller' => 'HomeCuisines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cuisines form large-9 medium-8 columns content">
    <?= $this->Form->create($cuisine) ?>
    <fieldset>
        <legend><?= __('Edit Cuisine') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
