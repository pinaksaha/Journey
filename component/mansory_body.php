<div class="row-fluid"> 
	<div class="span12">
				<div id="container" id="body">
				
					<?php
						
						//import the json 
						$contents = file_get_contents("./lib/pics.json");
						
						$contents = json_decode($contents,true);
						
						for($i=0; $i < count($contents[photos]);$i++)
						{
							print "<div class='item'>";
								print "<a href='#".$i."' data-toggle='modal'>";
								print "<img src='".$contents[photos][$i][photo_file_url]."' />";
								
								print "</a>";
								
								print "<div id='".$i."' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='".$contents[photos][$i][photo_title]."' aria-hidden='true'>";
								
									print "<div class='modal-header'>";
										print "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>";
										print "<h3 id ='".$contents[photos][$i][photo_title]."'>".$contents[photos][$i][photo_title]."</h3>";
										
									print "</div>";
								
									print "<div class='modal-body'>";
										
										 print "<img src='".$contents[photos][$i][photo_file_url]."' width='".$contents[photos][$i][latitude]."px' />";
										 
									print "</div>";
									
									print "<div class='modal-footer'>";


										print "<p> latitude: ".$contents[photos][$i][latitude]."</p>";
										print "<p> longitude: ".$contents[photos][$i][longitude]."</p>";
									print "</div>";
								
								
									print "</div>";
								print "</div>";	
							
							
						}
						
					?>
				</div>
				<script>
					$(function(){
					  $('#container').masonry({
					    // options
					    itemSelector : '.item',
					    columnWidth : 240
					  });
					});
					var $container = $('#container');
					
					$container.imagesLoaded( function(){
					  $container.masonry({
					    itemSelector : '.box'
					  });
					});		
				</script>
	</div>		
</div>				