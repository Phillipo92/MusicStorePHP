<form class="text form-horizontal" role="form" action='<?php echo base_url(); ?>client/componentSaveModel/<?php if (isset($component['idcomponent'])) echo $component['idcomponent'] ?>' method='post'>

    <div class="text form-group">
        <label class="text col-sm-4 control-label">Type</label>
        <div class="text col-sm-8 ">
            <select class="text form-control" type='text' name='idcomponenttype'>
                <?php foreach ($componenttype_list as $componenttype): ?>
                    <option <?php if (isset($component['idcomponenttype'])) if ($componenttype['idcomponenttype'] == $component['idcomponenttype']) : ?> selected <?php  endif; ?>  value="<?php echo $componenttype['idcomponenttype'] ?>"><?php echo $componenttype['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    
    <div class="text form-group">
        <label class="text col-sm-4 control-label">Supplier</label>
        <div class="text col-sm-8 ">
            <select class="text form-control" type='text' name='idsupplier'>
                <?php foreach ($supplier_list as $supplier): ?>
                    <option <?php if (isset($component['idsupplier'])) if ($supplier['idsupplier'] == $component['idsupplier']) : ?> selected <?php  endif; ?>  value="<?php echo $supplier['idsupplier'] ?>"><?php echo $supplier['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="text form-group">
        <label class="text col-sm-4 control-label">Name</label>
        <div class="text col-sm-8 ">
            <input name="name" class="text form-control" value="<?php if (isset($component['name'])) echo $component['name'] ?>"/>
        </div>
    </div>

    <div class="text form-group">
        <label class="text col-sm-4 control-label">Description</label>
        <div class="text col-sm-8 ">
            <input name="description" class="text form-control" value="<?php if (isset($component['description'])) echo $component['description'] ?>"/>
        </div>
    </div>
    
    <div class="text form-group">
        <label class="text col-sm-4 control-label">Price</label>
        <div class="text col-sm-8 ">
            <input name="price" class="text form-control" value="<?php if (isset($component['price'])) echo $component['price'] ?>"/>
        </div>
    </div>

    <div class="text form-group">
        <div class="text text-right">
            <input type='submit' class="btn btn-sm  btn-warning" value='Save'/>
        </div>
    </div>

</form>