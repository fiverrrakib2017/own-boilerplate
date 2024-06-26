@php 
$route = Route::currentRouteName()
@endphp
<div class="br-logo"><a href=""><span>[</span>Pointsoft <i>plus</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Menu</label>
      <ul class="br-sideleft-menu">

        <li class="br-menu-item">
          <a href="{{ route('admin.dashboard') }}" class="br-menu-link  {{ Route::is('admin.dashboard') ? 'active' : '' }}">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>
        
        <!----------Blog  Menu-------------->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub {{($prefix=='admin/blog')?'show-sub':''}}">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Blog </span>
          </a>
          <ul class="br-menu-sub" >
            <li class="sub-item"><a href="" class="sub-link ">Manage Category</a></li>
            <li class="sub-item"><a href="" class="sub-link ">Add Blog</a></li>

            <li class="sub-item"><a href="" class="sub-link ">Manage Blog</a></li>
          </ul>
        </li>
        


      </ul><!-- br-sideleft-menu -->

      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-success">System Information</label>

      <div class="info-list">
        <div class="info-list-item">
          <div>
            <p class="info-list-label">Memory Usage</p>
            <h5 class="info-list-amount">32.3%</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#336490"], "height": 35, "width": 60 }'>8,6,5,9,8,4,9,3,5,9</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">CPU Usage</p>
            <h5 class="info-list-amount">140.05</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#1C7973"], "height": 35, "width": 60 }'>4,3,5,7,12,10,4,5,11,7</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">Disk Usage</p>
            <h5 class="info-list-amount">82.02%</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#8E4246"], "height": 35, "width": 60 }'>1,2,1,3,2,10,4,12,7</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">Daily Traffic</p>
            <h5 class="info-list-amount">62,201</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#9C7846"], "height": 35, "width": 60 }'>3,12,7,9,2,3,4,5,2</span>
        </div><!-- info-list-item -->
      </div><!-- info-list -->

      <br>
    </div><!-- br-sideleft -->