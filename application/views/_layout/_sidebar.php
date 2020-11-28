<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->nama; ?></p>
        <!-- Status -->
        <a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">LIST MENU</li>
      <!-- Optionally, you can add icons to the links -->

      <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>

      <li class="header text-uppercase"><span>Pelatihan</span></li>

      <li <?php if ($page == 'pegawai') {echo 'class="active"';} ?>>
        <a>
          <i class="fa fa-leanpub"></i>
          <span>Data Pelatihan</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>

        <ul class="treeview-menu">
        <li <?php if ($page == 'posisi') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Posisi'); ?>">
          <i class="fa fa-list-ul"></i>
          <span>Daftar Data Pelatihan</span>
        </a>
      </li>
    
      <li <?php if ($page == 'posisi') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('tambahData/addPelatihan'); ?>">
          <i class="fa fa-plus-circle"></i>
          <span>Tambah Data Pelatihan</span>
        </a>
      </li>

      <li <?php if ($page == 'posisi') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Posisi'); ?>">
          <i class="fa fa-pencil-square-o"></i>
          <span>Ubah Data Pelatihan</span>
        </a>
      </li>
      
        </ul>
    </li>

      <li <?php if ($page == 'posisi') {echo 'class="active"';} ?>>
        <a>
          <i class="fa fa-bell"></i>
          <span>Data Kelas</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>

        <ul class="treeview-menu">
          <li <?php if ($page == 'posisi') {echo 'class="active"';} ?>>
          <a href="<?php echo base_url('Posisi'); ?>">
            <i class="fa fa-list-ul"></i>
            <span>Daftar Kelas Pelatihan</span>
          </a>
        </li>
    
          <li <?php if ($page == 'posisi') {echo 'class="active"';} ?>>
            <a href="<?php echo base_url('Posisi'); ?>">
              <i class="fa fa-plus-circle"></i>
              <span>Tambah Data Kelas</span>
            </a>
          </li>
    
          <li <?php if ($page == 'posisi') {echo 'class="active"';} ?>>
            <a href="<?php echo base_url('Posisi'); ?>">
              <i class="fa fa-list-ul"></i>
              <span>Daftar Materi</span>
            </a>
          </li>

          <li <?php if ($page == 'posisi') {echo 'class="active"';} ?>>
            <a href="<?php echo base_url('Posisi'); ?>">
              <i class="fa fa-plus-circle"></i>
              <span>Tambah Materi</span>
            </a>
          </li>
      
      
        </ul>

      </li>
      
      <li <?php if ($page == 'kota') {echo 'class="active"';} ?>>
        <a>
          <i class="fa fa-users"></i>
          <span>Data Pemateri</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>

        <ul class="treeview-menu">
        <li <?php if ($page == 'posisi') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Posisi'); ?>">
          <i class="fa fa-list-ul"></i>
          <span>Daftar Pemateri</span>
        </a>
      </li>
    
      <li <?php if ($page == 'posisi') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Posisi'); ?>">
          <i class="fa fa-plus-circle"></i>
          <span>Tambah Jadwal Pemateri</span>
        </a>
      </li>
      
        </ul>
      </li>


      <li class="header text-uppercase"><span>Aktivitas</span></li>
          
      <li <?php if ($page == 'kota') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Kota'); ?>">
          <i class="fa fa-th-list"></i>
          <span>Data Aktivitas</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>

        <ul class="treeview-menu">
        <li <?php if ($page == 'posisi') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Posisi'); ?>">
          <i class="fa fa-check-circle"></i>
          <span>Aktivitas Hari Ini</span>
        </a>
      </li>
    
      <li <?php if ($page == 'posisi') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Posisi'); ?>">
          <i class="fa fa-list-alt"></i>
          <span>Daftar Aktivitas</span>
        </a>
      </li>
      
        </ul>

      </li>

      <li class="header text-uppercase"><span>Akun</span></li>

          
      <li <?php if ($page == 'kota') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Kota'); ?>">
          <i class="fa fa-user"></i>
          <span>Akun</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>

        <ul class="treeview-menu">
        <li <?php if ($page == 'posisi') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Posisi'); ?>">
          <i class="fa fa-cogs"></i>
          <span>Pengaturan Akun</span>
        </a>
      </li>
    
      <li <?php if ($page == 'posisi') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Posisi'); ?>">
          <i class="fa fa-sign-out"></i>
          <span>Keluar</span>
        </a>
      </li>
      
        </ul>
      </li>
    
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>