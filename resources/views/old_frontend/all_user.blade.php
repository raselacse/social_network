@extends('layouts.default')
@section('content')
    <div class="content animate-panel">
    	<div class="card">
    		<h2>User Control</h2>
        <div class="row">
            <div class="col-lg-12 text-center">
              <!--   <h2>
                    {!! $title->site_title !!}
                </h2> -->

                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
            	<th>ID</th>
                <th>User name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Post</th>
                <th>Page</th>
                <!-- <th>Friend</th> -->
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            	@foreach($user as $data)
					<tr>
						
						<td>{{$loop->iteration}}</td>
						<td>{{$data->full_name}}</td>
						<td>{{$data->email}}</td>
						<td> <img height="50px" width="40px" src="{{asset('public/profile/profile_image/'.$data->profile_image)}}" alt="not found"></td>

						<td><button class="btn btn-primary"><a href="{{route('all_user_post',$data->id)}}" style="color:white;">All Post</a></button></td>
						<td><button class="btn btn-success" ><a href="{{route('all_user_page',$data->id)}}"style="color:white;">All Page</a></button></td>
						<!-- <td><button class="btn btn-warning" ><a href="{{route('all_user_friend',$data->id)}}"style="color:white;">All Friend</a></button></td> -->
						 	
						<td>
							<a href="{{route('edit_user',$data->id)}}" class="btn btn-info btn-xs" > <i class="fas fa-pencil-alt"></i></a>
							<a href="{{route('delete_user',$data->id)}}" class="btn btn-danger btn-xs" > <i class="fas fa-trash-alt"></i></a>
							

						</td>
	
					</tr>
					@endforeach
          
        </tbody>
    </table>

                <p class="col-md-offset-1">
                    <!--Better Customer Experience-->
                </p>
            </div>
        </div>
        </div>
    </div>


@stop


@section('js')





    <script>
        $(document).ready(function(){

            $('.randColorChange').each(function() {
                $(this).css('background',randomColor());
                $(this).css('color','white');
                $(this).css('text-align','center');

            });

        });

        var safeColors = ['11','33','66','99','cc','ee'];//["#00e64d","#ff80aa","#990099","#30DDBC","#ff8533"];
        var rand = function() {
            return Math.floor(Math.random()*6);
        };
        var randomColor = function() {
            var r = safeColors[rand()];
            var g = safeColors[rand()];
            var b = safeColors[rand()];
            return "#"+r+g+b;
            //return r;
        };
    </script>

    <script type="text/javascript">
    	$(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
          } );
 
    new $.fn.dataTable.FixedHeader( table );
         } );
    </script>
@endsection
