/*Dashboard2 Init*/
"use strict"; 

/*****Ready function start*****/
$(document).ready(function(){
	if( $('#pie_chart_4').length > 0 ){
		$('#pie_chart_4').easyPieChart({
			barColor : '#d6ae71',
			lineWidth: 20,
			animate: 3000,
			size:	165,
			lineCap: 'square',
			trackColor: '#f4f4f4',
			scaleColor: false,
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});
	}
	
	if( $('#datable_1').length > 0 )
		$('#datable_1').DataTable({
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
		//data
		var data = [220, 182, 191, 234, 190, 330, 310];
		var markLineData = [];
		for (var i = 1; i < data.length; i++) {
			markLineData.push([{
				xAxis: i - 1,
				yAxis: data[i - 1],
				value: (data[i] + data[i-1]).toFixed(2)
			}, {
				xAxis: i,
				yAxis: data[i]
			}]);
		}

		//option
		var option = {
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
			color: ['#d6ae71'],	
			grid:{
				show:false,
				top: 100,
				bottom: 10,
				left: 10,
				containLabel: true,
			},
			xAxis: {
				data: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
				axisLine: {
					show:false
				},
				axisLabel: {
					textStyle: {
						color: '#878787'
					}
				},
			},
			yAxis: {
				axisLine: {
					show:false
				},
				axisLabel: {
					textStyle: {
						color: '#878787'
					}
				},
				splitLine: {
					show: false,
				},
			},
			series: [{
				type: 'line',
				data:data,
				markPoint: {
					data: [
						{type: 'max', name: '最大值'},
						{type: 'min', name: '最小值'}
					]
				},
				markLine: {
					smooth: true,
							effect: {
								show: true
							},
							distance: 10,
					label: {
						normal: {
							position: 'middle'
						}
					},
					symbol: ['none', 'none'],
					data: markLineData
				}
			}]
		};
		eChart_1.setOption(option);
		eChart_1.resize();
	}
	if( $('#e_chart_2').length > 0 ){
		var eChart_2 = echarts.init(document.getElementById('e_chart_2'));
		var option1 = {
			angleAxis: {
				max: 100,
				axisLabel: {
					textStyle: {
						color: '#878787'
					}
				},
				axisLine: {
					lineStyle: {
						color: 'rgba(33, 33, 33, 0.1)'
					}
				}
			},
			color: ['#d6ae71', '#efd7b1'],
			polar:{
				radius:'70%',
				axisLabel: {
					textStyle: {
						color: '#878787'
					}
				}
			},
			radiusAxis: {
				type: 'category',
				data: ['Dt1', 'Dt2'],
				z: 10,
				show:false,
				axisLine: {
					lineStyle: {
						color: 'rgba(33, 33, 33, 0.1)'
					}
				}
			},
			
			series: [{
				type: 'bar',
				data: [70, 0, 0],
				coordinateSystem: 'polar',
				name: 'Dt1',
				radius: [0, '30%'],
				stack: 'a'
			}, {
				type: 'bar',
				data: [0, 40, 0],
				coordinateSystem: 'polar',
				name: 'Dt2',
				stack: 'a'
			}]
		};

		eChart_2.setOption(option1);
		eChart_2.resize();
	}
	if( $('#e_chart_3').length > 0 ){
		var eChart_3 = echarts.init(document.getElementById('e_chart_3'));
		var data = [{
			value: 3661,
			name: ''
		}, {
			value: 5713,
			name: ''
		}];
		var option3 = {
			tooltip: {
				show: true,
				trigger: 'item',
				backgroundColor: 'rgba(33,33,33,1)',
				borderRadius:0,
				padding:10,
				formatter: "{b}: {c} ({d}%)",
				textStyle: {
					color: '#fff',
					fontStyle: 'normal',
					fontWeight: 'normal',
					fontFamily: "'Roboto', sans-serif",
					fontSize: 12
				}	
			},
			series: [{
				type: 'pie',
				selectedMode: 'single',
				radius: ['80%', '30%'],
				color: ['#d6ae71', '#efd7b1'],
				labelLine: {
					normal: {
						show: false
					}
				},
				data: data
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
		if( $('#sparkline_5').length > 0 ){
			$("#sparkline_5").sparkline([0,2,8,6,8], {
				type: 'bar',
				width: '100%',
				height: '45',
				barWidth: '10',
				resize: true,
				barSpacing: '10',
				barColor: '#d6ae71',
				highlightSpotColor: '#d6ae71'
			});
		}	
		if( $('#sparkline_6').length > 0 ){
			$("#sparkline_6").sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40, 45, 56, 7, 10], {
				type: 'line',
				width: '100%',
				height: '50',
				lineColor: '#d6ae71',
				fillColor: 'transparent',
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