
<div class="wrapper-login">


<div class="login">
<br/>
<h2>Cars and Stars Login</h2>

<form method="post" action="/login/logon">

    <label>Username</label>
    <span class="error">
    <?php echo (isset($emptyLogin))? $emptyLogin . "<br />" : ""; ?>
    </span>
    <div class="input-prepend">
    <span class="add-on"><i class="icon-user"></i></span>
    <input type="text" class="inputIcon input-large" placeholder="Username" name="login"><br>
    </div>

    <label>Password</label>
    <span class="error">
    <?php echo (isset($emptyPassword))? $emptyLogin . "<br />" : ""; ?>
    </span>
    <div class="input-prepend">
    <span class="add-on"><i class="icon-lock"></i></span>
    <input type="password" class="inputIcon input-large" placeholder="Password" name="password"><br>
    </div>

    <br />

    <button class="btn btn-primary pull-left" type="submit">Sign in</button>
</form>
</div>
</div>
