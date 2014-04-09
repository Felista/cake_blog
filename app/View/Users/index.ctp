<!-- File: /app/View/Users/index.ctp  (edit links added) -->

<h1>Blog users</h1>
<p><?php echo $this->Html->link("Add User", 
     array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Role</th>
        <th>Created</th>
		
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

<?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $user['User']['username'],
                 array('controller'=> 'users', 'action' => 'view', $users['User']['id'])   
                );
            ?>
        </td>
		 
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $user['User']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $user['User']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $user['User']['created']; ?>
        </td>
    </tr>
<?php endforeach; ?>
<?php unset($users);?>






</table>