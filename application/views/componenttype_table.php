<div class="text form-group">
    <a class="btn btn-sm  btn-warning " href='<?php echo base_url() . "client/componenttypeLoadModel" ?>'>Insert</a>   
    <button class="btn btn-sm  btn-warning " onclick="componenttype_table_refresh()">Refresh</button>
</div>

<div class="text form-group">
    <table class="text table table-striped table-hover table-responsive">

        <tr>
            <th>Name</th>
            <th class="text col-sm-1"></th>
            <th class="text col-sm-1"></th>
        </tr>

        <?php if (isset($componenttype_table)) : ?> 
            <?php foreach ($componenttype_table as $componenttype): ?>
                <tr>

                    <td>
                        <p class="text form-control-static"> <?php echo $componenttype['name']; ?></p>
                    </td>

                    <td>
                        <a class="btn btn-sm  btn-warning " href='<?php echo base_url() . "client/componenttypeLoadModel/$componenttype[idcomponenttype]" ?>'>
                            Edit
                        </a>
                    </td>

                    <td>
                        <a class="btn btn-sm btn-danger " href='<?php echo base_url() . "client/componenttypeDeleteModel/$componenttype[idcomponenttype]" ?>'>
                            Delete
                        </a>
                    </td>

                </tr>
            <?php endforeach; ?> 
        <?php endif; ?>

    </table>
</div>
