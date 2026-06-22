<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--BOOTSTRAP CSS LINK-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting system</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Register Account</h2>
        <div class="container text-center">
            <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" placeholder="Enter your username" name="username" class="form-control w-50 m-auto" required="required">
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Enter your Phone" name="phone" class="form-control w-50 m-auto" required="required">
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Enter your password" name="password" class="form-control w-50 m-auto" required="required">
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Confirm your password" name="cpassword" class="form-control w-50 m-auto" required="required">
                </div>
                <div class="mb-3">
                    <input type="file" name="photo" class="form-control w-50 m-auto" required="required">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="">Select category</option>
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                    <button type="submit" class="btn btn-dark my-4">Register</button>
                    <p>Already have an account?<a href="../index.php" class="text-white">Login Here</a></p>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>