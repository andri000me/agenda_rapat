/*Dashboard3 Init*/
 
"use strict"; 

/*****Ready function start*****/
$(document).ready(function(){
	$('#support_table').DataTable({
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
			position: 'top-left',
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
		function varry(a, b, c) {
			var seriesd1 = [{
				value: a,
				name: 'A'
			}, {
				value: b,
				name: 'B'
			}];
			return seriesd1;
		}
		function seriesvarry(seriesd){
			var seriesdata1 = [

				{
					data: seriesd
				},

				{
					data: seriesd
				}, {
					data: seriesd
				}, {
					data: seriesd
				}
			];
			return seriesdata1;
		}
		var seriesd1 = varry(3, 6, 9);
		var seriesdata1 = seriesvarry(seriesd1);
		var seriesd2 = varry(1, 2, 9);
		var seriesdata2 = seriesvarry(seriesd2);
		var option = {
			baseOption: {
				color: ['#d6ae71', '#efd7b1'],
				timeline: {
					axisType: 'category',
					playInterval: '1000',
					show:false,
					autoPlay: 'true',
					data: ['正方形?', '四角星?', '八边形?']
				},

				tooltip: {
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
				gap: 0,
				series: [
					{
						type: 'funnel',
						width: '30%',
						height: '40%',
						left: '50%',
						top: '40%',
						sort: 'descending',
						funnelAlign: 'left',
						label: {
							normal: {
								show: false
							}
						},
						labelLine: {
							normal: {
								show: false
							}
						}

					},
					{
						type: 'funnel',
						width: '30%',
						height: '40%',
						left: '20%',
						top: '40%',
						sort: 'descending',
						funnelAlign: 'right',
						label: {
							normal: {
								show: false
							}
						},
						labelLine: {
							normal: {
								show: false
							}
						}

					},
					{
						type: 'funnel',
						width: '30%',
						height: '40%',
						left: '20%',
						top: '0%',
						sort: 'ascending',
						funnelAlign: 'right',
						label: {
							normal: {
								show: false
							}
						},
						labelLine: {
							normal: {
								show: false
							}
						}

					}, {
						type: 'funnel',
						width: '30%',
						height: '40%',
						left: '50%',
						top: '0%',
						sort: 'ascending',
						funnelAlign: 'left',
						label: {
							normal: {
								show: false
							}
						},
						labelLine: {
							normal: {
								show: false
							}
						}

					}

				]
			},

			options: [{
					series: seriesdata1
				},
				//seriesdata1
				{
					series: seriesdata2
				}
			]
		};
		eChart_1.setOption(option);
		eChart_1.resize();
	}
	if( $('#e_chart_2').length > 0 ){
		var eChart_2 = echarts.init(document.getElementById('e_chart_2'));
		var option1 = {
			tooltip : {
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
			color: ['#d6ae71', '#efd7b1'],
			series : [
				{
					name: 'task',
					type: 'pie',
					radius : '50%',
					center: ['50%', '50%'],
					tooltip : {
						trigger: 'item',
						formatter: "{a} <br/>{b} : {c} ({d}%)",
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
					data:[
						{value:335, name:'task 1'},
						{value:410, name:'task 2'},
					],
					itemStyle: {
						emphasis: {
							shadowBlur: 10,
							shadowOffsetX: 0,
							shadowColor: 'rgba(0, 0, 0, 0.5)'
						}
					}
				}
			]
		};
		eChart_2.setOption(option1);
		eChart_2.resize();
	}
	if( $('#e_chart_3').length > 0 ){
		var eChart_3 = echarts.init(document.getElementById('e_chart_3'));
		var option3 = {
			color: ['#d6ae71'],
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
			
			xAxis: [{
				type: 'category',
				data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
				show: false,
			}],
			yAxis: {
				type: 'value',
				axisLine: {
					show: false
				},
				axisLabel: {
					textStyle: {
						color: '#4a657a'
					}  
				},
				splitLine: {
					show: false,
				},
				axisTick: {
					show: false
				}
			},
			series: [{
				data: [120, 200, 150, 80, 70, 110, 130],
				type: 'bar'
			}]
		};
		eChart_3.setOption(option3);
		eChart_3.resize();
	}
}
/*****E-Charts function end*****/

/*****Sparkline function start*****/
var sparklineLogin = function() { 
		if( $('#sparkline_4').length > 0 ){
			$("#sparkline_4").sparkline([2,4,4,6,8,5,6,4,8,6,6,2 ], {
				type: 'line',
				width: '100%',
				height: '45',
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
	var sparkResize;
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