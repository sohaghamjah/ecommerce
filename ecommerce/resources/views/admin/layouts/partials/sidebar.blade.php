    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i>DOKAN</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="{{ url('/') }}" target="_blank" class="sl-menu-link">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">Visit Site</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('admin.dashboard') }}" class="sl-menu-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('admin.slider.index') }}" class="sl-menu-link {{ Request::is('admin/slider*') ? 'active' : '' }}">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">Slider</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('admin.brands') }}" class="sl-menu-link {{ Request::is('admin/brands') ? 'active' : '' }}">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">Brands</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link {{ Request::is('admin/categories*') ? 'active show-sub' : '' }}">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Categories</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('admin.categories') }}" class="nav-link {{ Request::is('admin/categories') ? 'active' : '' }}">Add Categorie</a></li>
          <li class="nav-item"><a href="{{ route('admin.sub-category') }}" class="nav-link {{ Request::is('admin/categories/sub-category') ? 'active' : '' }}">Sub Categories</a></li>
          <li class="nav-item"><a href="{{ route('admin.sub-sub-category') }}" class="nav-link {{ Request::is('admin/categories/sub-sub-category') ? 'active' : '' }}">Sub Sub Categories</a></li>
        </ul>

        <a href="#" class="sl-menu-link {{ Request::is('admin/product*') ? 'active show-sub' : '' }}">
            <div class="sl-menu-item">
              <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
              <span class="menu-item-label">Product</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.add-product') }}" class="nav-link {{ Request::is('admin/product/add-product') ? 'active' : '' }}">Add Product</a></li>
            <li class="nav-item"><a href="{{ route('admin.manage-product') }}" class="nav-link {{ Request::is('admin/product/manage-product*') ? 'active' : '' }}">Manage Product</a></li>
          </ul>
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->
