<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
body{
background: #c9ccd1; 
}
.form-style input{
  border:0;
  height:50px;
  border-radius:0;
border-bottom:1px solid #ebebeb;  
}
.form-style input:focus{
border-bottom:1px solid #007bff;  
box-shadow:none;
outline:0;
background-color:#ebebeb; 
}
.sideline {
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
    text-align: center;
  color:#ccc;
}
button{
height:50px;  
}
.sideline:before,
.sideline:after {
    content: '';
    border-top: 1px solid #ebebeb;
    margin: 0 20px 0 0;
    flex: 1 0 20px;
}

.sideline:after {
    margin: 0 0 0 20px;
}
</style>

<head>
    <script src="https://use.fontawesome.com/f59bcd8580.js"></script>
	<title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row m-5 no-gutters shadow-lg">
            <div class="col-md-6 d-none d-md-block">
                <img src="https://images.unsplash.com/photo-1566888596782-c7f41cc184c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80" class="img-fluid" style="min-height:100%;" />
            </div>
            <div class="col-md-6 bg-white p-5">
                <h3 class="pb-3">Sign In</h3>
                <div class="form-style">
                    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                        <div class="form-group pb-3">
                            <input type="text" placeholder="Username" class="form-control" name="username">
                        </div>
                        <div class="form-group pb-3">
                            <input type="password" placeholder="Password" class="form-control" name="password">
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <input name="" type="checkbox" value="" /> <span class="pl-2 font-weight-bold">Remember Me</span>
                            </div>
                            <div><a href="#">Forget Password?</a></div>
                        </div>
                        <div class="pb-2">
                            <button type="submit" class="btn btn-dark w-100 font-weight-bold mt-2">Submit</button>
                        </div>
                    </form>
                    <div class="pt-4 text-center">
                        Don't have an account ? <a href="#">Sign Up</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js" integrity="sha512-7rusk8kGPFynZWu26OKbTeI+QPoYchtxsmPeBqkHIEXJxeun4yJ4ISYe7C6sz9wdxeE1Gk3VxsIWgCZTc+vX3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>