
<?php $__env->startComponent('mail::message'); ?>
<style>
    .center {
            margin: auto;
            width: 100%;
            text-align: center;
            text-align: center;
            color: gray;
        }
    hr{
        border-top: .1em solid whitesmoke;
    }
</style>

<div class="center">
    <img src="http://uip.melhamconstruction.ph/wp-content/uploads/2021/12/cropped-uiplogo-90x74.png" alt="logo" width="100"/>
    <br>
    <br>
    <strong style="font-size: 22px; text-transform: uppercase;"><?php echo e($content['notif_message']); ?></strong>
    <br>
    <br>
        <strong style="font-size: 18px;"><?php echo e($content['note']); ?></strong>
    <br>
    <br>
   
    
</div>



 

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\offboarding-updated\resources\views/emails/declinedNotification.blade.php ENDPATH**/ ?>