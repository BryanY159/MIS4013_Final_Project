<div id="majorsChart" style="width: 100%; height: 100%;"></div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const chartDom = document.getElementById('majorsChart');
    const majorsChart = echarts.init(chartDom);
    
    const option = {
      title: {
        text: 'Brothers by Major',
        subtext: 'Includes Major and Major2',
        left: 'center',
        textStyle: {
          fontSize: 16,
          fontWeight: 'bold'
        }
      },
      tooltip: {
        trigger: 'axis',
        axisPointer: {            
          type: 'shadow'        
        }
      },
      xAxis: {
        type: 'category',
        data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        axisLabel: {
          interval: 0,
          rotate: 45
        }
      },
      yAxis: {
        type: 'value',
        axisLabel: {
          formatter: function(value) {
            return value + ' brothers';  // Correctly append 'brothers' to the value
          }
      },
      series: [{
        name: 'Data',
        type: 'bar',
        data: [65, 59, 80, 81, 56, 55, 40],
        itemStyle: {
          color: '#4b9cd3'
        },
      }]
    };
    majorsChart.setOption(option);
  });
</script>
