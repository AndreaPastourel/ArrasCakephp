<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game $game
 * @var string[]|\Cake\Collection\CollectionInterface $machines
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $game->games_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $game->games_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Games'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="games form content">
            <?= $this->Form->create($game) ?>
            <fieldset>
                <legend><?= __('Edit Game') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('genre');
                    echo $this->Form->control('publisher');
                    echo $this->Form->control('realease_date', ['empty' => true]);
                    echo $this->Form->control('machines._ids', ['options' => $machines]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
