<div class="row mt">
    <div class="col-lg-12">
        <?php echo $this->Form->create('GlobalConfiguration',array('class' => 'form-horizontal style-form')); ?>
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->Form->hidden('id'); ?>
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Configuration générale</h4>
            
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Titre du site</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('global_title',array('class' => 'form-control','label' => false)); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Description du site</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->textarea('global_description',array('class' => 'form-control','rows' => 5, 'label' => false)); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Mots clés</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('global_keywords',array('class' => 'form-control','label' => false)); ?>
                    <span class="help-block">Mots clés séparés par un point-virgule.</span>
                </div>
            </div>
        </div>
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Contact</h4>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Nom de la société</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('contact_companyName',array('class' => 'form-control','label' => false)); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Nom</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('contact_name',array('class' => 'form-control','label' => false)); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Prénom</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('contact_surname',array('class' => 'form-control','label' => false)); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('contact_email',array('class' => 'form-control','label' => false)); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Adresse</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->textarea('contact_address',array('class' => 'form-control','label' => false)); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Ville</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('contact_town',array('class' => 'form-control','label' => false)); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Code postal</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('contact_postalCode',array('class' => 'form-control','label' => false)); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Téléphone</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('contact_phone',array('class' => 'form-control','label' => false)); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Lien google Map</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('contact_googlemap',array('class' => 'form-control','label' => false)); ?>
                </div>
            </div>
        </div>
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Social</h4>
            
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Facebook</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('social_facebook',array('class' => 'form-control','label' => false)); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Twitter</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('social_twitter',array('class' => 'form-control','label' => false)); ?>
                </div>
            </div>
        </div>
        <button class="btn btn-success">Enregistrer</button>
        <?php echo $this->Form->end(); ?>

    </div><!-- col-lg-12-->      	
</div><!-- /row -->

