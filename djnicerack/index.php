<?php $thisPage="Index"; ?>
<?php 
include 'includes/header.php';
?> 

	
			<div class="row">
					
				<div class="six columns">
					<p>Born in Louisiana, the southern epicenter of blues beats and bumping bass, DJ Nice Rack cut her vinyl teeth in Los Angeles. Spinning her eclectic cacophony of bass and breaks, bounce, and southern rap, she's melded the nostalgia of yesterday's hip-hop with the futurist sounds that keep the dance party at full booty dystopian anarchy. Crank it up to eleven and you'll find her behind the table til' it ruptures like the reality around her.</p>
					<p>
					<a href="https://gonola.com/music-in-new-orleans/new-orleans-emerging-musicians-dj-nice-rack" target="_blank">Press - GoNola</a></p>
					<p>
						<div class="fb-like" data-href="https://www.facebook.com/djnicerack/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
						
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id)) return;
						js = d.createElement(s); js.id = id;
						js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9&appId=137080053497902";
						fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
					</p>
				</div>
				<div class="six columns">
					<img src="images/5.jpg" title="dj Nice Rack" class="u-max-full-width"/>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="six columns">
					<h3><a href="https://soundcloud.com/dj-nice-rack/tracks" target="_blank">Soundcloud.com</a></h3>
					<iframe width="100%" height="400" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/190336906&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
				</div>
				<div class="six columns">
					<h3><a href="https://mixcloud.com/djnicerack/" target="_blank">Mixcloud.com</a></h3>
					<iframe width="100%" height="400" src="https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fdjnicerack%2Fbeth-andrew-wedding-mix%2F" frameborder="0"></iframe>
				</div>
			</div>
			<hr>
			
			<div class="row">
				
				<div class="twelve columns">
					<h2>Instagram</h2>
					<?php
						// use this instagram access token generator http://instagram.pixelunion.net/
						
						$access_token="6574982.1677ed0.34e6d4b754434694b92e5164e0870fef";
						$photo_count=6;
						// old = 6574982.1677ed0.a8e49ae837c447db9a658d89511fa987     
						$json_link="https://api.instagram.com/v1/users/self/media/recent/?";
						$json_link.="access_token={$access_token}&count={$photo_count}";
						
						$json = file_get_contents($json_link);
						$obj = json_decode(preg_replace('/("\w+"):(\d+)/', '\\1:"\\2"', $json), true);
						foreach ($obj['data'] as $post) {
     
					    $pic_text=$post['caption']['text'];
					    $pic_link=$post['link'];
					    $pic_like_count=$post['likes']['count'];
					    $pic_comment_count=$post['comments']['count'];
					    $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
					    $pic_created_time=date("F j, Y", $post['caption']['created_time']);
					    $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));
					     
					    echo "<div class='col-md-4 col-sm-6 col-xs-12 item_box'>";        
					        echo "<a href='{$pic_link}' target='_blank'>";
					            echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='{$pic_text}'>";
					        echo "</a>";
					        echo "<p>";
					            echo "<p>";
					                echo "<div style='color:#888;'>";
					                    echo "<a href='{$pic_link}' target='_blank'>{$pic_created_time}</a>";
					                echo "</div>";
					            echo "</p>";
					            echo "<p>{$pic_text}</p>";
					        echo "</p>";
					    echo "</div>";
					}
						
					?>
				</div>
			</div>
			
			

<?php include 'includes/footer.php'; ?>
