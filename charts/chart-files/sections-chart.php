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
        data: [   
          <?php 
            $sections = selectSections();
            while($section = sections->fetch_assoc()) {
              echo "'".$section['SectionName']."', "
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
              $sections = selectSections();
              while($section = sections->fetch_assoc()) {
                echo "{ value: ".$section['Count'].", name: '".$section['SectionName']."' }, "
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

    sectionsChart.setOption(option);
  });
</script>
