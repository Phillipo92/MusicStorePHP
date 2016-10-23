<div class="text form-group">
    <a class="btn btn-sm  btn-warning " href='<?php echo base_url() . "client/supplierLoadModel" ?>'>Insert</a>   
    <button class="btn btn-sm  btn-warning " onclick="supplier_table_refresh()">Refresh</button>
</div>

<div class="text form-group">
    <table class="text table table-striped table-hover table-responsive">

        <tr>
            <th>Name</th>
            <th class="text col-sm-1"></th>
            <th class="text col-sm-1"></th>
        </tr>

        <?php if (isset($supplier_table)) : ?> 
            <?php foreach ($supplier_table as $supplier): ?>
                <tr>

                    <td>
                        <p class="text form-control-static"> <?php echo $supplier['name']; ?></p>
                    </td>
                    
                    <td>
                        <a class="btn btn-sm  btn-warning " href='<?php echo base_url() . "client/supplierLoadModel/$supplier[idsupplier]" ?>'>
                            Edit
                        </a>
                    </td>

                    <td>
                        <a class="btn btn-sm btn-danger " href='<?php echo base_url() . "client/supplierDeleteModel/$supplier[idsupplier]" ?>'>
                            Delete
                        </a>
                    </td>

                </tr>
            <?php endforeach; ?> 
        <?php endif; ?>

    </table>
</div>
