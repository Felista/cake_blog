<!-- File: /app/View/Users/view.ctp -->

<h1><?php echo h($user['User']['title']); ?></h1>

<p><small>Created: <?php echo $user['User']['created']; ?></small></p>

<p><?php echo h($user['User']['body']); ?></p>