@extends('layouts.default')
@section('content')
    <div class="content animate-panel">
        <div class="row">
            <div class="col-lg-12 text-center">
              <!--   <h2>
                    {!! $title->site_title !!}
                </h2> -->

                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
            	<th>ID</th>
                <th>Content</th>
                <th>Image</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @if(count($post)>0)

            	@foreach($post as $data)
					<tr>
						
						<td>{{$loop->iteration}}</td>
						<td>{{$data->post_content}}</td>
						<td> <img height="50px" width="40px" src="{{asset('public/post/image/'.$data->image)}}" alt="not found"></td>
						 	
						<td>
							<a href="{{route('all_user_post_edit',$data->id)}}" class="btn btn-info btn-xs" > <i class="fas fa-pencil-alt"></i></a>
							<a href="{{route('all_user_post_delete',$data->id)}}" class="btn btn-danger btn-xs" > <i class="fas fa-trash-alt"></i></a>
							

						</td>
	
					</tr>
					@endforeach
                    @else
                    <tr>
                        <td colspan="4">
                            No Post Yet
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
