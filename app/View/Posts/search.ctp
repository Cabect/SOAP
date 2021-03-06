<h3>Search Results</h3>
<table class='table-bordered table-striped' width=100%>
	    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>
<?php foreach ($posts as $post): ?>
    <tr>
        <td>
        	<?php echo $post['Post']['id']; ?>
        </td>
        <td>
        	<?php echo $this->Html->link($post['Post']['title'],'/posts/view/'.$post['Post']['id']);?>
        </td>
        <td>
        	<?php echo $post['Post']['created']; ?>
        </td>
        <td>
            <button class='btn'>
            		<?php echo $this->Html->link(
            		'<i class='.'icon-pencil'.'></i>',
            		array('action' => 'edit', $post['Post']['id']),
            		array('escape' => false)
            		);?>
            </button>
            <button class='btn btn-danger'>
	            <?php echo $this->Form->postLink(
	                '<i class='."icon-trash".'></i>',
	                array('action' => 'delete', $post['Post']['id']),
	                array('escape' => false),
	                array('confirm' => 'Are you sure?')
	                );
	            ?>
        	</button>
        </td>
    </tr>
<?php endforeach; ?> 
</table>