    <div class="container">
        <div class="card">
            <div class="card-header">
                Registrate
            </div>
            <div class="card-body">
                <form id="user-form" method="POST" action="<?=BASE_URL?>Home/test">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input type="text" name="firstname" id="firstname" class="form-control">
                                <div class="text-danger" id="firstname-error"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="firstname">Lastname</label>
                                <input type="text" name="lastname" id="lastname" class="form-control">
                                <div class="text-danger" id="lastname-error"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="firstname">Username</label>
                                <input type="text" name="username" id="username" class="form-control">
                                <div class="text-danger" id="username-error"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="firstname">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                                <div class="text-danger" id="password-error"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="firstname">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                                <div class="text-danger" id="email-error"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="usertype">User Type</label>
                            <select class="form-control" name="usertype" id="usertype">
                                <?php
                                    foreach ($roles as $rol) {?>
                                        <option value="<?= $rol['id'] ?>"><?= $rol['type'] ?></option>
                                    <?php }
                                ?>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button form="user-form" class="btn btn-primary">Registrar</button>
            </div>
        </div>
    </div>