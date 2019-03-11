<?php echo buildMenu($al_connexion); ?>
<?php echo $_SESSION['error_message']; ?>
<h1>USERS</h1>
<div class="row">
	<div class="col-md-2">
        <form action="index.php?page=list_user" method="post" id="validator" role="form">
            <div class="well">
                <p>
                    Username: <br />
                    <input type="text" class="form-control" size="20" value="<?php echo (isset($_SESSION['populate']['search_user']) ? $_SESSION['populate']['search_user'] : ''); ?>" name="search_user" />
                </p>
                <p>
                    Username: <br />
                    <select class="chosen-select form-control" name="username_user">
                        <option value=""></option>
                        <option value="DESC" <?php if(isset($_SESSION['populate']['username_user']) && $_SESSION['populate']['username_user']=="DESC"){ ?>selected="selected" <?php } ?>>Descending</option>
                        <option value="ASC" <?php if(isset($_SESSION['populate']['username_user']) && $_SESSION['populate']['username_user']=="ASC"){ ?>selected="selected" <?php } ?>>Ascending</option>
                    </select>
                </p>
                <p>
                    First Name: <br />
                    <input type="text" class="form-control" size="20" value="<?php echo (isset($_SESSION['populate']['first_name_search_user']) ? $_SESSION['populate']['first_name_search_user'] : ''); ?>" name="first_name_search_user" />
                </p>
                <p>
                    First name: <br />
                    <select class="chosen-select form-control" name="first_name_user">
                        <option value=""></option>
                        <option value="DESC" <?php if(isset($_SESSION['populate']['first_name_user']) && $_SESSION['populate']['first_name_user']=="DESC"){ ?>selected="selected" <?php } ?>>Descending</option>
                        <option value="ASC" <?php if(isset($_SESSION['populate']['first_name_user']) && $_SESSION['populate']['first_name_user']=="ASC"){ ?>selected="selected" <?php } ?>>Ascending</option>
                    </select>
                </p>
                <p>
                    Last Name: <br />
                    <input type="text" class="form-control" size="20" value="<?php echo (isset($_SESSION['populate']['last_name_search_user']) ? $_SESSION['populate']['last_name_search_user'] : ''); ?>" name="last_name_search_user" />
                </p>
                <p>
                    Last Name: <br />
                    <select class="chosen-select form-control" name="last_name_user">
                        <option value=""></option>
                        <option value="DESC" <?php if(isset($_SESSION['populate']['last_name_user']) && $_SESSION['populate']['last_name_user']=="DESC"){ ?>selected="selected" <?php } ?>>Descending</option>
                        <option value="ASC" <?php if(isset($_SESSION['populate']['last_name_user']) && $_SESSION['populate']['last_name_user']=="ASC"){ ?>selected="selected" <?php } ?>>Ascending</option>
                    </select>
                </p>
                <p>
                    Email: <br />
                    <input type="text" class="form-control" size="20" value="<?php echo (isset($_SESSION['populate']['email_search_user']) ? $_SESSION['populate']['email_search_user'] : ''); ?>" name="email_search_user" />
                </p>
                <p>
                    Email: <br />
                    <select class="chosen-select form-control" name="email_user">
                        <option value=""></option>		
                        <option value="DESC" <?php if(isset($_SESSION['populate']['email_user']) && $_SESSION['populate']['email_user']=="DESC"){ ?>selected="selected" <?php } ?>>Descending</option>
                        <option value="ASC" <?php if(isset($_SESSION['populate']['email_user']) && $_SESSION['populate']['email_user']=="ASC"){ ?>selected="selected" <?php } ?>>Ascending</option>
                    </select>
                </p>
                <p><input type="submit" class="btn btn-primary" size="20" value="Search" name="post_order_user" /></p>
            </div>
        </form>
	</div>
    <div class="col-md-10">
        <form action="index.php?page=delete_user" method="post" id="validator" role="form">
            <table class="table-striped list">
                <tr>
                    <td>Username</td>
                    <td>First name</td>
                    <td>Last name</td>
                    <td>Email</td>
                    <td>Supress</td>
                    <td>Update/See profile</td>
                </tr>
        <?php
            while($al_fetch_users = $select1->fetch()){
                $al_id=decoding($al_fetch_users->id);
                $al_username=decoding($al_fetch_users->username);
                $al_first_name=decoding($al_fetch_users->first_name);
                $al_last_name=decoding($al_fetch_users->last_name);
                $al_email=decoding($al_fetch_users->email);
        ?>
                <tr>
                    <td><?php echo $al_username ?></td>
                    <td><?php echo $al_first_name ?></td>
                    <td><?php echo $al_last_name ?></td>
                    <td><?php echo $al_email ?></td>
                    <td><input type="checkbox" value="<?php echo $al_id ?>" name="delete[]" /></td>
                    <td><a href="index.php?page=update_user_old&id=<?php echo $al_id ?>">Update/See profile</a></td>
                </tr>
        <?php
            }
        ?>
            </table>
            <input type="submit" class="btn btn-primary" class="reorder" value="Delete" />
        </form>
	</div>
</div>
<?php echo pagination($al_init_users_rows); ?>