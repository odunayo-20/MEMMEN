<div wire:ignore class="bg-success text-light">
    <canvas id="myChart"></canvas>
  </div>
  @assets
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  @endassets
  
  @script
  <script>
      const ctx = document.getElementById('myChart');
  const subscriptions = $wire.subscriptions;
//   console.log(subscriptions)
const labels = subscriptions.map(item=>item.Day)
const values = subscriptions.map(item=>item.Value)
    new Chart(ctx, {
      type: 'bar',
      data: {
        // labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        labels: labels,
        datasets: [{
          label: 'Subscription Growth',
        //   data: [12, 19, 3, 5, 2, 3],
          data: values,
          borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
@endscript
