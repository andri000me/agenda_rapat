/*Dashboard Init*/
 
"use strict"; 

/*****Ready function start*****/
$(document).ready(function(){
	$('#statement').DataTable({
		"bFilter": false,
		"bLengthChange": false,
		"bPaginate": false,
		"bInfo": false,
	});
});
/*****Ready function end*****/

/*****Load function start*****/
$(window).on("load",function(){
	window.setTimeout(function(){
		$.toast({
			heading: 'Welcome to zapily',
			text: 'Use the predefined ones, or specify a custom position object.',
			position: 'bottom-left',
			loaderBg:'#f8b32d',
			icon: '',
			hideAfter: 3500, 
			stack: 6
		});
	}, 3000);
});
/*****Load function* end*****/


/*****E-Charts function start*****/
var echartsConfig = function() { 
	if( $('#e_chart_1').length > 0 ){
		var eChart_1 = echarts.init(document.getElementById('e_chart_1'));
		var option = {
			xAxis: {
				type: 'category',
				boundaryGap: false,
				data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
				axisLine: {
					show:false
				},
				axisLabel: {
					textStyle: {
						color: '#878787',
						fontStyle: 'normal',
						fontWeight: 'normal',
						fontFamily: "'Roboto', sans-serif",
						fontSize: 12
					}
				},
				splitLine: {
					show: false,
				},
			},
			yAxis: {
				type: 'value',
				axisLine: {
						show:false
				},
				axisLabel: {
					textStyle: {
						color: '#878787',
						fontStyle: 'normal',
						fontWeight: 'normal',
						fontFamily: "'Roboto', sans-serif",
						fontSize: 12
					}
				},
				splitLine: {
					show: false,
				},
				boundaryGap: [0, '100%']
			},
			tooltip: {
				trigger: 'axis',
				backgroundColor: 'rgba(33,33,33,1)',
				borderRadius:0,
				padding:10,
				axisPointer: {
					type: 'cross',
					label: {
						backgroundColor: 'rgba(33,33,33,1)'
					}
				},
				textStyle: {
					color: '#fff',
					fontStyle: 'normal',
					fontWeight: 'normal',
					fontFamily: "'Roboto', sans-serif",
					fontSize: 12
				}	
			},
			series: [
					{
						name:'Step Start',
						type:'line',
						step: 'start',
						itemStyle: {
							normal: {
								color: '#efd7b1'
							}
						},
						data:[120, 132, 101, 134, 90, 230, 210]
					},
					{
						name:'Step Middle',
						type:'line',
						step: 'middle',
						itemStyle: {
							normal: {
								color: '#d6ae71'
							}
						},
						data:[220, 282, 201, 234, 290, 430, 410]
					}
			]
		};
		eChart_1.setOption(option);
		eChart_1.resize();
	}
	if( $('#e_chart_2').length > 0 ){
		var eChart_2 = echarts.init(document.getElementById('e_chart_2'));
		var option1 = {
			tooltip: {
				trigger: 'axis',
				backgroundColor: 'rgba(33,33,33,1)',
				borderRadius:0,
				padding:10,
				axisPointer: {
					type: 'cross',
					label: {
						backgroundColor: 'rgba(33,33,33,1)'
					}
				},
				textStyle: {
					color: '#fff',
					fontStyle: 'normal',
					fontWeight: 'normal',
					fontFamily: "'Roboto', sans-serif",
					fontSize: 12
				}	
			},
			yAxis: {
				type: 'value',
				axisTick: {
					show: false
				},
				axisLine: {
					show: false,
					lineStyle: {
						color: '#fff',
					}
				},
				splitLine: {
					show: false,
				},
			},
			xAxis: [{
					type: 'category',
					axisTick: {
						show: false
					},
					axisLine: {
						show: true,
						lineStyle: {
							color: '#fff',
						}
					},
					data: ['Dt1', 'Dt2', 'Dt3']
				}, {
					type: 'category',
					axisLine: {
						show: false
					},
					axisTick: {
						show: false
					},
					axisLabel: {
						show: false
					},
					splitArea: {
						show: false
					},
					splitLine: {
						show: false
					},
					data: ['Dt1', 'Dt2', 'Dt3']
				},

			],
			series: [{
					name: 'Appoinment1',
					type: 'bar',
					xAxisIndex: 1,

					itemStyle: {
						normal: {
							show: true,
							color: '#d6ae71',
							barBorderRadius: 50,
							borderWidth: 0,
							borderColor: '#fff',
						}
					},
					barWidth: '20%',
					data: [1000, 1000, 1000]
				}, {
					name: 'Appoinment2',
					type: 'bar',
					xAxisIndex: 1,

					itemStyle: {
						normal: {
							show: true,
							color: '#d6ae71',
							barBorderRadius: 50,
							borderWidth: 0,
							borderColor: '#fff',
						}
					},
					barWidth: '20%',
					barGap: '100%',
					data: [1000, 1000, 1000]
				}, {
					name: 'Appoinment3',
					type: 'bar',
					itemStyle: {
						normal: {
							show: true,
							color: '#d6ae71',
							barBorderRadius: 50,
							borderWidth: 0,
							borderColor: '#fff',
						}
					},
					label: {
						normal: {
							show: true,
							position: 'top',
							textStyle: {
								color: '#fff'
							}
						}
					},
					barWidth: '20%',
					data: [398, 419, 452]
				}, {
					name: 'Appoinment4',
					type: 'bar',
					barWidth: '20%',
					itemStyle: {
						normal: {
							show: true,
							color: '#efd7b1',
							barBorderRadius: 50,
							borderWidth: 0,
							borderColor: '#fff',
						}
					},
					label: {
						normal: {
							show: true,
							position: 'top',
							textStyle: {
								color: '#fff'
							}
						}
					},
					barGap: '100%',
					data: [425, 437, 484]
				}

			]
		};
		
		eChart_2.setOption(option1);
		eChart_2.resize();
	}
	if( $('#e_chart_3').length > 0 ){
		var eChart_3 = echarts.init(document.getElementById('e_chart_3'));
		var colors = ['#007153', '#efd7b1'];
		var option3 = {
			tooltip: {
				backgroundColor: 'rgba(33,33,33,1)',
				borderRadius:0,
				padding:10,
				textStyle: {
					color: '#fff',
					fontStyle: 'normal',
					fontWeight: 'normal',
					fontFamily: "'Roboto', sans-serif",
					fontSize: 12
				}	
			},
			series: [
				{
					name:'',
					type:'pie',
					radius: ['42%', '55%'],
					color: ['#d6ae71', '#d6ae71', '#d6ae71', '#efd7b1'],
					label: {
						normal: {
							formatter: '{b}\n{d}%'
						},
				  
					},
					data:[
						{value:435, name:''},
						{value:679, name:''},
						{value:848, name:''},
						{value:348, name:''},
					]
				}
			]
		};
		eChart_3.setOption(option3);
		eChart_3.resize();
	}
}
/*****E-Charts function end*****/

/*****Sparkline function start*****/
var sparklineLogin = function() { 
	if( $('#sparkline_1').length > 0 ){
		$("#sparkline_1").sparkline([2,4,4,6,8,5,6,4,8,6,6,2 ], {
			type: 'line',
			width: '100%',
			height: '35',
			lineColor: '#d6ae71',
			fillColor: '#d6ae71',
			minSpotColor: '#d6ae71',
			maxSpotColor: '#d6ae71',
			spotColor: '#d6ae71',
			highlightLineColor: '#d6ae71',
			highlightSpotColor: '#d6ae71'
		});
	}	
}
/*****Sparkline function end*****/

/*****Resize function start*****/
var sparkResize,echartResize;
$(window).on("resize", function () {
	/*Sparkline Resize*/
	clearTimeout(sparkResize);
	sparkResize = setTimeout(sparklineLogin, 200);
	
	/*E-Chart Resize*/
	clearTimeout(echartResize);
	echartResize = setTimeout(echartsConfig, 200);
}).resize(); 
/*****Resize function end*****/

/*****Function Call start*****/
sparklineLogin();
echartsConfig();
/*****Function Call end*****/