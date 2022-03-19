<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">SCMS</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="index.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>

					<li class="sidebar-header">
						Tools & Modules
					</li>

					

{foreach $sidebar as $contact}
  {foreach $contact as $value}
  <li class="sidebar-item">
						<a class="sidebar-link" href="getmodule.php?moduleName={$value@key}">
              <i class="align-middle" data-feather="square"></i> <span class="align-middle"> {$value}</span>
            </a>
					</li>
  {/foreach}
{/foreach}


					<li class="sidebar-header">
						System Software
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="settings.php">
              <i class="align-middle" data-feather="square"></i> <span class="align-middle">Settings</span>
            </a>
					</li>

				</ul>

			</div>
		</nav>