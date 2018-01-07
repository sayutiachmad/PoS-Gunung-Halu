<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu" style="">
      <li class=""><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a></li>
      <li class=""><a href="<?php echo base_url('dashboard/users');?>"><i class="fa fa-users"></i> Users</a></li>

      <li class=""><a><i class="fa fa-list"></i> Menu <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu" style="display: none;">
          <li><a href="<?php echo base_url('dashboard/test_page');?>">Test Page</a></li>
          <li><a href="<?php echo base_url('dashboard/test_lib');?>">Test Library</a></li>
          <li><a href="#">Menu 3</a></li>
        </ul>
      </li>

      <li class=""><a><i class="fa fa-archive"></i> Barang <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu" style="display: none;">
          <li><a href="<?php echo base_url('barang/formInput');?>">Input Barang</a></li>
          <li><a href="<?php echo base_url('barang/tabelBarang');?>">Tabel Barang</a></li>
        </ul>
      </li>

    </ul>
  </div>

</div>
