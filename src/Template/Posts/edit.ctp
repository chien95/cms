<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $post->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="posts form large-9 medium-8 columns content">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('Edit Post') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('slug');
            echo $this->Form->control('arr_img');
            echo $this->Form->control('info');
            echo $this->Form->control('description');
            echo $this->Form->control('content');
            echo $this->Form->control('info_text1');
            echo $this->Form->control('info_text2');
            echo $this->Form->control('info_text3');
            echo $this->Form->control('info_text4');
            echo $this->Form->control('info_text5');
            echo $this->Form->control('info_number1');
            echo $this->Form->control('info_number2');
            echo $this->Form->control('info_number3');
            echo $this->Form->control('publish_date', ['empty' => true]);
            echo $this->Form->control('is_delete');
            echo $this->Form->control('published');
            echo $this->Form->control('categories._ids', ['options' => $categories]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
