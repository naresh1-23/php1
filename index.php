<html>
    <head>
        <title>
            form
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="row">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-6">
                        <div class= "row">
                            <div class="col-6"><h5>Contact Form</h5></div>
                            <div class = "col-6">
                                <a href="view.php" class="btn btn-success" style="float:right;">View contact</a>
                            </div>
                        </div>
                        <hr>
                        <form method="POST" action="db/insert.php">
                            <div class="input-group md-3">
                                <span class="input-group-text" id="basic-addon1">
                                    Name
                                </span>
                                <input class="form-control" type="text" name="name" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                            </div><br>
                            <div class="input-group md-3">
                                <span class="input-group-text" id="basic-addon1">
                                    Contact no
                                </span>
                                <input class="form-control" type="text" name="contact" placeholder="Contact" aria-label="Username" aria-describedby="basic-addon1">
                            </div><br>
                            <div class="input-group md-3">
                                <span class="input-group-text" id="basic-addon1">
                                    Email
                                </span>
                                <input class="form-control" type="text" name="email" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                            </div><br>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                        <?php include('include/msg.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>