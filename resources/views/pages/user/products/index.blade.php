<!DOCTYPE html>
<html>
<head>
    <!-------------------------------- Begin: Meta ----------------------------------->
    @include('layouts.user.meta')
    @yield('metadata')
    <!-------------------------------- End: Meta ----------------------------------->

    <!-------------------------------- Begin: stylesheet ----------------------------------->
    @include('layouts.user.styles')
    @yield('styles')
    <!-------------------------------- End: stylesheet ----------------------------------->

</head>
<body>
@include('layouts.user.header')
@include('layouts.user.topNavigation')
<hr style="margin-bottom: 0;"/>
<div id="Content">
    <div id="LeftBanner">
            <img src="{!! \URLHelper::asset('libs/userlte/banner/120x600.jpg', 'user') !!}" alt="">
        </div>

        <div id="MainContent">
            <section>
                <div class="banner970x250" >
    <img src="{!! \URLHelper::asset('libs/userlte/banner/970x250.jpg', 'user') !!}" alt="">

</div>

<div class="list-products">
    <div class="search-result" style="height: 65px; border-bottom: 1px solid #ccc;">
        <div class="pull-left" style="margin-left: 15px;">
            <h3 style="display: inline-block; margin-right: 10px;">Mannequin</h3>
            <span style="padding-left: 10px; border-left: 1px solid #ccc; color: #ccc;">Tìm thấy 48 sản phẩm</span>
        </div>

        <div class="pull-right" style="margin-top: 20px;">
            <div style="display: inline-block;">@include('pages.user.products.tSort')</div>
            <div style="display: inline-block;">@include('pages.user.products.tPagination')</div>
        </div>
    </div>

    <div class="list-product-grid">
        <div class="home-content-block">
            <div class="home-content-grid">
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">

                    <div class="show-info">
                        <a href="{!! route('detail') !!}"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">

                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
                <div class="home-content-detail">
                    <img src="{!! \URLHelper::asset('libs/userlte/banner/150x200.jpg', 'user') !!}" alt="">
                    <div class="show-info">
                        <a href="#/products/detail/1"><h5>Mannequin Nam Trắng</h5></a>
                        <p>Giá từ 1.000.000 VND</p>
                    </div>
                    <div class="more-info">
                        <h6>Xuất xứ: China</h6>
                        <h6>Chất liệu: Nhựa cao cấp</h6>
                        <h6>Màu sắc: Xanh, Đỏ</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin: 50px 0 30px 0;">
        <div ng-include="'app/templates/elements/bPagination.html'"></div>
    </div>

    <div class="banner970x90">
        <img src="{!! \URLHelper::asset('libs/userlte/banner/970x90.png', 'user') !!}" alt="">

    </div>
</div>
            </section>
        </div>

        <div id="RightBanner">
            <img src="{!! \URLHelper::asset('libs/userlte/banner/120x600.jpg', 'user') !!}" alt="">

    </div>
</div>
@include('layouts.user.footer')

<!-------------------------------- Begin: Script ----------------------------------->
@include('layouts.user.scripts')
@yield('scripts')
<!-------------------------------- End: Script ----------------------------------->
</body>
</html>