@php
namespace App\Helpers;
$product_place_holder_image=ImageHelper::getProductPlaceholderImage();
use Illuminate\Support\Facades\Session;
@endphp
@extends('admin.layouts.app')
@section('content')
	<div class="main-body">
		<div class="inner-body">
			<div class="top-trip clearfix">
				<h2>Update Home Top slider</h2>
			</div>
			<div class="add-driver clear-col">
				@if($message = Session::get('message'))
					<div class="alert @if(Session::get('message')) alert-success @else alert-danger @endif">
						<ul>
							<li>{{ $message }}</li>
						</ul>
					</div>
				@endif
				<form method="POST" enctype="multipart/form-data" action="{{ route('landing.update') }}">
					@csrf
					{{ method_field('PUT') }}
					<input type="hidden" name="section" value="home_top_slider" />
					<input hidden="hidden" name="order" value="1"/>
					<div class="input-form ">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Title</label>
                                    <input type="text" placeholder="Title" class="form-control" name="title" value="{{old('title') ?? $sectionData->title }}">
									@error('category_name')
										<span class="invalid-feedback" role="alert">
											<strong style="color: red">{{ $message }}</strong>
										</span>
									@enderror
                                </div>
                                <div class="form-group">
									<label>Sub Title</label>
									<input type="text" placeholder="Sub Title" class="form-control" name="sub_title" value="{{old('sub_title') ?? $sectionData->sub_title}}">
									@error('sub_title')
										<span class="invalid-feedback" role="alert">
											<strong style="color: red">{{ $message }}</strong>
										</span>
									@enderror
                                </div>
                                <div class="form-group">
									<label>Description</label>
									<input type="text" placeholder="Description" class="form-control" name="description" value="{{old('description') ?? $sectionData->description}}">
									@error('description')
										<span class="invalid-feedback" role="alert">
											<strong style="color: red">{{ $message }}</strong>
										</span>
									@enderror
								</div>

								@php 
								  $totalPreviewImages = count($sectionData->images());
								  $totalnewImage      = 7 - $totalPreviewImages;
  								@endphp

								<!--images for slider-->
								<div class="upload-photo-custom">
									<h2>Upload slider images</h2>
									<div class="upload-photo">
										@foreach($sectionData->images() as $key => $value)
										@php $value = (Object) $value @endphp
											<div class="single-photo">
												<button class="remove"><i class="fa fa-times"></i></button>
												<label>
													<input type="file" name="images[]">
													<input type="hidden" class="img-id" name="img_id[]" value="{{$value->id}}" />
													<img src="{{$value->image}}">
												</label>
											</div>
										@endforeach
										@for ($i=1;$i<=$totalnewImage;$i++)
											<div class="single-photo">
												<label>
													<input type="file" name="images[]">
													<img src="http://localhost/olx/public/assets/frontend/images/upload.jpg">
												</label>
											</div>
										@endfor
	
									</div>
								</div>
								<!--end-->
							</div>
						</div>
					</div>
					<div class="buttons">
						<button type="submit" class="same-btn1">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
@push('js')
 <script>
	 //Image Preview
	 $('input[type="file"]').on('change',function(event){
      // event.preventDefault();
       tmppath = URL.createObjectURL(event.target.files[0]);
       $(this).parents('.single-photo').find('img').attr('src',tmppath);
	   $(this).parents('.single-photo').find('.img-id').remove();
       $(this).parents('.single-photo').append('<button class="remove"><i class="fa fa-times"></i></button>');
      });
     //Remove Image
		 $('body').on('click','.single-photo button.remove',function(event){
        event.preventDefault();
        $(this).parents('.single-photo').find('input[type="file"]').val(null);
        $(this).parents('.single-photo').find('img').attr('src',"http://localhost/olx/public/assets/frontend/images/upload.jpg");
		$(this).parents('.single-photo').find('.img-id').remove();
        $(this).parents('.single-photo').find('.remove').remove();
      });

 </script>
@endpush