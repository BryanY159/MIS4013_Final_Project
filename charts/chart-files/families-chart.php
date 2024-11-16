<div id="familiesChart" style="width: 100%; height: 100%;"></div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const chartDom = document.getElementById('familiesChart');
    const familiesChart = echarts.init(chartDom);
    
    const option = {
      title: {
        text: 'Brothers by Instrument Family',
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
            $families = selectFamilies();
            while($family = $families->fetch_assoc()) {
              echo "'".$family['Family']."', ";
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
              $families = selectFamilies();
              while($family = $families->fetch_assoc()) {
                echo "{ value: ".$family['Count'].", name: '".$family['Family']."' }, ";
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

    familiesChart.setOption(option);
  });
</script>
