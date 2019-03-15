<?php
/** 
 * Sub-vy för toppraden som innehåller navbar och "inloggad som..."-delarna.
*/
defined('BASEPATH') OR exit('No direct script access allowed');

?><div id="wrapper_top" class="row mb-3 border-bottom">
	
	<!-- Navbar -->
	<nav class="col-sm navbar navbar-expand-sm navbar-light text-nowrap">
		<ul class="navbar-nav">
			
			<li class="nav-item<?php echo $this->current_page == 'news' ? ' active' : null;?>">
				<a class="nav-link" href="<?php echo base_url();?>">Hem</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('forum');?>">Forum</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('signup');?>">Anmälning</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('admin');?>">Admin</a>
			</li>

		</ul>
	</nav>

	<div class="col text-right">
		<div class="rounded bg-danger text-light d-inline-block py-2 px-3 mt-2">
			<i class="fas fa-envelope mr-2"></i>
			Du har <strong>1337</strong> olästa meddelanden
		</div>
	</div>

	<!-- Inloggad som... -->
	<div class="col-3-sm text-sm-right my-1">
		
		<?php if($this->member->valid):?>
		<div id="userbox">
			<span class="d-none d-md-inline text-nowrap"><strong><?php echo $this->member->name;?></strong></span>
			<?php
			//grad-ikon
			if(isset($this->member->rank_id))
				echo '<img class="rank_icon d-none d-md-inline" src="'. base_url('images/rank_icons/'. $this->member->rank_icon) .'" title="'. $this->member->rank_name .'" data-toggle="tooltip" />';

			//avatar
			$avatar = !empty($this->member->avatar_url)
				? $this->member->avatar_url
				: base_url('images/unknown.png');
			echo "<img class='avatar rounded' src='$avatar' alt='Avatar'>"
			?>
			<p class="d-inline d-sm-none ml-2 text-nowrap"><strong><?php echo $this->member->name;?></strong></p>
		</div>
		<?php else:?>
			<div class="mt-2">
				<a class="btn btn-primary" href="<?php echo base_url('forum/ucp.php?mode=login');?>">Logga in</a>
				<a class="btn btn-success" href="<?php echo base_url('forum/ucp.php?mode=register');?>">Registrera dig</a>
			</div>
		<?php endif;?>

	</div>

</div>

<?php
//Alerts
$this->alerts->print_alerts();
?>