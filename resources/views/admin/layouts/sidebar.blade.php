<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{asset('dashboard/img/logo-small.png')}}">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
            Newsnew
            <!-- <div class="logo-image-big">
              <img src="{{asset('dashboard/img/logo-big.png')}}">
            </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active ">
                <a href="./dashboard.html">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{route('account.index')}}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>Tài khoản</p>
                </a>
            </li>
            <li>
                <a href="{{route('category.index')}}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Danh mục</p>
                </a>
            </li>
            <li>
                <a href="./notifications.html">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Bài viết</p>
                </a>
            </li>
            <li>
                <a href="./user.html">
                    <i class="nc-icon nc-single-02"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li>
                <a href="./tables.html">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Table List</p>
                </a>
            </li>
            <li>
                <a href="./typography.html">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>Typography</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="./upgrade.html">
                    <i class="nc-icon nc-spaceship"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
        </ul>
    </div>
</div>
