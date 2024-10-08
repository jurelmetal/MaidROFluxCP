<?php
if (!defined('FLUX_ROOT')) exit;
$adminMenuItems = $this->getAdminMenuItems();
$menuItems = $this->getMenuItems();
?>

<?php if (!empty($adminMenuItems) && !Flux::config('AdminMenuNewStyle')): ?>
<table id="admin_sidebar">
	<tr>
		<td><img src="<?php echo $this->themePath('img/menuCP_1c.png') ?>" /></td>
	</tr>
	<tr>
		<th class="menuitem"><strong>Admin Menu</strong></td>
	</tr>
	<?php foreach ($adminMenuItems as $menuItem): ?>
	<tr>
		<td class="menuitem">
			<a href="<?php echo $this->url($menuItem['module'], $menuItem['action']) ?>"<?php
				if ($menuItem['module'] == 'account' && $menuItem['action'] == 'logout')
					echo ' onclick="return confirm(\'Realmente quieres cerrar tu sesión?\')"' ?>>
				<span><?php echo htmlspecialchars($menuItem['name']) ?></span>
			</a>
		</td>
	</tr>
	<?php endforeach ?>
	<tr>
		<td><img src="<?php echo $this->themePath('img/menuCP_2c.png') ?>" /></td>
	</tr>
</table>
<?php endif ?>

<?php if (!empty($menuItems)): ?>
<table id="sidebar">
	<tr>
		<td><img src="<?php echo $this->themePath('img/menuCP_1c.png') ?>" /></td>
	</tr>
	<?php foreach ($menuItems as $menuCategory => $menus): ?>
	<?php if (!empty($menus)): ?>
	<tr>
		<th class="menuitem"><strong><?php echo htmlspecialchars($menuCategory) ?></strong></th>
	</tr>
	<?php foreach ($menus as $menuItem):  ?>
	<tr>
		<td class="menuitem">
			<a href="<?php echo $menuItem['url'] ?>"<?php
				if ($menuItem['module'] == 'account' && $menuItem['action'] == 'logout')
					echo ' onclick="return confirm(\'Realmente quieres cerrar tu sesión?\')"' ?>>
				<span><?php echo htmlspecialchars($menuItem['name']) ?></span>
			</a>
		</td>
	</tr>
	<?php endforeach ?>
	<?php endif ?>
	<?php endforeach ?>
	<tr>
		<td><img src="<?php echo $this->themePath('img/menuCP_2c.png') ?>" /></td>
	</tr>
</table>
<?php endif ?>