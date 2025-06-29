<h1>Articles</h1>
<p><?php echo $this->Html->link('Add Article', ['action' => 'add']); ?></p>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
        <th>Action</th>
    </tr>

<!-- Here's where we iterate through our $articles query object, printing out article info -->

<?php foreach ($articles as $article) { ?>
    <tr>
        <td>
            <?php echo $this->Html->link($article->title, ['action' => 'view', $article->slug]); ?>
        </td>
        <td>
            <?php echo $article->created->format(DATE_RFC850); ?>
        </td>
        <td>
            <?php echo $this->Html->link('Edit', ['action' => 'edit', $article->slug]); ?>
            <?php echo $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $article->slug],
                ['confirm' => 'Are you sure?']);
    ?>
        </td>
    </tr>
<?php } ?>

</table>