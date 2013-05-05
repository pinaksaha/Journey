

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
							//$user_profile_link = $contents[photos][$i][owner_url];
							
							print "<div class='item box col'>";
										print "<a id='single_image' href='".$contents[photos][$i][photo_file_url]."'>";				
									    print "<img src='".$contents[photos][$i][photo_file_url]."' class='bodyImg col";
										print  $num;
										print " mansory-brick' target='_blank' id=".$i."/>";
										print "</a>";
										
									print "<div class='pagination pagination-centered'>";
									
									print " <ul>";	
									
									print  "<li>"."<a href='".$contents[photos][$i][owner_url]."'>"."<i class='icon-user'></i></a></li>";
									
									print "<li><a id='inline' href='#data".$i;
									print "'><i class='icon-screenshot'></i>";
									print "</a></li>";
									
									print "<li><a id='inline' href='#share".$i."'>";
									print "<i class = 'icon-share'></i></a>";
									print "</li>";
									print  "</ul>";
									print 	"</div>";				
							
							print "</div>";	
							
							print "<div class='item' style='display:none'><div class='item' id='data".$i."'>";
							print "<img  class='item' src='http://maps.googleapis.com/maps/api/staticmap?center=".$contents[photos][$i][latitude].','.$contents[photos][$i][longitude]."&zoom=11&size=200x200&sensor=false";
							print "'>";
							print "</div></div>";

							
							print "<div class='item' style='display:none'><div class='item' id='share".$i."'>";
							print "<div id=fb-root></div>";
							print "<div class='fb-like' data-href='".$contents[photos][$i][photo_file_url]."' data-send='false' data-width='100' data-show-faces='false' data-font='segoe ui'></div>";
							
							print "<a href='https://twitter.com/share' class='twitter-share-button' data-url='".$contents[photos][$i][photo_file_url]."'>Tweet</a>";
							
							
							
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
