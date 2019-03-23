<?php 
	$al_id=decoding($al_fetch_link_menu->id);
	$al_modules=decoding($al_fetch_link_menu->shortcut);
	$al_id_section_name=decoding($al_fetch_section_name->id);
	$al_section=decoding($al_fetch_section_name->section);
?>
<?php echo buildMenu($al_connexion); ?>
<?php echo $_SESSION['error_message']; ?>
<h1>EDIT LINK MENU</h1>
<form action="index.php?page=menu&action=post_link&id_link=<?php echo $al_id ?>" method="post" id="validator" role="form">
    <table class="table-striped">
        <tr>
            <td width="20%">Section</td>
            <td><?php echo $al_section ?></td>
        </tr>
        <tr>
            <td width="20%">Pages contains in the menu</td>
            <td>
                <ul>
					<?php 		
                        $select3=$al_connexion->query("SELECT * FROM ".HASH."_link_menu WHERE id_index='$al_id_section_name'");
                        $select3->setFetchMode(PDO::FETCH_OBJ);
                        while($al_fetch_link_menu = $select3->fetch()){
                            $al_name=decoding($al_fetch_link_menu->name);
                            $al_id_index=decoding($al_fetch_link_menu->id_index);
                            $al_id=decoding($al_fetch_link_menu->id);
                            $al_shortcut_unique=decoding($al_fetch_link_menu->shortcut);
                    ?>
					<li>Alias : <?php echo $al_shortcut_unique ?> - Name : <input name="shortcut[<?php echo $al_id ?>]" type="text" class="form-control" size="30" value="<?php echo $al_name ?>" /></li>
                	<?php
						}
					?>
				</ul>
        	</td>
        </tr>
		<tr>
        	<td width="20%"><input type="submit" class="btn btn-default" name="post" value="Modify" /></td>
            <td></td>
        </tr>
	</table>
</form>