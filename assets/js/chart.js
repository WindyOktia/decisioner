Chart.plugins.register({
	afterDatasetsDraw: function (chartInstance, easing) {
		// To only draw at the end of animation, check for easing === 1
		var ctx = chartInstance.chart.ctx;
		chartInstance.data.datasets.forEach(function (dataset, i) {
			var meta = chartInstance.getDatasetMeta(i);
			if (!meta.hidden) {
				meta.data.forEach(function (element, index) {
					// Draw the text in black, with the specified font
					ctx.fillStyle = 'white';
					var fontSize = 16;
					var fontStyle = 'normal';
					var fontFamily = 'Helvetica Neue';
					ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);
					// Just naively convert to string for now
					var dataString = dataset.data[index].toString();
					// Make sure alignment settings are correct
					ctx.textAlign = 'center';
					ctx.textBaseline = 'middle';
					var padding = 5;
					var position = element.tooltipPosition();
					ctx.fillText(dataString + '%', position.x, position.y - (fontSize / 2) - padding);
				});
			}
		});
	}
});

// Ref: http://stackoverflow.com/questions/40430923/multiple-charts-not-working-chart-js/40431178#40431178

function start() {
	var ctx = document.getElementById('bankNoRef').getContext('2d');
	var bankNoRef = new Chart(ctx, {
		type: 'pie',
		data: {
			labels: ['Tarik Tabungan', 'Pertahankan'],
			datasets: [{
				label: '% of Votes',
				data: [40, 19],
				backgroundColor: [
					'#0094C6',
					'#E4572E'
				],
				borderWidth: 2
			}]
		},
		options: {
			legend: {
				position: 'right',
				labels: {
					fontColor: "black"
				}
			}
		}
	});

	var ctx2 = document.getElementById('bankRef').getContext('2d');
	var bankRef = new Chart(ctx2, {
		type: 'pie',
		data: {
			labels: ['Tarik Tabungan', 'Pertahankan'],
			datasets: [{
				label: '% of Votes',
				data: [12, 19],
				backgroundColor: [
					'#0094C6',
					'#E4572E'
				],
				borderWidth: 2
			}]
		},
		options: {
			legend: {
				position: 'right',
				labels: {
					fontColor: "black"
				}
			}
		}
	});
	var ctx3 = document.getElementById('psSaham').getContext('2d');
	var psSaham = new Chart(ctx3, {
		type: 'pie',
		data: {
			labels: ['ops2_1', 'ops2_2'],
			datasets: [{
				label: '% of Votes',
				data: [12, 19],
				backgroundColor: [
					'#0094C6',
					'#E4572E'
				],
				borderWidth: 2
			}]
		},
		options: {
			legend: {
				position: 'right',
				labels: {
					fontColor: "black"
				}
			}
		}
	});
	var ctx4 = document.getElementById('reBank').getContext('2d');
	var reBank = new Chart(ctx4, {
		type: 'pie',
		data: {
			labels: ['ops2_1', 'ops2_2'],
			datasets: [{
				label: '% of Votes',
				data: [12, 19],
				backgroundColor: [
					'#0094C6',
					'#E4572E'
				],
				borderWidth: 2
			}]
		},
		options: {
			legend: {
				position: 'right',
				labels: {
					fontColor: "black"
				}
			}
		}
	});
	var ctx5 = document.getElementById('reSaham').getContext('2d');
	var reSaham = new Chart(ctx5, {
		type: 'pie',
		data: {
			labels: ['ops2_1', 'ops2_2'],
			datasets: [{
				label: '% of Votes',
				data: [12, 19],
				backgroundColor: [
					'#0094C6',
					'#E4572E'
				],
				borderWidth: 2
			}]
		},
		options: {
			legend: {
				position: 'right',
				labels: {
					fontColor: "black"
				}
			}
		}
	});

}

window.onload = start;


Chart.plugins.register({
	beforeDraw: function (chartInstance) {
		var ctx = chartInstance.chart.ctx;
		ctx.fillStyle = "white";
		ctx.fillRect(0, 0, chartInstance.chart.width, chartInstance.chart.height);
	}
});

//start();
