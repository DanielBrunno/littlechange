<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div style="text-align: center;">
Mensal
<canvas id="myChartDoughnut" style="width:600px; height:400px; display:block;"></canvas>
<script>
var ctx = document.getElementById('myChartDoughnut').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Ações Sociais', 'Doação de Roupas', 'Seleta de Resíduos', 'Consumo Biodegradáveis', 'Erradicação da Fome', 'Tratamento de Resíduos'],
        datasets: [{
            label: '# of Votes',
            data: [7, 8, 3, 10, 2, 1],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
</div>