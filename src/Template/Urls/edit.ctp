<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Url $url
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $url->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $url->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Urls'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="urls form large-9 medium-8 columns content">
    <?= $this->Form->create($url) ?>
    <fieldset>
        <legend><?= __('Edit Url') ?></legend>
        <?php
            echo $this->Form->control('main_url');
            echo $this->Form->control('tiny_url');
            echo $this->Form->control('user_ip');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
