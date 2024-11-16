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
        data: [
          <?php
            $majors = selectMajors();
            while($major = $majors->fetch_assoc()) {
              echo "'".$major['Major']."', ";
            } 
          ?>
        ],
        axisLabel: {
          interval: 0,
          rotate: 45,
          formatter: function(value) {
            const words = value.split(' ');
            if (words.length > 1) {
              return words.join('\n');
            }
            return value;
          },
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
            $majors = selectMajors();
            while($major = $majors->fetch_assoc()) {
              echo $major['Count'].", ";
            } 
          ?>
        ],
        itemStyle: {
          color: '#09268a'
        },
      }]
    };
    majorsChart.setOption(option);
  });
</script>
