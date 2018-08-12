<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Url $url
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Url'), ['action' => 'edit', $url->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Url'), ['action' => 'delete', $url->id], ['confirm' => __('Are you sure you want to delete # {0}?', $url->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Urls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Url'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="urls view large-9 medium-8 columns content">
    <h3><?= h($url->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Main Url') ?></th>
            <td><?= h($url->main_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tiny Url') ?></th>
            <td><?= h($url->tiny_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Ip') ?></th>
            <td><?= h($url->user_ip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($url->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($url->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($url->modified) ?></td>
        </tr>
    </table>
</div>
