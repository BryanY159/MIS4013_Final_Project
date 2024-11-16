<div id="sectionsChart" style="width: 100%; height: 100%;"></div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const chartDom = document.getElementById('sectionsChart');
    const sectionsChart = echarts.init(chartDom);
    
    const option = {
      title: {
        text: 'Brothers by Section',
        left: 'center',
        textStyle: {
          fontSize: 16,
          fontWeight: 'bold'
        }
      },
      tooltip: {
        trigger: 'item',
        formatter: '{a} <br/>{b}: {c} ({d}%)'
      },
      legend: {
        orient: 'horizontal', 
        bottom: 'bottom',
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
              shadowBlur: 5,
              shadowOffsetX: 0,
              shadowColor: 'rgba(0, 0, 0, 0.2)'
            }
          }
        }
      ]
    };

    sectionsChart.setOption(option);
  });
</script>
