<div class="text row">
    <div class="text col-sm-offset-4 col-sm-4">
        <form class="text form-group" role="form" action='<?php echo base_url(); ?>client/loginExecute' method='post'>
            <div class="text form-group"><input placeholder="Username" class="text form-control" type='text' name='email' value='<?php if (isset($email)) echo $email; ?>'/></div>
            <div class="text form-group"><input placeholder="Password" class="text form-control" type='password' name='password'/></div>
            <div class="text form-group"><input type='submit' class="btn btn-sm  btn-warning" value='Login'/></div>
        </form>
    </div>
</div>