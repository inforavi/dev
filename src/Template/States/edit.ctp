<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $state->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $state->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List States'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Owner Profiles'), ['controller' => 'HomeOwnerProfiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Owner Profile'), ['controller' => 'HomeOwnerProfiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Homes'), ['controller' => 'Homes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home'), ['controller' => 'Homes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="states form large-9 medium-8 columns content">
    <?= $this->Form->create($state) ?>
    <fieldset>
        <legend><?= __('Edit State') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
