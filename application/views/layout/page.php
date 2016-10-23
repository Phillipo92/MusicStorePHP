<!DOCTYPE html>
<?php $this->load->view('layout/head'); ?>
<body>

<div class="row">
    <div class="col-sm-6 col-sm-offset-3">

            <?php $this->load->view('layout/menu'); ?>

            <?php $this->load->view('layout/header'); ?> 

            <div id='content'>
                <?php if (isset($content)) $this->load->view($content); ?>
            </div>

        </div>
</div>

    
</body>
</html>
