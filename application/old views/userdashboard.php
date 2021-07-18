<div class="col-sm-6 col-lg-3">
	<div class="card text-white bg-flat-color-1">
		<div class="card-body pb-0">
			<div class="dropdown float-right">
				<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
					<i class="fa fa-cog"></i>
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
					<div class="dropdown-menu-content">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</div>
			<h4 class="mb-0">
				<span class="count">10468</span>
			</h4>
			<p class="text-light">Service Working</p>

			<div class="chart-wrapper px-0" style="height: 70px;" height="70">
				<canvas id="widgetChart1"></canvas>
			</div>
		</div>
	</div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
	<div class="card text-white bg-flat-color-2">
		<div class="card-body pb-0">
			<div class="dropdown float-right">
				<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
					<i class="fa fa-cog"></i>
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
					<div class="dropdown-menu-content">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</div>
			<h4 class="mb-0">
				<?php foreach($data as $row){
					// print_r($row['count(*)']);
					// die;
				?>
				<span class="count"><?php echo ($row['count(*)']); ?></span>
			<?php } ?>
			</h4>
			<p class="text-light">Services Active</p>

			<div class="chart-wrapper px-0" style="height: 70px;" height="70">
				<canvas id="widgetChart2"></canvas>
			</div>
		</div>
	</div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
	<div class="card text-white bg-flat-color-3">
		<div class="card-body pb-0">
			<div class="dropdown float-right">
				<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
					<i class="fa fa-cog"></i>
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
					<div class="dropdown-menu-content">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</div>
			<h4 class="mb-0">
				<span class="count">10468</span>
			</h4>
			<p class="text-light">Serices Verfied</p>
		</div>

		<div class="chart-wrapper px-0" style="height: 70px;" height="70">
			<canvas id="widgetChart3"></canvas>
		</div>
	</div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
	<div class="card text-white bg-flat-color-4">
		<div class="card-body pb-0">
			<div class="dropdown float-right">
				<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
					<i class="fa fa-cog"></i>
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
					<div class="dropdown-menu-content">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</div>
			<h4 class="mb-0">
				<?php foreach($all_data as $total){?>
				<span class="count"><?php echo ($total['count(*)']); ?></span>
			<?php }?>
			</h4>
			<p class="text-light">Services Total</p>

			<div class="chart-wrapper px-3" style="height: 70px;" height="70">
				<canvas id="widgetChart4"></canvas>
			</div>
		</div>
	</div>
</div>
<!--/.col-->

<div class="col-lg-6">
	<div class="card">
		<div class="card-header">
			<h4>Geometry overlays</h4>
		</div>
		<div class="card-body">
			<div class="map" id="map-3"></div>
		</div>
	</div>
	<!-- /# card -->
</div>

<div class="col-lg-6">
	<div class="card">
		<div class="card-header">
			<h4>KML layers</h4>
		</div>
		<div class="card-body">
			<div id="map-6" class="map"></div>
		</div>
	</div>
	<!-- /# card -->
</div>