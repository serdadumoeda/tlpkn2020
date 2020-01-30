<ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGASI</li>
        <li>
          <a href="/">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-institution"></i>
            <span>BPK</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/input-bpk"><i class="fa fa-circle-o"></i> Isi Temuan</a></li>
            <li><a href="/import-bpk"><i class="fa fa-circle-o"></i> Import Temuan</a></li>
            <li><a href="/list-bpk"><i class="fa fa-circle-o"></i> Daftar Temuan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-legal"></i>
            <span>Inspektorat Jenderal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/input-itjen"><i class="fa fa-circle-o"></i> Isi Temuan</a></li>
            <li><a href="/import-itjen"><i class="fa fa-circle-o"></i> Import Temuan</a></li>
            <li><a href="/list-itjen"><i class="fa fa-circle-o"></i> Daftar Temuan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Unit Kerja</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('esi.create')}}"><i class="fa fa-circle-o"></i> Eselon I</a></li>
            <li><a href="{{route('esii.create')}}"><i class="fa fa-circle-o"></i> Eselon II</a></li>
          </ul>
        </li>



      </ul>