<div id="minorsChart" style="width: 100%; height: 100%;"></div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const chartDom = document.getElementById('minorsChart');
    const minorsChart = echarts.init(chartDom);
    
    const option = {
      title: {
        text: 'Brothers by Minor',
        subtext: 'Includes Minor and Minor2',
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
        data: [
          <?php
            $minors = selectMinors();
            while($minor = $minors->fetch_assoc()) {
              echo "'".$minor['Minor']."', ";
            } 
          ?>
        ],
        axisLabel: {
          interval: 0,
          rotate: 45
        }
      },
     yAxis: {
        type: 'value'
      },
      series: [{
        name: 'Brother Count',
        type: 'bar',
        data: [
          <?php
            $minors = selectMinors();
            while($minor = $minors->fetch_assoc()) {
              echo $minor['Count'].", ";
            } 
          ?>
        ],
        itemStyle: {
          color: '# ffc61e'
        },
      }]
    };
    minorsChart.setOption(option);
  });
</script>
