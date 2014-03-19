<!-- File: /app/View/Users/index.ctp  (edit links added) -->

<h1>Blog posts</h1>
<p><?php echo $this->Html->link("Add User", array('action' => 'add')); 


?></p>
<table>
    <tr>
        <th>id</th>
        <th>username</th>
        <th>role</th>
        
    </tr>

<!-- Here's where we loop through our $users array, printing out users info -->

<?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td><?php echo $user['User']['username']; ?></td>
		<td><?php echo $user['User']['id']; ?></td>
        <td><?php echo $this->Html->link('Delete', array('action' => 'delete', $user['User']['id']), array('confirm' => 'Are you sure?')); ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $user['User']['id'])
                );
            ?>
        </td>
        
    </tr>
<?php endforeach; ?>

</table>