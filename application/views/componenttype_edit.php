<div class="text form-group">
    <form class="text form-group" role="form" action='<?php echo base_url(); ?>client/componenttypeSaveModel/<?php if (isset($componenttype['idcomponenttype'])) echo $componenttype['idcomponenttype']; ?>' method='post'>

        <div class="text form-group">
            <label>Name</label>
            <input class="text form-control" type='text' name='name' value='<?php if (isset($componenttype['name'])) echo $componenttype['name']; ?>'/>
        </div>

        <div class="text form-group">
            <input type='submit' class="btn btn-sm  btn-warning" value='Save'/>
        </div>
    </form>
</div>