@extends('frontend.index')

@section('header')


@endsection


@section('content')

<div class="col-lg-6">
		
		<!-- table -->
		<div class="content animate-panel central-meta">
			<button class="btn btn-info" style="margin-bottom: 10px;"><a href="{{route('elibrary.form')}}">Add File</a></button>	
        <div class="row ">
            <div class="col-lg-12 text-center">
              

                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>File</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @if(count($view)>0)

                @foreach($view as $data)
                    <tr>
                        
                        <td>{{$loop->iteration}}</td>

                        <td>{{$data->title}}</td>

                        <td><a href="{{asset('public/post/document/'.$data->document)}}" download><i class="fa fa-download" aria-hidden="true"></i></a>
                        </td>
                            
                        <td>
                        	@if(Auth::user()->id == $data->created_by)

                            <!-- <a href="{{route('elibrary.edit',$data->id)}}" class="btn btn-info btn-xs" > <i class="fa fa-edit"></i></a> -->
                            <a href="{{route('elibrary.delete',$data->id)}}" class="btn btn-danger btn-xs" > <i class="fa fa-trash"></i></a>
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