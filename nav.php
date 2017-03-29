<nav class="menu menu-left nav-drawer nav-drawer-md" id="ui_menu">
		<div class="menu-scroll">
			<div class="menu-content">
				<a class="menu-logo" href="/">UOJ部署指北</a>
				<ul class="nav">
					<li>
					
						<a class="collapsed waves-attach waves-effect" data-toggle="collapse" href="#posts">部署</a>	
						<ul class="menu-collapse collapse in" id="posts">
							
							<?php

							require_once("content.php");

							foreach ($content as $name => $file)
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

							?>
						</ul>


					</li>
					
				</ul>
			</div>
		</div>
	</nav>