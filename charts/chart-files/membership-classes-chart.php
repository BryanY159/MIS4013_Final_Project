<div id="mcClassChart" style="width: 100%; height: 100%;"></div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const chartDom = document.getElementById('mcClassChart');
    const mcClassChart = echarts.init(chartDom);
    
    const option = {
      title: {
        text: 'Brothers by Membership Class',
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
            $mcClasses = selectMembershipClasses();
            while($mcClass = $mcClasses->fetch_assoc()) {
              echo "'".$mcClass['MembershipClass']."', ";
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
              $mcClasses = selectMembershipClasses();
              while($mcClass = $mcClasses->fetch_assoc()) {
                echo "{ value: ".$mcClass['Count'].", name: '".$mcClass['MembershipClass']."' }, ";
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

    mcClassChart.setOption(option);
  });
</script>
