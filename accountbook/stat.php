<?php include '../view/header.php';?>

<?php
$connect = mysqli_connect('localhost', 'root', '', 'accountbook');//DB연결

$query = "SELECT * FROM accountbook ORDER BY accountID";
$accountbook = $connect->query($query);
$total=0;
foreach ($accountbook as $amount):
  $total = $total + $amount['Amount'];
endforeach;

function amountby_category($category){
  global $connect;
  $query = "SELECT * FROM accountbook WHERE Category='$category'";
  $categories = $connect->query($query);
  $C_total=0;
  foreach($categories as $category):
    $C_total = $C_total + $category['Amount'];
  endforeach;
  return $C_total;
}
?>

<div class="card">
  <div class="card-body">
    Your Total Expenses are $<?php echo $total?>.
  </div>
</div>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Meal', <?php echo amountby_category('Meal'); ?>],
  ['Grocery', <?php echo amountby_category('Grocery'); ?>],
  ['Clothes', <?php echo amountby_category('Clothes'); ?>],
  ['Housing/Internet', <?php echo amountby_category('Housing/Internet'); ?>],
  ['Others', <?php echo amountby_category('Others'); ?>]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Expenses Analysis', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>


<?php include '../view/footer.php'; ?>
