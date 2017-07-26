<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Amenity'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Amenities'), ['controller' => 'HomeAmenities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Amenity'), ['controller' => 'HomeAmenities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="amenities index large-9 medium-8 columns content">
    <h3><?= __('Amenities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($amenities as $amenity): ?>
            <tr>
                <td><?= $this->Number->format($amenity->id) ?></td>
                <td><?= h($amenity->name) ?></td>
                <td><?= h($amenity->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $amenity->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $amenity->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $amenity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $amenity->id)]) ?>
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
