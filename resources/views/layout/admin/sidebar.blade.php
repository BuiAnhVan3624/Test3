<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon ">
            <img src="{{ asset('image_chinh/anh.png') }}" alt="" width="60">
        </div>
        <div class="sidebar-brand-text">Nexttech</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-house-damage"></i>
            <span>Home</span>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Quản lý
    </div>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-users"></i>
            <span>Quản lý thành viên</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="">Danh sách quản trị viên</a>
                <a class="collapse-item" href="">Danh sách người dùng</a>
                <a class="collapse-item" href="">Tài khoản bị khóa</a>
                <a class="collapse-item" href="" style="background-color: #000;">
                    <i class="fas fa-fw fa-plus" style="color: #ffffff;"></i>
                    <span style="color: #ffffff;">Thêm mới</span>
                </a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-folder"></i>
            <span>Quản lý danh mục</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('categories.listCategory') }}">Danh sách danh mục</a>
                <a class="collapse-item" href="{{ route('categories.addCategory') }}" style="background-color: #000;">
                    <i class="fas fa-fw fa-plus" style="color: #ffffff;"></i>
                    <span style="color: #ffffff;">Thêm mới</span>
                </a>
            </div>
        </div>
    </li>

    <!-- Sản phẩm -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
            aria-expanded="true" aria-controls="collapseFour">
            <i class="fas fa-fw fa-list"></i>
            <span>Quản lý sản phẩm</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('products.listProduct') }}">Danh sách sản phẩm</a>
                <a class="collapse-item" href="{{ route('products.addProduct') }}" style="background-color: #000;">
                    <i class="fas fa-fw fa-plus" style="color: #ffffff;"></i>
                    <span style="color: #ffffff;">Thêm mới</span>
                </a>
            </div>
        </div>
    </li>

    

    <!-- Biến thể -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEight"
            aria-expanded="true" aria-controls="collapseEight">
            <i class="fas fa-fw fa-list"></i>
            <span>Quản lý biến thể</span>
        </a>
        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('variants.listVariant') }}">Danh sách biến thể SP</a>
                <a class="collapse-item" href="{{ route('variants.addVariant') }}" style="background-color: #000;">
                    <i class="fas fa-fw fa-plus" style="color: #ffffff;"></i>
                    <span style="color: #ffffff;">Thêm mới</span>
                </a>
            </div>
        </div>
    </li>

    <!-- Ảnh sản phẩm -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNine"
            aria-expanded="true" aria-controls="collapseNine">
            <i class="fas fa-fw fa-list"></i>
            <span>Quản lý ảnh</span>
        </a>
        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="">Danh sách ảnh SP</a>
                <a class="collapse-item" href="" style="background-color: #000;">
                    <i class="fas fa-fw fa-plus" style="color: #ffffff;"></i>
                    <span style="color: #ffffff;">Thêm mới</span>
                </a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
            aria-expanded="true" aria-controls="collapseFive">
            <i class="fas fa-fw fa-cart-arrow-down"></i>
            <span>Quản lý đơn hàng</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="">Danh sách đơn hàng</a>
                <a class="collapse-item" href="">Kiểm duyệt đơn hàng <sup></sup></a>
                <a class="collapse-item" href="">Danh sách đã giao</a>
                <a class="collapse-item" href="">Danh sách đã hủy</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-comment"></i>
            <span>Quản lý bình luận</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix"
            aria-expanded="true" aria-controls="collapseSix">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Thống kê</span>
        </a>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="">Biểu đồ</a>
                <a class="collapse-item" href="">Danh sách</a>
            </div>
        </div>
    </li>
    <li class="nav-item  mb-3">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSevent"
            aria-expanded="true" aria-controls="collapseSevent">
            <i class="fas fa-fw fa-bars"></i>
            <span>Chức năng khác</span>
        </a>
        <div id="collapseSevent" class="collapse" aria-labelledby="headingSevent" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="">Quản lý tin tức</a>
                <a class="collapse-item" href="">Quản lý banner</a>
                <a class="collapse-item" href="">Quản lý liên hệ</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>