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
									
									
									print "<a href='#".$i."' role='button' class='btn' data-toggle='modal'>";						
									    print "<img src='".$contents[photos][$i][photo_file_url]."' class='col";
										print  $num;
										print " mansory-brick'/>";
									print "</a>";
									
								print "<div id='".$i."' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
										 print "<div class='modal-header'>";
											 print "  <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>";
											 print  " <h3 id='myModalLabel'>";
											 	print "<a href='".$contents[photos][$i][owner_url]."'>".$contents[photos][$i][owner_name]."</a>";
											 print "</h3>";
											 
										  print "</div>";
									
										  	print "<div class='modal-body'>";
											      print "<img src='".$contents[photos][$i][photo_file_url];
											
											      print "' width='500px' height='500px' />";
											print "</div>";
											
											print "<div class='modal-footer'>";
											print    "<button class='btn' data-dismiss='modal' aria-hidden='true'>Close</button>"; 
											print " </div>";
									
									
									
									
							print "</div>";
							
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
