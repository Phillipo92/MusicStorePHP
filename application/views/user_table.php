<div class="text form-group">
    <button class="btn btn-sm btn-warning " onclick="user_table_refresh()">Refresh</button>
</div>

<div class="text form-group">
    <table class="text table table-striped table-hover">

        <tr class="text row">
            <th >Email</th>
            <th >Name</th>
            <th class="text col-sm-1"></th>
        </tr>

        <?php if (isset($user_table)) : ?> 
            <?php foreach ($user_table as $user): ?> 
                <?php if ($user['iduser'] != $this->session->userdata('iduser')): ?>

                    <tr class="text row">

                        <td>
                            <p class='form-control-static'>  <?php echo $user['email']; ?></p>
                        </td>

                        <td>
                            <p class='form-control-static'> <?php echo $user['firstname'] . ' ' . $user['lastname']; ?></p>
                        </td>

                        <td>   
                            <a class="btn btn-sm  btn-warning " href='<?php echo base_url() . "client/userOpenModel/$user[iduser]"; ?>'>
                                Load    
                            </a>
                        </td>


                    </tr>

                <?php endif; ?>
            <?php endforeach; ?> 
        <?php endif; ?>
    </table>
</div>