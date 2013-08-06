<html>
<?php include 'head.php';?>
<title>Telas Luz Maria - Blusas y Faldas</title>
<body>
	<?php include 'header.php';?>
	<div id="pagecontainer">
		<div class="division clear"></div>
		<div class="division2"></div>
		<div id="inner">
			<div class="imgbg shadowDark">
				<div class="imgtagContainer">
					<div class="imgtag shadowDark textShadow"><h2>Blusas y Faldas</h2></div>
				</div>
				<table>
					<?php 
						$i=1;
						$flag=false;
						$flagHidden=false;
						while($i<40){
							echo ($flagHidden ? "<tr class=\"hiddenRow\" style=\"display:none;\">": "<tr>");
								for($j=0;$j<5;$j++){
									echo "<td>";
										$image = "images/blusasyfaldas/mini/$i.jpg";
										if(file_exists($image)){
											echo "<a href=\"#\"><img src=\"$image\" border =\"0\" height=\"185\" width=\"170\" alt=\"blusas$i\"></a></td>";
										}
										$i++;
									echo "</td>";
									if($i==15){ $flag=true;	}
								}
							echo "</tr>";
							if($flag){
								echo "<th class=\"clicMessage\" colspan=\"5\"><a class=\"dropLink\" href=\"#\" onClick=\"return false;\"><span class=\"dropGallery round textShadow\">Clic para ver todas las im&aacute;genes</span></a></th>";
								$flag=false;
								$flagHidden=true;
							}
						}
					?>
				</table> 
			</div>
		</div>
	</div>
	<div class="clear"></div>
</body>
<?php include 'footer.php';?>	
</html>