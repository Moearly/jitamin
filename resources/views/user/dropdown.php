<div class="dropdown">
    <a href="#" class="dropdown-menu dropdown-menu-link-icon"><i class="fa fa-cog fa-fw"></i><i class="fa fa-caret-down"></i></a>
    <ul>
        <li>
            <i class="fa fa-user fa-fw"></i>
            <?= $this->url->link(t('View profile'), 'ProfileController', 'show', ['user_id' => $user['id']]) ?>
        </li>
        <?php if ($this->user->hasAccess('ProfileController', 'edit')): ?>
                <li>
                <i class="fa fa-edit fa-fw"></i>
                    <?= $this->url->link(t('Edit user'), 'ProfileController', 'edit', ['user_id' => $user['id']]) ?>
                </li>
        <?php endif ?>
        <?php if ($user['is_active'] == 1 && $this->user->hasAccess('UserStatusController', 'disable') && !$this->user->isCurrentUser($user['id'])): ?>
            <li>
                <i class="fa fa-times fa-fw"></i>
                <?= $this->url->link(t('Disable'), 'UserStatusController', 'confirmDisable', ['user_id' => $user['id']], false, 'popover') ?>
            </li>
        <?php endif ?>
        <?php if ($user['is_active'] == 0 && $this->user->hasAccess('UserStatusController', 'enable') && !$this->user->isCurrentUser($user['id'])): ?>
            <li>
                <i class="fa fa-check-square-o fa-fw"></i>
                <?= $this->url->link(t('Enable'), 'UserStatusController', 'confirmEnable', ['user_id' => $user['id']], false, 'popover') ?>
            </li>
        <?php endif ?>
        <?php if ($this->user->hasAccess('UserStatusController', 'remove') && !$this->user->isCurrentUser($user['id'])): ?>
            <li>
                <i class="fa fa-trash-o fa-fw"></i>
                <?= $this->url->link(t('Remove'), 'UserStatusController', 'confirmRemove', ['user_id' => $user['id']], false, 'popover') ?>
            </li>
        <?php endif ?>
    </ul>
</div>
