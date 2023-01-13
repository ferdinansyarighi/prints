<!DOCTYPE html>
<html>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<head>
	<title>Dashboard</title>
</head>

<style>
    .jumbotron{
        margin : 20px;
        background: linear-gradient(to right bottom, #bbadcc,#adc2cc);
    }

    h1{
        color: #373954;
        font-size: 32px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .act{
        background: whitesmoke;
        border-color: #373954;
        color: #373954;
        font-size: 12px;
        font-weight: bold;
    }

    .profile{
        border-radius: 50%;
        max-width: 30px;
    }

    .custom-box{
        margin : 20px;
        padding : 10px;
        width: 350px;
        border-style: solid;
        border-width: thin;
        border-radius: 8px;
        border-color: #373954;
        color: #373954;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    h2{
        font-size: 16px;
        font-weight: bold;
    }

    p{
        font-size: 12px;
    }
</style>

<body>
    <!-- <img class="profile" src="https://cdn5.vectorstock.com/i/1000x1000/17/44/person-icon-in-line-style-man-symbol-vector-24741744.jpg"></img> -->
    <div class="jumbotron">
        <h1>Hi <?php echo $this->session->userdata("name"); ?>, have a nice day!</h1>
        <a class="btn act" href="#">Account Information</a>
    </div>
    <div class="custom-box">
        <h2>Your current information !</h2>
        <p>Username : <?php echo $this->session->userdata("username"); ?>
        <br>Name : <?php echo $this->session->userdata("name"); ?>
        <br>Address : <?php echo $this->session->userdata("address"); ?></p>
        <a class="btn act" href="<?php echo base_url('login/logout'); ?>">Logout</a>
        <a class="btn act" data-toggle="modal" data-target="#editModal">Change Password</a>
    </div>
</body>

<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group pb-3">
            <input type="text" placeholder="Username" class="form-control" id="username" value="<?php echo $this->session->userdata("username"); ?>">
        </div>
        <div class="form-group pb-3">
            <input type="text" placeholder="Password" class="form-control" id="password">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="edit()">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
    function edit(){
        $.ajax({
            type: "POST",
            url: "login/edit_pass",
            dataType: "json",
            data: {
                username        : $("#username").val(),
                password        : $("#password").val()
            },
            success: function (response) {
                alert(response);
            }
        });
    }
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js" integrity="sha512-7rusk8kGPFynZWu26OKbTeI+QPoYchtxsmPeBqkHIEXJxeun4yJ4ISYe7C6sz9wdxeE1Gk3VxsIWgCZTc+vX3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>