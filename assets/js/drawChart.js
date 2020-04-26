    // Pie Chart Jumlah Siswa
    var ctx =$('#pie').css({'width':'100%','min-height':'100px'}); 
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            responsive: true,
            labels: ["Data I", "Data II", "Data III", "Data IV", "Data V", "Data VI","Data VII","Data VIII","Data IX","Data X","Data XI","Data XII"],
            datasets: [{
                label: '',
                data: [6,8,10,12,14,16,18,20,22,24,26,28],
                backgroundColor: [
                'lime',
                'blue',
                'yellow',
                'cyan',
                'magenta',
                'maroon',
                'purple',
                'lawngreen',
                'olivedrab',
                'aqua',
                'royalblue',
                'blueviolet'
                ],
                borderColor: [
                'red',
                'lime',
                'blue',
                'yellow',
                'cyan',
                'magenta',
                'maroon',
                'purple',
                'lawngreen',
                'olivedrab',
                'aqua',
                'royalblue',
                'blueviolet'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });

    // Bar chart trend siswa pertahun
    var ctx =$('#bar').css({'width':'100%','min-height':'100px'}); 
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["2013", "2014", "2015", "2016", "2017", "2018"],
            datasets: [{
                
                data: [120, 125, 140, 130, 150,160],
                backgroundColor: [
                'rgba(255, 99, 132, 0.8)',
                'rgba(54, 162, 235, 0.8)',
                'rgba(255, 206, 86, 0.8)',
                'rgba(75, 192, 192, 0.8)',
                'rgba(153, 102, 255, 0.8)',
                'rgba(255, 159, 64, 0.8)'
                ],
                
                borderWidth: 1
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales:{
                yAxes:[{
                    ticks:{
                        min: 100, max: 200, stepSize: 5
                    }
                }]
            }
        }
    });