<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler"> </div>
            </li>
            <li class="nav-item start">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start">
                        <a href="{{route('admin.home')}}" class="nav-link ">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start {{ setActive('*/register*', 'active open') }} {{ isActive('admin.user.index', 'active open') }} {{ setActive('*/user/edit*', 'active open') }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-users"></i>
                    <span class="title">Admins</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{ isActive('admin.user.index', 'active open') }}">
                        <a href="{{route('admin.user.index')}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">List</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    @if(Auth::user()->level == 1)
                    <li class="nav-item start {{ setActive('*/register*', 'active open') }}">
                        <a href="{{route('admin.register')}}" class="nav-link ">
                            <i class="fa fa-file-text-o"></i>
                            <span class="title">Create</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </li>
            <li class="nav-item start {{ setActive('*/configs*', 'active open') }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-cog"></i>
                    <span class="title">Configs</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{ setActive('*/configs/header*', 'active open') }}">
                        <a href="{{route('admin.configs.show_type',['type'=>'header'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Header</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/configs/footer*', 'active open') }}">
                        <a href="{{route('admin.configs.show_type',['type'=>'footer'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Footer</span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/configs/lienhe*', 'active open') }}">
                        <a href="{{route('admin.configs.show_type',['type'=>'lienhe'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Liên hệ</span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/configs/seo*', 'active open') }}">
                        <a href="{{route('admin.configs.show_type',['type'=>'seo'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">SEO</span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/configs/fanpage*', 'active open') }}">
                        <a href="{{route('admin.configs.show_type',['type'=>'fanpage'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Iframe Fanpage</span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/configs/fb_social*', 'active open') }}">
                        <a href="{{route('admin.configs.show_type',['type'=>'fb_social'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Facebook Social</span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/configs/optimize*', 'active open') }}">
                        <a href="{{route('admin.configs.show_type',['type'=>'optimize'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Optimize</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start {{ setActive('*/images*', 'active open') }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-file-image-o"></i>
                    <span class="title">Images</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{ setActive('*/images/banner_sidebar_1*', 'active open') }}">
                        <a href="{{route('admin.images.index',['type'=>'banner_sidebar_1'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Banner Sidebar 1</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/images/banner_sidebar_2*', 'active open') }}">
                        <a href="{{route('admin.images.index',['type'=>'banner_sidebar_2'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Banner Sidebar 2</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/images/bocongthuong*', 'active open') }}">
                        <a href="{{route('admin.images.index',['type'=>'bocongthuong'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Bộ công thương</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    {{-- <li class="nav-item start {{ setActive('*/images/slider*', 'active open') }}">
                        <a href="{{route('admin.images.index',['type'=>'slider'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Slider</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/images/tinhchat*', 'active open') }}">
                        <a href="{{route('admin.images.index',['type'=>'tinhchat'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Tính chất</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/images/uudiem*', 'active open') }}">
                        <a href="{{route('admin.images.index',['type'=>'uudiem'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Ưu điểm</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/images/tinhnang*', 'active open') }}">
                        <a href="{{route('admin.images.index',['type'=>'tinhnang'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Tính năng</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/images/cauhoi*', 'active open') }}">
                        <a href="{{route('admin.images.index',['type'=>'cauhoi'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Câu hỏi</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/images/thanhtoan*', 'active open') }}">
                        <a href="{{route('admin.images.index',['type'=>'thanhtoan'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Thanh toán</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/images/gioithieu*', 'active open') }}">
                        <a href="{{route('admin.images.index',['type'=>'gioithieu'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Giới thiệu</span>
                            <span class="selected"></span>
                        </a>
                    </li> --}}
                </ul>
            </li>
            <li class="nav-item start {{ setActive('*/posts*', 'active open') }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-question-circle"></i>
                    <span class="title">Bài viết</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{ isActive('admin.cats.index', 'active open') }}">
                        <a href="{{route('admin.cats.index')}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Danh mục bài viết</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ isActive('admin.faq.index', 'active open') }}">
                        <a href="{{route('admin.posts.index')}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Tất cả bài viết</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/faq/create*', 'active open') }}">
                        <a href="{{route('admin.posts.create')}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Thêm bài viết</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- <li class="nav-item start {{ setActive('*/product*', 'active open') }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-desktop"></i>
                    <span class="title">Product</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{ isActive('admin.product.index', 'active open') }}">
                        <a href="{{route('admin.product.index')}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Danh sách</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/product/create*', 'active open') }}">
                        <a href="{{route('admin.product.create')}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Thêm mới</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
            </li> --}}
            <li class="nav-item start {{ setActive('*/newletter*', 'active open') }}">
                <a href="{{route('admin.newletter.index')}}" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Liên hệ</span>
                </a>
            </li>
            {{-- <li class="nav-item start {{ setActive('*/faq*', 'active open') }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-question-circle"></i>
                    <span class="title">FAQs</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{ isActive('admin.faq.index', 'active open') }}">
                        <a href="{{route('admin.faq.index')}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Danh sách</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/faq/create*', 'active open') }}">
                        <a href="{{route('admin.faq.create')}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Thêm mới</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </div>
</div>