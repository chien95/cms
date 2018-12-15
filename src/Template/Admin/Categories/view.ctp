<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Child Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($category->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($category->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Category') ?></th>
            <td><?= $category->has('parent_category') ? $this->Html->link($category->parent_category->title, ['controller' => 'Categories', 'action' => 'view', $category->parent_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($category->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($category->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($category->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Arr Img') ?></h4>
        <?= $this->Text->autoParagraph(h($category->arr_img)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Posts') ?></h4>
        <?php if (!empty($category->posts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Arr Img') ?></th>
                <th scope="col"><?= __('Info') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Info Text1') ?></th>
                <th scope="col"><?= __('Info Text2') ?></th>
                <th scope="col"><?= __('Info Text3') ?></th>
                <th scope="col"><?= __('Info Text4') ?></th>
                <th scope="col"><?= __('Info Text5') ?></th>
                <th scope="col"><?= __('Info Number1') ?></th>
                <th scope="col"><?= __('Info Number2') ?></th>
                <th scope="col"><?= __('Info Number3') ?></th>
                <th scope="col"><?= __('Publish Date') ?></th>
                <th scope="col"><?= __('Is Delete') ?></th>
                <th scope="col"><?= __('Published') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->posts as $posts): ?>
            <tr>
                <td><?= h($posts->id) ?></td>
                <td><?= h($posts->title) ?></td>
                <td><?= h($posts->slug) ?></td>
                <td><?= h($posts->arr_img) ?></td>
                <td><?= h($posts->info) ?></td>
                <td><?= h($posts->description) ?></td>
                <td><?= h($posts->content) ?></td>
                <td><?= h($posts->info_text1) ?></td>
                <td><?= h($posts->info_text2) ?></td>
                <td><?= h($posts->info_text3) ?></td>
                <td><?= h($posts->info_text4) ?></td>
                <td><?= h($posts->info_text5) ?></td>
                <td><?= h($posts->info_number1) ?></td>
                <td><?= h($posts->info_number2) ?></td>
                <td><?= h($posts->info_number3) ?></td>
                <td><?= h($posts->publish_date) ?></td>
                <td><?= h($posts->is_delete) ?></td>
                <td><?= h($posts->published) ?></td>
                <td><?= h($posts->modified) ?></td>
                <td><?= h($posts->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Posts', 'action' => 'view', $posts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Posts', 'action' => 'edit', $posts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Posts', 'action' => 'delete', $posts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $posts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Categories') ?></h4>
        <?php if (!empty($category->child_categories)): ?>
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
            <?php foreach ($category->child_categories as $childCategories): ?>
            <tr>
                <td><?= h($childCategories->id) ?></td>
                <td><?= h($childCategories->title) ?></td>
                <td><?= h($childCategories->slug) ?></td>
                <td><?= h($childCategories->arr_img) ?></td>
                <td><?= h($childCategories->parent_id) ?></td>
                <td><?= h($childCategories->description) ?></td>
                <td><?= h($childCategories->modified) ?></td>
                <td><?= h($childCategories->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $childCategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $childCategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $childCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childCategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
