<div class="text form-group">
    <a class="btn btn-sm  btn-warning " href='<?php echo base_url() . "client/cityLoadModel" ?>'>Insert</a>   
    <button class="btn btn-sm  btn-warning " onclick="city_table_refresh()">Refresh</button>
</div>

<div class="text form-group">
    <table class="text table table-striped table-hover table-responsive">

        <tr>
            <th>Name</th>
            <th class="text col-sm-1"></th>
            <th class="text col-sm-1"></th>
        </tr>

        <?php if (isset($city_table)) : ?> 
            <?php foreach ($city_table as $city): ?>
                <tr>

                    <td>
                        <p class="text form-control-static"> <?php echo $city['name']; ?></p>
                    </td>
                    
                    <td>
                        <a class="btn btn-sm  btn-warning " href='<?php echo base_url() . "client/cityLoadModel/$city[idcity]" ?>'>
                            Edit
                        </a>
                    </td>

                    <td>
                        <a class="btn btn-sm btn-danger " href='<?php echo base_url() . "client/cityDeleteModel/$city[idcity]" ?>'>
                            Delete
                        </a>
                    </td>

                </tr>
            <?php endforeach; ?> 
        <?php endif; ?>

    </table>
</div>
