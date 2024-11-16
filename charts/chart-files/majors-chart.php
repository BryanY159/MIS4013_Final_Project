<div id="majorsChart" style="width: 100%; height: 400px;"></div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const chartDom = document.getElementById('majorsChart');
    const majorsChart = echarts.init(chartDom);
    
    const option = {
      title: {
        text: 'Monthly Data by Major',
        subtext: 'Sample Data for Majors',
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
          interval: 0,  // Show all labels
          rotate: 45    // Rotate labels if needed
        }
      },
      yAxis: {
        type: 'value',
        axisLabel: {
          formatter: '{value} units'  // Add units to the y-axis values
        }
      },
      series: [{
        name: 'Data',
        type: 'bar',
        data: [65, 59, 80, 81, 56, 55, 40],
        itemStyle: {
          color: '#4b9cd3'  // Customize bar color
        },
        label: {
          show: true,
          position: 'top',  // Display labels on top of bars
          formatter: '{c}'  // Show the value
        }
      }]
    };
    majorsChart.setOption(option);
  });
</script>
