<div class="text form-horizontal">

    <div class="text form-group">
        <label class="text col-sm-4 control-label">Type</label>
        <div class="text col-sm-8 ">
            <p class="text form-control-static"><?php echo $component['componenttype_name'] ?></p>
        </div>
    </div>
    
    <div class="text form-group">
        <label class="text col-sm-4 control-label">Supplier</label>
        <div class="text col-sm-8 ">
            <p class="text form-control-static"><?php echo $component['supplier_name'] ?></p>
        </div>
    </div>

    <div class="text form-group">
        <label class="text col-sm-4 control-label">Name</label>
        <div class="text col-sm-8 ">
            <p class="text form-control-static"><?php echo $component['name'] ?></p>
        </div>
    </div>

    <div class="text form-group">
        <label class="text col-sm-4 control-label">Description</label>
        <div class="text col-sm-8 ">
            <p class="text form-control-static"><?php echo $component['description'] ?></p>
        </div>
    </div>   

    <div class="text form-group">
        <label class="text col-sm-4 control-label">Price</label>
        <div class="text col-sm-8 ">
            <p class="text form-control-static"><?php echo $component['price'] ?></p>
        </div>
    </div>

</div>

<?php if ($this->session->userdata('usertype')): ?>
    <div class="text form-group">
        <form class="text-danger form-inline" action="<?php echo base_url() . "client/cartSaveModel" ?>" method="post" >
            <div class="text form-group">
                <select name="quantity">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                <input name="iduser" hidden="true" readonly value="<?php echo $this->session->userdata('iduser') ?>"/>
                <input name="idcomponent" hidden="true" readonly value="<?php echo $component['idcomponent'] ?>"/>
            </div>
            <div class="text form-group">
                <input type='submit' class="btn btn-sm  btn-warning" value='Save'/>
            </div>
        </form>
    </div>
<?php endif; ?>