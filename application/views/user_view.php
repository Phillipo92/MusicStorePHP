<?php if ($this->session->userdata('iduser') == $user['iduser']): ?>
    <div class="text form-group">
        <div class="btn-group">
            <a class="btn btn-sm   btn-warning" href='<?php echo base_url(); ?>client/userLoadModel/<?php echo $user['iduser'] ?>'>Change data</a>
        </div>
    </div>
<?php endif; ?>

<div class="text form-horizontal">
    <div class="text form-group">
        <label class="text col-sm-4 control-label">Email</label>
        <div class="text col-sm-8 ">
            <p class="text form-control-static"><?php echo $user['email'] ?></p>
        </div>
    </div>
    <div class="text form-group">
        <label class="text col-sm-4 control-label">First name</label>
        <div class="text col-sm-8 ">
            <p class="text form-control-static"><?php echo $user['firstname'] ?></p>
        </div>
    </div>
    <div class="text form-group">
        <label class="text col-sm-4 control-label">Last name</label>
        <div class="text col-sm-8 ">
            <p class="text form-control-static"><?php echo $user['lastname'] ?></p>
        </div>
    </div>
    <div class="text form-group">
        <label class="text col-sm-4 control-label">Address</label>
        <div class="text col-sm-8 ">
            <p class="text form-control-static"><?php echo $user['address'] ?></p>
        </div>
    </div>
    <div class="text form-group">
        <label class="text col-sm-4 control-label">City</label>
        <div class="text col-sm-8 ">
            <p class="text form-control-static"><?php echo $user['city_name'] ?></p>
        </div>
    </div>

    <div class="text form-group">
        <label class="text col-sm-4 control-label">Total price owning</label>
        <div class="text col-sm-8 ">
            <p class="text form-control-static"><?php
                if (isset($cart_list)) {
                    $own = 0;
                    foreach ($cart_list as $cart) {
                        $own += $cart['quantity'] * $cart['component_price'];
                    };
                    echo $own;
                }
                ?>
            </p>
            
        </div>
    </div>

</div>

<div class="text row">
    <?php if (isset($cart_list)) : ?>  
        <?php foreach ($cart_list as $cart) : ?>

            <div class="text col-sm-4 col-sm-6">
                <div class="text hero-feature">
                    <div class="text thumbnail">
                        <div class="text caption">
                            <p><a href="<?php echo base_url() . "client/componentOpenModel/$cart[idcomponent]" ?>"><?php echo $cart['component_name'] ?> </a> </p>
                            <p><?php echo $cart['component_price'] ?> EUR.</p>
                            <p>
                                <?php
                                $USD = json_decode(file_get_contents('https://currency-api.appspot.com/api/USD/EUR.json?amount=' . $cart['component_price']));
                                echo $USD->amount;
                                ?> USD.
                            </p>
                            <p><?php echo $cart['quantity'] ?></p>
                            <?php if ($this->session->userdata('iduser') == $cart['iduser']): ?>
                                <a href ="<?php echo base_url() . "client/cartDeleteModel/$cart[idcart]" ?>" class="btn btn-sm btn-danger ">Delete</a></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    <?php endif ?>
</div>