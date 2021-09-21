(function ($) {
 "use strict";
 
	 /*----------------------------------------*/
	/*  1.  Basic Line Chart
	/*----------------------------------------*/
	var ctx = document.getElementById("basiclinechart");
	var basiclinechart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر"],
			datasets: [{
				label: "مجموعه داده اول",
				fill: false,
                backgroundColor: '#006DF0',
				borderColor: '#006DF0',
				data: [3, -5, -2, 3, 9, 12, 19]
            }, {
                label: "مجموعه داده دوم",
				fill: false,
                backgroundColor: '#933EC5',
				borderColor: '#933EC5',
				data: [-12, -3, -4, 6, 3, 7, 10]
				
		}]
		},
		options: {
			responsive: true,
			title:{
				display:true,
				text:' نمودار خط پایه '
			},
			tooltips: {
				mode: 'index',
				intersect: false,
			},
			hover: {
				mode: 'nearest',
				intersect: true
			},
			scales: {
				xAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					},
					scaleLabel: {
						display: true,
						labelString: 'ماه'
					}
				}],
				yAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					},
					scaleLabel: {
						display: true,
						labelString: 'مقدار'
					}
				}]
			}
		}
	});
	
	 /*----------------------------------------*/
	/*  2.  Line Chart Multi axis
	/*----------------------------------------*/
	var ctx = document.getElementById("linechartmultiaxis");
	var linechartmultiaxis = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر"],
			datasets: [{
				label: "مجموعه داده اول",
				fill: false,
                backgroundColor: '#006DF0',
				borderColor: '#006DF0',
				data: [3, -5, -2, 3, 9, 12, 19],
				yAxisID: "y-axis-1"
            }, {
                label: "مجموعه داده دوم",
				fill: false,
                backgroundColor: '#933EC5',
				borderColor: '#933EC5',
				data: [-12, -3, -4, 6, 3, 7, -20],
				yAxisID: "y-axis-2"
				
		}]
		},
		options: {
			responsive: true,
			hoverMode: 'index',
			stacked: false,
			title:{
				display: true,
				text:'نمودار خط چند محوره'
			},
			scales: {
				yAxes: [{
					type: "linear",
					display: true,
					position: "left",
					id: "y-axis-1",
				}, {
					type: "linear", 
					display: true,
					position: "right",
					id: "y-axis-2",
					gridLines: {
						drawOnChartArea: false,
					},
				}],
			}
		}
	});
	
	 /*----------------------------------------*/
	/*  3.  Line Chart stepped
	/*----------------------------------------*/
	var ctx = document.getElementById("linechartstepped");
	var linechartstepped = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6'],
			datasets: [{
				label: "خط پله ای",
				fill: false,
                backgroundColor: '#006DF0',
				borderColor: '#006DF0',
				data: [3, -5, -2, 3, 9, 12, 19]
            }]
		},
		options: {
			responsive: true,
			title: {
				display: true,
				text:'نمودار خطی پله ای',
			},
			scales: {
				xAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}],
				yAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}]
			}
		}
	});
	
	/*----------------------------------------*/
	/*  4.  Line Chart Interpolation
	/*----------------------------------------*/
	
	var ctx = document.getElementById("linechartinterpolation");
	var linechartinterpolation = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
			datasets: [{
				label: "درون یابی ماسونی",
				fill: false,
                backgroundColor: '#006DF0',
				borderColor: '#006DF0',
				data: [0, 15, 17, 200, 0, 12, -200, 5, 200, 8, 200, 12, 200],
				cubicInterpolationMode: 'monotone'
            }, {
                label: "درون یابی ماسونی",
				fill: false,
                backgroundColor: '#933EC5',
				borderColor: '#933EC5',
				data: [-100, 200, 12, -200, 12, 200, 8, -200, 9, 200, -200, -12, -200]
				
		}, {
                label: "درون یابی خطی",
				fill: false,
                backgroundColor: '#D80027',
				borderColor: '#D80027',
				data: [-8, -9, -10, -11, 0, 0, 0, 12, 10, 8, 9, 7, 12],
				lineTension: 0
				
		}]
		},
		options: {
			responsive: true,
			title:{
				display:true,
				text:'درون یابی نمودار خطی'
			},
			tooltips: {
				mode: 'index'
			},
			scales: {
				xAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}],
				yAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}]
			}
		}
	});
	
	
	/*----------------------------------------*/
	/*  5.  Line Chart styles
	/*----------------------------------------*/
	
	var ctx = document.getElementById("linechartstyles");
	var linechartstyles = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["January", "February", "March", "April", "May", "June", "July"],
			datasets: [{
				label: "پرنشده",
				fill: false,
                backgroundColor: '#006DF0',
				borderColor: '#006DF0',
				data: [0, 15, 17, 200, 0, 12, -200, 5]
            }, {
                label: "نقطه چین",
				fill: false,
                backgroundColor: '#933EC5',
				borderColor: '#933EC5',
				borderDash: [5, 5],
				data: [-100, 200, 12, -200, 12, 200, 8]
				
		}, {
                label: "پرشده",
				fill: true,
                backgroundColor: '#D80027',
				borderColor: '#D80027',
				data: [-200, -9, 200, -11, 0, -200, 0]
				
		}]
		},
		options: {
			responsive: true,
			title:{
				display:true,
				text:'استایل نمودار خطی'
			},
			tooltips: {
				mode: 'index',
				intersect: false,
				axis : 'hi'
			},
			hover: {
				mode: 'nearest',
				intersect: true
			},
			scales: {
				xAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}],
				yAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}]
			}
		}
	});
	/*----------------------------------------*/
	/*  6.  Line Chart point circle
	/*----------------------------------------*/
	
	var ctx = document.getElementById("linechartpointcircle");
	var linechartpointcircle = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["January", "February", "March", "April", "May", "June", "July"],
			datasets: [{
				label: "My First dataset",
				backgroundColor: '#006DF0',
				borderColor: '#006DF0',
				data: [0, 10, 20, 30, 40, 50, 60],
				fill: false,
				pointRadius: 4,
				pointHoverRadius: 10,
				showLine: false 
			}]
		},
		options: {
			responsive: true,
			title:{
				display:true,
				text:'نمودار نقطه خط'
			},
			legend: {
				display: false
			},
			elements: {
				point: {
					pointStyle: 'circle',
				}
			},
			scales: {
				xAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}],
				yAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}]
			}
		}
	});
	/*----------------------------------------*/
	/*  6.  Line Chart point rectRot
	/*----------------------------------------*/
	
	var ctx = document.getElementById("linechartpointrectRot");
	var linechartpointrectRot = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["January", "February", "March", "April", "May", "June", "July"],
			datasets: [{
				label: "My First dataset",
				backgroundColor: '#006DF0',
				borderColor: '#006DF0',
				data: [60, 50, 40, 30, 20, 10, 0],
				fill: false,
				pointRadius: 6,
				pointHoverRadius: 10,
				showLine: false 
			}]
		},
		options: {
			responsive: true,
			title:{
				display:true,
				text:'Line Chart Point rectRot'
			},
			legend: {
				display: false
			},
			elements: {
				point: {
					pointStyle: 'rectRot',
				}
			},
			scales: {
				xAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}],
				yAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}]
			}
		}
	});
	/*----------------------------------------*/
	/*  6.  Line Chart point cross
	/*----------------------------------------*/
	
	var ctx = document.getElementById("linechartpointcross");
	var linechartpointcross = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["January", "February", "March", "April", "May", "June", "July"],
			datasets: [{
				label: "My First dataset",
				backgroundColor: '#006DF0',
				borderColor: '#006DF0',
				data: [0, 10, 60, 30, 0, 80, 60],
				fill: false,
				pointRadius: 6,
				pointHoverRadius: 10,
				showLine: false 
			}]
		},
		options: {
			responsive: true,
			title:{
				display:true,
				text:'نمودار خط ضربدری'
			},
			legend: {
				display: false
			},
			elements: {
				point: {
					pointStyle: 'cross',
				}
			},
			scales: {
				xAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}],
				yAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}]
			}
		}
	});
	
	
		
})(jQuery); 