@extends('guest.layout.main')
@section('title')
  <title>Trang chủ</title>
@endsection
@section('content')
  <div class="container">
    <div class="row">
    <div class=".col-lg-9 col-md-9 col-sm-12 col-xs-12 portlet-layout layout-left">
      <div class="box-content">
        <div class="tin-noi-bat">
          <div class="col-md-7 col-sm-7 col-xs-12">
                  <a href="#">
                    <img src="http://docs.ttdt.dsp.vn/images/image/170807-hanquoc_1502160173883.jpg" style="width: 90%; display: block; margin: 0 auto;">
                    <p style="padding: 7px 0; text-align:center">Tổng thống Hàn Quốc sẽ tham dự Tuần lễ cấp cao APEC 2017 tại Đà Nẵng</p>
                  </a>
          </div>
          <div class="col-md-5 col-sm-5 col-xs-12 pad-left-0 pad-left-15-mb">
              <ul class="nav nav-tabs" id="myTabs" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Tin nổi bật</a>
                  </li>
                  <li role="presentation" class="">
                    <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Tin mới nhất</a>
                  </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade active in" role="tabpanel" id="home" aria-labelledby="home-tab">
                    <ul>
                      <li>
                        <div class="hot-news-block">
                            <img src="http://docs.ttdt.dsp.vn/images/image/1708112_1502435391162.JPG" style="display:none;">
                            <a href="#" class="news-title">
                              Thành ủy Đà Nẵng tổ chức Hội nghị quán triệt Nghị quyết Trung ương 5 (khóa XII)
                						</a>
                        </div>
                      </li>
                      <li>
                        <div class="hot-news-block">
                            <img src="http://docs.ttdt.dsp.vn/images/image/1708112_1502435391162.JPG" style="display:none;">
                            <a href="#" class="news-title">
                              Thành ủy Đà Nẵng tổ chức Hội nghị quán triệt Nghị quyết Trung ương 5 (khóa XII)
                            </a>
                        </div>
                      </li>
                      <li>
                        <div class="hot-news-block">
                            <img src="http://docs.ttdt.dsp.vn/images/image/1708112_1502435391162.JPG" style="display:none;">
                            <a href="#" class="news-title">
                              Thành ủy Đà Nẵng tổ chức Hội nghị quán triệt Nghị quyết Trung ương 5 (khóa XII)
                            </a>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-pane fade" role="tabpanel" id="profile" aria-labelledby="profile-tab">
                    <ul>
                      <li>
                        <div class="hot-news-block">
                            <img src="http://docs.ttdt.dsp.vn/images/image/1708112_1502435391162.JPG" style="display:none;">
                            <a href="#" class="news-title">
                              Thành ủy Đà Nẵng tổ chức Hội nghị quán triệt Nghị quyết Trung ương 5 (khóa XII)
                						</a>
                        </div>
                      </li>
                      <li>
                        <div class="hot-news-block">
                            <img src="http://docs.ttdt.dsp.vn/images/image/1708112_1502435391162.JPG" style="display:none;">
                            <a href="#" class="news-title">
                              Thành ủy Đà Nẵng tổ chức Hội nghị quán triệt Nghị quyết Trung ương 5 (khóa XII)
                            </a>
                        </div>
                      </li>
                      <li>
                        <div class="hot-news-block">
                            <img src="http://docs.ttdt.dsp.vn/images/image/1708112_1502435391162.JPG" style="display:none;">
                            <a href="#" class="news-title">
                              Thành ủy Đà Nẵng tổ chức Hội nghị quán triệt Nghị quyết Trung ương 5 (khóa XII)
                            </a>
                        </div>
                      </li>
                    </ul>
                  </div>
              </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="box-content">
        @include('guest.plugin.owl-slider')
      </div>
      {{-- <div class="">
        <img src="http://docs.ttdt.dsp.vn/images/banner/dienDanDauTu_1501663926644.jpg" width="100%">
      </div> --}}
    </div>
    @include('guest.layout.menu-right')
    </div>
  </div>
  <script>
    $(document).ready(function() {
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            }
        }
      });
    })
  </script>
@endsection
