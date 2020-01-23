var ctx6 = document.getElementById('jajals').getContext('2d');
var jajals = new Chart(ctx6, {
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
