
<div class="text form-group">
    <select class="text form-control"  name='idcomponenttype' onchange="location.href = '<?php echo base_url("client/componentOpenList/'+this.options[this.selectedIndex].value+'") ?>'">
        <option  value="0" >Select</option>

        <?php foreach ($componenttype_list as $componenttype): ?>
            <option <?php if (isset($idcomponenttype)) if ($componenttype['idcomponenttype'] == $idcomponenttype): ?>selected<?php  endif; ?> value="<?php echo $componenttype['idcomponenttype'] ?>"><?php echo $componenttype['name'] ?></option>
        <?php endforeach; ?>
    </select>
</div>

<div class="text row">
    <?php if (isset($component_list)) : ?>  
        <?php foreach ($component_list as $component) : ?>

            <div class="text col-sm-4 col-sm-6">
                <div class="text hero-feature">
                    <div class="text thumbnail">
                        <div class="text caption">
                            <p><?php echo $component['name']; ?></p>
                            <p><?php echo $component['price']; ?> USD</p>
                            <p>
                                <?php
                                $USD = json_decode(file_get_contents('https://currency-api.appspot.com/api/USD/EUR.json?amount=' . $component['price']));
                                echo $USD->amount;
                                ?> EUR
                            </p>
                            <a href ="<?php echo base_url() . "client/componentOpenModel/$component[idcomponent]" ?>" class="btn btn-sm btn-warning ">Load</a>
                        </div>
                    </div>
                </div>
            </div>
    
        <?php endforeach ?>
    <?php endif ?>
</div>