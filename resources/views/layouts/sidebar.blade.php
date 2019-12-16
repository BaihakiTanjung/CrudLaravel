<!--Double navigation-->
<header>
  <!-- Sidebar navigation -->
  <div id="slide-out" class="side-nav fixed wide sn-bg-1">
    <ul class="custom-scrollbar">
      <!-- Logo -->
      <li>
        <div class="logo-wrapper sn-ad-avatar-wrapper">
          <a href="#"><img src="{{asset('img/baihaki2.png')}}" class="rounded-circle"><span>Baihaki</span></a>
      </li>
      <!--/. Logo -->
      <!-- Side navigation links -->
      <li>
        <ul class="collapsible collapsible-accordion">
          <li><a href="{{url('kategori')}}" class="waves-effect"><i
                class="sv-slim-icon fas fa-database"></i>Kategori</a></li>
          <li><a class="collapsible-header waves-effect arrow-r active"><i
                class="sv-slim-icon fas fa-chevron-right"></i> Produk Mgt<i
                class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#" class="waves-effect active">
                    <span class="sv-slim"> SL </span>
                    <span class="sv-normal">Produk</span></a>
                </li>
                <li><a href="#" class="waves-effect active">
                    <span class="sv-slim"> SL </span>
                    <span class="sv-normal">Kategori Produk</span></a>
                </li>
                <li><a href="#" class="waves-effect">
                    <span class="sv-slim"> RF </span>
                    <span class="sv-normal">Jenis Produk</span></a>
                </li>
              </ul>
            </div>
          </li>
          <li><a href="{{url('kategori')}}" class="waves-effect"><i class="sv-slim-icon fas fa-database"></i>Order</a>
          </li>
          <li><a href="{{url('kategori')}}" class="waves-effect"><i class="sv-slim-icon fas fa-database"></i>User
              Manajemen</a></li>

          <li><a class="collapsible-header waves-effect arrow-r"><i class="sv-slim-icon far fa-envelope"></i> Hubungi
              Kami<i class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#" class="waves-effect">
                    <span class="sv-slim"> F </span>
                    <span class="sv-normal">FAQ</span></a>
                </li>
                <li><a href="#" class="waves-effect">
                    <span class="sv-slim"> W </span>
                    <span class="sv-normal">Write a message</span></a>
                </li>
              </ul>
            </div>
          </li>
          <li><a id="toggle" class="waves-effect"><i class="sv-slim-icon fas fa-angle-double-left"></i>Minimize menu</a>
          </li>
        </ul>
      </li>
      <!--/. Side navigation links -->
    </ul>
    <div class="sidenav-bg rgba-blue-strong"></div>
  </div>
  <!--/. Sidebar navigation -->