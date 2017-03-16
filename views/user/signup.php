<form method="POST" role="form">
    <legend>Sign Up</legend>
    <div class="form-group">
        <div class="input-group col-xs-3">
            <label>Surname</label>
            <input placeholder="Surname" class="form-control" type="text" name="surname" required="required"/>
        </div>
        <div class="input-group col-xs-3">
            <label>Firstname</label>
            <input placeholder="Firstname" class="form-control" type="text" name="firstname" required="required"/>
        </div>
        <div class="input-group col-xs-3">
            <label>E-mail</label>
            <input placeholder="E-mail" class="form-control" type="email" name="email" required="required"/>
        </div>
        <div class="input-group col-xs-3">
            <label>Password</label>
            <input placeholder="Password" class="form-control" type="password" name="password" required="required"/>
        </div>
        <div class="input-group col-xs-3">
            <label>Repeat Password</label>
            <input placeholder="Repeat Password" class="form-control" type="password" name="password_repeat" required="required"/>
        </div>
        <div class="input-group col-xs-3">
            <label>Sex</label>
            <select class="form-control" name="sex">
                <option disabled="disabled" selected="selected">Not Selected</option>
                <option value="0">Male</option>
                <option value="1">Female</option>
            </select>
        </div>
        <div class="input-group col-xs-3">
            <label>Birthday</label>
            <input placeholder="Birthday" class="form-control" type="date" name="birthday"/>
        </div>
    </div>
    <div class="g-recaptcha" data-sitekey="<?=\core\App::params('reCaptchaKey')?>"></div>
    <input type="submit" value="Sign Up" name="signup" class="btn btn-primary"/>

</form>
