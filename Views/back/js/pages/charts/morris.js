$(function () {
    getMorris('line', 'line_chart');
    getMorris('bar', 'bar_chart');
    getMorris('area', 'area_chart');
    getMorris('donut', 'donut_chart');
});


function getMorris(type, element) {
    if (type === 'bar') {
        Morris.Bar({
            element: element,
            data: [{
                x: '0 stars',
                y: 3,
                z: 2,
                a: 3
            }, {
                    x: '1 stars',
                    y: 2,
                }, {
                    x: '2 stars',
                    y: 6,

                }, 
                {
                    x: '3 stars',
                    y: 2,

                }, 
                {
                    x: '4 stars',
                    y: 2,

                },
                {
                    x: '5 stars',
                    y: 2,

                },],
            xkey: 'x',
            ykeys: ['y'],
            labels: ['Y'],
            barColors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(0, 150, 136)'],
        });
    }
}