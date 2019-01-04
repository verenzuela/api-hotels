@component('layouts.home.base')
    @slot('title') Documentation @endslot
    @slot('metaDescription')
    @slot('metaKeywords')

    @slot('styles')  	
    	<link href="{{ asset('css/docs-template.css') }}" rel="stylesheet">
    @endslot

    @slot('scripts')

    @slot('navbar') @include('layouts.home.navbar') @endslot

    @section('app-content')

    	<div class="container">
    		
    	
			<div class="sidenav">
				<a href="{{ route('doc', ['doc' => 'get-token']) }}">Get Token</a>
				<a href="#">* Country</a>

			</div>

			<div class="main">
				<div class="document-content">

					<h3>Get all countries</h3>

					<h4>Request.</h4>
					<div class="table-responsive">
						<table class="table table-bordered">

							<thead class="table-info">
								<tr>
									<th class="col-md-2" scope="col">Method</th>
									<th class="col-md-10" scope="col">URL</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th scope="row">GET</th>
									<td>https://api.hotels.com/api/v1/countries</td>
								</tr>
							</tbody>

						</table>
					</div>

					<div class="table-responsive">
						<table class="table table-bordered">

							<thead class="table-info">
								<tr>
									<th class="col-md-4" scope="col">Type</th>
									<th class="col-md-4" scope="col">Params</th>
									<th class="col-md-4" scope="col">Values</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th scope="row">HEAD</th>
									<td>Authorization</td>
									<td>Bearer + ACCESS_TOKEN</td>
								</tr>
							</tbody>

						</table>
					</div>

					<h4>Response.</h4>
					<div class="table-responsive">
						<table class="table table-bordered">

							<thead class="table-info">
								<tr>
									<th class="col-md-4" scope="col">Status</th>
									<th class="col-md-8" scope="col">Respose</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th scope="row">200</th>
									<td>
										
										<pre id="json-1" style="color: #e83e8c; font-size: 12px;"></pre>
										<script type="text/javascript">
											var data ={ "message": "Countries list", "data": [ { "id": 1, "code": "PE", "name": "Perú" }, { "id": 2, "code": "VE", "name": "Venezuela" }, { "id": 3, "code": "EC", "name": "Ecuador" } ], "status": "ok", "code": 202 };
											document.getElementById("json-1").innerHTML = JSON.stringify(data, undefined, 2);
										</script>
																		
									</td>
								</tr>
							</tbody>

						</table>
					</div>

					<hr>

					<h3>Get a country</h3>

					<h4>Request.</h4>
					<div class="table-responsive">
						<table class="table table-bordered">

							<thead class="table-info">
								<tr>
									<th class="col-md-2" scope="col">Method</th>
									<th class="col-md-10" scope="col">URL</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th scope="row">GET</th>
									<td>https://api.hotels.com/api/v1/countries/{country}</td>
								</tr>
							</tbody>

						</table>
					</div>

					<div class="table-responsive">
						<table class="table table-bordered">

							<thead class="table-info">
								<tr>
									<th class="col-md-4" scope="col">Type</th>
									<th class="col-md-4" scope="col">Params</th>
									<th class="col-md-4" scope="col">Values</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th scope="row">HEAD</th>
									<td>Authorization</td>
									<td>Bearer + ACCESS_TOKEN</td>
								</tr>
							</tbody>

						</table>
					</div>

					<h4>Response.</h4>
					<div class="table-responsive">
						<table class="table table-bordered">

							<thead class="table-info">
								<tr>
									<th class="col-md-4" scope="col">Status</th>
									<th class="col-md-8" scope="col">Respose</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th scope="row">200</th>
									<td>
										
										<pre id="json-4" style="color: #e83e8c; font-size: 12px;"></pre>
										<script type="text/javascript">
											var data ={ "message": "Country 1", "data": { "id": 1, "code": "PE", "name": "Perú" }, "status": "ok", "code": 202 };
											document.getElementById("json-4").innerHTML = JSON.stringify(data, undefined, 2);
										</script>
																		
									</td>
								</tr>
							</tbody>

						</table>
					</div>

					<hr>

					<h3>Add a country</h3>

					<h4>Request.</h4>
					<div class="table-responsive">
						<table class="table table-bordered">

							<thead class="table-info">
								<tr>
									<th class="col-md-2" scope="col">Method</th>
									<th class="col-md-10" scope="col">URL</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th scope="row">POST</th>
									<td>https://api.hotels.com/api/v1/countries</td>
								</tr>
							</tbody>

						</table>
					</div>

					<div class="table-responsive">
						<table class="table table-bordered">

							<thead class="table-info">
								<tr>
									<th class="col-md-4" scope="col">Type</th>
									<th class="col-md-4" scope="col">Params</th>
									<th class="col-md-4" scope="col">Values</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th scope="row" class="align-middle">HEAD</th>
									<td class="align-middle">Authorization</td>
									<td class="align-middle">Bearer +  PERSONAL_ACCESS_TOKENS <br><strong>scope:</strong> manage-records</td>
								</tr>
								<tr>
									<th scope="row">HEAD</th>
									<td>Content-Type</td>
									<td>application/x-www-form-urlencoded</td>
								</tr>
								<tr>
									<th scope="row">HEAD</th>
									<td>Accept</td>
									<td>application/json</td>
								</tr>
								<tr>
									<th scope="row">POST</th>
									<td>name</td>
									<td>string [ required | min:3 | max:20 | unique ]</td>
								</tr>
								<tr>
									<th scope="row">POST</th>
									<td>code</td>
									<td>string [ optional | min:2 | max:5 ]</td>
								</tr>
							</tbody>

						</table>
					</div>

					<h4>Response.</h4>
					<div class="table-responsive">
						<table class="table table-bordered">

							<thead class="table-info">
								<tr>
									<th class="col-md-4" scope="col">Status</th>
									<th class="col-md-8" scope="col">Respose</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th scope="row">200</th>
									<td>
										
										<pre id="json-5" style="color: #e83e8c; font-size: 12px;"></pre>
										<script type="text/javascript">
											var data = { "message": "Country created", "data": { "id": 41, "name": "Venezuela", "code": "VE", "created_at": { "date": "2018-12-31 03:02:12.000000", "timezone_type": 3, "timezone": "UTC" } }, "status": "ok", "code": 200 };
											document.getElementById("json-5").innerHTML = JSON.stringify(data, undefined, 2);
										</script>
																		
									</td>
								</tr>
							</tbody>

						</table>
					</div>

					<hr>

					<h3>Update a country</h3>

					<h4>Request.</h4>
					<div class="table-responsive">
						<table class="table table-bordered">

							<thead class="table-info">
								<tr>
									<th class="col-md-2" scope="col">Method</th>
									<th class="col-md-10" scope="col">URL</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th scope="row">PUT|PATCH</th>
									<td>https://api.hotels.com/api/v1/countries/{country}</td>
								</tr>
							</tbody>

						</table>
					</div>

					<div class="table-responsive">
						<table class="table table-bordered">

							<thead class="table-info">
								<tr>
									<th class="col-md-4" scope="col">Type</th>
									<th class="col-md-4" scope="col">Params</th>
									<th class="col-md-4" scope="col">Values</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th scope="row" class="align-middle">HEAD</th>
									<td class="align-middle">Authorization</td>
									<td class="align-middle">Bearer +  PERSONAL_ACCESS_TOKENS <br><strong>scope:</strong> manage-records</td>
								</tr>
								<tr>
									<th scope="row">HEAD</th>
									<td>Content-Type</td>
									<td>application/x-www-form-urlencoded</td>
								</tr>
								<tr>
									<th scope="row">HEAD</th>
									<td>Accept</td>
									<td>application/json</td>
								</tr>
								<tr>
									<th scope="row">POST</th>
									<td>name</td>
									<td>string [ optional | min:3 | max:20 | unique ]</td>
								</tr>
								<tr>
									<th scope="row">POST</th>
									<td>code</td>
									<td>string [ optional | min:2 | max:5 ]</td>
								</tr>
							</tbody>

						</table>
					</div>

					<h4>Response.</h4>
					<div class="table-responsive">
						<table class="table table-bordered">

							<thead class="table-info">
								<tr>
									<th class="col-md-4" scope="col">Status</th>
									<th class="col-md-8" scope="col">Respose</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th scope="row">200</th>
									<td>
										
										<pre id="json-6" style="color: #e83e8c; font-size: 12px;"></pre>
										<script type="text/javascript">
											var data ={ "message": "Country 1 updated", "data": { "id": 1, "name": "Colombia", "code": "CO", "updated_at": { "date": "2018-12-31 03:26:48.000000", "timezone_type": 3, "timezone": "UTC" } }, "status": "ok", "code": 200 };
											document.getElementById("json-6").innerHTML = JSON.stringify(data, undefined, 2);
										</script>
																		
									</td>
								</tr>
							</tbody>

						</table>
					</div>

					<hr>

					<h3>Delete a country</h3>

					<h4>Request.</h4>
					<div class="table-responsive">
						<table class="table table-bordered">

							<thead class="table-info">
								<tr>
									<th class="col-md-2" scope="col">Method</th>
									<th class="col-md-10" scope="col">URL</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th scope="row">DELETE</th>
									<td>https://api.hotels.com/api/v1/countries/{country}</td>
								</tr>
							</tbody>

						</table>
					</div>

					<div class="table-responsive">
						<table class="table table-bordered">

							<thead class="table-info">
								<tr>
									<th class="col-md-4" scope="col">Type</th>
									<th class="col-md-4" scope="col">Params</th>
									<th class="col-md-4" scope="col">Values</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th scope="row" class="align-middle">HEAD</th>
									<td class="align-middle">Authorization</td>
									<td class="align-middle">Bearer +  PERSONAL_ACCESS_TOKENS <br><strong>scope:</strong> manage-records</td>
								</tr>
								<tr>
									<th scope="row">HEAD</th>
									<td>Content-Type</td>
									<td>application/x-www-form-urlencoded</td>
								</tr>
								<tr>
									<th scope="row">HEAD</th>
									<td>Accept</td>
									<td>application/json</td>
								</tr>
							</tbody>

						</table>
					</div>

					<h4>Response.</h4>
					<div class="table-responsive">
						<table class="table table-bordered">

							<thead class="table-info">
								<tr>
									<th class="col-md-4" scope="col">Status</th>
									<th class="col-md-8" scope="col">Respose</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th scope="row">200</th>
									<td>
										
										<pre id="json-7" style="color: #e83e8c; font-size: 12px;"></pre>
										<script type="text/javascript">					
				    						var data = { "message": "Country 1 deleted", "data":false, "status": "ok", "code": 200 };
											document.getElementById("json-7").innerHTML = JSON.stringify(data, undefined, 2);
										</script>
																		
									</td>
								</tr>
							</tbody>

						</table>
					</div>

				</div>
			</div>

		</div>

	@endsection
@endcomponent
