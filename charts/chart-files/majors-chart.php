<div id="majorsChart" style="width: 600px; height: 400px;"></div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const chartDom = document.getElementById('majorsChart');
    const myChart = echarts.init(chartDom);
    
    const option = {
      title: {
        text: 'Sample Pie Chart',
        left: 'center'
      },
      tooltip: {
        trigger: 'item',
        formatter: '{a} <br/>{b}: {c} ({d}%)'
      },
      legend: {
        orient: 'vertical',
        left: 'left',
        data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul']
      },
      series: [
        {
          name: 'Data',
          type: 'pie',
          radius: '50%',
          data: [
            { value: 65, name: 'Jan' },
            { value: 59, name: 'Feb' },
            { value: 80, name: 'Mar' },
            { value: 81, name: 'Apr' },
            { value: 56, name: 'May' },
            { value: 55, name: 'Jun' },
            { value: 40, name: 'Jul' }
          ],
          emphasis: {
            itemStyle: {
              shadowBlur: 10,
              shadowOffsetX: 0,
              shadowColor: 'rgba(0, 0, 0, 0.5)'
            }
          }
        }
      ]
    };

    myChart.setOption(option);
  });
</script>
