<div id="sectionsChart" style="width: 100%; height: 100%;"></div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const chartDom = document.getElementById('sectionsChart');
    const sectionsChart = echarts.init(chartDom);
    
    const option = {
      title: {
        text: 'Monthly Data Distribution',
        subtext: 'Sample Data for Monthly Analysis',
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
        orient: 'horizontal',  // Change to horizontal for better layout
        bottom: 'bottom',      // Place legend at the bottom
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
          itemStyle: {
            borderRadius: 10,  // Rounded edges for a softer look
          },
          label: {
            show: true,  // Display labels on the pie chart
            position: 'outside',  // Place labels outside the segments
            formatter: '{b}: {c} ({d}%)',  // Show both value and percentage
            fontSize: 14
          },
          emphasis: {
            itemStyle: {
              shadowBlur: 5,  // Reduce shadow intensity
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
