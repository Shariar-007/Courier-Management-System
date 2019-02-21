$(document).ready(function(){
	$.ajax({
		url: "http://localhost:1234/Courier/Admin/Data%20Report/examples/01-overview/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var Date = [];
			var TotalCost = [];

			for(var i in data) {
				Date.push(data[i].Date);
				TotalCost.push(data[i].TotalCost);
			}

			var chartdata = {
				labels: Date,
				datasets : [
					{
						label: 'Monthly Income',
						backgroundColor: 'rgba(0, 124, 161, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: TotalCost
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});

