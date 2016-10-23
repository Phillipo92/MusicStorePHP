<div class="text form-group">
    <form class="text form-group" role="form" action='<?php echo base_url(); ?>client/citySaveModel/<?php if (isset($city['idcity'])) echo $city['idcity']; ?>' method='post'>

        <div class="text form-group">
            <label>Name</label>
            <input class="text form-control" type='text' name='name' value='<?php if (isset($city['name'])) echo $city['name']; ?>'/>
        </div>

        <div class="text form-group">
            <input type='submit' class="btn btn-sm  btn-warning" value='Save'/>
        </div>
    </form>
</div>