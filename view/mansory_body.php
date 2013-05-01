

<div class="row-fluid"> 
	<div class="span12">
				<div id="container" class="transitions-enabled infinite-scroll clearfix masonry" style="position: relative; height: 1136px;">


					<?php



						//import the json 

						$contents = file_get_contents("./lib/pics.json");
						$contents = json_decode($contents,true);

						$min = $_REQUEST['min'];
						$max = 0;
						if($min == "")
						{
							$min = 0;
						}

						if(($min+20)>count($contents[photos]))
						{
							$max = count($contents[photos]);
						}
						else
						{
							$max = $min +20;
						}



						$num = 1;
						for($i=$min; $i < $max;$i++)
						{
							if($num > 5)
							{
								$num = 1;
							}

							print "<div class='item box col'>";
										print "<a id='single_image' href='".$contents[photos][$i][photo_file_url]."'>";				
									    print "<img src='".$contents[photos][$i][photo_file_url]."' class='bodyImg col";
										print  $num;
										print " mansory-brick' target='_blank' id=".$i."/>";
										print "</a>";
									
									print "<a href='".$contents[photos][$i][owner_url]."'>"."<h4>By: ".$contents[photos][$i][owner_name]."</h4></a>";
									print "<h5>Latitude:".$contents[photos][$i][latitude]."</h5>";
									print "<h5>Longitude:".$contents[photos][$i][longitude]."</h5>";								
							
							print "</div>";	


							$num = $num +1;
						}

					?>
					<hr />
					<nav id='page-nav' style='display: none;'>
						<?php	print "<a href='./index.php?min=".$max."'></a>"; ?>
					</nav>
				</div>			
	</div>		
</div>		
