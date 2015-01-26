<div class="row">
    <div class="col-lg-12">
            <div id="resultBoxMessage"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Votre nom *" id="name" required data-validation-required-message="Merci d'indiquer un nom.">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Votre adresse email *" id="email" required data-validation-required-message="Merci d'indiquer votre adresse email.">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Votre numéro de téléphone" id="phone">
                        <p class="help-block text-danger"></p>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Votre message *" id="message" required data-validation-required-message="Merci d'indiquer un message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                    <div id="success"></div>
                    <button class="btn btn-xl" id="contact-btn" onclick="sendMessage()">Envoyer</button>
                </div>
            </div>
    </div>
</div>
<?php echo $this->Html->script('contact_me'); ?>