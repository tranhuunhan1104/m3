<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <div class="d-flex sidebar-profile">
          <div class="sidebar-profile-image">
            <img src="../../images/faces/face29.png" alt="image">
            <span class="sidebar-status-indicator"></span>
          </div>
          <div class="sidebar-profile-name">
            <p class="sidebar-name">
              Kenneth Osborne
            </p>
            <p class="sidebar-designation">
              Welcome
            </p>
          </div>
        </div>
        <div class="nav-search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
            <div class="input-group-append">
              <span class="input-group-text" id="search">
                <i class="typcn typcn-zoom"></i>
              </span>
            </div>
          </div>
        </div>
        <p class="sidebar-menu-title">Dash menu</p>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('product.index')}}">
          <i class="typcn typcn-device-desktop menu-icon"></i>
          <span class="menu-title">Products <span class="badge badge-primary ml-3">New</span></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('category.index')}}">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Categories</span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="typcn typcn-film menu-icon"></i>
          <span class="menu-title">Form elements</span>
        </a>
      </li>

      <li>
        <p class="sidebar-menu-title">Category</p>
      </li>
      <li class="nav-item"><a href="#" class="nav-link">#Sales</a></li>
      <li class="nav-item"><a href="#" class="nav-link">#Marketing</a></li>
      <li class="nav-item"><a href="#" class="nav-link">#Growth</a></li>
    </ul>
  </nav>
