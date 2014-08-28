<?php $page_title = "Minting"; include ('header.php'); ?>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<img class="svg-fullwidth" src="assets/img/minting/banner.svg">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3 col-sm-offset-1 text-center vcenter">
			<img class="svg-full-width" src="assets/img/minting/closeup.svg">
		</div>
		<div class="col-sm-4 vcenter">
			<h3><?php echo $Locale->getText("minting.mint_anywhere"); ?></h3>
			<p>
				<?php echo $Locale->getText("minting.mint_anywhere_desc"); ?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-5 col-sm-offset-3 vcenter">
			<h3><?php echo $Locale->getText("minting.secure_the_network"); ?></h3>
			<p>
				<?php echo $Locale->getText("minting.secure_the_network_desc"); ?>
			</p>
		</div>
		<div class="col-sm-3 text-center vcenter">
			<img class="svg-full-width" src="assets/img/minting/security.svg">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3 col-sm-offset-1 text-center vcenter">
			<img class="svg-threeq" src="assets/img/minting/dividend.svg">
		</div>
		<div class="col-sm-5 vcenter">
			<h3><?php echo $Locale->getText("minting.earn_reward"); ?></h3>
			<p>
				<?php echo $Locale->getText("minting.earn_reward_desc"); ?>
			</p>
		</div>
	</div>
	<br><br>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="videoWrapper">
			    <!-- Copy & Pasted from YouTube -->
			    <iframe width="560" height="315" src="//www.youtube.com/embed/7tra0vmparI" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<br>
	<div class="row text-center">
		<a href="minting-guide"><img class="svg-quickstart" src="assets/img/misc/quick-start.svg"></a>
	</div>
</div>
<?php include ('footer.php'); ?>
