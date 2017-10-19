<?php 
	define('path','../../');
	include(path.'_includes/header.php');
?>
		<div id="projectIntro">
			<h1>Hungerford Hill Vinefire</h1>
			<span class="subscript">Packaging design concepts</span>
		</div>
	</div>
	
	<div class="fullImage">
		<img onload="showImg(this)" class="first" src="img/Large-file-Vinefire-01.jpg" />
		<img src="img/Large-file-Vinefire-02.jpg" />
		<img src="img/Large-file-Vinefire-03.jpg" />
		<img src="img/Large-file-Vinefire-04.jpg" />
		<img src="img/Large-file-Vinefire-05.jpg" />
	</div>
	
	<ol class="nav">
		<li><a href="../meadowlea/"><span>&larr;</span> <strong>Meadowlea</strong></a></li>
		<li class="right"><a href="../saralee/"><strong>Sara Lee</strong> <span>&rarr;</span></a></li>
	</ol>
	
	<div id="modal" class="modal">
		<div class="align">
			<ol>
				<li><a href="../brookies">Brookies</a></li>
				<li><a href="../meadowlea">Meadowlea</a></li>
				<li><a class="active" href="../vinefire">Vinefire</a></li>
				<li><a href="../saralee">Sara Lee</a></li>
				<li><a href="../freedomfarms">Freedom Farms</a></li>
			</ol>
		</div>
	</div>
		
<?php
	include(path.'_includes/footer.php');
?>