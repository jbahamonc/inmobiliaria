@extends('layout.app')

@section('title')
{{ $title }} - Name company
@endsection

@section('content')
<section class="property section">
	<div class="container">
		<div class="title-property">
			<div>
				<h1 class="title-primary">Lorem ipsum dolor sit met</h1>
				<p class="text-muted no-margin">Lorem ipsum, dolor, sit met</p>
			</div>
			<div class="price">
                <h4>Lorem</h4>
                <span>$ 80.000.000</span>
            </div>
		</div>
		<div class="slider slider-mini">
		    <ul class="slides">
		      	<li>
		        	<img src="{{ asset('images/slide-1.jpg') }}">
		      	</li>
		      	<li>
		        	<img src="{{ asset('images/slide-2.jpg') }}">
		      	</li>
		    </ul>
		</div>
		<div class="row content-property">
			<div class="col m8" style="padding-left: 0;">
				<ul class="collection with-header shadow" style="border: 0;">
			        <li class="collection-header inline">
			        	<div>
				        	<h4 class="truncate">
				        		<a href="" class="title-primary">Lorem ipsum dolor sit met</a>
				        	</h4>
				        	<p class="text-muted no-margin">Lorem ipsum, dolor, sit met</p>
				        </div>
			        	<div class="shared">
			        		<div class="fixed-action-btn direction-left click-to-toggle" >
							    <a class="btn-floating">
							      <i class="material-icons">share</i>
							    </a>
							    <ul>
							      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
							      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
							      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
							      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
							    </ul>
							</div>
			        	</div>
			        </li>
			        <li class="collection-item no-border">
						<div class="desc">
		                    <div class="desc__box-icon">
		                        <h4>Lorem</h4>
		                        <div>
		                           <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
		                              <defs>
		                              </defs>
		                              <path d="M1111.91,600.993h16.17a2.635,2.635,0,0,1,2.68,1.773l1.21,11.358a2.456,2.456,0,0,1-2.61,2.875h-18.73a2.46,2.46,0,0,1-2.61-2.875l1.21-11.358A2.635,2.635,0,0,1,1111.91,600.993Zm0.66-7.994h3.86c1.09,0,2.57.135,2.57,1l0.01,3.463c0.14,0.838-1.72,1.539-2.93,1.539h-4.17c-1.21,0-2.07-.7-1.92-1.539l0.37-3.139A2.146,2.146,0,0,1,1112.57,593Zm11,0h3.86a2.123,2.123,0,0,1,2.2,1.325l0.38,3.139c0.14,0.838-.72,1.539-1.93,1.539h-5.17c-1.21,0-2.07-.7-1.92-1.539L1121,594C1121,593.1,1122.48,593,1123.57,593Z" transform="translate(-1108 -593)"></path>
		                           </svg>
		                           <span>3</span>
		                        </div>
		                     </div>
		                    <div class="desc__box-icon">
		                        <h4>Lorem</h4>
		                        <div>
		                           <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24" viewBox="0 0 23.69 24">
		                             <path d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z" transform="translate(-1196.31 -593)"></path>
		                           </svg>
		                           <span>3</span>
		                        </div>
		                     </div>
		                    <div class="desc__box-icon">
		                        <h4>Lorem</h4>
		                        <div>
		                           <svg class="rh_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
		                              <g>
		                                 <circle cx="2" cy="2" r="2"></circle>
		                              </g>
		                              <g>
		                                 <circle cx="2" cy="22" r="2"></circle>
		                              </g>
		                              <g>
		                                 <circle cx="22" cy="2" r="2"></circle>
		                              </g>
		                              <rect x="1" y="1" width="2" height="22"></rect>
		                              <rect x="1" y="1" width="22" height="2"></rect>
		                              <path opacity="0.5" d="M23,20.277V1h-2v19.277C20.7,20.452,20.452,20.7,20.277,21H1v2h19.277c0.347,0.596,0.984,1,1.723,1
		                                 c1.104,0,2-0.896,2-2C24,21.262,23.596,20.624,23,20.277z"></path>
		                              </svg>
		                           <span>450 mts</span>
		                        </div>
		                     </div>
		                </div>
			        </li>
			        <li class="collection-item no-border">
			        	<h4 class="title-secundary"><b>Lorem ipsum</b></h4>
						<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			        </li>
					<li class="collection-item no-border">
			        	<h4 class="title-secundary"><b>Lorem ipsum</b></h4>
						<ul class="features">
							<li>
								<i class="material-icons title-secundary">check</i>
								<span class="text-muted">lorem</span>
							</li>
							<li>
								<i class="material-icons title-secundary">check</i>
								<span class="text-muted">lorem</span>
							</li>
							<li>
								<i class="material-icons title-secundary">check</i>
								<span class="text-muted">lorem</span>
							</li>
						</ul>
			        </li>
					<li class="collection-item no-border">
						<h4 class="title-secundary"><b>Lorem ipsum</b></h4>
						<div class="row gallery">
							@for ($i=0; $i < 6; $i++)
							<div class="col s4">
								<div class="material-placeholder" style="">
									<img class="materialboxed responsive-img" width="250" src="{{ asset('images/slide-1.jpg') }}">
								</div>
							</div>
							@endfor
						</div>
					</li>
			    </ul>
				<section>
					<h4 class="title-secundary" style="margin-bottom: 2rem;padding-top: 1rem;"><b>Otros Inmuebles</b></h4>
					<div class="row">
						@for ($i=0; $i < 4; $i++)
							<div class="col s12 col m6">
						      	<div class="card hoverable">
						        	<div class="card-image">
						          		<img src="http://localhost:8000/images/property-1.jpg">
						          		<a href="/property/lorem-ipsum-1" class="btn-floating pulse halfway-fab waves-effect waves-light red">
											<i class="material-icons">arrow_forward</i>
										</a>
						        	</div>
						        	<div class="card-content">
						        		<a href="/property/lorem-ipsum-1"><span class="card-title title-primary"><b>Lorem ipsum dolor sit</b></span></a>
						          		<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ipsam ex architecto quis hic, commodi eligendi quae minus voluptates molestiae, aut inventore nobis quibusdam, molestias reprehenderit impedit repellat ipsum voluptatibus...</p>
						          		<div class="desc">
						                    <div class="desc__box-icon">
						                        <h4>Lorem</h4>
						                        <div>
						                           <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						                              <defs>
						                              </defs>
						                              <path d="M1111.91,600.993h16.17a2.635,2.635,0,0,1,2.68,1.773l1.21,11.358a2.456,2.456,0,0,1-2.61,2.875h-18.73a2.46,2.46,0,0,1-2.61-2.875l1.21-11.358A2.635,2.635,0,0,1,1111.91,600.993Zm0.66-7.994h3.86c1.09,0,2.57.135,2.57,1l0.01,3.463c0.14,0.838-1.72,1.539-2.93,1.539h-4.17c-1.21,0-2.07-.7-1.92-1.539l0.37-3.139A2.146,2.146,0,0,1,1112.57,593Zm11,0h3.86a2.123,2.123,0,0,1,2.2,1.325l0.38,3.139c0.14,0.838-.72,1.539-1.93,1.539h-5.17c-1.21,0-2.07-.7-1.92-1.539L1121,594C1121,593.1,1122.48,593,1123.57,593Z" transform="translate(-1108 -593)"></path>
						                           </svg>
						                           <span>3</span>
						                        </div>
						                    </div>
						                    <div class="desc__box-icon">
						                        <h4>Lorem</h4>
						                        <div>
						                           <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24" viewBox="0 0 23.69 24">
						                             <path d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z" transform="translate(-1196.31 -593)"></path>
						                           </svg>
						                           <span>3</span>
						                        </div>
						                    </div>
						                    <div class="desc__box-icon">
						                        <h4>Lorem</h4>
						                        <div>
						                           <svg class="rh_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
						                              <g>
						                                 <circle cx="2" cy="2" r="2"></circle>
						                              </g>
						                              <g>
						                                 <circle cx="2" cy="22" r="2"></circle>
						                              </g>
						                              <g>
						                                 <circle cx="22" cy="2" r="2"></circle>
						                              </g>
						                              <rect x="1" y="1" width="2" height="22"></rect>
						                              <rect x="1" y="1" width="22" height="2"></rect>
						                              <path opacity="0.5" d="M23,20.277V1h-2v19.277C20.7,20.452,20.452,20.7,20.277,21H1v2h19.277c0.347,0.596,0.984,1,1.723,1
						                                 c1.104,0,2-0.896,2-2C24,21.262,23.596,20.624,23,20.277z"></path>
						                              </svg>
						                           <span>450 mts</span>
						                        </div>
						                     </div>
						                </div>
						                <div class="price">
						                    <h4>Lorem ipsum</h4>
						                    <span>$ 80.000.000</span>
						                </div>
						        	</div>
						      	</div>
						    </div>
						@endfor
					</div>
				</section>
			</div>
			<div class="col m4" style="padding-right: 0;">
				<div class="card" style="margin-top: 0;">
					<div class="card-content">
						<div class="center icon-contact"><i class="material-icons">contact_phone</i></div>
						<h6 class="title-primary center">Lorem ipsum</h6>
						<ul class="collection contact">
							<li class="collection-item">
								<div>Lorem<span class="secondary-content">333-333-333</span></div>
							</li>
							<li class="collection-item">
								<div>Lorem<span class="secondary-content">333-333-333</span></div>
							</li>
							<li class="collection-item">
								<div>Lorem<span class="secondary-content">333-333-333</span></div>
							</li>
							<li class="collection-item">
								<div>Lorem<span class="secondary-content">333-333-333</span></div>
							</li>
						</ul>
					</div>
					<a href="#" class="btn btn-block btn-large no-shadow">escribenos</a>
				</div>
				<h5 style="margin: 2rem 0 2rem;">Inmuebles Similares</h5>
				<div class="row">
					@for ($i=0; $i < 2; $i++)
						<div class="col s12">
							<div class="card hoverable">
								<span class="badge">OFERTA</span>
								<div class="card-image">
									<img src="http://localhost:8000/images/property-1.jpg">
									<a href="/property/lorem-ipsum-1" class="btn-floating pulse halfway-fab waves-effect waves-light red">
										<i class="material-icons">arrow_forward</i>
									</a>
								</div>
								<div class="card-content">
									<a href="property/lorem-ipsum-1"><span class="card-title title-primary"><b>Lorem ipsum dolor sit</b></span></a>
									<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ipsam ex architecto quis hic, commodi eligendi quae minus voluptates molestiae, aut inventore nobis quibusdam, molestias reprehenderit impedit repellat ipsum voluptatibus.</p>
									<div class="desc">
										<div class="desc__box-icon">
											<h4>Lorem</h4>
											<div>
											   <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
												  <defs>
												  </defs>
												  <path d="M1111.91,600.993h16.17a2.635,2.635,0,0,1,2.68,1.773l1.21,11.358a2.456,2.456,0,0,1-2.61,2.875h-18.73a2.46,2.46,0,0,1-2.61-2.875l1.21-11.358A2.635,2.635,0,0,1,1111.91,600.993Zm0.66-7.994h3.86c1.09,0,2.57.135,2.57,1l0.01,3.463c0.14,0.838-1.72,1.539-2.93,1.539h-4.17c-1.21,0-2.07-.7-1.92-1.539l0.37-3.139A2.146,2.146,0,0,1,1112.57,593Zm11,0h3.86a2.123,2.123,0,0,1,2.2,1.325l0.38,3.139c0.14,0.838-.72,1.539-1.93,1.539h-5.17c-1.21,0-2.07-.7-1.92-1.539L1121,594C1121,593.1,1122.48,593,1123.57,593Z" transform="translate(-1108 -593)"></path>
											   </svg>
											   <span>3</span>
											</div>
										</div>
										<div class="desc__box-icon">
											<h4>Lorem</h4>
											<div>
											   <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24" viewBox="0 0 23.69 24">
												 <path d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z" transform="translate(-1196.31 -593)"></path>
											   </svg>
											   <span>3</span>
											</div>
										</div>
										<div class="desc__box-icon">
											<h4>Lorem</h4>
											<div>
											   <svg class="rh_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
												  <g>
													 <circle cx="2" cy="2" r="2"></circle>
												  </g>
												  <g>
													 <circle cx="2" cy="22" r="2"></circle>
												  </g>
												  <g>
													 <circle cx="22" cy="2" r="2"></circle>
												  </g>
												  <rect x="1" y="1" width="2" height="22"></rect>
												  <rect x="1" y="1" width="22" height="2"></rect>
												  <path opacity="0.5" d="M23,20.277V1h-2v19.277C20.7,20.452,20.452,20.7,20.277,21H1v2h19.277c0.347,0.596,0.984,1,1.723,1
													 c1.104,0,2-0.896,2-2C24,21.262,23.596,20.624,23,20.277z"></path>
												  </svg>
											   <span>450 mts</span>
											</div>
										 </div>
									</div>
									<div class="price">
										<h4>Lorem ipsum</h4>
										<span>$ 80.000.000</span>
									</div>
								</div>
							</div>
						</div>
					@endfor
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>

@endsection
