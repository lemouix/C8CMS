<div id="messageBoxAddMessage">
    <?php echo $this->Session->flash('message'); ?>
</div>

<script>
    <?php
if ($result)
{
    ?>
            $('#contact-email').val('');
            $('#contact-message').val('');
            $('#contact-btn').html('Envoyer');
            $('#contact-btn').prop('disabled', false);
    <?php
} else {
    ?>
       
           
            $('#contact-btn').html('Envoyer');
            $('#contact-btn').prop('disabled', false);
        
    <?php
}
?>
$(document).ready(function(){
    $('#messageBoxAddMilestoneHistory').show('fade');
});

</script>