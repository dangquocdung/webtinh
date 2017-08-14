@extends('guest.layout.main')
@section('title')
  <title>Trang chủ</title>
@endsection
@section('content')
  <div class="container">
      <div class="row">
          <div class=".col-lg-9 col-md-9 col-sm-12 col-xs-12 portlet-layout layout-left margin-mobile">
              <div class="col-md-12">
                  <div class="portlet-content">
                    @include('guest.home.tinnoibat')
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      @include('guest.plugin.featured-slider')
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      <img src="http://docs.ttdt.dsp.vn/images/banner/dienDanDauTu_1501663926644.jpg" width="100%">
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      @include('guest.home.tintucsukien')
                  </div>
              </div>
          </div>
          @include('guest.layout.menu-right')
      </div>
  </div>


  <script>
  $(document).ready(function() {
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 3,
          nav: false
        },
        1000: {
          items: 5,
          nav: true,
          loop: false,
          margin: 20
        }
      }
    })
  })
</script>
@endsection
