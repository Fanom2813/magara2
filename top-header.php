<?php

$json = file_get_contents('data/info.json');
$data = json_decode($json);

?>
<div class="header-top">
    <div class="container">
        <div class="row col-det">
            <div class="col-lg-6 d-none d-lg-block">
                <ul class="ulleft">
                    <li>
                        <i class="far fa-envelope"></i>
                        <?php echo $data->header->pub_email; ?>
                        <span>|</span>
                    </li>
                    <li>
                        <i class="fas fa-phone-volume"></i>
                        <?php echo $data->header->pub_phone; ?>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 folouws">

                <ul class="ulright">
                    <li> <small>Folow Us </small>:</li>
                    <?php foreach ($data->social_link as $value) { ?>
                        <li>
                            <a target="_blank" href="<?php echo $value->link; ?>"><i class="fab <?php echo $value->icon; ?>"></i></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                <button class="btn btn-sm btn-success">Donate</button>
                <!-- <button class="btn btn-sm btn-default">Join UsDonate</button> -->
            </div>
        </div>
    </div>
</div>