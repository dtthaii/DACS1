

const chartData = {
  labels: ["ETH", "SOL", "BTC", "USDT", "DOGE", "BNB"],
  data: [50.000, 25.000, 15.000, 8.090, 5.750, 10.000]
};

const doughnutLabel = {
  id: 'doughnutLabel',
  afterDraw(chart, args, options) {
    const { ctx, chartArea: { left, right, top, bottom, width, height } } = chart;
    ctx.save();
    
    if(chart._active.length <= 0) {

      ctx.save();
      ctx.font = 'bolder 15px Poppins';
      ctx.fillStyle = '#fff';
      ctx.textAlign = 'center';
      ctx.fillText('Total cost: ', width/2, height/2 + top-30);
      ctx.restore();

      const sum = chart._metasets[0].total;

      ctx.save();
      ctx.font = '40px Poppins';
      ctx.fillStyle = '#fff';
      ctx.textAlign = 'center';
      ctx.fillText(sum.toFixed(3)+"$", width/2, height/2 + top+20);
      ctx.restore();
    }

    if(chart._active.length > 0) {
      const sum = chart._metasets[0].total;
      const value = chart.config.data.datasets[chart._active[0].datasetIndex].data[chart._active[0].index];
      
      const textLabel = chart.config.data.labels[chart._active[0].index];
      const percentageLabel = value / sum * 100;

      ctx.save();
      ctx.font = '12px Poppins';
      ctx.fillStyle = '#fff';
      ctx.textAlign = 'center';
      ctx.fillText(`${textLabel}`, width/2, height/2 + top-30);
      ctx.restore();

      ctx.save();
      ctx.font = 'Bolder 35px Poppins';
      ctx.fillStyle = '#fff';
      ctx.textAlign = 'center';
      ctx.fillText(percentageLabel.toFixed(2), width/2.15, height/2 + top+20);
      ctx.restore();

      ctx.save();
      ctx.font = 'Bolder 20px Poppins';
      ctx.fillStyle = '#fff';
      ctx.textAlign = 'center';
      ctx.fillText("%", width/1.3, height/2 + top+20);
      ctx.restore();
    }
  }
};

const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: "doughnut",
  data: {
    labels: chartData.labels,
    datasets: [
      {
        label: "Total assets",
        data: chartData.data,
      },
    ]
  },
  options: {
    backgroundColor: [
      "#33CCFF",
      "#FF6666",
      "#FF9900",
      "#FFCC00",
      "#00CCCC",
      "#660099",
      "#9966CC"
    ],
    borderColor: [
      "#33CCFF",
      "#FF6666",
      "#FF9900",
      "#FFCC00",
      "#00CCCC",
      "#660099",
      "#9966CC"
    ],

    // borderColor: '#10081a',
    
    borderWidth: 3,
    borderRadius: 0,
    hoverBorderWidth: 0,
    borderAlign: 'center',
    cutout: '80%',
    
    
    plugins: {
      tooltip: {
        enabled: false,
      },
      colors: {
        enabled: true,
      },
      legend: {
        display: true,
        position: 'right',
        labels: {
          boxWidth: 5,
          boxHeight: 5,
        },
      },
    },
  },
  plugins: [doughnutLabel]
}); 