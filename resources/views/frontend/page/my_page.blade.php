 @extends('frontend.index')

@section('header')
<section>
		<div class="feature-photo">
			<figure><img src="{{asset('public/profile/profile_banner/'.$image->profile_banner)}}" alt=""></figure>
			<div class="add-btn">
				<span>{{$requestcount}} followers</span>
				<a href="#" title="" data-ripple="">Add Friend</a>
			</div>
			<form class="edit-phto">
				<i class="fa fa-camera-retro"></i>
				<label class="fileContainer">
					Edit Cover Photo
				<input type="file"/>
				</label>
			</form>
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
							<figure>
								<img src="{{asset('public/profile/profile_image/'.$image->profile_image)}}" alt="">
								<form class="edit-phto">
									<i class="fa fa-camera-retro"></i>
									<label class="fileContainer">
										Edit Display Photo
										<input type="file"/>
									</label>
								</form>
							</figure>
						</div>
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">
								  <h5>{{Auth::user()->full_name}}</h5>
								  <span>{{Auth::user()->email}}</span>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area -->

@endsection


@section('content')


<div class="col-lg-6">
		
		<!-- table -->
		<div class="content animate-panel central-meta">
			<h4>Page List</h4>

		   <div class="row ">
            <div class="col-lg-12 text-center">
              

                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Page name</th>
                <th>Action</th>
                

            </tr>
        </thead>
        <tbody>
            @if(count($my_page)>0)

               @foreach($my_page as $data)
                    <tr>
                        
                       

                        <td><a href="{{route('my_page.view_page',$data->id)}}">{{$data->page_name}}</a></td>
  
                        <td>
                        	@if(Auth::user()->id == $data->created_by)

                            <!-- <a href="{{route('create_page.edit_page',$data->id)}}" class="btn btn-info btn-xs" > <i class="fa fa-edit"></i></a> -->
                            <a href="{{route('create_page.delete_page',$data->id)}}" class="btn btn-danger btn-xs" > <i class="fa fa-trash"></i></a>
                          @endif

                        </td>
    
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="3">
                            No page Yet
                        </td>
                    </tr>
                    @endif
          
        </tbody>
    </table>

                <p class="col-md-offset-1">
                    <!--Better Customer Experience-->
                </p>
            </div>
        </div>
    </div>

	
	</div><!-- centerl meta -->


                           
@endsection