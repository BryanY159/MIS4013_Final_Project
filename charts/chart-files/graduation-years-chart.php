<div id="gradYearChart" style="width: 100%; height: 100%;"></div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const chartDom = document.getElementById('gradYearChart');
    const gradYearChart = echarts.init(chartDom);
    
    const option = {
      title: {
        text: 'Brothers by Graduation Year',
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
        data: [   
          <?php 
            $gradYears = selectGraduationYears();
            while($gradYear = $gradYears->fetch_assoc()) {
              echo "'".$gradYear['GraduationYear']."', ";
            }
          ?>      
        ]
      },
      series: [
        {
          name: 'Brother Count',
          type: 'pie',
          radius: '50%',
          data: [
            <?php 
              $gradYears = selectGraduationYears();
              while($gradYear = $gradYears->fetch_assoc()) {
                echo "{ value: ".$gradYear['Count'].", name: '".$gradYear['GraduationYear']."' }, ";
              }
            ?>
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

    gradYearChart.setOption(option);
  });
</script>
