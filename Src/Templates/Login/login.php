<?php
/*use App\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}*/
require __DIR__ .  "./../layourt/header.php";?>

    <div class="container">
        <form name="login" action="" method="post"
              onsubmit="return loginValidation()">
            <div class="signup-heading">Login</div>
            <?php if(!empty($loginResult)){?>
                <div class="error-msg"><?php echo $loginResult;?></div>
            <?php }?>
            <div class="form-group">
                <div class="col-md-6 mb-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="password"> Password </label>
                    <input type="text" class="form-control" id="password" name="password" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        Agree to terms and conditions
                    </label>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>

<?php require __DIR__ .  "./../layourt/footer.php";?>
