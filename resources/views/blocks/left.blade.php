<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Admin</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
            <img alt="image" src="{{$user->avartar}}">
            </div>
            <div class="sidebar-user-details">
            <div class="user-name">{{$user->name}}</div>
              <div class="user-role">
                Administrator
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li id="home">
              <a href="/admin/home"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>
            <li id="tinmuaban">
              <a href="/admin/tinmuaban"><i class="ion ion-clipboard"></i><span>Tin mua bán</span></a>
            </li>
            <li id="phanloaitin">
                    <a href="simple.html"><i class="ion ion-ios-location-outline"></i><span>Phân loại tin tức</span></a>
            </li>
            <li id="quanhuyen">
                    <a href="/admin/quanhuyen"><i class="ion ion-ios-location-outline"></i><span>Quận huyện Hà Nội</span></a>
            </li>
        </aside>
      </div>
