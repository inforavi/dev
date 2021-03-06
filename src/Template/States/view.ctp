<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit State'), ['action' => 'edit', $state->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete State'), ['action' => 'delete', $state->id], ['confirm' => __('Are you sure you want to delete # {0}?', $state->id)]) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Owner Profiles'), ['controller' => 'HomeOwnerProfiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Owner Profile'), ['controller' => 'HomeOwnerProfiles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Homes'), ['controller' => 'Homes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home'), ['controller' => 'Homes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="states view large-9 medium-8 columns content">
    <h3><?= h($state->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($state->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($state->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cities') ?></h4>
        <?php if (!empty($state->cities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($state->cities as $cities): ?>
            <tr>
                <td><?= h($cities->id) ?></td>
                <td><?= h($cities->state_id) ?></td>
                <td><?= h($cities->name) ?></td>
                <td><?= h($cities->latitude) ?></td>
                <td><?= h($cities->longitude) ?></td>
                <td><?= h($cities->state) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cities', 'action' => 'view', $cities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cities', 'action' => 'edit', $cities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cities', 'action' => 'delete', $cities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Home Owner Profiles') ?></h4>
        <?php if (!empty($state->home_owner_profiles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Home Owner Id') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('City Id') ?></th>
                <th scope="col"><?= __('Dob') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Marital Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($state->home_owner_profiles as $homeOwnerProfiles): ?>
            <tr>
                <td><?= h($homeOwnerProfiles->id) ?></td>
                <td><?= h($homeOwnerProfiles->home_owner_id) ?></td>
                <td><?= h($homeOwnerProfiles->phone) ?></td>
                <td><?= h($homeOwnerProfiles->country_id) ?></td>
                <td><?= h($homeOwnerProfiles->state_id) ?></td>
                <td><?= h($homeOwnerProfiles->city_id) ?></td>
                <td><?= h($homeOwnerProfiles->dob) ?></td>
                <td><?= h($homeOwnerProfiles->gender) ?></td>
                <td><?= h($homeOwnerProfiles->marital_status) ?></td>
                <td><?= h($homeOwnerProfiles->created) ?></td>
                <td><?= h($homeOwnerProfiles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HomeOwnerProfiles', 'action' => 'view', $homeOwnerProfiles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HomeOwnerProfiles', 'action' => 'edit', $homeOwnerProfiles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HomeOwnerProfiles', 'action' => 'delete', $homeOwnerProfiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeOwnerProfiles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Homes') ?></h4>
        <?php if (!empty($state->homes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Home Owner Id') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('City Id') ?></th>
                <th scope="col"><?= __('Pincode') ?></th>
                <th scope="col"><?= __('Google Location') ?></th>
                <th scope="col"><?= __('Landline') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($state->homes as $homes): ?>
            <tr>
                <td><?= h($homes->id) ?></td>
                <td><?= h($homes->name) ?></td>
                <td><?= h($homes->home_owner_id) ?></td>
                <td><?= h($homes->country_id) ?></td>
                <td><?= h($homes->state_id) ?></td>
                <td><?= h($homes->city_id) ?></td>
                <td><?= h($homes->pincode) ?></td>
                <td><?= h($homes->google_location) ?></td>
                <td><?= h($homes->landline) ?></td>
                <td><?= h($homes->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Homes', 'action' => 'view', $homes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Homes', 'action' => 'edit', $homes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Homes', 'action' => 'delete', $homes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
