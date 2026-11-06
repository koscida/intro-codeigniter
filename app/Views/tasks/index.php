<h2><?= esc($title) ?></h2>

<?php 

if ($tasks_list !== []): ?>

	<h3><?= esc($tasks_list['name']) ?></h3>

<?php else: ?>

    <h3>No Tasks</h3>

    <p>Add a task.</p>

<?php endif ?>