//
var ctx = document.getElementById("chart_medkit").getContext('2d');
var chart_medkit = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Domestic Product : 8.2%", "Foreign Product : 91.2% "],
        datasets: [{
            label: 'Indonesia Medical Product Distribution',
            data: [7027, 78966],
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)'
            ],
            borderColor: [
                'rgba(255,99,132, 0.6)',
                'rgba(54, 162, 235, 0.6)'
            ],
            borderWidth: 0
        }]
    },
    options: options_chart_medkit
});

var options_chart_medkit = {
  maintainAspectRatio: false,
  scales: {
    yAxes: [{
      stacked: true,
      gridLines: {
        display: true,
        color: "rgba(255,99,132,0.2)"
      }
    }],
    xAxes: [{
      gridLines: {
        display: false
      }
    }]
  },
        legend: {
            labels: {	
                // This more specific font property overrides the global property
                defaultFontColor : "#ffffff",
				defaultFontFamily : "montserrat"
            }
}
        
};

//======================================================================

var dis01 = 5820000;
var dis02 = 5724000;
var dis03 = 3088000;
var dis04 = 2742000;
var dis05 = 2044000;
var distot = dis01 + dis02 + dis03 + dis04 + dis05;
var dispercent01 = dis01 / distot * 100;
var dispercent02 = dis02 / distot * 100;
var dispercent03 = dis03 / distot * 100;
var dispercent04 = dis04 / distot * 100;
var dispercent05 = dis05 / distot * 100;

var ctx = document.getElementById("chart_disabled").getContext('2d');
var chart_disabled = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Watch : " + dispercent01.toPrecision(4) + "%", "Listen : " + dispercent02.toPrecision(4) + "%", "Walk / Climbing stairs : " + dispercent03.toPrecision(4) + "%", "Remember / Concentrate : " + dispercent04.toPrecision(4) + "%", "Care by self : " + dispercent05.toPrecision(4) + "%"],
        datasets: [{
            label: 'Functional difficulties on disability',
            data: [dis01, dis02, dis03, dis04, dis05],
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
				'rgba(128, 255, 0, 0.6)',
				'rgba(204, 204, 0, 0.6)',
				'rgba(255, 153, 204, 0.6)'
            ],
             borderWidth: 0
        }]
    },
    options: options_chart_disabled
});

var options_chart_disabled = {
  maintainAspectRatio: false,
  scales: {
    yAxes: [{
      stacked: true,
      gridLines: {
        display: true,
        color: "rgba(255,99,132,0.2)"
      }
    }],
    xAxes: [{
      gridLines: {
        display: false
      }
    }]
  },
        legend: {
            labels: {	
                // This more specific font property overrides the global property
                defaultFontColor : "#ffffff",
				defaultFontFamily : "montserrat"
            }
}
        
};


/*
var dct = document.getElementById("donut-chart").getContext('2d');
// And for a doughnut chart
var myDoughnutChart = new Chart(dct, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [10, 20, 30]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        'Red',
        'Yellow',
        'Blue'
    ]},
  
});*/