<script type="text/javascript" src="layout/angular.js"></script>
<div class="container" ng-app="search_app" ng-controller="search_controller">
	<div style="border-bottom: 1px solid grey;">
		<ul class="navbar d-flex">
			<li class="navbar nav-item"><h1 class="h5">Matériel Sortie</h1></li>
			<li class="navbar nav-item">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">Search</span>
						<input type="text" class="form-control" name="search_query" ng-model="search_query">
					</div>
				</div>
			</li>
			<li class="navbar nav-item btn btn-dark text-white"><a href="" class="nav-link">Liste</a></li>
		</ul>
	</div>

	<p>{{ "hello" }}</p>
</div>
<script type="text/javascript">
	app = angular.module('search_app', []);
	app.controller('search_controller', function($scope,$http){

	});
</script>