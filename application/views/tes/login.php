<html>

<head>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
</head>

<body>
    <div class="login-form">
        <form action="<?php echo base_url() . "example/validateLogin"; ?>" method="post" name="input">
            <h1>Login SIAP</h1>
            <div class="content">
                <div class="input-field">
                    <input placeholder="Username" type="text" name="username" id="username" class="form-control"
                        required>
                    <!-- <label class="form-label" for="username">Username</label> -->
                </div>
                <div class="input-field">
                    <input placeholder="Password" type="password" name="password" id="password" class="form-control"
                        required>
                    <!-- <label class="form-label" for="password">Password</label> -->
                </div>
            </div>
            <?php if ($this->session->flashdata('category_error')) { ?>
            <div class="alert"> <?= $this->session->flashdata('category_error') ?> </div>
            <?php } 
            if(isset($_SESSION['category_error'])){
                unset($_SESSION['category_error']);
            }
            ?>

            <div class="action">
                <button type="submit" value="login" class="btn btn-primary btn-block mb-4">LOGIN</button>
            </div>
        </form>
    </div>
</body>

</html>