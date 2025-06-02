<h1>Articles</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($articles as $article) { ?>
    <tr>
        <td>
            <?php echo $this->Html->link($article->title, ['action' => 'view', $article->slug]); ?>
        </td>
        <td>
            <?php echo $article->created->format(DATE_RFC850); ?>
        </td>
    </tr>
    <?php } ?>
</table>