<nav aria-hidden="true" class="menu" id="menu" tabindex="-1">
		<div class="menu-scroll">
			<div class="menu-content">
				<a class="menu-logo" href="/">UOJ部署指北</a>
				<ul class="nav">
					<li>
					
						
							
							<?php

							require_once("content.php");

							foreach ($content as $title=>$posts)
							{
								?>

								<a class="collapsed waves-attach waves-effect" data-toggle="collapse" href="#<?php echo $title; ?>"><?php echo $title ?></a>	
								<ul class="menu-collapse collapse in" id="<?php echo $title; ?>">

								<?php
								foreach ($posts as $name => $file)
								{
									$file = str_replace(".md",".html",$file);

									if($name == $argv[2]) echo 
								"<li class=\"active\">
									<a class=\"waves-attach\" href=\"/$file\">$name</a>
								</li>";
									else echo 
								"<li>
									<a class=\"waves-attach\" href=\"/$file\">$name</a>
								</li>";
								}

								echo "</ul>";
							}

							

							?>
						


					</li>
					
				</ul>
			</div>
		</div>
	</nav>