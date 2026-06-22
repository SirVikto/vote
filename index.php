<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP VOTING SYSTEM</title>

    <!--BOOTSTRAP CSS LINK-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
  <h1 class="text-info text-center p-3">Voting System</h1>
    <div class="bg-info py-4">
      <h2 class="text-center">Login</h2>
      <div class="container text-center">
         <form action="./actions/login.php" method="POST">
          <div class="mb-3">
            <input type="text" class="form-control w-50 m-auto" name="username" placeholder="Enter Username" required="required">
            
          </div>
          <div class="mb-3">
            <input type="mobile" class="form-control w-50 m-auto" name="phone" placeholder="Enter phone number" required="required" maxLength="10" minLength="10">
          </div>
           <div class="mb-3">
            <input type="password" class="form-control w-50 m-auto" name="password" placeholder="Enter password" required="required" maxLength="15" minLength="4"> 
          </div>
          <div class="mb-3">
            <select name="std" class="form-select w-50 m-auto">
              <option value="Voter" class="">Voter</option>
              <option value="Group" class="">Group</option>
            </select>
          </div>
          <button class="btn btn-dark my-4" type="submit">Login</button>
          <div class="p">Don't have an Account?<a href="./partials/registration.php" class="text-white">Register Here</a></div>
          
         </form>
      </div>
    </div>
</body>
</html>