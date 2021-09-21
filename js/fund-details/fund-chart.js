


    $(document).ready(function(){
        $lang = $('body').attr('lang');
        $.getJSON( "http://localhost/kiaalap-master/json/fund-chart-data."+$lang+".json", function( data ) {
            labelslist = [];
            datalist = [];
            $.each( data, function( key, val ) {
                labelslist.push(key);
                datalist.push(val);
            
            });
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labelslist,
                        datasets: [{
                            label: "مقدار",
                            data: datalist,
                            backgroundColor: [
                                'rgba(54, 162, 235, 0.2)'
                            ],
                            borderColor: [
                                'rgba(54, 162, 235, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        interaction: {
                            // Overrides the global setting
                            mode: 'index'
                        },
                        responsive : true,
                        acceptrate : false,
                        resizeDelay : 0 ,
                        maintainAspectRatio  : false,
                        aspectRatio : 2,
                        onResize : null,
                        resizeDelay : 0,
                        plugins: {
                            title: {
                                display: true,
                                padding: {
                                    top: 10,
                                    bottom: 30
                                }
                            }
                        },
                        
                    }
                });
                
            
        });
    })

  