<!DOCTYPE html>
<html>
<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;

    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        width: 50%;
        margin: auto;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<body>

<h3>insert admin</h3>

<div>
    <form action="<?php echo URL;?>admin/admin_Insert/" method="post" class="permission_form">
        <label for="uname">username</label> <br>
        <input type="text" id="uname" name="username" placeholder="Your password.."><br>

        <label for="password">password</label><br>
        <input type="text" id="password" name="password" placeholder="Your password.."><br>

        <label for="country">Country</label><br>
        <select id="country" name="admin_group_id">
            <?php
            foreach ($data['admin_group'] as $key => $value)
                {?>

                    <option value="<?=$data['admin_group'][$key][0]?>"><?=$data['admin_group'][$key][1]?></option>
                <?php
            }
            ?>

        </select>

        <input type="submit"  name="btn_insert_admin">
    </form>
</div>

</body>
</html>
