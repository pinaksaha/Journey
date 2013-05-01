<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Journey</title>
<?php 
	
	include("./includes/css.php");
	include("./includes/js.php");
	
?>
</head>

<body>


	
	<?php 
		
		
		include("./component/nav_bar_top.php");
		include("./view/mansory_body.php");	
		include("./component/nav_bar_bottom.php");
		
	?>
</body>

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
			<script>
			$(document).ready(function() {

			/* This is basic - uses default settings */
			
			$("a#single_image").fancybox();
			
			/* Using custom settings */
			
			$("a#inline").fancybox({
				'hideOnContentClick': true
			});
		
			/* Apply fancybox to multiple items */
			
			$("a.group").fancybox({
				'transitionIn'	:	'elastic',
				'transitionOut'	:	'elastic',
				'speedIn'		:	600, 
				'speedOut'		:	200, 
				'overlayShow'	:	false
			});
			
		});
			</script>;
				
</html>
