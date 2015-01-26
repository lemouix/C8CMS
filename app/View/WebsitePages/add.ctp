<?php echo $this->Html->script('ckeditor/ckeditor');?>

<div class="row mt">
    <div class="col-lg-12">
        <?php echo $this->Form->create('WebsitePage',array('class' => 'form-horizontal style-form')); ?>
        <?php echo $this->Session->flash(); ?>
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Nouvelle page</h4>
            
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Titre</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('title',array('class' => 'form-control','label' => false)); ?>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Contenu</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('content',array('class' => 'form-control ckeditor','label' => false)); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->textarea('description',array('class' => 'form-control','rows' => 5, 'label' => false)); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Mots clés</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('keywords',array('class' => 'form-control','label' => false)); ?>
                    <span class="help-block">Mots clés séparés par un point-virgule.</span>
                </div>
            </div>
        </div>
        <button class="btn btn-success">Enregistrer</button> <a href="/pages-site-web" class="btn btn-link">Retour</button>
        <?php echo $this->Form->end(); ?>

    </div><!-- col-lg-12-->      	
</div><!-- /row -->

