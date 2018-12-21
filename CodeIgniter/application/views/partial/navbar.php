<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?=base_url();?>index.php" class="navbar-brand"><b>SISFO</b>Perpustakaan</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?=base_url();?>index.php"> <i class="fa fa-home"></i> Home </a></li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Kategori <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?=site_url('kategori');?>">Daftar Kategori</a></li>
                <li class="divider"></li>
                <li><a href="<?=site_url('kategori/add');?>">Tambah Kategori</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Buku <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?=site_url('buku');?>">Daftar Buku</a></li>
                <li class="divider"></li>
                <li><a href="<?=site_url('buku/add');?>">Tambah Buku</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Anggota <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?=site_url('anggota/index');?>">Daftar Anggota</a></li>
                <li class="divider"></li>
                <li><a href="<?=site_url('anggota/add');?>">Tambah Anggota</a></li>
              </ul>
            </li>
      			
          </ul>
          
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
 </header>