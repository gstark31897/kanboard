<div class="table-list-details table-list-details-with-icons">
    <span class="table-list-category">
        <?= $this->user->getRoleName($user['role']) ?>
    </span>

    <?php if (! empty($user['name'])): ?>
        <span><?= $this->text->e($user['username']) ?></span>
    <?php endif ?>

    <?php if (! empty($user['email'])): ?>
        <span><a href="mailto:<?= $this->text->e($user['email']) ?>"><?= $this->text->e($user['email']) ?></a></span>
    <?php endif ?>

    <?php if (! empty($this->user->getGroupNames($user['id'])) ): ?>
        <span><i class="fa fa-fw fa-group aria-hidden="true"></i> <?= $this->user->getGroupNames($user['id']) ?></span>
    <?php endif ?>
</div>
