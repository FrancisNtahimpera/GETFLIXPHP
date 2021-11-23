<!DOCTYPE html>
<html lang="en">
<?php require "head.php"; ?>
<body>

  <h1>Getflix</h1>

  <div class="container">
    <div class="d-flex justify-content-center">

      <div class="col-sm-8">

        <form action="/action_page.php">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="password">
          </div>
          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>

    </div>

  </div>

      <script type="module" src="app.js"></script>
</body>
</html>