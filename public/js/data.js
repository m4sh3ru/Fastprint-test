
		$(function() {

		    Morris.Line({
		        element: 'morris-line-chart',
		        data: [{
		            y: '2010',
		            a: 8,
		            b: 0
		        }, {
		            y: '2011',
		            a: 8,
		            b: 0
		        }, {
		            y: '2012',
		            a: 7,
		            b: 7
		        }, {
		            y: '2013',
		            a: 9,
		            b: 9
		        }, {
		            y: '2014',
		            a: 9,
		            b: 8
		        }, {
		            y: '2015',
		            a: 0,
		            b: 10
		        }],
		        xkey: 'y',
		        ykeys: ['a', 'b'],
		        labels: ['Fast', 'Print'],
		        hideHover: 'auto',
		        resize: true
		    });


		});
