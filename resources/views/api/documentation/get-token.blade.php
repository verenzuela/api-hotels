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
				<a href="#">* Get Token</a>
				<a href="{{ route('doc', ['doc' => 'country']) }}">Country</a>

			</div>

			<div class="main">
				<div class="document-content">

					<h3>Get Access Token</h3>
					<p>Return a valid token.</p>

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
									<td>https://api.hotels.com/oauth/token</td>
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
									<td>'Content-Type':</td>
									<td>'application/json'</td>
								</tr>
								<tr>
									<th scope="row">POST</th>
									<td>client_id</td>
									<td>YOUR_CLIENT_ID</td>
								</tr>
								<tr>
									<th scope="row">POST</th>
									<td>client_secret</td>
									<td>YOUR_CLIENT_SECRET</td>
								</tr>
								<tr>
									<th scope="row">POST</th>
									<td>grant_type</td>
									<td>'client_credentials'</td>
								</tr>
								<tr>
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
				    						var data = { "token_type": "Bearer", "expires_in": 31536000, "access_token": "ACCESS_TOKEN" };
											document.getElementById("json-1").innerHTML = JSON.stringify(data, undefined, 2);
										</script>
																		
									</td>
								</tr>
							</tbody>

						</table>
					</div>

					<hr>

					<h3>Get Personal Access Tokens</h3>

					<ul>
						<li>Go to Auth Dashboard</li>
						<li>Click on Create New Token in Personal Access Tokens</li>
						<li>Set a name, and select scopes</li>
						<li>Cick on create</li>
						<li>Copy you personal access token</li>
					</ul>

					<hr>

					<h3>Get Client Secret</h3>

					<ul>
						<li>Go to Auth Dashboard</li>
						<li>Click on Create New Client in OAuth Clients</li>
						<li>Set a name, and url to redirect</li>
						<li>Cick on create</li>
						<li> A Client ID and Secret will be displayed in the list.</li>
					</ul>

				</div>
			</div>

		</div>

	@endsection
@endcomponent
