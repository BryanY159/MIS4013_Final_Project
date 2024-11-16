<div id="majorsChart" style="width: 100%; height: 100%;"></div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const chartDom = document.getElementById('majorsChart');
    const majorsChart = echarts.init(chartDom);
    
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
    majorsChart.setOption(option);
  });
</script>
