<?php
include "function.php";
headers();
?>
<div class="contianer my-5">
    <div class="row mx-auto">
        <div class="col-md-6">
          <h1>Create Trailer</h1>
        <form method="post">
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Movie Name</label>
    <input type="text" class="form-control" name="moviename">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Video Id</label>
    <input type="text" class="form-control" name="youtubelink">
  </div>
  <button type="submit" class="btn btn-primary mb-4">Submit</button>
</form>
        </div>
    </div>
</div>
<?php
footers();
?>