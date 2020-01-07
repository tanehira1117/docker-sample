<h1>記事の追加</h1>
<?php
    echo $this->Form->create($article);
    // 今はユーザーを直接記述
    echo $this->Form->control('tag_string', ['type' => 'text']);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>
<?= $this->html->link('一覧に戻る',['controller' => 'articles', 'action' => 'index']); ?>