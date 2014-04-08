<!-- File: /app/View/Users/index.ctp  (edit links added) -->

<h1>Blog posts</h1>
<p><?php echo $this->Html->link("Add User", array('action' => 'add')); 


?></p>
<table>
    <tr>
        <th>id</th>
        <th>username</th>
		<th>created</th>
        <th>role</th>
        
    </tr>

<!-- Here's where we loop through our $users array, printing out users info -->

<?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td><?php echo $this->Html->link($user['User']['username'], 
		
		array('controller' =>'users', 'action' => 'view',$users['user']['id])); ?>
		</td>
	  <td><?php echo $user['User']['created']; ?></td>        <td><?php  echo $this->Html->link('Edit', 
				   array('action' => 'edit', $user['User']['id']));
            ?></td>
		
        <td><?php echo $this->Form->postLink('Delete', 
		           array('action' => 'delete', $user['User']['id']), 
				   array('confirm' => 'Are you sure?')); ?></td>
            
   
    </tr>
<?php endforeach; ?>
<?php unset($user);?>

</table>