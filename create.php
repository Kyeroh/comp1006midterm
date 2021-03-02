<!-- Step 1: Fix the input fields so they pass the column name for each corresponding field in the database -->
<!DOCTYPE html>
<html>
  <head>
    <title>Edit People</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <header class="rounded-3 my-5 bg-dark p-5">
        <h1 class="text-white">Create New Person</h1>
      </header>

      <p>
        <a href="index.php">Home</a>
      </p>

      <form action="insert.php" method="post">
        <div class="form-group">
          <label>First Name:</label>
          <input name="first_name" class="form-control" type="text">
        </div>

        <div class="form-group">
          <label>Last Name:</label>
          <input name="last_name" class="form-control" type="text">
        </div>

        <div class="form-group">
          <label>Age:</label>
          <input name="age" class="form-control" type="number" step="1" min="0">
        </div>

        <div class="form-group">
          <label>Biography:</label>
          <textarea class="form-control"></textarea>
        </div>

        <button class="btn btn-primary" type="submit">Insert</button>
      </form>
    </div>
  </body>
</html>