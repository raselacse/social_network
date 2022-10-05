

@extends('frontend.index')

@section('header')


@endsection


@section('content')

<div class="col-lg-6">
		
<div class="central-meta">
			<div class="editing-info">
				<h5 class="f-title"><i class="ti-info-alt"></i> E-Library</h5>

				<form method="post" action="{{route('elibrary.store')}}" enctype="multipart/form-data">
					@csrf
					<div class="form-group half">	
					  <input type="text" name="title" id="input" required="required"/>
					  <label class="control-label" for="input">Title</label><i class="mtrl-select"></i>
					</div>

					<div class="form-group ">
						<h6>File</h6>	
						<input type="file" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" name="document" required="required"/>
	 
	                </div>
	                 <input type="hidden" name="user_id" id="" class="form-control" value="">
					
					<div class="submit-btns">
						<button type="button" class="mtr-btn"><span>Cancel</span></button>
						<button type="submit" class="mtr-btn"><span>Update</span></button>
					</div>
				</form>
			</div>
			
		</div>

	
	</div><!-- centerl meta -->



	

@endsection
