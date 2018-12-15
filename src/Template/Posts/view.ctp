<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="posts view large-9 medium-8 columns content">
    <h3><?= h($post->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($post->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($post->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info Text1') ?></th>
            <td><?= h($post->info_text1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info Text2') ?></th>
            <td><?= h($post->info_text2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info Text3') ?></th>
            <td><?= h($post->info_text3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($post->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info Number1') ?></th>
            <td><?= $this->Number->format($post->info_number1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info Number2') ?></th>
            <td><?= $this->Number->format($post->info_number2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info Number3') ?></th>
            <td><?= $this->Number->format($post->info_number3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publish Date') ?></th>
            <td><?= h($post->publish_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($post->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($post->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Delete') ?></th>
            <td><?= $post->is_delete ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Published') ?></th>
            <td><?= $post->published ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Arr Img') ?></h4>
        <?= $this->Text->autoParagraph(h($post->arr_img)); ?>
    </div>
    <div class="row">
        <h4><?= __('Info') ?></h4>
        <?= $this->Text->autoParagraph(h($post->info)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($post->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($post->content)); ?>
    </div>
    <div class="row">
        <h4><?= __('Info Text4') ?></h4>
        <?= $this->Text->autoParagraph(h($post->info_text4)); ?>
    </div>
    <div class="row">
        <h4><?= __('Info Text5') ?></h4>
        <?= $this->Text->autoParagraph(h($post->info_text5)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Categories') ?></h4>
        <?php if (!empty($post->categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Arr Img') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($post->categories as $categories): ?>
            <tr>
                <td><?= h($categories->id) ?></td>
                <td><?= h($categories->title) ?></td>
                <td><?= h($categories->slug) ?></td>
                <td><?= h($categories->arr_img) ?></td>
                <td><?= h($categories->parent_id) ?></td>
                <td><?= h($categories->description) ?></td>
                <td><?= h($categories->modified) ?></td>
                <td><?= h($categories->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $categories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $categories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $categories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Comments') ?></h4>
        <?php if (!empty($post->comments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Post Id') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Is Delete') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($post->comments as $comments): ?>
            <tr>
                <td><?= h($comments->id) ?></td>
                <td><?= h($comments->user_id) ?></td>
                <td><?= h($comments->post_id) ?></td>
                <td><?= h($comments->content) ?></td>
                <td><?= h($comments->is_delete) ?></td>
                <td><?= h($comments->modified) ?></td>
                <td><?= h($comments->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Comments', 'action' => 'view', $comments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Comments', 'action' => 'edit', $comments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comments', 'action' => 'delete', $comments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
