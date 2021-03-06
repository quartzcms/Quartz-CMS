<?php echo $top_menu; ?>
<h1><?php echo CONFIGURATION ?></h1>
<?php echo $error; ?>
<?php include('../config.php'); ?>
<form action='index.php?page=Config&action=configuration_listed_update' method='post'  id="validator" role="form" />
<div class="row">
    <div class='col-md-12'>
        <p><?php echo CONFIGURATION_INTRO ?></p>
        <div class="row">
            <div class="col-md-3">
                <?php echo CONFIGURATION_TITLE ?><br />
                <input type='text' value='<?php echo $al_fetch_config->title ?>' name='title' required />
            </div>
            <div class="col-md-3">
                <?php echo CONFIGURATION_EMAIL_ADMIN ?><br />
                <input type='text' value='<?php echo $al_fetch_config->emailadmin ?>' name='emailadmin' required />
            </div>
            <div class="col-md-3">
                <?php echo CONFIGURATION_MAINTENANCE ?><br />
                <?php echo CONFIGURATION_MAINTENANCE_YES ?> <input type='radio' value='1' name='pause' <?php
                if ($al_fetch_config->pause == '1') { echo"checked='checked'"; } ?> />
                <?php echo CONFIGURATION_MAINTENANCE_NO ?>  <input type='radio' value='0' name='pause' <?php
				if ($al_fetch_config->pause == '0') { echo"checked='checked'"; } ?> />
            </div>
            <div class="col-md-3">
                <?php echo CONFIGURATION_EDITOR ?><br />
                <select name='editor' class="chosen-select">
                    <option value='none' <?php 
					if ($editor == 'none') { echo" selected='selected'"; } ?>>
					<?php echo CONFIGURATION_EDITOR_NONE ?></option>
                    <option value='ckeditor' <?php 
					if ($editor == 'ckeditor') { echo" selected='selected'"; } ?>>
					<?php echo CONFIGURATION_EDITOR_CKEDITOR ?></option>
                    <option value='builder' <?php 
					if ($editor == 'builder') { echo" selected='selected'"; } ?>>
					<?php echo CONFIGURATION_EDITOR_BUILDER ?></option>
                </select>
            </div>
        </div>	
    </div>
