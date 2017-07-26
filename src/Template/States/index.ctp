<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New State'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Owner Profiles'), ['controller' => 'HomeOwnerProfiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Owner Profile'), ['controller' => 'HomeOwnerProfiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Homes'), ['controller' => 'Homes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home'), ['controller' => 'Homes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="states index large-9 medium-8 columns content">
    <h3><?= __('States') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($states as $state): ?>
            <tr>
                <td><?= $this->Number->format($state->id) ?></td>
                <td><?= h($state->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $state->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $state->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $state->id], ['confirm' => __('Are you sure you want to delete # {0}?', $state->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
