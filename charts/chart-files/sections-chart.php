<div id="myChart" style="width: 600px; height: 400px;"></div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const chartDom = document.getElementById('myChart');
    const myChart = echarts.init(chartDom);
    
    const option = {
      title: {
        text: 'Sample Bar Chart'
      },
      tooltip: {},
      xAxis: {
        type: 'category',
        data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul']
      },
      yAxis: {
        type: 'value'
      },
      series: [{
        name: 'Data',
        type: 'bar',
        data: [65, 59, 80, 81, 56, 55, 40]
      }]
    };
    myChart.setOption(option);
  });
</script>
