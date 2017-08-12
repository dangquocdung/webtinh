@include('guest.layout.main')

@section('title')
  <title>Trang chủ</title>
@endsection

@section('contents')

  <div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 portlet-layout layout-left">
            <div class="row layout-row-first">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-2">
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_NaI9FaJJnSap_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_NaI9FaJJnSap">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <style>
                                                    .tab-noi-bat {
                                                        padding: 0 10px;
                                                        display: inline-block;
                                                        cursor: pointer;
                                                    }

                                                    .tab-noi-bat:hover {
                                                        border-bottom: 2px solid #428bca;
                                                    }

                                                    .tab-noi-bat-active {
                                                        border-bottom: 2px solid #428bca;
                                                    }
                                                </style>
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-content dng-portlet-content-no-header">
                                                        <div class="tin-noi-bat">
                                                            <div class="row">
                                                                <div class="col-md-7 col-sm-7 col-xs-12 pad-right-10 pad-right-0-mb" id="tinNoiBatChinh">
                                                                    <div class="hot-news">
                                                                        <div class="dng-portlet-header hidden-lg hidden-md hidden-sm" style="margin-bottom:10px;">
                                                                            <ul class="dng-portlet-header-tab">
                                                                                <li onclick="displayInfo(1)" id="menu3" class="tabselected">
                                                                                    <h4 class="dng-portlet-header-title">Tin nổi bật</h4>
                                                                                </li>
                                                                                <li onclick="displayInfo(2)" id="menu4" class="tabnormal">
                                                                                    <h4 class="dng-portlet-header-title">Tin mới nhất</h4>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <a href="http://danang.gov.vn/web/guest/chi-tiet?id=27757&amp;_c=3" class="hot-news-thumb-nail ">
                                                                            <img src="./images/170807-hanquoc_1502160173883.jpg">
                                                                        </a>
                                                                        <div class="hot-news-desc" style="display: block;">
                                                                            <div class="hot-news-block" style="padding-top: 3px; margin-bottom: 0px;">
                                                                                <img src="./images/170807-hanquoc_1502160173883.jpg" style="display:none;">
                                                                                <a href="http://danang.gov.vn/web/guest/chi-tiet?id=27757&amp;_c=3" class="news-title ">Tổng thống Hàn Quốc sẽ tham dự Tuần lễ cấp cao APEC 2017 tại Đà Nẵng
											                                                                                                     </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 col-sm-5 col-xs-12 pad-left-0 pad-left-15-mb">
                                                                    <div class="news">
                                                                        <div class="dng-portlet-header hidden-xs" style="overflow: hidden;">
                                                                            <ul class="dng-portlet-header-tab">
                                                                                <li onclick="displayInfo(1)" id="menu1" class="tabselected">
                                                                                    <h4 class="dng-portlet-header-title">Tin nổi bật</h4>
                                                                                </li>
                                                                                <li onclick="displayInfo(2)" id="menu2" class="tabnormal">
                                                                                    <h4 class="dng-portlet-header-title">Tin mới nhất</h4>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div id="Tr1" class="cssTrmenu">
                                                                            <div id="divNew1" class="union_image_thumb list-news-tab">
                                                                                <ul>
                                                                                    <li class="firstflag">
                                                                                        <div class="hot-news-block">
                                                                                            <img src="./images/170810-kushiro_1502358906361.JPG" style="display:none;">
                                                                                            <a href="http://danang.gov.vn/web/guest/chi-tiet?id=27797&amp;_c=3" class="news-title ">Nhật Bản - đối tác trọng điểm để thu hút đầu tư
											                                                                                                                 </a>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="">
                                                                                        <div class="hot-news-block">
                                                                                            <img src="./images/170809-lhsk_1502337208623.jpg" style="display:none;">
                                                                                            <a href="http://danang.gov.vn/web/guest/chi-tiet?id=27790&amp;_c=3" class="news-title ">Tạo dấu ấn Đà Nẵng thông qua Liên hoan nghệ thuật biểu diễn sân khấu thế giới
											                                                                                                                 </a>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="">
                                                                                        <div class="hot-news-block">
                                                                                            <img src="./images/170808-sekong_1502179052960.jpg" style="display:none;">
                                                                                            <a href="http://danang.gov.vn/web/guest/chi-tiet?id=27760&amp;_c=3" class="news-title ">Bí thư Thành ủy Nguyễn Xuân Anh tiếp đoàn lãnh đạo cấp cao tỉnh Sekong (Lào)
											                                                                                                                 </a>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="active">
                                                                                        <div class="hot-news-block">
                                                                                            <img src="./images/170807-hanquoc_1502160173883.jpg" style="display:none;">
                                                                                            <a href="http://danang.gov.vn/web/guest/chi-tiet?id=27757&amp;_c=3" class="news-title ">Tổng thống Hàn Quốc sẽ tham dự Tuần lễ cấp cao APEC 2017 tại Đà Nẵng
											                                                                                                                 </a>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="">
                                                                                        <div class="hot-news-block">
                                                                                            <img src="./images/athotiepdan_1502071898819.JPG" style="display:none;">
                                                                                            <a href="http://danang.gov.vn/web/guest/chi-tiet?id=27744&amp;_c=3" class="news-title ">Hòa mình trong dòng chảy phát triển của thành phố
											                                                                                                                 </a>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div id="Tr2" class="cssTrmenu" style="display: none;">
                                                                            <div id="divNew2" class="union_image_thumb list-news-tab">
                                                                                <ul>
                                                                                    <li>
                                                                                        <div class="hot-news-block">
                                                                                            <img src="./images/bcdnguoivietnam_1502378959484.JPG" style="display:none;">
                                                                                            <a href="http://danang.gov.vn/web/guest/chi-tiet?id=27798&amp;_c=3" class="news-title ">Đà Nẵng tái thành lập Ban Chỉ đạo thực hiện Cuộc vận động “Người Việt Nam ưu tiên dùng hàng Việt Nam”
											                                                                                                                 </a>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="hot-news-block">
                                                                                            <img src="./images/tthc_1502353034080.jpg" style="display:none;">
                                                                                            <a href="http://danang.gov.vn/web/guest/chi-tiet?id=27795&amp;_c=3" class="news-title ">Gấp rút hoàn thành mọi công tác chuẩn bị cho Tuần lễ Cấp cao APEC 2017
											                                                                                                                 </a>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="hot-news-block">
                                                                                            <img src="./images/170809-chung-cu_1502300746105.JPG" style="display:none;">
                                                                                            <a href="http://danang.gov.vn/web/guest/chi-tiet?id=27782&amp;_c=3" class="news-title ">Kiểm tra thực hiện Quy chế dân chủ cơ sở tại Công ty Quản lý nhà chung cư
											                                                                                                                 </a>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="hot-news-block">
                                                                                            <img src="./images/uyban_1502272927103.JPG" style="display:none;">
                                                                                            <a href="http://danang.gov.vn/web/guest/chi-tiet?id=27779&amp;_c=2" class="news-title ">Chọn những vấn đề nhân dân quan tâm, bức xúc để xây dựng kế hoạch giám sát, phản biện xã hội
											                                                                                                                 </a>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="hot-news-block">
                                                                                            <img src="./images/170809-thuong-hieu-ks_1502293399859.JPG" style="display:none;">
                                                                                            <a href="http://danang.gov.vn/web/guest/chi-tiet?id=27781&amp;_c=3" class="news-title ">Đến cuối năm 2017, Đà Nẵng sẽ có hơn 16.800 phòng khách sạn 3-5 sao
											                                                                                                                 </a>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-3">
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_8OnqjBD2Gnbx_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_8OnqjBD2Gnbx">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <link rel="stylesheet" href="./images/magicscroll.css" media="screen">
                                                <style>
                                                    .app-figure {
                                                        -webkit-box-sizing: border-box;
                                                        -moz-box-sizing: border-box;
                                                        box-sizing: border-box;
                                                        width: 100% !important;
                                                        margin: 10px auto;
                                                        padding: 0px;
                                                        position: relative;
                                                        text-align: center;
                                                        padding-top: 12px;
                                                        border-bottom: 1px solid #e1e8ee;
                                                        margin-bottom: 0px;
                                                        border-top: 1px solid #e1e8ee;
                                                    }

                                                    .dng-slide {
                                                        border: 1px solid #e1e8ee;
                                                        padding: 13px 8px;
                                                        position: relative;
                                                    }

                                                    .mcs-button.mcs-horizontal.mcs-button-arrow {
                                                        background-color: #fff;
                                                        -webkit-box-shadow: 1px 1px 3px 0px rgba(0, 0, 0, 0.75);
                                                        -moz-box-shadow: 1px 1px 3px 0px rgba(0, 0, 0, 0.75);
                                                        box-shadow: 1px 1px 3px 0px rgba(0, 0, 0, 0.75);
                                                        margin-top: 41px;
                                                        width: 12px !important;
                                                        height: 41px !important;
                                                        display: none !important;
                                                    }

                                                    .dng-slide-news {
                                                        width: 100%;
                                                        position: relative;
                                                        margin-bottom: 0px;
                                                        height: 161px !important;
                                                    }

                                                    .dng-news-item {
                                                        white-space: normal;
                                                    }

                                                    .dng-slide-news .dng-news-item {
                                                        padding: 0px 5px;
                                                        text-align: left;
                                                    }

                                                    .dng-news-item .dng-news-image {
                                                        width: 100%;
                                                        display: block;
                                                    }

                                                    .dng-slide-news .dng-news-item:hover {}

                                                    .mcs-item {
                                                        width: 25% !important;
                                                        display: inline-block;
                                                    }

                                                    .mcs-wrapper {
                                                        overflow: hidden;
                                                        width: 98%;
                                                        left: 8px !important;
                                                    }

                                                    .MagicScroll > div:not(.dng-news-item) > a,
                                                    .MagicScroll > span > a {
                                                        display: none !important;
                                                    }

                                                    @media (min-width: 768px) {
                                                        .MagicScroll-horizontal .mcs-item {
                                                            height: 162px !important;
                                                        }
                                                    }

                                                    .MagicScroll .mcs-item img {
                                                        height: 105px;
                                                    }

                                                    .app-figure.dng-article {
                                                        margin-top: 0;
                                                        border: 1px solid #e1e8ee;
                                                        padding: 10px 0px 7px 0px;
                                                    }

                                                    .dng-slide-news:HOVER .mcs-button.mcs-horizontal.mcs-button-arrow {
                                                        display: block !important;
                                                    }
                                                </style>
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-content dng-portlet-content-no-header">
                                                        <div class="app-figure dng-article">
                                                            <div class="MagicScroll dng-slide-news dng-slide-news-article MagicScroll-arrows-outside MagicScroll-horizontal" data-mode="scroll" id="MagicScroll-1379935694287" style="visibility: visible; display: inline-block; overflow: visible;"><span style="display: block; z-index: 2147483647; padding: 3px; position: absolute; line-height: 2em; font-family: sans-serif; font-size: 11px; visibility: visible; color: red; opacity: 1; background: transparent; text-align: center; width: auto; height: auto; top: 0px; right: 0px;"><a href="http://www.magictoolbox.com/magicscroll/" onclick="this.blur();" target="_blank" style="color: inherit; text-decoration: none;">Magic Scroll™ trial version</a></span>
                                                                <div class="mcs-loader" style="visibility: hidden; opacity: 0; display: none;">
                                                                    <div class="mcs-loader-circles">
                                                                        <div class="mcs-loader-circle mcs-loader-circle_01"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_02"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_03"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_04"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_05"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_06"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_07"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_08"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="mcs-wrapper" style="display: inline-block; left: 0px; right: 0px;">
                                                                    <div class="mcs-items-container" style="white-space: nowrap; transform: translate3d(-840.234px, 0px, 0px); transition: transform 0ms;">
                                                                        <div class="mcs-item" data-item="5" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27744&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_athotiepdan_1502071898819.JPG">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27744&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Hòa mình trong dòng chảy phát triển của thành phố
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27744&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Hòa mình trong dòng chảy phát triển của thành phố
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="6" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27732&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_giaoban_1501901882657.jpg">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27732&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Kịp thời phản ánh tâm tư, nguyện vọng của nhân dân
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27732&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Kịp thời phản ánh tâm tư, nguyện vọng của nhân dân
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="7" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27667&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_170802-wb_1501688135930.jpg">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27667&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Dự án Di dời ga đường sắt: động lực phát triển của khu đô thị tây bắc
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27667&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Dự án Di dời ga đường sắt: động lực phát triển của khu đô thị tây bắc
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="8" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27639&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_cong_1501554382918.JPG">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27639&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Nâng cao chất lượng, hiệu quả hoạt động các Trang thông tin điện tử
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27639&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Nâng cao chất lượng, hiệu quả hoạt động các Trang thông tin điện tử
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="9" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27635&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_quangda1_1501488372482.JPG">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27635&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Hội thảo "Vai trò Đặc Khu ủy Quảng Đà đối với phong trào cách mạng Quảng Đà"
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27635&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Hội thảo "Vai trò Đặc Khu ủy Quảng Đà đối với phong trào cách mạng Quảng Đà"
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="0" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27797&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_170810-kushiro_1502358906361.JPG">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27797&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Nhật Bản - đối tác trọng điểm để thu hút đầu tư
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27797&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Nhật Bản - đối tác trọng điểm để thu hút đầu tư
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="1" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27779&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_uyban_1502272927103.JPG">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27779&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Chọn những vấn đề nhân dân quan tâm, bức xúc để xây dựng kế hoạch giám sát, phản biện xã hội
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27779&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Chọn những vấn đề nhân dân quan tâm, bức xúc để xây dựng kế hoạch giám sát, phản biện xã hội
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="2" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27762&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_nguhanhson2_1502180276505.JPG">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27762&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Phó Chủ tịch nước Đặng Thị Ngọc Thịnh thăm, tặng quà gia đình chính sách và trẻ em có hoàn cảnh khó khăn
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27762&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Phó Chủ tịch nước Đặng Thị Ngọc Thịnh thăm, tặng quà gia đình chính sách và trẻ em có hoàn cảnh khó khăn
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="3" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27760&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_170808-sekong_1502179052960.jpg">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27760&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Bí thư Thành ủy Nguyễn Xuân Anh tiếp đoàn lãnh đạo cấp cao tỉnh Sekong (Lào)
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27760&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Bí thư Thành ủy Nguyễn Xuân Anh tiếp đoàn lãnh đạo cấp cao tỉnh Sekong (Lào)
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="4" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27745&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/noimage.png">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27745&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Hoạt động của lãnh đạo thành phố trong tuần 31 (từ ngày 31/7 đến ngày 04/8/2017)
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27745&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Hoạt động của lãnh đạo thành phố trong tuần 31 (từ ngày 31/7 đến ngày 04/8/2017)
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="5" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27744&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_athotiepdan_1502071898819.JPG">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27744&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Hòa mình trong dòng chảy phát triển của thành phố
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27744&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Hòa mình trong dòng chảy phát triển của thành phố
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="6" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27732&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_giaoban_1501901882657.jpg">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27732&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Kịp thời phản ánh tâm tư, nguyện vọng của nhân dân
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27732&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Kịp thời phản ánh tâm tư, nguyện vọng của nhân dân
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="7" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27667&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_170802-wb_1501688135930.jpg">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27667&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Dự án Di dời ga đường sắt: động lực phát triển của khu đô thị tây bắc
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27667&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Dự án Di dời ga đường sắt: động lực phát triển của khu đô thị tây bắc
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="8" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27639&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_cong_1501554382918.JPG">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27639&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Nâng cao chất lượng, hiệu quả hoạt động các Trang thông tin điện tử
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27639&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Nâng cao chất lượng, hiệu quả hoạt động các Trang thông tin điện tử
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="9" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27635&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_quangda1_1501488372482.JPG">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27635&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Hội thảo "Vai trò Đặc Khu ủy Quảng Đà đối với phong trào cách mạng Quảng Đà"
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27635&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Hội thảo "Vai trò Đặc Khu ủy Quảng Đà đối với phong trào cách mạng Quảng Đà"
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="0" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27797&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_170810-kushiro_1502358906361.JPG">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27797&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Nhật Bản - đối tác trọng điểm để thu hút đầu tư
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27797&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Nhật Bản - đối tác trọng điểm để thu hút đầu tư
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="1" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27779&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_uyban_1502272927103.JPG">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27779&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Chọn những vấn đề nhân dân quan tâm, bức xúc để xây dựng kế hoạch giám sát, phản biện xã hội
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27779&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Chọn những vấn đề nhân dân quan tâm, bức xúc để xây dựng kế hoạch giám sát, phản biện xã hội
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="2" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27762&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_nguhanhson2_1502180276505.JPG">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27762&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Phó Chủ tịch nước Đặng Thị Ngọc Thịnh thăm, tặng quà gia đình chính sách và trẻ em có hoàn cảnh khó khăn
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27762&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Phó Chủ tịch nước Đặng Thị Ngọc Thịnh thăm, tặng quà gia đình chính sách và trẻ em có hoàn cảnh khó khăn
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="3" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27760&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/m_170808-sekong_1502179052960.jpg">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27760&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Bí thư Thành ủy Nguyễn Xuân Anh tiếp đoàn lãnh đạo cấp cao tỉnh Sekong (Lào)
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27760&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Bí thư Thành ủy Nguyễn Xuân Anh tiếp đoàn lãnh đạo cấp cao tỉnh Sekong (Lào)
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="4" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27745&amp;_c=2">
                                                                                    <img class="dng-news-image" src="./images/noimage.png">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27745&amp;_c=2" class="news-title hidden-xs ">
	    					                                                                                                        Hoạt động của lãnh đạo thành phố trong tuần 31 (từ ngày 31/7 đến ngày 04/8/2017)
	    				                                                                                                             </a>
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27745&amp;_c=2" class="news-title hidden-lg hidden-sm hidden-md ">
	    					                                                                                                        Hoạt động của lãnh đạo thành phố trong tuần 31 (từ ngày 31/7 đến ngày 04/8/2017)
	    				                                                                                                             </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="mcs-button mcs-horizontal mcs-button-arrow mcs-button-arrow-prev" style="display: inline-block;"></button>
                                                                <button type="button" class="mcs-button mcs-horizontal mcs-button-arrow mcs-button-arrow-next" style="display: inline-block;"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_V1ggFi7447Gw_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_V1ggFi7447Gw">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-content dng-portlet-content-no-header">
                                                        <div class="banner">
                                                            <ul class="row banner-list">
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://investdanang.gov.vn/vi/web/guest/tham-gia-su-kien?p_p_id=sukien_WAR_SuKienportlet&amp;p_p_col_id=_118_INSTANCE_TertIKh05fWW__column-3&amp;p_p_col_count=1&amp;_sukien_WAR_SuKienportlet_id=8206&amp;_sukien_WAR_SuKienportlet_type=detail" target="_blank" onclick="clickBanner(93)">
                                                                        <img src="./images/dienDanDauTu_1501663926644.jpg">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_vFUiW6RCgUW7_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_vFUiW6RCgUW7">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-header">
                                                        <a href="http://danang.gov.vn/web/guest/chinh-quyen/danh-muc?id=3" class="dng-portlet-danh-muc-title">
                                                            <i class=" no-pd-top dng-portlet-header-icon view11">
					                                                                                         <img style="padding-bottom: 6px;" onerror="this.style.display='none'" alt="" src="./images/vbbh_1481868543510.png">
				                                                                                             </i>
                                                            <h4 class="dng-portlet-header-title no-pd-top">Tin tức sự kiện</h4>
                                                        </a>
                                                        <span class="underline"></span>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div class="thong-tin-chi-dao-v2">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="main-news" style="width: 60%; padding-bottom: 0px;">
                                                                        <div style="margin-bottom: 5px;">
                                                                            <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27798&amp;_c=3" class="news-title main-news-title bold">
								                                                                                                      Đà Nẵng tái thành lập Ban Chỉ đạo thực hiện Cuộc vận động “Người Việt Nam ưu tiên dùng hàng Việt Nam”
							                                                                                                             </a>
                                                                        </div>
                                                                        <div class="main-news-thumb-nail" style="margin-left: 0px; padding-left: 0px; margin-right: 10px;">
                                                                            <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27798&amp;_c=3">
                                                                                <img src="./images/m_bcdnguoivietnam_1502378959484.JPG">
                                                                            </a>
                                                                        </div>
                                                                        <div class="main-news-content" style="margin-left: 0px; padding-left: 0px;">
                                                                            <p style="font: 400 13px arial; line-height: 18px;"></p>
                                                                            <p style="text-align: justify;">Chiều ngày 9-8, Ban Thường trực Uỷ ban Mặt trận Tổ quốc Việt Nam thành phố tổ chức công bố Quyết định của Thành ủy Đà Nẵng về tái thành lập Ban Chỉ đạo thực hiện Cuộc vận động “Người Việt Nam ưu tiên dùng hàng Việt Nam” thành phố.</p>
                                                                            <p></p>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                    </div>
                                                                    <div class="news" style="width: 40%;">
                                                                        <ul class="list-news">
                                                                            <li class="news-item default-news dng-bullet-arrow" style="padding-left: 12px;"><a class="dng-icon-list"><i></i></a>
                                                                                <div class="default-news-content">
                                                                                    <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27797&amp;_c=3" class="news-title ">
										                                                                                                            Nhật Bản - đối tác trọng điểm để thu hút đầu tư
									                                                                                                                     </a>
                                                                                </div>
                                                                            </li>
                                                                            <li class="news-item default-news dng-bullet-arrow" style="padding-left: 12px;"><a class="dng-icon-list"><i></i></a>
                                                                                <div class="default-news-content">
                                                                                    <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27795&amp;_c=3" class="news-title ">
										                                                                                                            Gấp rút hoàn thành mọi công tác chuẩn bị cho Tuần lễ Cấp cao APEC 2017
									                                                                                                                     </a>
                                                                                </div>
                                                                            </li>
                                                                            <li class="news-item default-news dng-bullet-arrow" style="padding-left: 12px;"><a class="dng-icon-list"><i></i></a>
                                                                                <div class="default-news-content">
                                                                                    <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27790&amp;_c=3" class="news-title ">
										                                                                                                            Tạo dấu ấn Đà Nẵng thông qua Liên hoan nghệ thuật biểu diễn sân khấu thế giới
									                                                                                                                     </a>
                                                                                </div>
                                                                            </li>
                                                                            <li class="news-item default-news dng-bullet-arrow" style="padding-left: 12px;"><a class="dng-icon-list"><i></i></a>
                                                                                <div class="default-news-content">
                                                                                    <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27782&amp;_c=3" class="news-title ">
										                                                                                                            Kiểm tra thực hiện Quy chế dân chủ cơ sở tại Công ty Quản lý nhà chung cư
									                                                                                                                     </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-4">
                            <div class="portlet-boundary portlet-boundary_motbaiviet_WAR_danangportlet_  portlet-static portlet-static-end decorate mot-bai-viet-portlet " id="p_p_id_motbaiviet_WAR_danangportlet_INSTANCE_3rk2I8LvKlSt_">
                                <section class="portlet" id="portlet_motbaiviet_WAR_danangportlet_INSTANCE_3rk2I8LvKlSt">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <style>
                                                    .mot-bai-viet .main-news {
                                                        border: 1px solid #e1e8ee;
                                                        padding: 10px;
                                                    }

                                                    .mot-bai-viet .main-news-thumbnail {
                                                        width: 50%;
                                                        float: right;
                                                        padding-left: 10px;
                                                    }

                                                    .mot-bai-viet .main-news-thumbnail img {
                                                        width: 100%;
                                                    }

                                                    .mot-bai-viet .main-news-information .main-news-content p {
                                                        margin-bottom: 0px;
                                                    }

                                                    .mot-bai-viet .main-news-thumbnail.main-news-thumbnail-left {
                                                        float: left;
                                                        padding-left: 0px;
                                                        padding-right: 10px;
                                                    }
                                                </style>
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-content dng-portlet-content-no-header">
                                                        <div class="mot-bai-viet view">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="main-news">
                                                                        <div class="main-news-information">
                                                                            <div class="main-news-content" style="margin-left: 0px; padding-left: 0px;">
                                                                                <div class="chi-tiet">
                                                                                    <h4>Theo dòng sự kiện</h4>
                                                                                    <div class="theo-dong">
                                                                                        <div>
                                                                                            <a href="http://danang.gov.vn/web/guest/chinh-quyen/danh-muc?id=100000049"><img alt="" src="./images/50-nam-asean.png">
                                                                                                <br> 50 năm ASEAN</a>
                                                                                        </div>
                                                                                        <div>
                                                                                            <a href="http://danang.gov.vn/web/guest/chinh-quyen/danh-muc?id=100000050"><img alt="" src="./images/DienDanDauTuDN.png">
                                                                                                <br> Diễn đàn đầu tư Đà Nẵng 2017</a>
                                                                                        </div>
                                                                                        <div>
                                                                                            <a href="http://danang.gov.vn/web/guest/chinh-quyen/danh-muc?id=100000046"><img alt="" src="./images/LeHoiVietNhat.png">
                                                                                                <br> Lễ hội giao lưu văn hóa Việt - Nhật</a>
                                                                                        </div>
                                                                                        <div>
                                                                                            <a href="http://danang.gov.vn/web/guest/chinh-quyen/danh-muc?id=100000047"><img alt="" src="./images/70NamThuongBinhLietSy.jpg">
                                                                                                <br> Kỷ niệm 70 năm ngày thương binh liệt sỹ</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-5">
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_23tY7NzKJoVj_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_23tY7NzKJoVj">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-header">
                                                        <a href="http://danang.gov.vn/web/guest/chinh-quyen/danh-muc?id=9" class="dng-portlet-danh-muc-title">
                                                            <i class="dng-portlet-header-icon">
						<img style="padding-bottom: 6px;" onerror="this.style.display='none'" alt="" src="./images/vbbh_1481868452929.png">
					</i>
                                                            <h4 class="dng-portlet-header-title">Thông tin chỉ đạo điều hành</h4>
                                                        </a>
                                                        <span class="underline"></span>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div class="website-news">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <ul class=" row list-news">
                                                                        <li class="col-md-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27792&amp;_c=9" class="news-title ">
										4,4 tỷ đồng cải tạo cửa xả Mỹ An thuộc Dự án phát triển bền vững TP. Đà Nẵng
									</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27796&amp;_c=9" class="news-title ">
										Hạn chế tốc độ 40km/h đối với ô tô tải trên tuyến đường Hoàng Văn Thái
									</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27780&amp;_c=9" class="news-title ">
										Nhiều hoạt động hưởng ứng Tháng hành động vì bình đẳng giới và phòng, chống bạo lực trên cơ sở giới
									</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27759&amp;_c=9" class="news-title ">
										Phê duyệt danh mục 68 dự án thu hút đầu tư giai đoạn 2017 -2020
									</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27761&amp;_c=9" class="news-title ">
										Yêu cầu phản hồi thông tin báo chí đăng tải từ ngày 22/7/2017 đến ngày 28/7/2017
									</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27758&amp;_c=9" class="news-title ">
										Tổ chức nhiều hoạt động nhân kỷ niệm 50 năm thành lập ASEAN
									</a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-6">
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_vdZ3eWy5ZQKi_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_vdZ3eWy5ZQKi">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-content dng-portlet-content-no-header">
                                                        <div class="banner">
                                                            <ul class="row banner-list">
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://apec2017.danang.gov.vn/web/apec" target="_blank" onclick="clickBanner(90)">
                                                                        <img src="./images/BannerAPEC2017_1498612201658.png">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-7">
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_qj9IOdgD1M26_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_qj9IOdgD1M26">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-header">
                                                        <a href="http://danang.gov.vn/web/guest/chinh-quyen/danh-muc?id=10" class="dng-portlet-danh-muc-title">
                                                            <i class=" no-pd-top dng-portlet-header-icon"><i class="dng-icon dng-icon-tin-noi-bat"></i></i>
                                                            <h4 class="dng-portlet-header-title no-pd-top">Văn bản chỉ đạo điều hành</h4>
                                                        </a>
                                                        <span class="underline"></span>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div class="document-news">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <ul class="list-news">
                                                                        <li class="news-item default-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list">
                                                                                <i></i>
                                                                            </a>
                                                                            <div class="default-news-content">
                                                                                <a style="margin-left:10px;width: 150px;" class="dng-document-file hidden-xs" href="http://docs.ttdt.dsp.vn/images/documents/Van%20ban%20dieu%20hanh/CV%205947.doc">
                                                                                    <span class="dng-document-file-icon" style="float: left;">
											<i class="dng-icon-doc"></i>
									</span>
                                                                                    <span class="dng-document-file-name" style="padding-left: 30px;display: block;float: none;margin-left: 0px;">CV 5947.doc</span>
                                                                                </a>
                                                                                <div>
                                                                                    <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27783&amp;_c=10" class="news-title">Công văn 5947/UBND-KT V/v triển khai liên thông văn bản điện tử trên phần mềm Quản lý văn bản điều hành dùng chung</a>
                                                                                </div>
                                                                                <a class="dng-document-file-mb hidden-lg hidden-md hidden-sm" href="http://docs.ttdt.dsp.vn/images/documents/Van%20ban%20dieu%20hanh/CV%205947.doc" target="_blank">
                                                                                    <span class="dng-document-file-name">CV 5947.doc</span>
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="news-item default-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list">
                                                                                <i></i>
                                                                            </a>
                                                                            <div class="default-news-content">
                                                                                <a style="margin-left:10px;width: 150px;" class="dng-document-file hidden-xs" href="http://docs.ttdt.dsp.vn/images/documents/Van%20ban%20dieu%20hanh/5936%20cv.PDF">
                                                                                    <span class="dng-document-file-icon" style="float: left;">
											<i class="fa fa-paperclip"></i>
									</span>
                                                                                    <span class="dng-document-file-name" style="padding-left: 30px;display: block;float: none;margin-left: 0px;">5936 cv.PDF</span>
                                                                                </a>
                                                                                <div>
                                                                                    <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27784&amp;_c=10" class="news-title">Công văn 5936/UBND-KT V/v mua bảo hiểm cháy nổ bắt buộc đối với tài sản và con người của các sở, ngành</a>
                                                                                </div>
                                                                                <a class="dng-document-file-mb hidden-lg hidden-md hidden-sm" href="http://docs.ttdt.dsp.vn/images/documents/Van%20ban%20dieu%20hanh/5936%20cv.PDF" target="_blank">
                                                                                    <span class="dng-document-file-name">5936 cv.PDF</span>
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="news-item default-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list">
                                                                                <i></i>
                                                                            </a>
                                                                            <div class="default-news-content">
                                                                                <a style="margin-left:10px;width: 150px;" class="dng-document-file hidden-xs" href="http://docs.ttdt.dsp.vn/images/documents/Van%20ban%20dieu%20hanh/5996%20cv%20(1).PDF">
                                                                                    <span class="dng-document-file-icon" style="float: left;">
											<i class="fa fa-paperclip"></i>
									</span>
                                                                                    <span class="dng-document-file-name" style="padding-left: 30px;display: block;float: none;margin-left: 0px;">5996 cv (1).PDF</span>
                                                                                </a>
                                                                                <div>
                                                                                    <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27785&amp;_c=10" class="news-title">Công văn 5996 V/v triển khai Thông tư số 69/2017/TT-BTC của Bộ Tài chính</a>
                                                                                </div>
                                                                                <a class="dng-document-file-mb hidden-lg hidden-md hidden-sm" href="http://docs.ttdt.dsp.vn/images/documents/Van%20ban%20dieu%20hanh/5996%20cv%20(1).PDF" target="_blank">
                                                                                    <span class="dng-document-file-name">5996 cv (1).PDF</span>
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="news-item default-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list">
                                                                                <i></i>
                                                                            </a>
                                                                            <div class="default-news-content">
                                                                                <a style="margin-left:10px;width: 150px;" class="dng-document-file hidden-xs" href="http://docs.ttdt.dsp.vn/images/documents/Van%20ban%20dieu%20hanh/2514.pdf">
                                                                                    <span class="dng-document-file-icon" style="float: left;">
											<i class="dng-icon-pdf"></i>
									</span>
                                                                                    <span class="dng-document-file-name" style="padding-left: 30px;display: block;float: none;margin-left: 0px;">2514.pdf</span>
                                                                                </a>
                                                                                <div>
                                                                                    <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27786&amp;_c=10" class="news-title">Công văn 2514/VP-TH V/v thực hiện Quy chế phối hợp số 35/QCPH ngày 01/7/2017</a>
                                                                                </div>
                                                                                <a class="dng-document-file-mb hidden-lg hidden-md hidden-sm" href="http://docs.ttdt.dsp.vn/images/documents/Van%20ban%20dieu%20hanh/2514.pdf" target="_blank">
                                                                                    <span class="dng-document-file-name">2514.pdf</span>
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="news-item default-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list">
                                                                                <i></i>
                                                                            </a>
                                                                            <div class="default-news-content">
                                                                                <a style="margin-left:10px;width: 150px;" class="dng-document-file hidden-xs" href="http://docs.ttdt.dsp.vn/images/documents/Van%20ban%20dieu%20hanh/CT-6.doc">
                                                                                    <span class="dng-document-file-icon" style="float: left;">
											<i class="dng-icon-doc"></i>
									</span>
                                                                                    <span class="dng-document-file-name" style="padding-left: 30px;display: block;float: none;margin-left: 0px;">CT-6.doc</span>
                                                                                </a>
                                                                                <div>
                                                                                    <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27787&amp;_c=10" class="news-title">Chỉ thị 06/CT-UBND Về việc xây dựng Kế hoạch phát triển kinh tế - xã hội và dự toán ngân sách nhà nước năm 2018 thành phố Đà Nẵng</a>
                                                                                </div>
                                                                                <a class="dng-document-file-mb hidden-lg hidden-md hidden-sm" href="http://docs.ttdt.dsp.vn/images/documents/Van%20ban%20dieu%20hanh/CT-6.doc" target="_blank">
                                                                                    <span class="dng-document-file-name">CT-6.doc</span>
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-8">
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_qKsVvMy132El_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_qKsVvMy132El">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-content dng-portlet-content-no-header">
                                                        <div class="banner">
                                                            <ul class="row banner-list">
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://egov.danang.gov.vn/" target="_blank" onclick="clickBanner(10)">
                                                                        <img src="./images/hethongdichvucongtructuyen_1476955571482.png">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 portlet-layout layout-left">
                    <div class="portlet-column portlet-column-first">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-first" id="layout-column_column-9">
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_qeDzCYdjTZz2_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_qeDzCYdjTZz2">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet portlet-rss">
                                                    <div class="dng-portlet-header">
                                                        <i class="dng-portlet-header-icon"><i class="dng-icon dng-icon-tin-tuc-su-kien"></i></i>
                                                        <h4 class="dng-portlet-header-title">Tin sở, ngành</h4>
                                                        <span class="underline"></span>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div class="website-news">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <ul class=" row list-news">
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://vhtt.danang.gov.vn/web/guest/rss/-/asset_publisher/PmIjWHYA4Fmx/content/id/2813594" target="_blank" class="news-title title-line title-line-2 title-line-scroll"> Đua xe đạp vì nạn nhân da cam</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.ldtbxh.danang.gov.vn/web/guest/tonghop-rss/-/asset_publisher/OcghL5t4AXhi/content/id/1308128" target="_blank" class="news-title title-line title-line-2 title-line-scroll"> Bàn giao công trình sửa chữa nhà tình thương cho hộ nghèo</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.ldtbxh.danang.gov.vn/web/guest/tonghop-rss/-/asset_publisher/OcghL5t4AXhi/content/id/1307837" target="_blank" class="news-title title-line title-line-2 title-line-scroll"> Hội nghị sơ kết 3 năm thực hiện Đề án đổi mới công tác cai nghiện ma túy</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.sxd.danang.gov.vn/rss/-/asset_publisher/MYx7tgJ9HNnk/content/id/430011" target="_blank" class="news-title title-line title-line-2 title-line-scroll"> Đà Nẵng: Quy hoạch 25 bãi đỗ xe tại quận Sơn Trà</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.sxd.danang.gov.vn/rss/-/asset_publisher/MYx7tgJ9HNnk/content/id/429311" target="_blank" class="news-title title-line title-line-2 title-line-scroll"> 5 nhiệm vụ khoa học trọng tâm của ngành Xây dựng</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://fad.danang.gov.vn/rss/-/asset_publisher/pxYWH2vEYqb5/content/id/956391" target="_blank" class="news-title title-line title-line-2 title-line-scroll"> Sở Ngoại vụ khởi động tuyển chọn tình nguyện viên APEC 2017</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://sotuphap.danang.gov.vn/web/guest/rss/-/asset_publisher/tJTIe5O1bQBl/content/id/921362" target="_blank" class="news-title title-line title-line-2 title-line-scroll"> Thông báo về việc đăng ký nhu cầu tuyển dụng công chức năm 2017</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://sotuphap.danang.gov.vn/web/guest/rss/-/asset_publisher/tJTIe5O1bQBl/content/id/900250" target="_blank" class="news-title title-line title-line-2 title-line-scroll"> Thông báo kết quả xét tuyển viên chức tại Sở Tư pháp năm 2017</a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 portlet-layout layout-right">
                    <div class="portlet-column portlet-column-last">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-last" id="layout-column_column-10">
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_wFf9Ut8sbZmx_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_wFf9Ut8sbZmx">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet portlet-rss">
                                                    <div class="dng-portlet-header">
                                                        <i class="dng-portlet-header-icon"><i class="dng-icon dng-icon-tin-tuc-su-kien"></i></i>
                                                        <h4 class="dng-portlet-header-title">Tin quận, huyện</h4>
                                                        <span class="underline"></span>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div class="website-news">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <ul class=" row list-news">
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://hoavang.danang.gov.vn/rss/-/asset_publisher/L0FjZYzSFBsU/content/id/304711" target="_blank" class="news-title title-line title-line-2 title-line-scroll"> Hòa Vang: Triển khai công tác đảm bảo an toàn thực phẩm 6 tháng cuối năm</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://thanhkhe.danang.gov.vn/rss/-/asset_publisher/d9JlwPaI6Rq4/content/id/2617915" target="_blank" class="news-title title-line title-line-2 title-line-scroll"> Tuyên dương Lao động giỏi, lao động sáng tạo năm 2017</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://thanhkhe.danang.gov.vn/rss/-/asset_publisher/d9JlwPaI6Rq4/content/id/2617906" target="_blank" class="news-title title-line title-line-2 title-line-scroll"> Tập huấn kiến thức An toàn thực phẩm cho các cơ sở kinh doanh thực phẩm, dịch vụ ăn uống</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.camle.danang.gov.vn/web/guest/rss/-/asset_publisher/UbdzvXVUC25q/content/id/1007374" target="_blank" class="news-title title-line title-line-2 title-line-scroll"> Bàn giao nhà tình nghĩa cho hộ nghèo</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.camle.danang.gov.vn/web/guest/rss/-/asset_publisher/UbdzvXVUC25q/content/id/1006651" target="_blank" class="news-title title-line title-line-2 title-line-scroll"> Quận Cẩm Lệ tăng cường phòng, chống sốt xuất huyết</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://hoavang.danang.gov.vn/rss/-/asset_publisher/L0FjZYzSFBsU/content/id/302141" target="_blank" class="news-title title-line title-line-2 title-line-scroll"> Khánh thành Nghĩa trang Liệt sỹ xã Hòa Khương</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://lienchieu.danang.gov.vn/rss/-/asset_publisher/xlI6M0Y1ubLE/content/id/1059326" target="_blank" class="news-title title-line title-line-2 title-line-scroll"> Kỳ họp thứ V khóa XI (2016 - 2021) HĐND phường Hòa Minh.</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://lienchieu.danang.gov.vn/rss/-/asset_publisher/xlI6M0Y1ubLE/content/id/1058330" target="_blank" class="news-title title-line title-line-2 title-line-scroll"> Khuyến cáo biện pháp PC&amp;CC trong mùa nắng, hè 2017</a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-11">
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_8fMwCn1lYq2t_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_8fMwCn1lYq2t">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <link rel="stylesheet" href="./images/magicscroll.css" media="screen">
                                                <style>
                                                    .app-figure {
                                                        -webkit-box-sizing: border-box;
                                                        -moz-box-sizing: border-box;
                                                        box-sizing: border-box;
                                                        width: 100% !important;
                                                        margin: 5px auto;
                                                        padding: 0px;
                                                        position: relative;
                                                        text-align: center;
                                                        padding-top: 0px;
                                                        border-bottom: 1px solid #e1e8ee;
                                                        margin-bottom: 0px;
                                                        border-top: 1px solid #e1e8ee;
                                                    }

                                                    .dng-slide {
                                                        border: 1px solid #e1e8ee;
                                                        padding: 13px 8px;
                                                        position: relative;
                                                    }

                                                    .mcs-button.mcs-horizontal.mcs-button-arrow {
                                                        background-color: #fff;
                                                        -webkit-box-shadow: 1px 1px 3px 0px rgba(0, 0, 0, 0.75);
                                                        -moz-box-shadow: 1px 1px 3px 0px rgba(0, 0, 0, 0.75);
                                                        box-shadow: 1px 1px 3px 0px rgba(0, 0, 0, 0.75);
                                                        margin-top: 41px;
                                                        width: 27px;
                                                        height: 27px;
                                                    }

                                                    .dng-slide-news {
                                                        width: 100%;
                                                        position: relative;
                                                        margin-bottom: 0px;
                                                        height: 161px !important;
                                                    }

                                                    .dng-news-item {
                                                        white-space: normal;
                                                    }

                                                    .dng-slide-news .dng-news-item {
                                                        padding: 0px 5px;
                                                        text-align: left;
                                                    }

                                                    .dng-news-item .dng-news-image {
                                                        width: 100%;
                                                        display: block;
                                                    }

                                                    .dng-slide-news .dng-news-item:hover {}

                                                    .dng-slide-control {}

                                                    .dng-slide-control-btn {
                                                        position: absolute;
                                                        bottom: 50%;
                                                        padding: 5px 10px;
                                                        background-color: #fff;
                                                        cursor: pointer;
                                                        box-shadow: 1px 1px 1px #e7e7e7;
                                                    }

                                                    .dng-slide-control-next {
                                                        right: 0px;
                                                    }

                                                    .dng-slide-control-prev {
                                                        position: absolute;
                                                        left: 0px;
                                                    }

                                                    .mcs-item {
                                                        width: 25% !important;
                                                        display: inline-block;
                                                    }

                                                    .mcs-wrapper {
                                                        overflow: hidden;
                                                        width: 97%;
                                                        left: 11px !important;
                                                    }

                                                    .MagicScroll > div:not(.dng-news-item) > a,
                                                    .MagicScroll > span > a {
                                                        display: none !important;
                                                    }

                                                    .MagicScroll-horizontal .mcs-item {
                                                        height: 145px;
                                                    }

                                                    .MagicScroll .mcs-item img {
                                                        height: 105px;
                                                    }

                                                    .dng-portlet-video .app-figure {
                                                        border: none;
                                                        padding-bottom: 7px;
                                                    }

                                                    .dng-portlet-video .dng-portlet-header {
                                                        margin-top: 10px;
                                                        margin-left: 15px;
                                                    }
                                                </style>
                                                <!-- module -->
                                                <div class="dng-portlet dng-portlet-video">
                                                    <div class="dng-portlet-header">
                                                        <a href="http://danang.gov.vn/web/guest/video?_c=3" class="dng-portlet-danh-muc-title">
                                                            <i class="dng-portlet-header-icon"><i class="dng-icon dng-icon-video"></i></i>
                                                            <h4 class="dng-portlet-header-title">Video</h4>
                                                        </a>
                                                        <span class="underline"></span>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div class="app-figure">
                                                            <div class="MagicScroll dng-slide-news MagicScroll-arrows-outside MagicScroll-horizontal" data-mode="scroll" id="MagicScroll-251544781136" style="visibility: visible; display: inline-block; overflow: visible;"><span style="display: block; z-index: 2147483647; padding: 3px; position: absolute; line-height: 2em; font-family: sans-serif; font-size: 11px; visibility: visible; color: red; opacity: 1; background: transparent; text-align: center; width: auto; height: auto; top: 0px; right: 0px;"><a href="http://www.magictoolbox.com/magicscroll/" onclick="this.blur();" target="_blank" style="color: inherit; text-decoration: none;">Magic Scroll™ trial version</a></span>
                                                                <div class="mcs-loader" style="visibility: hidden; opacity: 0; display: none;">
                                                                    <div class="mcs-loader-circles">
                                                                        <div class="mcs-loader-circle mcs-loader-circle_01"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_02"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_03"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_04"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_05"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_06"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_07"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_08"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="mcs-wrapper" style="display: inline-block; left: 0px; right: 0px;">
                                                                    <div class="mcs-items-container" style="white-space: nowrap; transform: translate3d(-840.234px, 0px, 0px); transition: transform 0ms;">
                                                                        <div class="mcs-item" data-item="5" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=30" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_vuquanghung_1501141072574.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=30" class="news-title ">Trả lời chất vấn của Ông Vũ Quang Hùng - Giám đố Sở Xây dựng tại Kỳ họp thứ 4 HĐND TP 2017</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="6" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=31" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_lequangnam_1501141289595.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=31" class="news-title ">Trả lời chất vấn của Ông Lê Quang Nam - Giám đốc Sở TN&amp;MT tại Kỳ họp thứ 4 HĐND TP 2017 </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="7" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=32" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_anhtho_1501141346865.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=32" class="news-title ">Phát biểu của Chủ tịch UBND thành phố Huỳnh Đức Thơ tại kỳ họp thứ tư khóa IX , 2016-2021 HĐND thành phố Đà Nẵng </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="8" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=33" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_anhxuananh_1501141431441.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=33" class="news-title ">Phát biểu bế mạc kỳ họp thứ 4 HĐND thành phố Đà Nẵng khóa IX nhiệm kỳ 2016-2021 </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="9" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=34" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_chuachay_1501141510645.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=34" class="news-title ">Thực tập phương án cứu nạn, cứu hộ, chữa cháy tại Trung tâm hành chính thành phố Đà Nẵng</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="0" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=11" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_apec_1498637102542.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=11" class="news-title ">Năm APEC Việt Nam 2017</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="1" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=12" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_chicannonucuoi_1498637292690.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=12" class="news-title ">Chỉ cần nở nụ cười</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="2" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=13" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_20nam_1498637177260.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=13" class="news-title ">20 Năm Đà Nẵng trực thuộc Trung Ương</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="3" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=14" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_pccc_1499130114044.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=14" class="news-title ">Thực tập phương án cứu nạn, cứu hộ, chữa cháy tại Trung tâm hành chính thành phố Đà Nẵng</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="4" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=29" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_khaimac_1501140805603.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=29" class="news-title ">Khai mạc kỳ họp thứ 4 khóa IX nhiệm kỳ 2016-2021, Hội đồng Nhân dân thành phố Đà Nẵng  </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="5" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=30" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_vuquanghung_1501141072574.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=30" class="news-title ">Trả lời chất vấn của Ông Vũ Quang Hùng - Giám đố Sở Xây dựng tại Kỳ họp thứ 4 HĐND TP 2017</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="6" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=31" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_lequangnam_1501141289595.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=31" class="news-title ">Trả lời chất vấn của Ông Lê Quang Nam - Giám đốc Sở TN&amp;MT tại Kỳ họp thứ 4 HĐND TP 2017 </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="7" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=32" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_anhtho_1501141346865.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=32" class="news-title ">Phát biểu của Chủ tịch UBND thành phố Huỳnh Đức Thơ tại kỳ họp thứ tư khóa IX , 2016-2021 HĐND thành phố Đà Nẵng </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="8" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=33" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_anhxuananh_1501141431441.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=33" class="news-title ">Phát biểu bế mạc kỳ họp thứ 4 HĐND thành phố Đà Nẵng khóa IX nhiệm kỳ 2016-2021 </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="9" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=34" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_chuachay_1501141510645.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=34" class="news-title ">Thực tập phương án cứu nạn, cứu hộ, chữa cháy tại Trung tâm hành chính thành phố Đà Nẵng</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="0" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=11" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_apec_1498637102542.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=11" class="news-title ">Năm APEC Việt Nam 2017</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="1" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=12" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_chicannonucuoi_1498637292690.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=12" class="news-title ">Chỉ cần nở nụ cười</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="2" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=13" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_20nam_1498637177260.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=13" class="news-title ">20 Năm Đà Nẵng trực thuộc Trung Ương</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="3" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=14" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_pccc_1499130114044.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=14" class="news-title ">Thực tập phương án cứu nạn, cứu hộ, chữa cháy tại Trung tâm hành chính thành phố Đà Nẵng</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="4" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a class="dng-item-avatar" href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=29" style="position: relative;display: block;">
                                                                                    <img class="dng-news-image" src="./images/m_khaimac_1501140805603.png">
                                                                                    <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/video?_c=3&amp;id=29" class="news-title ">Khai mạc kỳ họp thứ 4 khóa IX nhiệm kỳ 2016-2021, Hội đồng Nhân dân thành phố Đà Nẵng  </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="mcs-button mcs-horizontal mcs-button-arrow mcs-button-arrow-prev" style="display: inline-block;"></button>
                                                                <button type="button" class="mcs-button mcs-horizontal mcs-button-arrow mcs-button-arrow-next" style="display: inline-block;"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-12">
                            <div class="portlet-boundary portlet-boundary_hoidap_WAR_danangportlet_  portlet-static portlet-static-end decorate hoi-dap-portlet " id="p_p_id_hoidap_WAR_danangportlet_">
                                <section class="portlet" id="portlet_hoidap_WAR_danangportlet">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-header">
                                                        <i class="dng-portlet-header-icon"><i class="dng-icon dng-icon-website-don-vi"></i></i>
                                                        <h4 class="dng-portlet-header-title">Hỏi đáp</h4>
                                                        <span class="underline"></span>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div class="document-news">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <ul class="list-news">
                                                                        <li class="news-item default-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list">
                                                                                <i></i>
                                                                            </a>
                                                                            <div class="default-news-content">
                                                                                <div>
                                                                                    <a class="news-title" target="_blank" href="http://hoidap.danang.gov.vn/CD_Chitiet.aspx?idch=6710">
										Góp ý tận dụng cây cầu Nguyễn Văn Trỗi dịch về khu CV châu Á làm cầu đi bộ. (Dân Đà nẵng - Việt nam)
									</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="news-item default-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list">
                                                                                <i></i>
                                                                            </a>
                                                                            <div class="default-news-content">
                                                                                <div>
                                                                                    <a class="news-title" target="_blank" href="http://hoidap.danang.gov.vn/CD_Chitiet.aspx?idch=6693">
										Thuê chung cư cho mẹ đơn thân (Nguyễn thị hồng loan - K226/19 phạm cự lượng sơn trà đà nẵng)
									</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="news-item default-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list">
                                                                                <i></i>
                                                                            </a>
                                                                            <div class="default-news-content">
                                                                                <div>
                                                                                    <a class="news-title" target="_blank" href="http://hoidap.danang.gov.vn/CD_Chitiet.aspx?idch=6715">
										Điều kiện thuê chung cư cho mẹ đơn thân (Võ Thị Mai - Tổ 31 phường Hòa Thọ Đông   quận Cẩm Lệ)
									</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="news-item default-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list">
                                                                                <i></i>
                                                                            </a>
                                                                            <div class="default-news-content">
                                                                                <div>
                                                                                    <a class="news-title" target="_blank" href="http://hoidap.danang.gov.vn/CD_Chitiet.aspx?idch=6685">
										Thuê nhà chung cư (Ngô phi long - Quảng Nam)
									</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="news-item default-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list">
                                                                                <i></i>
                                                                            </a>
                                                                            <div class="default-news-content">
                                                                                <div>
                                                                                    <a class="news-title" target="_blank" href="http://hoidap.danang.gov.vn/CD_Chitiet.aspx?idch=6684">
										Thuê nhà chung cư (Nguyễn Văn Long - Hòa Minh Liên Chiểu)
									</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_7AbRijZdt2W0_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_7AbRijZdt2W0">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <link rel="stylesheet" href="./images/magicscroll.css" media="screen">
                                                <style>
                                                    .app-figure {
                                                        -webkit-box-sizing: border-box;
                                                        -moz-box-sizing: border-box;
                                                        box-sizing: border-box;
                                                        width: 100% !important;
                                                        margin: 5px auto;
                                                        padding: 0px;
                                                        position: relative;
                                                        text-align: center;
                                                        padding-top: 0px;
                                                        border-bottom: 1px solid #e1e8ee;
                                                        margin-bottom: 0px;
                                                        border-top: 1px solid #e1e8ee;
                                                    }

                                                    .dng-slide {
                                                        border: 1px solid #e1e8ee;
                                                        padding: 13px 8px;
                                                        position: relative;
                                                    }

                                                    .mcs-button.mcs-horizontal.mcs-button-arrow {
                                                        background-color: #fff;
                                                        -webkit-box-shadow: 1px 1px 3px 0px rgba(0, 0, 0, 0.75);
                                                        -moz-box-shadow: 1px 1px 3px 0px rgba(0, 0, 0, 0.75);
                                                        box-shadow: 1px 1px 3px 0px rgba(0, 0, 0, 0.75);
                                                        margin-top: 41px;
                                                        width: 27px;
                                                        height: 27px;
                                                    }

                                                    .dng-slide-news {
                                                        width: 100%;
                                                        position: relative;
                                                        margin-bottom: 0px;
                                                        height: 145px !important;
                                                    }

                                                    .dng-news-item {
                                                        white-space: normal;
                                                    }

                                                    .dng-slide-news .dng-news-item {
                                                        padding: 0px 5px;
                                                        text-align: left;
                                                    }

                                                    .dng-news-item .dng-news-image {
                                                        width: 100%;
                                                        display: block;
                                                    }

                                                    .dng-slide-news .dng-news-item:hover {}

                                                    .dng-slide-control {}

                                                    .dng-slide-control-btn {
                                                        position: absolute;
                                                        bottom: 50%;
                                                        padding: 5px 10px;
                                                        background-color: #fff;
                                                        cursor: pointer;
                                                        box-shadow: 1px 1px 1px #e7e7e7;
                                                    }

                                                    .dng-slide-control-next {
                                                        right: 0px;
                                                    }

                                                    .dng-slide-control-prev {
                                                        position: absolute;
                                                        left: 0px;
                                                    }

                                                    .mcs-item {
                                                        width: 25% !important;
                                                        display: inline-block;
                                                    }

                                                    .mcs-wrapper {
                                                        overflow: hidden;
                                                        width: 97%;
                                                        left: 11px !important;
                                                    }

                                                    .MagicScroll > div:not(.dng-news-item) > a,
                                                    .MagicScroll > span > a {
                                                        display: none !important;
                                                    }

                                                    .MagicScroll-horizontal .mcs-item {
                                                        height: 145px;
                                                    }

                                                    .MagicScroll .mcs-item img {
                                                        height: 105px;
                                                    }

                                                    .dng-portlet-video .app-figure {
                                                        border: none;
                                                    }

                                                    .dng-portlet-video .dng-portlet-header {
                                                        margin-top: 15px;
                                                        margin-left: 15px;
                                                    }
                                                </style>
                                                <!-- module -->
                                                <div class="dng-portlet dng-portlet-video">
                                                    <div class="dng-portlet-header">
                                                        <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh" class="dng-portlet-danh-muc-title">
                                                            <i class="dng-portlet-header-icon"><i class="dng-icon dng-icon-image"></i></i>
                                                            <h4 class="dng-portlet-header-title">Thư viện hình ảnh</h4>
                                                        </a>
                                                        <span class="underline"></span>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div class="app-figure">
                                                            <div class="MagicScroll dng-slide-news MagicScroll-arrows-outside MagicScroll-horizontal" data-mode="scroll" id="MagicScroll-315128993461" style="visibility: visible; display: inline-block; overflow: visible;"><span style="display: block; z-index: 2147483647; padding: 3px; position: absolute; line-height: 2em; font-family: sans-serif; font-size: 11px; visibility: visible; color: red; opacity: 1; background: transparent; text-align: center; width: auto; height: auto; top: 0px; right: 0px;"><a href="http://www.magictoolbox.com/magicscroll/" onclick="this.blur();" target="_blank" style="color: inherit; text-decoration: none;">Magic Scroll™ trial version</a></span>
                                                                <div class="mcs-loader" style="visibility: hidden; opacity: 0; display: none;">
                                                                    <div class="mcs-loader-circles">
                                                                        <div class="mcs-loader-circle mcs-loader-circle_01"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_02"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_03"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_04"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_05"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_06"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_07"></div>
                                                                        <div class="mcs-loader-circle mcs-loader-circle_08"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="mcs-wrapper" style="display: inline-block; left: 0px; right: 0px;">
                                                                    <div class="mcs-items-container" style="white-space: nowrap; transform: translate3d(-840.234px, 0px, 0px); transition: transform 0ms;">
                                                                        <div class="mcs-item" data-item="1" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=11">
                                                                                    <img class="dng-news-image" src="./images/m_IMG_5517_1495609897085.JPG">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=11" class="news-title ">Chùm ảnh pháo hoa Quốc tế 2017 - đội Thụy Sĩ (20/5/2017)</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="2" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=9">
                                                                                    <img class="dng-news-image" src="./images/m_30-4VN1_1494228016446.jpg">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=9" class="news-title ">Chùm ảnh pháo hoa Quốc tế 2017 - đội Việt Nam (30/4/2017)</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="3" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=8">
                                                                                    <img class="dng-news-image" src="./images/m_30-4Ao1_1494227734651.jpg">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=8" class="news-title ">Chùm ảnh pháo hoa Quốc tế 2017 - đội Áo (30/4/2017)</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="4" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=7">
                                                                                    <img class="dng-news-image" src="./images/m_DN01_1493083976470.jpg">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=7" class="news-title ">Đà Nẵng 1897</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="5" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=2">
                                                                                    <img class="dng-news-image" src="./images/m_tảixuống(18)_1481860456671.jpg">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=2" class="news-title ">Sôi động biển Đà Nẵng cùng ABG 5</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="0" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=10">
                                                                                    <img class="dng-news-image" src="./images/m_IMG_5382_1495609222423.JPG">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=10" class="news-title ">Chùm ảnh pháo hoa Quốc tế 2017 - đội Nhật (20/5/2017)</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="1" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=11">
                                                                                    <img class="dng-news-image" src="./images/m_IMG_5517_1495609897085.JPG">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=11" class="news-title ">Chùm ảnh pháo hoa Quốc tế 2017 - đội Thụy Sĩ (20/5/2017)</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="2" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=9">
                                                                                    <img class="dng-news-image" src="./images/m_30-4VN1_1494228016446.jpg">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=9" class="news-title ">Chùm ảnh pháo hoa Quốc tế 2017 - đội Việt Nam (30/4/2017)</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="3" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=8">
                                                                                    <img class="dng-news-image" src="./images/m_30-4Ao1_1494227734651.jpg">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=8" class="news-title ">Chùm ảnh pháo hoa Quốc tế 2017 - đội Áo (30/4/2017)</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="4" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=7">
                                                                                    <img class="dng-news-image" src="./images/m_DN01_1493083976470.jpg">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=7" class="news-title ">Đà Nẵng 1897</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="5" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=2">
                                                                                    <img class="dng-news-image" src="./images/m_tảixuống(18)_1481860456671.jpg">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=2" class="news-title ">Sôi động biển Đà Nẵng cùng ABG 5</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="0" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=10">
                                                                                    <img class="dng-news-image" src="./images/m_IMG_5382_1495609222423.JPG">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=10" class="news-title ">Chùm ảnh pháo hoa Quốc tế 2017 - đội Nhật (20/5/2017)</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="1" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=11">
                                                                                    <img class="dng-news-image" src="./images/m_IMG_5517_1495609897085.JPG">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=11" class="news-title ">Chùm ảnh pháo hoa Quốc tế 2017 - đội Thụy Sĩ (20/5/2017)</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="2" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=9">
                                                                                    <img class="dng-news-image" src="./images/m_30-4VN1_1494228016446.jpg">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=9" class="news-title ">Chùm ảnh pháo hoa Quốc tế 2017 - đội Việt Nam (30/4/2017)</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="3" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=8">
                                                                                    <img class="dng-news-image" src="./images/m_30-4Ao1_1494227734651.jpg">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=8" class="news-title ">Chùm ảnh pháo hoa Quốc tế 2017 - đội Áo (30/4/2017)</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mcs-item" data-item="4" style="width: 71.407%;">
                                                                            <div class="dng-news-item" style="opacity: 1; visibility: visible;">
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=7">
                                                                                    <img class="dng-news-image" src="./images/m_DN01_1493083976470.jpg">
                                                                                </a>
                                                                                <a href="http://danang.gov.vn/web/guest/thu-vien-hinh-anh/chi-tiet?id=7" class="news-title ">Đà Nẵng 1897</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="mcs-button mcs-horizontal mcs-button-arrow mcs-button-arrow-prev" style="display: inline-block;"></button>
                                                                <button type="button" class="mcs-button mcs-horizontal mcs-button-arrow mcs-button-arrow-next" style="display: inline-block;"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="portlet-boundary portlet-boundary_com_liferay_nested_portlets_web_portlet_NestedPortletsPortlet_  portlet-static portlet-static-end decorate portlet-nested-portlets " id="p_p_id_com_liferay_nested_portlets_web_portlet_NestedPortletsPortlet_INSTANCE_1FLBDw5n9WAt_">
                                <section class="portlet" id="portlet_com_liferay_nested_portlets_web_portlet_NestedPortletsPortlet_INSTANCE_1FLBDw5n9WAt">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <div class="columns-2" id="_com_liferay_nested_portlets_web_portlet_NestedPortletsPortlet_INSTANCE_1FLBDw5n9WAt_main-content" role="main">
                                                    <div class="portlet-layout row">
                                                        <div class="col-md-6 portlet-column portlet-column-first" id="_com_liferay_nested_portlets_web_portlet_NestedPortletsPortlet_INSTANCE_1FLBDw5n9WAt_column-1">
                                                            <div class="portlet-dropzone portlet-column-content portlet-column-content-first" id="layout-column__com_liferay_nested_portlets_web_portlet_NestedPortletsPortlet_INSTANCE_1FLBDw5n9WAt__column-1">
                                                                <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_Gxrc0jCzbE09_">
                                                                    <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_Gxrc0jCzbE09">
                                                                        <div class="portlet-content">
                                                                            <div class=" portlet-content-container">
                                                                                <div class="portlet-body">
                                                                                    <!-- module -->
                                                                                    <div class="dng-portlet">
                                                                                        <div class="dng-portlet-header">
                                                                                            <a href="http://danang.gov.vn/web/guest/chuyen-de-apec2017/danh-muc?id=95,100000019" class="dng-portlet-danh-muc-title">
                                                                                                <i class=" no-pd-top dng-portlet-header-icon view7">
					<img style="padding-bottom: 6px; display: none;" onerror="this.style.display='none'" alt="" src="http://danang.gov.vn/web/guest/trang-chu">
				</i>
                                                                                                <h4 class="dng-portlet-header-title no-pd-top">APEC 2017</h4>
                                                                                            </a>
                                                                                            <span class="underline"></span>
                                                                                        </div>
                                                                                        <div class="dng-portlet-content">
                                                                                            <div class="tin-tuc-su-kien">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="main-news">
                                                                                                            <div class="main-news-thumb-nail">
                                                                                                                <a href="http://danang.gov.vn/web/guest/chuyen-de-apec2017/chi-tiet?id=27795&amp;_c=95,100000019">
                                                                                                                    <img src="./images/m_tthc_1502353034080.jpg">
                                                                                                                </a>
                                                                                                            </div>
                                                                                                            <div class="main-news-content">
                                                                                                                <a href="http://danang.gov.vn/web/guest/chuyen-de-apec2017/chi-tiet?id=27795&amp;_c=95,100000019" class="news-title main-news-title bold">
								Gấp rút hoàn thành mọi công tác chuẩn bị cho Tuần lễ Cấp cao APEC 2017
							</a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="clear"></div>
                                                                                                        <div class="news">
                                                                                                            <ul class="list-news">
                                                                                                                <li class="news-item default-news dng-bullet-arrow">
                                                                                                                    <a class="dng-icon-list"><i></i></a>
                                                                                                                    <div class="default-news-content">
                                                                                                                        <a href="http://danang.gov.vn/web/guest/chuyen-de-apec2017/chi-tiet?id=27757&amp;_c=95,100000019" class="news-title ">
										Tổng thống Hàn Quốc sẽ tham dự Tuần lễ cấp cao APEC 2017 tại Đà Nẵng
									</a>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                                <li class="news-item default-news dng-bullet-arrow">
                                                                                                                    <a class="dng-icon-list"><i></i></a>
                                                                                                                    <div class="default-news-content">
                                                                                                                        <a href="http://danang.gov.vn/web/guest/chuyen-de-apec2017/chi-tiet?id=27652&amp;_c=95,100000019" class="news-title ">
										Đoàn tiền trạm 20 nền kinh tế thành viên khảo sát công tác chuẩn bị Tuần lễ cấp cao APEC 2017
									</a>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                                <li class="news-item default-news dng-bullet-arrow">
                                                                                                                    <a class="dng-icon-list"><i></i></a>
                                                                                                                    <div class="default-news-content">
                                                                                                                        <a href="http://danang.gov.vn/web/guest/chuyen-de-apec2017/chi-tiet?id=27609&amp;_c=95,100000019" class="news-title ">
										Thủ tướng Nhật Bản Shinzo Abe sẽ tham dự Tuần lễ cấp cao APEC 2017
									</a>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                                <li class="news-item default-news dng-bullet-arrow">
                                                                                                                    <a class="dng-icon-list"><i></i></a>
                                                                                                                    <div class="default-news-content">
                                                                                                                        <a href="http://danang.gov.vn/web/guest/chuyen-de-apec2017/chi-tiet?id=27605&amp;_c=95,100000019" class="news-title ">
										Đảm bảo vệ sinh môi trường và trật tự đô thị phục vụ Tuần lễ cấp cao APEC 2017
									</a>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end module -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 portlet-column portlet-column-last" id="_com_liferay_nested_portlets_web_portlet_NestedPortletsPortlet_INSTANCE_1FLBDw5n9WAt_column-2">
                                                            <div class="portlet-dropzone portlet-column-content portlet-column-content-last" id="layout-column__com_liferay_nested_portlets_web_portlet_NestedPortletsPortlet_INSTANCE_1FLBDw5n9WAt__column-2">
                                                                <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_LDQxPMY8tYtx_">
                                                                    <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_LDQxPMY8tYtx">
                                                                        <div class="portlet-content">
                                                                            <div class=" portlet-content-container">
                                                                                <div class="portlet-body">
                                                                                    <!-- module -->
                                                                                    <div class="dng-portlet">
                                                                                        <div class="dng-portlet-header">
                                                                                            <a href="http://danang.gov.vn/web/guest/chinh-quyen/danh-muc?id=96,100000011,100000012,100000013,100000014" class="dng-portlet-danh-muc-title">
                                                                                                <i class=" no-pd-top dng-portlet-header-icon view7">
					<img style="padding-bottom: 6px; display: none;" onerror="this.style.display='none'" alt="" src="http://danang.gov.vn/web/guest/trang-chu">
				</i>
                                                                                                <h4 class="dng-portlet-header-title no-pd-top">Thành phố 4 an</h4>
                                                                                            </a>
                                                                                            <span class="underline"></span>
                                                                                        </div>
                                                                                        <div class="dng-portlet-content">
                                                                                            <div class="tin-tuc-su-kien">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="main-news">
                                                                                                            <div class="main-news-thumb-nail">
                                                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27799&amp;_c=96,100000011,100000012,100000013,100000014">
                                                                                                                    <img src="./images/m_110817-4an_1502416258897.jpg">
                                                                                                                </a>
                                                                                                            </div>
                                                                                                            <div class="main-news-content">
                                                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27799&amp;_c=96,100000011,100000012,100000013,100000014" class="news-title main-news-title bold">
								Thiết thực từ mô hình Tận dụng - Hỗ trợ
							</a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="clear"></div>
                                                                                                        <div class="news">
                                                                                                            <ul class="list-news">
                                                                                                                <li class="news-item default-news dng-bullet-arrow">
                                                                                                                    <a class="dng-icon-list"><i></i></a>
                                                                                                                    <div class="default-news-content">
                                                                                                                        <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27674&amp;_c=96,100000011,100000012,100000013,100000014" class="news-title ">
										Liên Chiểu kiểm tra An toàn thực phẩm tại các phường
									</a>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                                <li class="news-item default-news dng-bullet-arrow">
                                                                                                                    <a class="dng-icon-list"><i></i></a>
                                                                                                                    <div class="default-news-content">
                                                                                                                        <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27591&amp;_c=96,100000011,100000012,100000013,100000014" class="news-title ">
										Ra quân tuần tra, xử lý nghiêm các hành vi vi phạm ATGT
									</a>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                                <li class="news-item default-news dng-bullet-arrow">
                                                                                                                    <a class="dng-icon-list"><i></i></a>
                                                                                                                    <div class="default-news-content">
                                                                                                                        <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27547&amp;_c=96,100000011,100000012,100000013,100000014" class="news-title ">
										Mặt trận các cấp với chương trình “thành phố 4 an”&nbsp;
									</a>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                                <li class="news-item default-news dng-bullet-arrow">
                                                                                                                    <a class="dng-icon-list"><i></i></a>
                                                                                                                    <div class="default-news-content">
                                                                                                                        <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27507&amp;_c=96,100000011,100000012,100000013,100000014" class="news-title ">
										Nâng cao chất lượng của Chương trình Phát thanh FM Giao thông 96,3 MHz
									</a>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end module -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 portlet-layout layout-left">
                    <div class="portlet-column portlet-column-first">
                        <div class="portlet-dropzone empty portlet-column-content portlet-column-content-first" id="layout-column_column-13"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 portlet-layout layout-right">
                    <div class="portlet-column portlet-column-last">
                        <div class="portlet-dropzone empty portlet-column-content portlet-column-content-last" id="layout-column_column-14"></div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 portlet-layout layout-left">
                    <div class="portlet-column portlet-column-first">
                        <div class="portlet-dropzone empty portlet-column-content portlet-column-content-first" id="layout-column_column-15"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 portlet-layout layout-right">
                    <div class="portlet-column portlet-column-last">
                        <div class="portlet-dropzone empty portlet-column-content portlet-column-content-last" id="layout-column_column-16"></div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 portlet-layout layout-left">
                    <div class="portlet-column portlet-column-first">
                        <div class="portlet-dropzone empty portlet-column-content portlet-column-content-first" id="layout-column_column-17"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 portlet-layout layout-right">
                    <div class="portlet-column portlet-column-last">
                        <div class="portlet-dropzone empty portlet-column-content portlet-column-content-last" id="layout-column_column-18"></div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-19">
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_BYGZCDgD7JWF_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_BYGZCDgD7JWF">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-header">
                                                        <a href="http://danang.gov.vn/web/guest/chinh-quyen/danh-muc?id=49" class="dng-portlet-danh-muc-title">
                                                            <i class="dng-portlet-header-icon">
						<img style="padding-bottom: 6px; display: none;" onerror="this.style.display='none'" alt="" src="http://danang.gov.vn/web/guest/trang-chu">
					</i>
                                                            <h4 class="dng-portlet-header-title">Báo cáo kinh tế xã hội</h4>
                                                        </a>
                                                        <span class="underline"></span>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div class="website-news">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <ul class=" row list-news">
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-square">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27753&amp;_c=49" class="news-title ">
										Báo cáo kinh tế xã hội tháng 7 năm 2017
									</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-square">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27275&amp;_c=49" class="news-title ">
										Tình hình kinh tế - xã hội, quốc phòng - an ninh 6 tháng đầu năm và một số nhiệm vụ trọng tâm 6 tháng cuối năm 2017
									</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-square">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27042&amp;_c=49" class="news-title ">
										Báo cáo kinh tế xã hội tháng 5 năm 2017
									</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-square">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=26338&amp;_c=49" class="news-title ">
										Báo cáo kinh tế xã hội tháng 4 năm 2017
									</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-square">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=26105&amp;_c=49" class="news-title ">
										Tình hình kinh tế - xã hội, quốc phòng - an ninh quý I  và một số nhiệm vụ chủ yếu trong quý II năm 2017
									</a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_5p4WMl4EUfRu_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_5p4WMl4EUfRu">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-content dng-portlet-content-no-header">
                                                        <div class="banner">
                                                            <ul class="row banner-list">
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://danang.gov.vn/doanh-nghiep/danh-muc?id=74" target="_blank" onclick="clickBanner(4)">
                                                                        <img src="./images/tiepnhanvaxul_1476954197000.png">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-20">
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_60egJoM9KoLG_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_60egJoM9KoLG">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-header">
                                                        <i class="dng-portlet-header-icon"><i class="dng-icon dng-icon-website-don-vi"></i></i>
                                                        <h4 class="dng-portlet-header-title">Website các đơn vị</h4>
                                                        <span class="underline"></span>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div class="website-news">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <ul class=" row list-news">
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://ccco.danang.gov.vn/" target="_blank" class="news-title "> BCĐ Ứng phó biến đổi khí hậu và nước biển dâng</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.iza.danang.gov.vn/" target="_blank" class="news-title "> BQL các Khu công nghiệp và Chế xuất</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.dhtp.vn/" target="_blank" class="news-title "> BQL Khu công nghệ cao</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.baodanang.vn/" target="_blank" class="news-title "> Báo Đà Nẵng</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.ipc.danang.gov.vn/" target="_blank" class="news-title "> Ban Xúc tiến và Hỗ trợ đầu tư</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.drt.danang.vn/" target="_blank" class="news-title "> Đài phát thanh truyền hình Đà Nẵng</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://dbnd.danang.gov.vn/" target="_blank" class="news-title "> Hội đồng nhân dân thành phố</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://khoinghiep.danang.vn/" target="_blank" class="news-title "> Hội đồng Điều phối mạng lưới Khởi nghiệp</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.lmhtx.danang.gov.vn/" target="_blank" class="news-title "> Liên minh Hợp tác xã</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://socongthuong.danang.gov.vn/" target="_blank" class="news-title "> Sở Công thương</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.danang.edu.vn/" target="_blank" class="news-title "> Sở Giáo dục và Đào tạo</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://soyte.danang.gov.vn/" target="_blank" class="news-title "> Sở Y tế</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.fad.danang.gov.vn/" target="_blank" class="news-title "> Sở Ngoại vụ</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.snnptnt.danang.gov.vn/" target="_blank" class="news-title "> Sở Nông nghiệp và Phát triển Nông thôn</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.taichinh.danang.gov.vn/" target="_blank" class="news-title "> Sở Tài chính</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.tttt.danang.gov.vn/" target="_blank" class="news-title "> Sở Thông tin và Truyền thông</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://vhtt.danang.gov.vn/" target="_blank" class="news-title "> Sở Văn hóa và Thể thao</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://tourism.danang.gov.vn/" target="_blank" class="news-title "> Sở Du lịch</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.sgtvt.danang.gov.vn/" target="_blank" class="news-title "> Sở Giao thông Vận tải</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.dost.danang.gov.vn/" target="_blank" class="news-title "> Sở Khoa học và Công nghệ</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://dpi.danang.gov.vn/" target="_blank" class="news-title "> Sở Kế hoạch và Đầu tư</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.ldtbxh.danang.gov.vn/" target="_blank" class="news-title "> Sở Lao động - Thương binh và Xã hội</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.noivu.danang.gov.vn/" target="_blank" class="news-title "> Sở Nội vụ</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.tnmt.danang.gov.vn/" target="_blank" class="news-title "> Sở Tài nguyên và Môi trường</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.sotuphap.danang.gov.vn/" target="_blank" class="news-title "> Sở Tư pháp</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.sxd.danang.gov.vn/" target="_blank" class="news-title "> Sở Xây dựng</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.thanhtra.danang.gov.vn/" target="_blank" class="news-title "> Thanh tra thành phố</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.camle.danang.gov.vn/" target="_blank" class="news-title "> UBND Quận Cẩm Lệ</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.haichau.danang.gov.vn/" target="_blank" class="news-title "> UBND Quận Hải Châu</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://nguhanhson.danang.gov.vn/" target="_blank" class="news-title "> UBND Quận Ngũ Hành Sơn</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.hoavang.danang.gov.vn/" target="_blank" class="news-title "> UBND Huyện Hòa Vang</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.lienchieu.danang.gov.vn/" target="_blank" class="news-title "> UBND Quận Liên Chiểu</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.sontra.danang.gov.vn/" target="_blank" class="news-title "> UBND Quận Sơn Trà</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.thanhkhe.danang.gov.vn/" target="_blank" class="news-title "> UBND Quận Thanh Khê</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://hoangsa.danang.gov.vn/" target="_blank" class="news-title "> UBND Huyện Hoàng Sa</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.dised.danang.gov.vn/" target="_blank" class="news-title "> Viện nghiên cứu Phát triển Kinh tế Xã hội</a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-21">
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_xFrdjD0I5MMz_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_xFrdjD0I5MMz">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-content dng-portlet-content-no-header">
                                                        <div class="banner">
                                                            <ul class="row banner-list">
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://kstthc.danang.gov.vn/" target="_blank" onclick="clickBanner(2)">
                                                                        <img src="./images/Banner-HTKSTTHC_1477973996335.png">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-22">
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_6eCUFvqVERyf_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_6eCUFvqVERyf">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-header">
                                                        <i class="dng-portlet-header-icon"><i class="dng-icon dng-icon-website-don-vi"></i></i>
                                                        <h4 class="dng-portlet-header-title">Website các đơn vị ngành dọc</h4>
                                                        <span class="underline"></span>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div class="website-news">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <ul class=" row list-news">
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gdt.gov.vn/wps/portal" target="_blank" class="news-title "> Cục Thuế</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.catp.danang.gov.vn/" target="_blank" class="news-title "> Công an thành phố</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.ctk.danang.gov.vn/" target="_blank" class="news-title "> Cục Thống kê</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://pccc.danang.gov.vn/" target="_blank" class="news-title "> Cảnh sát phòng cháy và chữa cháy thành phố</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.dngcustoms.gov.vn/" target="_blank" class="news-title "> Cục Hải Quan</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://khobac.danang.gov.vn/" target="_blank" class="news-title "> Kho bạc Nhà nước Đà Nẵng</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.bhxhdanang.gov.vn/" target="_blank" class="news-title "> Bảo hiểm Xã hội thành phố</a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-23">
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_mAHHz5XzNX9W_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_mAHHz5XzNX9W">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-header">
                                                        <i class="dng-portlet-header-icon"><i class="dng-icon dng-icon-website-don-vi"></i></i>
                                                        <h4 class="dng-portlet-header-title">Website tổ chức Chính trị Xã hội</h4>
                                                        <span class="underline"></span>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div class="website-news">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <ul class=" row list-news">
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://phunudanang.org.vn/" target="_blank" class="news-title "> Hội Liên hiệp Phụ nữ</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://vava.org.vn/" target="_blank" class="news-title "> Hội Nạn nhân Chất độc Da cam</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://lhhdanang.vn/" target="_blank" class="news-title "> Liên hiệp các Hội Khoa học kỹ thuật</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://vannghedanang.org.vn/" target="_blank" class="news-title "> Liên hiệp các Hội Văn học Nghệ thuật</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://thanhdoandanang.org.vn/" target="_blank" class="news-title "> Thành Đoàn</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://chuthapdodanang.org.vn/" target="_blank" class="news-title "> Hội Chữ thập đỏ thành phố Đà Nẵng</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.congdoandanang.org.vn/" target="_blank" class="news-title "> Liên đoàn Lao động</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://dafo.danang.gov.vn/" target="_blank" class="news-title "> Liên hiệp các tổ chức Hữu nghị</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://www.mattran.danang.gov.vn/" target="_blank" class="news-title "> Ủy ban Mặt trận Tổ quốc Việt Nam thành phố Đà Nẵng</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-6 col-sm-6 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://hoibaotrodanang.vn/" target="_blank" class="news-title "> Hội bảo trợ phụ nữ và trẻ em nghèo bất hạnh</a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 portlet-layout layout-right">
            <div class="row layout-row-first">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout pad-left-10 pad-right-10">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone empty portlet-column-content portlet-column-content-only" id="layout-column_column-24"></div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout pad-left-10 pad-right-10">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-25">
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_Fq7OmMWcC9I5_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_Fq7OmMWcC9I5">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-header">
                                                        <a href="http://danang.gov.vn/web/guest/chinh-quyen/danh-muc?id=100000006" class="dng-portlet-danh-muc-title">
                                                            <i class="dng-portlet-header-icon">
						<img style="padding-bottom: 6px; display: none;" onerror="this.style.display='none'" alt="" src="./images/saved_resource(6)">
					</i>
                                                            <h4 class="dng-portlet-header-title">Thông báo</h4>
                                                        </a>
                                                        <span class="underline"></span>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div class="website-news">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <ul class=" row list-news">
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27788&amp;_c=100000006" class="news-title ">
										Mời tham gia khóa đào tạo theo Đề án "Hỗ trợ phát triển nguồn nhân lực chất lượng cao cho khu vực đến năm 2020" của TP Đà Nẵng
									</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27502&amp;_c=100000006" class="news-title ">
										Tòa án nhân dân quận Hải Châu, thành phố Đà Nẵng thông báo về việc tranh chấp hợp đồng tín dụng.
									</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27201&amp;_c=100000006" class="news-title ">
										Thông báo lịch thi sát hạch cấp chứng chỉ hành nghề hoạt động xây dựng – đợt 3 năm 2017
									</a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_B4XvejDylDAX_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_B4XvejDylDAX">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-content dng-portlet-content-no-header">
                                                        <div class="banner">
                                                            <ul class="row banner-list">
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://danang.gov.vn/chinh-quyen/danh-muc?id=76" target="_blank" onclick="clickBanner(73)">
                                                                        <img src="./images/Lich_1491291493534.png">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_oxdsAqnMXHcX_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_oxdsAqnMXHcX">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-content dng-portlet-content-no-header">
                                                        <div class="website-news">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <ul class=" row list-news">
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27736&amp;_c=76" class="news-title ">
										Lịch công tác tuần 32 của lãnh đạo UBND thành phố
									</a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_CvMmnK55cqwF_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_CvMmnK55cqwF">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-content dng-portlet-content-no-header">
                                                        <div class="website-news">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <ul class=" row list-news">
                                                                        <li class="col-md-12 col-xs-12 news-item link-news dng-bullet-arrow">
                                                                            <i class="dng-icon-list">
									<i></i>
                                                                            </i>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/chi-tiet?id=27638&amp;_c=77" class="news-title ">
										Lịch tiếp công dân tháng 8
									</a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_AbHQqN9O52UZ_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_AbHQqN9O52UZ">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet portlet-panel">
                                                    <div class="dng-portlet-header">
                                                        <i class="dng-portlet-header-icon"><i class="dng-icon dng-icon-thong-tin-chinh-quyen"></i></i>
                                                        <h4 class="dng-portlet-header-title dng-portlet-header-title-sm">Thông tin chính quyền</h4>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div class="website-news">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <ul class="row list-news">
                                                                        <li class="col-md-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/bo-may-to-chuc" target="" class="news-title "> Bộ máy Tổ chức</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://tthc.danang.gov.vn/index.php?option=com_thutuchanhchinh" target="" class="news-title "> Bộ thủ tục hành chính</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/danh-muc?id=66,67,68,69" target="" class="news-title "> Đấu thầu, mua sắm công</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/lien-he-cong-tac" target="" class="news-title "> Liên hệ công tác</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/chinh-quyen/danh-muc?id=75" target="" class="news-title "> Kết quả giải quyết KNTC</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/danh-muc?id=52" target="" class="news-title "> Thông tin báo chí</a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_0js9Racfqku1_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_0js9Racfqku1">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-content dng-portlet-content-no-header">
                                                        <div class="banner">
                                                            <ul class="row banner-list">
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://danang.gov.vn/web/khoi-nghiep" target="_blank" onclick="clickBanner(5)">
                                                                        <img src="./images/01_1484793865619.png">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://doithoai.danang.gov.vn/" target="_blank" onclick="clickBanner(13)">
                                                                        <img src="./images/doithoaitructuyen_1491295700777.png">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout pad-left-10 pad-right-10">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-26">
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_mr83ZBhJTmjS_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_mr83ZBhJTmjS">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <style>
                                                    .list-danhmucs .cat-level-0 .link-news-content a {
                                                        font-weight: normal;
                                                    }
                                                </style>
                                                <!-- module -->
                                                <div class="dng-portlet portlet-panel">
                                                    <div class="dng-portlet-header">
                                                        <i class="dng-portlet-header-icon"><i class="dng-icon dng-icon-thong-tin-chinh-quyen"></i></i>
                                                        <h4 class="dng-portlet-header-title dng-portlet-header-title-sm">Quy hoạch &amp; Phát triển</h4>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div class="website-news">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <ul class="row list-news list-danhmucs">
                                                                        <li class="col-md-12 news-item link-news dng-bullet-arrow  cat-level-0">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/danh-muc?id=56" class="news-title "> Chiến lược, định hướng phát triển ngành</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 news-item link-news dng-bullet-arrow  cat-level-0">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/danh-muc?id=58" class="news-title "> Bản đồ quy hoạch đô thị</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 news-item link-news dng-bullet-arrow  cat-level-0">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/danh-muc?id=60" class="news-title "> Quy hoạch thu gom, tái chế, xử lý chất thải</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 news-item link-news dng-bullet-arrow  cat-level-0">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/web/guest/chinh-quyen/danh-muc?id=62" class="news-title "> Hành lang kinh tế Đông Tây</a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout pad-left-10 pad-right-10">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-27">
                            <div class="portlet-boundary portlet-boundary_hosomotcua_WAR_danangportlet_  portlet-static portlet-static-end decorate ho-so-mot-cua-portlet " id="p_p_id_hosomotcua_WAR_danangportlet_">
                                <section class="portlet" id="portlet_hosomotcua_WAR_danangportlet">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-header">
                                                        <i class="dng-portlet-header-icon"><i class="dng-icon dng-icon-website-don-vi"></i></i>
                                                        <h4 class="dng-portlet-header-title">Hồ sơ một cửa</h4>
                                                        <span class="underline"></span>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div class="dng-hsmc">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="dng-hsmc-field">
                                                                        <span class="dng-hsmc-title">
							Hồ sơ vừa trả:
						</span>
                                                                        <span class="dng-hsmc-info">
							Cấp giấy phép xây dựng nhà ở riêng lẻ tại đô thị
						</span>
                                                                    </div>
                                                                    <div class="dng-hsmc-field">
                                                                        <span class="dng-hsmc-title">
							Mã số hồ sơ:
						</span>
                                                                        <span class="dng-hsmc-info">
							1501484744089
						</span>
                                                                    </div>
                                                                    <div class="dng-hsmc-field">
                                                                        <span class="dng-hsmc-title">
							Cơ quan:
						</span>
                                                                        <span class="dng-hsmc-info">
							UBND quận Thanh Khê
						</span>
                                                                    </div>
                                                                    <div class="dng-hsmc-field">
                                                                        <span class="dng-hsmc-title">
							Ngày nộp:
						</span>
                                                                        <span class="dng-hsmc-info">
							31-07-2017 14:05:43
						</span>
                                                                    </div>
                                                                    <div class="dng-hsmc-field">
                                                                        <span class="dng-hsmc-title">
							Ngày trả:
						</span>
                                                                        <span class="dng-hsmc-info">
							11-08-2017 10:54:00
						</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portlet-layout pad-left-10 pad-right-10">
                    <div class="portlet-column portlet-column-only">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-28">
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_HFvlHY1BpTuu_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_HFvlHY1BpTuu">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-content dng-portlet-content-no-header">
                                                        <div class="banner">
                                                            <ul class="row banner-list">
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://chinhphu.vn/" target="_blank" onclick="clickBanner(15)">
                                                                        <img src="./images/banner_chinhphu_1490684178859.png">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://vbpl.vn/danang/Pages/Home.aspx" target="_blank" onclick="clickBanner(77)">
                                                                        <img src="./images/CSDLVBPL_DNG_1492962517775.png">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="https://dangbodanang.vn/" target="_blank" onclick="clickBanner(91)">
                                                                        <img src="./images/dangbotp_1499154657332.png">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://danang.gov.vn/web/guest/chinh-quyen/danh-muc?id=79" target="_blank" onclick="clickBanner(96)">
                                                                        <img src="./images/GOPYDUTHAOVANBAN_1502147272140.png">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://danang.gov.vn/chinh-quyen/danh-muc?id=100000036" target="_blank" onclick="clickBanner(82)">
                                                                        <img src="./images/TongDieuTraKinhTe_1493778314098.png">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://www.congbao.danang.gov.vn/webpages/home/home.faces#" target="_blank" onclick="clickBanner(16)">
                                                                        <img src="./images/banner_congbao_1490684191727.png">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://danang.gov.vn/web/guest/danh-ba-website" target="_blank" onclick="clickBanner(18)">
                                                                        <img src="./images/09_1484793978980.png">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://diadiem.danang.gov.vn/" target="_blank" onclick="clickBanner(19)">
                                                                        <img src="./images/10_1484793999754.png">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://cchc.danang.gov.vn/index.php?option=com_mucdohailong&amp;controller=thongke&amp;task=xemdonvi&amp;tmpl=poll" target="_blank" onclick="clickBanner(22)">
                                                                        <img src="./images/13_1484794182735.png">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://danang.gov.vn/web/guest/tra-cuu-du-lieu-xep-hang-tu-dong" target="_blank" onclick="clickBanner(89)">
                                                                        <img src="./images/tracuuDuLieuXHTD_1498463704233.png">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://egov.danang.gov.vn/web/101802/5" target="_blank" onclick="clickBanner(71)">
                                                                        <img src="./images/danhgiadonvi_1490063497305.jpg">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_mLIPyVb2YB7s_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_mLIPyVb2YB7s">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet portlet-panel">
                                                    <div class="dng-portlet-header">
                                                        <i class="dng-portlet-header-icon"><i class="dng-icon dng-icon-thong-tin-chinh-quyen"></i></i>
                                                        <h4 class="dng-portlet-header-title dng-portlet-header-title-sm">Dịch vụ công, tiện ích</h4>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div class="website-news">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <ul class="row list-news">
                                                                        <li class="col-md-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/cong-dan/danh-muc?id=100000040" target="_blank" class="news-title "> Danh mục TTHC không thực hiện tiếp nhận, trả kết quả qua dịch vụ bưu chính</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/cong-dan/danh-muc?id=144,145,146" target="_blank" class="news-title "> Lịch phát sóng truyền hình</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/cong-dan/danh-muc?id=129,130,131,132,133" target="_blank" class="news-title "> Điện lực</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://diadiem.danang.gov.vn/" target="_blank" class="news-title "> Đi, đến</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/cong-dan/danh-muc?id=134,135,136,137,138" target="_blank" class="news-title "> Cấp nước</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/cong-dan/danh-muc?id=139,140,141,142,143" target="_blank" class="news-title "> Xe buýt</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-12 news-item link-news dng-bullet-arrow">
                                                                            <a class="dng-icon-list"><i></i></a>
                                                                            <div class="link-news-content">
                                                                                <a href="http://danang.gov.vn/cong-dan/chi-tiet?id=25033&amp;_c=25033" target="_blank" class="news-title "> Số điện thoại cần biết</a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="portlet-boundary portlet-boundary_luottruycap_WAR_danangportlet_  portlet-static portlet-static-end decorate luot-truy-cap-portlet " id="p_p_id_luottruycap_WAR_danangportlet_">
                                <section class="portlet" id="portlet_luottruycap_WAR_danangportlet">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet portlet-panel">
                                                    <div class="dng-portlet-header">
                                                        <i class="dng-portlet-header-icon"><i class="dng-icon dng-icon-thong-tin-chinh-quyen"></i></i>
                                                        <h4 class="dng-portlet-header-title dng-portlet-header-title-sm">Lượt truy cập</h4>
                                                    </div>
                                                    <div class="dng-portlet-content">
                                                        <div>
                                                            <div>
                                                                <span>Tổng lượt truy cập:</span><span style="margin-left: 5px;">15545250</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="portlet-boundary portlet-boundary_main_WAR_danangportlet_  portlet-static portlet-static-end decorate  " id="p_p_id_main_WAR_danangportlet_INSTANCE_X7Z8jpX3jzgG_">
                                <section class="portlet" id="portlet_main_WAR_danangportlet_INSTANCE_X7Z8jpX3jzgG">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <!-- module -->
                                                <div class="dng-portlet">
                                                    <div class="dng-portlet-content dng-portlet-content-no-header">
                                                        <div class="banner">
                                                            <ul class="row banner-list">
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="https://dangbodanang.vn/cuoc-thi-tim-hieu-lich-su-dang-bo-thanh-pho-da-nang-1925-2015" target="_blank" onclick="clickBanner(94)">
                                                                        <img src="./images/timhieulsdangbo_1501810563836.png">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://duaghengo.soctrang.gov.vn/" target="_blank" onclick="clickBanner(95)">
                                                                        <img src="./images/LehoiDuaGheNgo_1501813519060.png">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://www.vishipel.com.vn/index.aspx?page=Services&amp;cat=250" target="_blank" onclick="clickBanner(87)">
                                                                        <img src="./images/Bannerwebsite_1495070608908.jpg">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-md-12 banner-item">
                                                                    <a href="http://nhatrangfestival.vn/" target="_blank" onclick="clickBanner(84)">
                                                                        <img src="./images/FestivalBienNhaTrang_1494207527868.png">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end module -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
