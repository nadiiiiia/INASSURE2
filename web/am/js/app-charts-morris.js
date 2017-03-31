var App = (function () {
	'use strict';

	App.chartsMorris = function( ){

		// data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type
	  var tax_data = countByTr;

	  //Line Chart
	  function line_chart(){
	  	var color1 = App.color.primary;
	  	
	  	new Morris.Line({
		    element: 'line-chart',
		    data: tax_data,
		    xkey: 'label',
		    ykeys: ['value'],
		    labels: ['Travail'],
                    parseTime:false,
		    lineColors: [color1]
		  });
	  }

	  //Bar chart
	  function bar_chart(){
			var color1 = tinycolor( App.color.alt3 ).lighten( 15 ).toString();
	  	var color2 = tinycolor( App.color.alt3 ).brighten( 3 ).toString();

	  	Morris.Bar({
			  element: 'bar-chart',
			  data: [
			    {device: 'iPhone', geekbench: 136, macbench: 180},
			    {device: 'iPhone 3G', geekbench: 137, macbench: 200},
			    {device: 'iPhone 3GS', geekbench: 275, macbench: 350},
			    {device: 'iPhone 4', geekbench: 380, macbench: 500},
			    {device: 'iPhone 4S', geekbench: 655, macbench: 900},
			    {device: 'iPhone 5', geekbench: 1571, macbench: 1700}
			  ],
			  xkey: 'device',
			  ykeys: ['geekbench','macbench'],
			  labels: ['Geekbench','Macbench'],
			  barColors: [color1, color2],
			  barRatio: 0.4,
			  xLabelAngle: 35,
			  hideHover: 'auto'
			});
	  }

	  //Donut Chart
	  function donut_chart(){
	  	var color1 = App.color.alt2;
      var color2 = App.color.alt4;
      var color3 = App.color.alt3;
      var color4 = App.color.alt1;
      var color5 = tinycolor( App.color.primary ).lighten( 5 ).toString();

  	  Morris.Donut({
		    element: 'donut-chart',
		    data: countBysituation,
		    colors:[color1, color5, color3, color4],
		    formatter: function (y) { return y + "%" }
		  });
	  }

	  //Area chart
	  function area_chart(){
	  	var color1 = App.color.alt2;
      var color2 = App.color.alt4;
      var color3 = App.color.alt3;
      var color4 = App.color.alt1;
      var color5 = tinycolor( App.color.primary ).lighten( 5 ).toString();

	  	Morris.Area({
		    element: 'area-chart',
		    data: [
		      {period: '2010 Q1', iphone: 2666, ipad: null, itouch: 2647},
		      {period: '2010 Q2', iphone: 2778, ipad: 2294, itouch: 2441},
		      {period: '2010 Q3', iphone: 4912, ipad: 1969, itouch: 2501},
		      {period: '2010 Q4', iphone: 3767, ipad: 3597, itouch: 5689},
		      {period: '2011 Q1', iphone: 6810, ipad: 1914, itouch: 2293},
		      {period: '2011 Q2', iphone: 5670, ipad: 4293, itouch: 1881},
		      {period: '2011 Q3', iphone: 4820, ipad: 3795, itouch: 1588},
		      {period: '2011 Q4', iphone: 15073, ipad: 5967, itouch: 5175},
		      {period: '2012 Q1', iphone: 10687, ipad: 4460, itouch: 2028},
		      {period: '2012 Q2', iphone: 8432, ipad: 5713, itouch: 1791}
		    ],
		    xkey: 'period',
		    ykeys: ['iphone', 'ipad', 'itouch'],
		    labels: ['iPhone', 'iPad', 'iPod Touch'],
		    lineColors: [color5, color4, color1],
		    pointSize: 2,
		    hideHover: 'auto'
		  });
	  }

	  line_chart();
	  bar_chart();
	  donut_chart();
	  area_chart();
	};

	return App;
})(App || {});