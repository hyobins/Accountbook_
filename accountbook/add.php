<?php include '../view/header.php';?>
  <form action="./addaction.php" method="post">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
        </div>
        <input type="date" name="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Category</label>
        </div>
        <select name="category" class="custom-select" id="inputGroupSelect01">
          <option selected>Choose...</option>
          <option value='Meal'>Meal</option>
          <option value="Grocery">Grocery</option>
          <option value="Clothes">Clothes</option>
          <option value="Housing/Internet">Housing/Internet</option>
          <option value="Others">Others</option>
        </select>
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Content</span>
        </div>
        <input type="text" name="content" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">$</span>
          <span class="input-group-text">0.00</span>
        </div>
        <input type="text" name="amount" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
      </div>

      <button type="submit" class="btn btn-secondary btn-lg">Add</button>






<?php include '../view/footer.php'; ?>
