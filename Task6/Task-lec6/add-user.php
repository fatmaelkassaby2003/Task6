<?php session_start();  /* To Do conenct with session file  */ ?> 

<?php require_once('function.php'); ?>
<?php require_once('inc/header.php'); ?>
<div class="conatiner">
<div class="row">
<div class="col-6 mx-auto">
    <h1 class="text-center">Add New User</h1>
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success text-center p-1">
         <?php echo $_SESSION['success'] ; ?>
        </div>
    <?php endif; ?>
    <form action="actions/store-user.php" class="border my-2 p-3" method="POST" >
    <div class="mb-3">
        <label for="" class="p-2">User_Name</label>
    <input type="text" placeholder="Enter the username" name="user_name" class="form-control" value="<?php echo isset($_SESSION['old_data']['user_name']) ? $_SESSION['old_data']['user_name'] : ''; ?>">
    <?php if(isset($_SESSION['errors']['user_name'])): ?>
         <div class="alert alert-danger text-center p-1 mt-1">
            <?php echo $_SESSION['errors']['user_name']; ?>
        </div>
    <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="" class="p-2">Email</label>
    <input type="text" placeholder="Enter Your Email" name="user_email" class="form-control" value="<?php echo isset($_SESSION['old_data']['user_email']) ? $_SESSION['old_data']['user_email'] : ''; ?>">
    <?php if(isset($_SESSION['errors']['user_email'])): ?>
         <div class="alert alert-danger text-center p-1 mt-1">
            <?php echo $_SESSION['errors']['user_email']; ?>
        </div>
    <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="" class="p-2">Password</label>
    <input type="text" placeholder="Enter Your Password" name="user_password" class="form-control" value="<?php echo isset($_SESSION['old_data']['user_password']) ? $_SESSION['old_data']['user_password'] : ''; ?>">
    <?php if(isset($_SESSION['errors']['user_password'])): ?>
         <div class="alert alert-danger text-center p-1 mt-1">
            <?php echo $_SESSION['errors']['user_password']; ?>
        </div>
    <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="" class="p-2">Salary</label>
    <input type="text" placeholder="Enter The Salary" name="salary" class="form-control" value="<?php echo isset($_SESSION['old_data']['salary']) ? $_SESSION['old_data']['salary'] : ''; ?>">
    <?php if(isset($_SESSION['errors']['salary'])): ?>
         <div class="alert alert-danger text-center p-1 mt-1">
            <?php echo $_SESSION['errors']['salary']; ?>
        </div>
    <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="" class="p-2">Phone</label>
    <input type="text" placeholder="Enter your phone" name="phone" class="form-control" value="<?php echo isset($_SESSION['old_data']['phone']) ? $_SESSION['old_data']['phone'] : ''; ?>">
    <?php if(isset($_SESSION['errors']['phone'])): ?>
         <div class="alert alert-danger text-center p-1 mt-1">
            <?php echo $_SESSION['errors']['phone']; ?>
        </div>
    <?php endif; ?>
    </div>
    <div class="mb-3">
                        <label for="" class="p-2">Type</label>
                        <select name="type" class="form-control" >
                            <option value="">...</option>
                            <option value="employee">employee</option>
                            <option value="admin">admin</option>
                        </select>
                    <?php if(isset($_SESSION['errors']['type'])): ?>
                          <div class="alert alert-danger text-center p-1 mt-1">
                          <?php echo $_SESSION['errors']['type']; ?>
                          </div>
                   <?php endif; ?>
                    </div>

    <div class="mb-3">
        <input type="submit" value="Save" class="form-control bg-info btn btn-primary ">
        <!-- <a class="form-control bg-info btn btn-primary" href="show-data.php" role="button">Save</a> -->
    </div>
    </form>
   </div>
   </div>
  </div>
  <?php unset($_SESSION['errors']); /* To Do remove errors */ ?>  
  <?php unset($_SESSION['success']); ?>
  <?php unset($_SESSION['old_data']);?>
  <?php require_once('inc/footer.php'); ?>