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
                <th>Friend Name </th>
                 <th>Email</th>
                 <th>Image</th>
                 

            </tr>
        </thead>
        <tbody>
        	@dd($myfriends)
              @if(count($myfriends)>0)

            	@foreach($myfriends as $data)
					<tr>
						
						<td>{{$loop->iteration}}</td>
						<td>{{$data->full_name}}</td>
                        <td>{{$data->email}}</td>
						<td> <img height="50px" width="40px" src="{{asset('public/profile/profile_image/'.$data->profile_image)}}" alt="not found"></td>

						
	
					</tr>
					@endforeach
					@else
                    <tr>
                        <td colspan="5">
                            No Friend Yet
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
