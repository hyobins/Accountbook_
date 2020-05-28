<?php include '../view/header.php';?>

      <!--첫 화면에 게시글 목록 모두 불러들여와 나열-->
      <?php
      $connect = mysqli_connect('localhost', 'root', '', 'accountbook');//DB연결

      $query = "SELECT * FROM accountbook ORDER BY accountID";
      $accountbook = $connect->query($query);

      ?>
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Category</th>
            <th scope="col">Content</th>
            <th scope="col">Amount</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($accountbook as $account):?>
          <tr>
            <td><?php echo $account['Date'];?></td>
            <td><?php echo $account['Category'];?></td>
            <td><?php echo $account['Content'];?></td>
            <td><?php echo $account['Amount'];?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>


<?php include '../view/footer.php'; ?>
