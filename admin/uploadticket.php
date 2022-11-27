<?php

include "function.php";
headers();
?>
<div class="contianer my-5">
    <div class="row mx-auto">
        <div class="col-md-6">
          <h1>Create Ticket</h1>
        <form method="post">
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Upload Your file</label>
    <input type="file" class="form-control" name="ticket">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Select Movie</label>
    <select name="moviename">
      <option>Select Movie</option>
      <?php

      ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Select Date and time</label>
    <input type="datetime-local" class="form-control" name="alldate">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Available Classes</label><br>
    <input type="checkbox" class="form-check-input" name="gold">
    <label for="exampleInputEmail1" class="form-label">Gold Class</label><br>
    <input type="checkbox" class="form-check-input" name="platinum">
    <label for="exampleInputEmail1" class="form-label">Platinum Class</label><br>
    <input type="checkbox" class="form-check-input" name="box">
    <label for="exampleInputEmail1" class="form-label">Box Class</label>
  </div>
  <button type="submit" class="btn btn-primary mb-4" name="btnsubmit">Submit</button>
</form>
        </div>
    </div>
</div>
<?php
footers();
?>