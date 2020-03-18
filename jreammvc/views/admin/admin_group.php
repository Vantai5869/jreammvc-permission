
<head>
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/bootstrap4.css">
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/style.css">
</head>
<?php
require_once "app/permissions.php";
?>

<body>
    <div class="container">
        <div class="row ">
            <div class="col-sm-3">
                MENU TRANG ADMIN
            </div>
            <div class="col-sm-9">
                <h3 class="permission_title">Thêm quyền</h3>
                <form action="<?php echo URL;?>admin/admin_group_Insert/" method="post" class="permission_form">
                    <input type="text" name="name" id="" placeholder="tên quyền" >
                    <div class="row" style="padding-top: 35px">

                        <?php

                        foreach ($permissions as $key => $value) {?>
                            <div class="col-sm-4">
                            <h4><?=$key?></h4>
                                <?php
                                foreach ($value as $key1 => $value1)
                                    foreach ($value1 as $key2 => $value2) {
                                    {?>
                                        <input name="<?=$key?>[<?=$key1?>][]" class="form-check-input" type="checkbox" value="<?=$value2?>" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                          <?=$key1?>
                                        </label>
                                        <?php
                                    }
                                }?>
                                </div><?php
                                }
                                ?>
                    </div>
                    <input style="margin-top: 20px" type="submit" value="Xác nhận">
                 </form>
            </div>
        </div>
    </div>
</body>






