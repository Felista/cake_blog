<!-- File: /app/View/Users/edit.ctp -->

<h1>Edit User</h1>
<?php
echo $this->Form->create('User');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save User');
?>