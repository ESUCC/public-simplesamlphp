<?php

$this->data['header'] = $this->t('{core:frontpage:page_title}');
$this->includeAtTemplateBase('includes/header.php');

?>

<!-- 
<div id="tabdiv">
<ul>
	<li><a href="#welcome"><?php echo $this->t('{core:frontpage:welcome}'); ?></a></li>
	<li><a href="#configuration"><?php echo $this->t('{core:frontpage:configuration}'); ?></a></li>
	<li><a href="#metadata"><?php echo $this->t('{core:frontpage:metadata}'); ?></a></li>
</ul> -->
<?php
if ($this->data['isadmin']) {
	echo '<p class="float-r youareadmin">' . $this->t('{core:frontpage:loggedin_as_admin}') . '</p>';
} else {
	echo '<p class="float-r youareadmin"><a href="' . $this->data['loginurl'] . '">' . $this->t('{core:frontpage:login_as_admin}') . '</a></p>';
}
?>

<div style="float:right">
	<code style="background: white; background: #f5f5f5; border: 1px dotted #bbb; padding: 1em;  color: #555" ><?php 
        echo "SimpleSAMLphp " . $this->data['version'];
	?></code>
</div>

<div style="clear: both; float: right; margin-top: 1em;" class="enablebox mini">
    <table>

    <?php
    $icon_enabled  = '<img src="/'.$this->data['baseurlpath'].'resources/icons/silk/accept.png" alt="enabled" />';
    $icon_disabled = '<img src="/'.$this->data['baseurlpath'].'resources/icons/silk/delete.png" alt="disabled" />';
    echo '<tr class="'.($this->data['enablematrix']['saml20idp'] ? 'enabled' : 'disabled').'"><td>SAML 2.0 IdP</td>';
    echo '<td>'.($this->data['enablematrix']['saml20idp'] ? $icon_enabled : $icon_disabled).'</td></tr>';

    echo '<tr class="'.($this->data['enablematrix']['shib13idp'] ? 'enabled' : 'disabled').'"><td>Shib 1.3 IdP</td>';
    echo '<td>'.($this->data['enablematrix']['shib13idp'] ? $icon_enabled : $icon_disabled).'</td></tr>';
    ?>

    </table>
</div>


<h2><?php echo $this->t('{core:frontpage:configuration}'); ?></h2>
<ul>
<?php
	foreach ($this->data['links_config'] AS $link) {
		echo '<li><a href="' . htmlspecialchars($link['href']) . '">' . $this->t($link['text']) . '</a></li>';
	}
?>
</ul>


<?php
	if (array_key_exists('warnings', $this->data) && is_array($this->data['warnings']) && !empty($this->data['warnings'])) {

		echo '<h2>' . $this->t('{core:frontpage:warnings}') . '</h2>';

		foreach($this->data['warnings'] AS $warning) {
			if (is_array($warning)) {
				echo '<div class="caution">' . $this->t($warning[0], $warning[1]) . '</div>';
			} else {
				echo '<div class="caution">'.$this->t($warning).'</div>';
			}
		}
	}
?>
<?php 

if ($this->data['isadmin']) {
    echo '<h2>'.$this->t('{core:frontpage:checkphp}').'</h2>';
    echo '<div class="enablebox"><table>';

    $icon_enabled = '<img src="/'.$this->data['baseurlpath'].'resources/icons/silk/accept.png" alt="enabled" />';
    $icon_disabled = '<img src="/'.$this->data['baseurlpath'].'resources/icons/silk/delete.png" alt="disabled" />';

    foreach ($this->data['funcmatrix'] as $func) {
        echo '<tr class="'.($func['enabled'] ? 'enabled' : 'disabled').'"><td>'.
            ($func['enabled'] ? $icon_enabled : $icon_disabled).'</td>';
        echo '<td>'.$this->t($this->data['requiredmap'][$func['required']]).'</td><td>'.$func['descr'].'</td></tr>';
    }
    echo '</table></div>';
}

?>
	
<?php $this->includeAtTemplateBase('includes/footer.php');
