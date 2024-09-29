<?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success text-center p-1">
         <?php echo $_SESSION['success'] ; ?>
        </div>
    <?php endif; ?>

    <?php unset($_SESSION['success']); ?>