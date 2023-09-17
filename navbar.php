<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar  ">
	<div class="navbar-wrapper  ">
		<div class="navbar-content scroll-div ">

			<div class="">
				<div class="main-menu-header">
					<img class="img-radius" src="dist/assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
					<div class="user-details">
						<span><?= $_SESSION['nama']; ?></span>
						<div id="more-details">Admin<i class="fa fa-chevron-down m-l-5"></i></div>
					</div>
				</div>
				<div class="collapse" id="nav-user-link">
					<ul class="list-unstyled">
						<li class="list-group-item"><a href="profil.php"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
						<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
						<li class="list-group-item"><a href="logout.php"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
					</ul>
				</div>
			</div>

			<ul class="nav pcoded-inner-navbar ">
				<li class="nav-item pcoded-menu-caption">
					<label>Navigation</label>
				</li>
				<li class="nav-item">
					<a href="index.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
				</li>
				<li class="nav-item">
					<a href="input.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Input Data Siswa</span></a>
				</li>
				<li class="nav-item">
					<a href="data.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Lihat Data Siswa</span></a>
				</li>

			</ul>
		</div>
	</div>
</nav>
<!-- [ navigation menu ] end -->