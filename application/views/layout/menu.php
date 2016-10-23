<div class="form-group">
<div class="pull-right">
    <div class="form-group">
        <div class="btn-group btn-group-justified">
            <a class="btn btn-sm  btn-primary" href='<?php echo base_url(); ?>'>Home</a>
            <?php if ($this->session->userdata('usertype') == false) : ?> <a class="btn btn-sm  btn-primary" href='<?php echo base_url(); ?>client/login'>Login</a><?php endif; ?> 
            <?php if ($this->session->userdata('usertype') == false) : ?> <a class="btn btn-sm  btn-primary" href='<?php echo base_url(); ?>client/userLoadModel'>Registracija</a><?php endif; ?>                   
            <?php if ($this->session->userdata('usertype') != false) : ?><a class="btn btn-sm  btn-primary" href='<?php echo base_url(); ?>client/userOpenModel/<?php echo $this->session->userdata('iduser') ?>'>Profil</a><?php endif; ?> 
            <?php if ($this->session->userdata('usertype') != false) : ?><a class="btn btn-sm  btn-primary" href='<?php echo base_url(); ?>client/logout'>Logout</a><?php endif; ?> 

            <?php if ($this->session->userdata('usertype') == 'admin') : ?>

                <a class="btn btn-sm  btn-primary" class="text dropdown-toggle" href='<?php echo base_url(); ?>client/userOpenTable'>Korisnici</a>
                <a class="btn btn-sm  btn-primary" class="text dropdown-toggle" href='<?php echo base_url(); ?>client/componentOpenTable'>Instrumenti</a>
                <a class="btn btn-sm  btn-primary" class="text dropdown-toggle" href='<?php echo base_url(); ?>client/componenttypeOpenTable'>Kategorije</a>
                <a class="btn btn-sm  btn-primary" class="text dropdown-toggle" href='<?php echo base_url(); ?>client/supplierOpenTable'>Dobavljaci</a>
                <a class="btn btn-sm  btn-primary" class="text dropdown-toggle" href='<?php echo base_url(); ?>client/cityOpenTable'>Mesta</a>

            <?php endif; ?>

        </div>
    </div>
</div>
</div>