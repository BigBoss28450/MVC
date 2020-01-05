
    <div class="container">
        <div class="card" style="width: 500px; margin:auto;">
            <div class="card-header">
                <p>Log in</p>
            </div>
            <div class="card-body">
                <form id="login-form">
                    <div class="form-group">
                        <label for="username">Username/Email</label>
                        <input type="text" name="username" id="username" class="form-control">
                        <div class="text-danger" id="username-error"></div>
                    </div>
                    <div class="form-group">
                        <label for="passwrod">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <div class="text-danger" id="password-error"></div>
                    </div>
                    <input type="submit" value="Sign in" class="btn btn-primary">
                </form>
            </div>
            <div class="card-footer">
                <a href="<?=BASE_URL?>Home/signIn">Register</a>
            </div>
        </div>
    </div>