<h3><i class="fa fa-angle-right"></i> Page du site web</h3>
<?php echo $this->Session->flash(); ?>
<div class="content-panel">
    
    <table class="table table-striped table-advance table-hover">
        <thead>
            <h4><a href="/ajouter-page" class="btn btn-success">Rédiger une nouvelle page</a></h4>
            <tr>
                <th><i class="fa fa-bullhorn"></i> Id</th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Titre</th>
                <th><i class="fa fa-bookmark"></i> Mise à jour</th>
                <th><i class=" fa fa-edit"></i> Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($WebsitePages as $page)
            {
            ?>
            <tr>
                <td><?php echo $page['WebsitePage']['id']; ?></td>
                <td class="hidden-phone"><?php echo $page['WebsitePage']['title']; ?></td>
                <td><?php echo $page['WebsitePage']['updated']; ?></td>
                <td><span class="label label-info label-mini">En ligne</span></td>
                <td>
                    <?php echo $this->Html->link($this->Html->tag('i','',array('class' => 'fa fa-pencil')),array('controller' => 'WebsitePages','action' => 'edit',$page['WebsitePage']['id']),array('escape' => false,'class' => 'btn btn-primary btn-xs','title' => 'Modifier')); ?>
                    <?php echo $this->Html->link($this->Html->tag('i','',array('class' => 'fa fa-trash-o')),array('controller' => 'WebsitePages','action' => 'delete',$page['WebsitePage']['id']),array('escape' => false,'class' => 'btn btn-danger btn-xs','title' => 'Suprimer'),"Êtes vous sûr de vouloir supprimer cette page ?"); ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div><!-- /content-panel -->

