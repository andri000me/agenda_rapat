/*Dashboard Init*/
 
"use strict"; 

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
			color: ['#efd7b1', '#d6ae71'],
			series : [
				{
					name:'漏斗图',
					type:'funnel',
					x: '0%',
					y: 20,
					//x2: 80,
					y2: 60,
					width: '100%',
					height:'80%',
					// height: {totalHeight} - y - y2,
					min: 0,
					max: 100,
					minSize: '0%',
					maxSize: '100%',
					sort : 'descending', // 'ascending', 'descending'
					gap :0,
					
					data:[
						{value:60,},
						{value:80,},
						
					].sort(function (a, b) { return a.value - b.value}),
					roseType: true,
					label: {
						normal: {
							formatter: function (params) {
								return params.name + ' ' + params.value + '%';
							},
							position: 'center'
						}
					},
					itemStyle: {
						normal: {
							borderWidth: 0,
							shadowBlur: 0,
							shadowOffsetX: 0,
							shadowOffsetY: 0,
						}
					}
					
				}
				
			]
		};

		eChart_1.setOption(option);
		eChart_1.resize();
	}
}
/*****E-Charts function end*****/

/*****Sparkline function start*****/
var sparklineLogin = function() { 
	if( $('#sparkline_6').length > 0 ){
		$("#sparkline_6").sparkline([12,4,7,3,8,6,8,5,6,4,8,6,6,2 ], {
			type: 'line',
			width: '100%',
			height: '124',
			lineColor: '#fff',
			fillColor: '#fff',
			minSpotColor: '#fff',
			maxSpotColor: '#fff',
			spotColor: '#fff',
			highlightLineColor: '#fff',
			highlightSpotColor: '#fff'
		});
	}	
	if( $('#sparkline_7').length > 0 ){
		$("#sparkline_7").sparkline([20,4], {
			type: 'pie',
			width: '100',
			height: '100',
			sliceColors: ['#d6ae71', '#efd7b1']
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
	echartResize = setTimeout(echartsConfig, 300);
}).resize(); 
/*****Resize function end*****/

/*****Function Call start*****/
sparklineLogin();
echartsConfig();
/*****Function Call end*****/