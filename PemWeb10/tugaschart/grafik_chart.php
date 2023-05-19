<?php
include('koneksi.php');
$produk = mysqli_query($koneksi, "select * from tb_covid_asia");
while ($row = mysqli_fetch_array($produk)) {
    $nama_negara[] = $row['country'];

    $query = mysqli_query($koneksi, "select sum(total_cases) as total_cases from tb_covid_asia where id='" . $row['id'] . "'");
    $row = $query->fetch_array();
    $jumlah_penderita[] = $row['total_cases'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Membuat Grafik Menggunakan Chart JS</title>
    <script type="text/javascript" src="Chart.js"></script>
</head>

<body>
    <div style="width: 800px;height: 800px">
        <canvas id="myChart"></canvas>
    </div>


    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($nama_negara); ?>,
                datasets: [{
                    label: 'Grafik Penderita Covid Di Asia',
                    data: <?php echo json_encode($jumlah_penderita); ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255,99,132,1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>

</html>