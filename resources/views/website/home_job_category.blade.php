<div class="service-style-one section-spacing bg-gray">
  <div class="container">
    <div class="theme-title-one">
      <h2>Job Category</h2>
    </div>
    <!-- /.theme-title-one -->
    <div class="wrapper">
      <div class="row">
        @foreach($menus as $menu)
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="single-service">
              <div class="img-box">
                <img src="{{$menu->banner_image}}" alt="" />
              </div>
              <div class="text">
                <h5><a href="{{route('category',$menu->nav_name)}}">{{$menu->caption}}</a></h5>
                <p>{{$menu->short_content}}</p>
                <a href="{{route('category',$menu->nav_name)}}" class="read-more"
                  >View Job<i class="fa fa-angle-right" aria-hidden="true"></i
                ></a>
              </div>
              <!-- /.text -->
            </div>
            <!-- /.single-service -->
          </div>
        @endforeach
        <!-- /.col- -->
      </div>
      <!-- /.row -->
      <div class="view-all-btn">
        <a href="job-category.html" class="theme-button-one">View All</a>
      </div>
    </div>
    <!-- /.wrapper -->
  </div>
  <!-- /.container -->
</div>
<!-- /.Job Category -->
