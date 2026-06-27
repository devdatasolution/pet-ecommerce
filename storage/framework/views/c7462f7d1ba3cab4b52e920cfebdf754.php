<div class="toast-container position-fixed top-0 end-0 p-3"></div>
<script>
  "Use strict";
  function toaster_message(type, icon, header, message){
    var toasterMessage = '<div class="toast '+type+' fade" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header"> <i class="'+icon+' me-2 mt-2px text-20px"></i> <strong class="me-auto"> '+header+' </strong><small><?php echo e(get_phrase("Just Now")); ?></small><button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button></div><div class="toast-body">'+message+'</div></div>';
    $('.toast-container').prepend(toasterMessage);
    const toast = new bootstrap.Toast('.toast')
    toast.show()
  }

  function success(message){
    toaster_message('success', 'fi-sr-badge-check', '<?php echo e(get_phrase("Success !")); ?>', message);
  }

  function warning(message){
    toaster_message('warning', 'fi-sr-exclamation', '<?php echo e(get_phrase("Attention !")); ?>', message);
  }

  function error(message){
    toaster_message('error', 'fi-sr-triangle-warning', '<?php echo e(get_phrase("An Error Occurred !")); ?>', message);
  }
  
</script>

<?php if($message = Session::get('success')): ?>
  <script>success("<?php echo e($message); ?>");</script>
  <?php Session()->forget('success'); ?>
<?php elseif($message = Session::get('error')): ?>
  <script>error("<?php echo e($message); ?>");</script>
  <?php Session()->forget('error'); ?>
<?php elseif($errors->any()): ?>
  <?php
    $message = "<ul>";
        foreach ($errors->all() as $error):
          $message .= "<li>".$error."</li>";
        endforeach;
    $message .= "</ul>";
  ?>
  <script>error("<?php echo $message; ?>");</script>
<?php endif; ?><?php /**PATH C:\laragon\www\elevate\resources\views/frontend/toaster.blade.php ENDPATH**/ ?>