  <?php 
	include_once("connect.php"); 
 session_start();
 	$email = $password          = "";
	$email_err = $password_err  = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
	if(empty(trim($_POST["email"])))
    {
        $email_err = "Vui lòng nhập email.";
    }
        else
    {
        $email = trim($_POST["email"]);
    }
    if(empty(trim($_POST["password"])))
    {
        $password_err = "Vui lòng nhập mật khẩu của bạn.";
    }
        else
    {
        $password = trim($_POST["password"]);
    }
    if(empty($email_err) && empty($password_err))
    {
    	$sql = "SELECT email, password FROM users WHERE email = ?";
    	if($stmt = mysqli_prepare($conn, $sql))
        {
        	mysqli_stmt_bind_param($stmt, "s", $param_email);

        	$param_email = $email;
        	if(mysqli_stmt_execute($stmt))
            {
            	mysqli_stmt_store_result($stmt);
            	if(mysqli_stmt_num_rows($stmt) == 1)
                {
                	mysqli_stmt_bind_result($stmt,$email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                    	if(password_verify($password, $hashed_password)){
                            session_start();
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;     
                            header("location: welcom.php");
                        }
                        else
                        {
                            $password_err = "Mật khẩu bạn vừa nhập không hợp lệ.";
                        }
                    }
                }
                else
                {
                    $email_err = "Không tìm thấy tài khoản nào với email đó.";
                }
            }
            else
            {
                echo "Không tìm thấy tài khoản nào với email đó.";
            }
             mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($conn);
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập</title>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;0,700;0,800;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="mainContainer">
		<div class="main-wrap">	
			<div class="mainContent">
				<div class="loginContainer">
					<div class="homeContent">
						<img src="Images/home.png">
						Trang chủ
					</div>
					<form  action="" method="POST" role="form">
						<h2>Đăng nhập tài khoản</h2>
						<div class="formContainer" <?= (!empty($email_err)) ? 'has-error' : '';?>">
							<div>
								<label for="" >Emai đăng nhập:</label>
								
				              	<div class="input-form">					
									<input type="text" placeholder="" name="email"autofocus>
                                    
								</div>
                                <div><span class="help-block"><?= $email_err; ?></span></div>
							</div>
							<div <?= (!empty($password_err)) ? 'has-error' : ''; ?>">
								<label for="">Mật khẩu:</label>
				           		<div class="input-form">			
									<input  class="password"type="password" placeholder=""name="password">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                                    
				            	</div>
                                <div><span class="help-block"><?= $password_err; ?></span></div>
				            	
							</div>
							<p class="forget-password">
								Quên mật khẩu?
							</p>
							<input type="submit"name="login"value="Đăng nhập">
							<p class="account">Bạn chưa có tài khoản? <a href="">Đăng ký ngay</a></p>
						</div>
					</form>
				</div>
				<div class="form-title">
					<h3>Khám phá thêm tri thức mới cùng Timviec365.com.vn</h3>
					<img class="anh"src="Images/frame.png">
				</div>
			</div>	
		</div>	
	</div>	
</body>
</html>
<script type="text/javascript">
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $('.password');
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>
