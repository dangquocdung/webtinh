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
    $("#featured-slider").owlCarousel({
        items : 6,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        navigation : false,
        pagination : false,
    });
  })
</script>
@endsection
