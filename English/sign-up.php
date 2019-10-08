<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .modal-header, h4, .close {
                background-color: #800080;
                color:white !important;
                text-align: center;
                font-size: 30px;
            }
            .modal-footer {
                background-color: #ffffff;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content ">
                        <div class="modal-header" style="padding:35px 50px;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4><span class="glyphicon glyphicon-lock"></span> Sign-up</h4>
                        </div>
                        <div class="modal-body" style="padding:40px 30px;">
                            <form role="form" action="processSIGN.php" method="POST">
                                <div class="form-group">
                                    <label><span class="glyphicon glyphicon-user"></span> Username</label>
                                    <input type="text" class="form-control" name="newUser" placeholder="Username" required>
                                </div>
			                    <div class="form-group">
                                    <label><span class="glyphicon glyphicon-envelope"></span> E-mail</label>
                                    <input type="text" class ="form-control" name="newMail" placeholder="example@gmail.com" required>
			                    </div>
                                <div class="form-group">
                                    <label><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                    <input type="password" class="form-control" name="newPass" placeholder="Password" required>
                                </div>
                                <button type="submit" name="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off">
                                    </span> Sign Up
                                </button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span> Cancel
                            </button>
                            <p>I'am alreadey a member? <a href="#" id="myBtn">Sign in</a></p>
                            - or - <a href="#"> Continue as a guest </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
        $(document).ready(function(){
            $("#myBtn1").click(function(){
                $("#myModal1").modal();
            });
        });
        </script>
    </body>
</html>
