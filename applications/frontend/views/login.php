
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">

            <form action="<?php echo site_url('login/post_login'); ?>" method="POST">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Please sign in</h3>
                    </div>

                    <div class="panel-body">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                        </div>
                    </div>
                </div>

            </form>

            <hr>
            
        </div>
    </div>
</div> <!-- /container -->