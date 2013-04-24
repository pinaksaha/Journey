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
							
							print "<div class='item'>";						
									    print "<img src='".$contents[photos][$i][photo_file_url]."' class='box col";
										print  $num;
										print " mansory-brick'/>";
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

			<script>
				  $(function(){
				    
				    var $container = $('#container');
				    
				    $container.imagesLoaded(function(){
				      $container.masonry({
				        itemSelector: '.box',
				        columnWidth: 100,
				        isAnimated: !Modernizr.csstransitions
				      });
				    })
				    
				  });

		
			</script>
			<script>
			  $(function(){
			    
			    var $container = $('#container');
			    
			    $container.imagesLoaded(function(){
			      $container.masonry({
			        itemSelector: '.box',
			        columnWidth: 100
			      });
			    });
			    
			    $container.infinitescroll({
			      navSelector  : '#page-nav',    // selector for the paged navigation 
			      nextSelector : '#page-nav a',  // selector for the NEXT link (to page 2)
			      itemSelector : '.box',     // selector for all items you'll retrieve
			      loading: {
			          finishedMsg: 'No more pages to load.',
			          img: 'http://i.imgur.com/6RMhx.gif'
			        }
			      },
			      // trigger Masonry as a callback
			      function( newElements ) {
			        // hide new items while they are loading
			        var $newElems = $( newElements ).css({ opacity: 0 });
			        // ensure that images load before adding to masonry layout
			        $newElems.imagesLoaded(function(){
			          // show elems now they're ready
			          $newElems.animate({ opacity: 1 });
			          $container.masonry( 'appended', $newElems, true ); 
			        });
			      }
			    );
			    
			  });
			</script>		