</div>
<div class="row">
    <div class='col-md-12'>
        <h3><?php echo CONFIGURATION_MYSQL_INFO ?></h3>
        <div class="row">
            <div class="col-md-3">
                <?php echo CONFIGURATION_MYSQL_HOST ?><br />
                <input type="text" name="al_host" value="<?php echo $al_host ?>" required />
            </div>
            <div class="col-md-3">
                <?php echo CONFIGURATION_MYSQL_USER ?><br />
                <input type="text" name="al_user" value="<?php echo $al_user ?>" required />
            </div>
            <div class="col-md-3">
                <?php echo CONFIGURATION_MYSQL_PASSWORD ?><br />
                <input type="password" name="al_password" value="" />
            </div>
            <div class="col-md-3">
                <?php echo CONFIGURATION_MYSQL_DB_NAME ?><br />
                <input type="text" name="al_db_name" value="<?php echo $al_db_name ?>" required />
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
					<?php echo CONFIGURATION_MYSQL_TABLE_PREFIX ?> : <input type="text" name="al_hash" value="<?php echo $prefix_table ?>" required />
            </div>
        </div>
        <h3><?php echo CONFIGURATION_SESSION ?></h3>
        <div class="row">
            <div class="col-md-4">
				<?php echo CONFIGURATION_SESSION_DOMAIN ?> : <input type="text" name="session_domain" placeholder="<?php echo $_SERVER['SERVER_NAME']; ?>" value="<?php echo $session_domain ?>" />
            </div>
            <div class="col-md-4">
				<?php echo CONFIGURATION_SESSION_TIME ?> : <input type="text" name="session_time" placeholder="0" value="<?php echo $session_time ?>" />
            </div>
            <div class="col-md-4">
				<?php echo CONFIGURATION_SESSION_PATH ?> : <input type="text" name="session_path" placeholder="/" value="<?php echo $session_path ?>" />
            </div>
       	</div>
        <h3><?php echo CONFIGURATION_RESTRICTIONS ?></h3>
        <div class="row">
            <div class="col-md-4">
				<?php echo CONFIGURATION_FORBIDDEN_PAGES ?> : <input type="text" name="forbidden_pages" value="<?php echo $al_fetch_config->forbidden_pages ?>" />
            </div>
            <div class="col-md-4">
				<?php echo CONFIGURATION_FORBIDDEN_ACTIONS ?> : <input type="text" name="forbidden_actions" value="<?php echo $al_fetch_config->forbidden_actions ?>" />
            </div>
            <div class="col-md-4">
				<?php echo CONFIGURATION_EXCEPT_ADMIN ?> : <input type="text" name="except_admin" value="<?php echo $al_fetch_config->except_admin ?>" />
            </div>
       	</div>
        <h3><?php echo CONFIGURATION_MAILER ?></h3>
        <div class="row">
            <div class="col-md-12">
				<p>
					<?php echo CONFIGURATION_MAILER_MAIL ?> <input type='radio' value='mail' name='mailer_type' <?php
                    if ($mailer_type == 'mail') { echo"checked='checked'"; } ?> /> | 
                    <?php echo CONFIGURATION_MAILER_SMTP ?>  <input type='radio' value='smtp' name='mailer_type' <?php
                    if ($mailer_type == 'smtp') { echo"checked='checked'"; } ?> />
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
				<?php echo CONFIGURATION_MAIL_SMTP_HOST ?> : <input type="text" name="mailer_host" value="<?php echo $mailer_host ?>" />
            </div>
            <div class="col-md-3">
				<?php echo CONFIGURATION_MAIL_SMTP_USERNAME ?> : <input type="text" name="mailer_username" value="<?php echo $mailer_username ?>" />
            </div>
            <div class="col-md-3">
				<?php echo CONFIGURATION_MAIL_SMTP_PASSWORD ?> : <input type="password" name="mailer_password" value="<?php echo $mailer_password ?>" />
            </div>
            <div class="col-md-3">
				<?php echo CONFIGURATION_MAIL_SMTP_AUTH ?> :<br />
                <?php echo CONFIGURATION_MAILER_SMTP_AUTH_TRUE ?> <input type='radio' value='true' name='mailer_auth' <?php
                if ($mailer_auth == 'true') { echo"checked='checked'"; } ?> />
                <?php echo CONFIGURATION_MAILER_SMTP_AUTH_FALSE ?>  <input type='radio' value='false' name='mailer_auth' <?php
				if ($mailer_auth == 'false') { echo"checked='checked'"; } ?> />
            </div>
       	</div>
        <div class="row">
        	<div class="col-md-3">
				<?php echo CONFIGURATION_MAIL_SMTP_FROM ?> : <input type="text" name="mailer_from" placeholder="test@example.com;Test" value="<?php echo $mailer_from ?>" />
            </div>
            <div class="col-md-3">
				<?php echo CONFIGURATION_MAIL_SMTP_PORT ?> : <input type="text" name="mailer_port" value="<?php echo $mailer_port ?>" />
            </div>
            <div class="col-md-3">
           		<?php echo CONFIGURATION_MAIL_SMTP_HTML ?> :<br />
				<?php echo CONFIGURATION_MAIL_SMTP_HTML_YES ?> <input type='radio' value='true' name='mailer_html' <?php
                if ($mailer_html == 'true') { echo"checked='checked'"; } ?> />
                <?php echo CONFIGURATION_MAIL_SMTP_HTML_NO ?>  <input type='radio' value='false' name='mailer_html' <?php
				if ($mailer_html == 'false') { echo"checked='checked'"; } ?> />
            </div>
            <div class="col-md-3">
           		<?php echo CONFIGURATION_MAIL_SMTP_SECURE ?> :<br />
				<?php echo CONFIGURATION_MAIL_SMTP_SECURE_SSL ?> <input type='radio' value='ssl' name='mailer_secure' <?php
                if ($mailer_secure == 'ssl') { echo"checked='checked'"; } ?> />
                <?php echo CONFIGURATION_MAIL_SMTP_SECURE_TLS ?>  <input type='radio' value='tls' name='mailer_secure' <?php
				if ($mailer_secure == 'tls') { echo"checked='checked'"; } ?> />
            </div>
       	</div>
        <h3><?php echo CONFIGURATION_TIMEZONE ?></h3>
        <div class="row">
            <div class="col-md-12">
				<?php echo CONFIGURATION_TIMEZONE ?><br />
                <select name='timezone' class="chosen-select">
                	<?php foreach($timezones as $key => $value){ ?>
                    	<option value='<?php echo $key ?>' <?php if ($timezone == $key) { echo" selected='selected'"; } ?>><?php echo $value ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <h3><?php echo CONFIGURATION_REGISTRATION ?></h3>
        <div class="row">
            <div class="col-md-3">
				<?php echo CONFIGURATION_ALLOW_REGIS ?><br />
                <?php echo YES ?> <input type='radio' value='1' name='allow_regis' <?php
                if ($al_fetch_config->allow_regis == '1') { echo"checked='checked'"; } ?> />
                <?php echo NO ?>  <input type='radio' value='0' name='allow_regis' <?php
                if ($al_fetch_config->allow_regis == '0') { echo"checked='checked'"; } ?> />
            </div>
            <div class="col-md-3">
				<?php echo CONFIGURATION_REGIS_LINK ?><br />
                <?php echo YES ?> <input type='radio' value='1' name='regis_link' <?php
                if ($al_fetch_config->regis_link == '1') { echo"checked='checked'"; } ?> />
                <?php echo NO ?>  <input type='radio' value='0' name='regis_link' <?php
                if ($al_fetch_config->regis_link == '0') { echo"checked='checked'"; } ?> />
            </div>
        </div>
        <p><input type="submit" value="<?php echo BUTTON_UPDATE ?>" /></p>
    </div>
</div>
</form>