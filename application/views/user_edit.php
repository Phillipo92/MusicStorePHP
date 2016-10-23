<form class="text form-horizontal" role="form" action='<?php echo base_url(); ?>client/userSaveModel/<?php if (isset($user['iduser'])) echo $user['iduser'] ?>' method='post'>

    <div class="text form-group">
        <label class="text col-sm-4 control-label">Email</label>
        <div class="text col-sm-8 ">
            <input name="email" class="text form-control" value="<?php if (isset($user['email'])) echo $user['email'] ?>"/>
        </div>
    </div>
    <div class="text form-group">
        <label class="text col-sm-4 control-label">Password</label>
        <div class="text col-sm-8 ">
            <input name="password" type="password" class="text form-control" value=""/>
        </div>
    </div>
    <div class="text form-group">
        <label class="text col-sm-4 control-label">First name</label>
        <div class="text col-sm-8 ">
            <input name="firstname" class="text form-control" value="<?php if (isset($user['firstname'])) echo $user['firstname'] ?>"/>
        </div>
    </div>
    <div class="text form-group">
        <label class="text col-sm-4 control-label">Last name</label>
        <div class="text col-sm-8 ">
            <input name="lastname" class="text form-control" value="<?php if (isset($user['lastname'])) echo $user['lastname'] ?>"/>
        </div>
    </div>
    <div class="text form-group">
        <label class="text col-sm-4 control-label">Address</label>
        <div class="text col-sm-8 ">
            <input name="address" class="text form-control" value="<?php if (isset($user['address'])) echo $user['address'] ?>"/>
        </div>
    </div>
    <div class="text form-group">
        <label class="text col-sm-4 control-label">City</label>
        <div class="text col-sm-8 ">
            <select class="text form-control" type='text' name='idcity'>
                <?php foreach ($city_list as $city): ?>
                    <option <?php if (isset($component['idcity'])) if ($city['idcity'] == $component['idcity']) : ?> selected <?php  endif; ?>  value="<?php echo $city['idcity'] ?>"><?php echo $city['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="text form-group">
        <div class="text text-right">
            <input type='submit' class="btn btn-sm  btn-warning" value='Save'/>
        </div>
    </div>

</form>