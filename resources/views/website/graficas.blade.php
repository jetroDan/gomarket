@extends('website.layout.defaultAdmin')

@section('titulo', 'Graficas')

@section("contenido")


       <!----->
      <!---Script de graficas-->
         <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>		
<div class="content-main">

 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="/homeAdmin">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Graphs</span>
				</h2>
		    </div>
		<!--//banner-->
	
 	<!--//grid-->
 	<div class="graph">
<div class="graph-grid">
	<div class="col-md-6 graph-1">
		<div class="grid-1">
									<h4>Bar</h4>
									<canvas id="bar1" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
									<script>
										var barChartData = {
											labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Mon","Tue","Wed","Thu"],
											datasets : [
												{
													fillColor : "#FBB03B",
													strokeColor : "#FBB03B",
													data : [25,40,50,65,55,30,20,10,6,4]
												},
												{
													fillColor : "#FBB03B",
													strokeColor : "#FBB03B",
													data : [30,45,55,70,40,25,15,8,5,2]
												}
											]
											
										};
											new Chart(document.getElementById("bar1").getContext("2d")).Bar(barChartData);
									</script>
								</div>
	</div>
	<div class="col-md-6 graph-2">
		<div class="grid-1">
								<h4>Line</h4>
								<canvas id="line1" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
								<script>
										var lineChartData = {
											labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Mon"],
											datasets : [
												{
													fillColor : "#fff",
													strokeColor : "#1ABC9C",
													pointColor : "#1ABC9C",
													pointStrokeColor : "#1ABC9C",
													data : [20,35,45,30,10,65,40]
												}
											]
											
										};
										new Chart(document.getElementById("line1").getContext("2d")).Line(lineChartData);
								</script>
							</div>
	</div>
	<div class="clearfix"> </div>
</div>
	<div class="col-md-12 graph-box1 clearfix">	
							<div class="grid-1">
								<h4>Pie</h4>
								<div class="grid-graph">
									<div class="grid-graph1">
									<div id="os-Win-lbl">Chrome <span>100%</span></div>
									<div id="os-Mac-lbl">Internet Explorer <span> 50%</span></div>
									<div id="os-Other-lbl">Safari<span>30%</span></div>
								 </div>
								 </div>
							<div class="grid-2">
								<canvas id="pie" height="315" width="470" style="width: 470px; height: 315px;"></canvas>
								<script>
									var pieData = [
										{
											value: 30,
											color:"#D95459"
										},
										{
											value : 50,
											color : "#1ABC9C"
										},
										{
											value : 100,
											color : "#3BB2D0"
										}
									
									];
									new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
								</script>
							</div>
							<div class="clearfix"> </div>
						</div>
						
					</div>	
<!------------------------------------->
				
					<div class="graph-box">
						<div class="col-md-4 graph-3">
							<div class="grid-1 grid-on">
								<h4>PolarArea</h4>
								<canvas id="polarArea" height="300" width="300" style="width: 300px; height: 300px;"></canvas>
								<script>
									var chartData = [
										{
											value : Math.random(),
											color: "#1ABC9C"
										},
										{
											value : Math.random(),
											color: "#C7604C"
										},
										{
											value : Math.random(),
											color: "#21323D"
										},
										{
											value : Math.random(),
											color: "#50667f"
										},
										{
											value : Math.random(),
											color: "#7D4F6D"
										},
										{
											value : Math.random(),
											color: "#8a8acb"
										}
									];
									new Chart(document.getElementById("polarArea").getContext("2d")).PolarArea(chartData);
								</script>
							</div>
						</div>
							<div class="col-md-4 graph-4 ">
							<div class="grid-1 grid-on">
								<h4>Radar</h4>
								<canvas id="radar" height="300" width="300" style="width: 300px; height: 300px;"></canvas>
									<script>
										var radarChartData = {
											labels : ["","","","","","",""],
											datasets : [
												{
													fillColor : "#D95459",
													strokeColor : "#D95459",
													pointColor : "#D95459",
													pointStrokeColor : "#fff",
													data : [65,59,90,81,56,55,40]
												},
												{
													fillColor : "#1ABC9C",
													strokeColor : "#1ABC9C",
													pointColor : "#1ABC9C",
													pointStrokeColor : "#fff",
													data : [28,48,40,19,96,27,100]
												}
											]
											
										};
									new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);
									</script>
								</div>
						</div>
						<div class="col-md-4 graph-5">
							<div class="grid-1 grid-on">
								<h4>Circular</h4>
								<canvas id="doughnut" height="300" width="300" style="width: 300px; height: 300px;"></canvas>
								<script>
									var doughnutData = [
									{
										value: 30,
										color:"#D95459"
									},
									{
										value : 50,
										color : "#FBB03B"
									},
									{
										value : 100,
										color : "#3BB2D0"
									},
									{
										value : 40,
										color : "#8a8acb"
									},
									];
									new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
								</script>
							</div>
						</div>
					
						
						<div class="clearfix"> </div>
					</div>				
				</div>
				
		<!---->
	
</div> 
<div class="clearfix"> </div>
       
  
<!---->
<script src="/assets/jsAdmin/bootstrap.min.js"> </script>

		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->


@endsection