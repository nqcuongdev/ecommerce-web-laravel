@extends('master-admin')
@section('content')
<div class="pcoded-content">
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<!-- List view card start -->
							<div class="card">
								<div class="card-header">
									<h5>List Blog</h5>
									<div class="card-header-right">
										<ul class="list-unstyled card-option">
											<li><a href="{{route('get.add-blog')}}"><i class="typcn typcn-plus"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="row card-block">
									<div class="col-md-12">
										<ul class="list-view">
											@foreach($blog as $item)
											<li>
												<div class="card list-view-media">
													<div class="card-block">
														<div class="media">
															<a class="media-left" href="#">
																<img class="media-object card-list-img"
																width="200px"
																height="100px" 
																src="{{url($item->image)}}"
																alt="Generic placeholder image">
															</a>
															<div class="media-body">
																<div class="col-xs-12">
																	<h6 class="d-inline-block">
																	{{$item->title}}</h6>

																</div>
																<div class="f-13 text-muted m-b-15">
																	{{$item->author}}
																</div>
																<p>{!! $item->content !!}</p>
																<div class="m-t-15">
																	<a href=""
																	class="btn btn-facebook btn-mini waves-effect waves-light">
																	<span class="icofont icofont-ui-edit"></span>
																</a>
																@if($item->status == 1)
                                                                <a href="{{route('get.disable-blog',$item->id)}}"
																class="btn btn-danger btn-mini waves-effect waves-light">
																<span class="icofont icofont-ui-block"></span>
																</a>
                                                                @else
                                                                <a href="{{route('get.active-blog',$item->id)}}" 
																class="btn btn-success btn-mini waves-effect waves-light">
																<span class="icofont icofont-check"></span>
																</a>
																<a href=""
																class="btn btn-dribbble btn-mini waves-effect waves-light">
																<span class="icofont icofont-ui-delete"></span>
																</a>
                                                                @endif
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<!-- List view card end -->
			</div>
		</div>
	</div>
</div>	
</div>	
</div>	
</div>
@endsection