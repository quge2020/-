//[Dashboard Javascript]

//Project:	Fab Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';

  // Make the dashboard widgets sortable Using jquery UI
  $('.connectedSortable').sortable({
    placeholder         : 'sort-highlight',
    connectWith         : '.connectedSortable',
    handle              : '.box-header, .nav-tabs',
    forcePlaceholderSize: true,
    zIndex              : 999999
  });
  $('.connectedSortable .box-header, .connectedSortable .nav-tabs-custom').css('cursor', 'move');

  

// Direct Chat
	$('#directchat').slimScroll({
				height: '225px'
	});


// AREA CHART
    var area = new Morris.Area({
      element: 'revenue-chart',
      resize: true,
      data: [
        { y: '2017-01', a: 6,  b: 5 },
		{ y: '2017-02', a: 4,  b: 3 },
		{ y: '2017-03', a: 7,  b: 4 },
		{ y: '2017-04', a: 5,  b: 9 },
		{ y: '2017-05', a: 3,  b: 7 },
		{ y: '2017-06', a: 1,  b: 3 },
		{ y: '2017-07', a: 5,  b: 4 }
      ],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Commercial Projects', 'Residential Projects'],
		fillOpacity: 0.2,
		lineWidth:2,
		lineColors: ['#1e88e5', '#fc4b6c'],
		hideHover: 'auto',
		color: '#666666'
    });
//BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {y: 'Jan', a: 2341, b: 1598},
        {y: 'Feb', a: 2131, b: 2021},
        {y: 'Mar', a: 4374, b: 4120},
        {y: 'Apr', a: 1312, b: 900},
        {y: 'May', a: 4393, b: 3258},
        {y: 'Jun', a: 1210, b: 400}
      ],
		barColors: ['#ffb22b', '#26c6da'],
		barSizeRatio: 0.5,
		barGap:2,
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Inquery', 'Conform'],
		hideHover: 'auto',
		color: '#666666'
    });
	
//daily-inquery ------------------------------------------------------------------------------
	
	var donut = new Morris.Donut({
      element: 'daily-inquery',
      resize: true,
      colors: ["#7460ee", "#fc4b6c", "#ffb22b"],
      data: [
        {label: "On Site", value: 300},
        {label: "By eMail", value: 55},
        {label: "By Phone", value: 100}
      ],
      hideHover: 'auto'
    });	
	
	
	
}); // End of use strict

