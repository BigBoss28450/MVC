    <?php
        if (!isset($_SESSION['username'])) {
            header('location: ' . BASE_URL . 'Home');
        } else {
            if ($_SESSION['usertype'] == '2') {
                header('location: ' . BASE_URL . 'Home/students');
            }
        }
    ?>
    <div class="container main-section">
        <div class="card">
            <div class="card-header">
                Bienvenido <?=$_SESSION['username']?>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>User Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($users as $user) { ?>
                            <tr>
                                <td><?=$user['id']?></td>
                                <td><?=$user['firstname']?></td>
                                <td><?=$user['lastname']?></td>
                                <td><?=$user['username']?></td>
                                <td><?=$user['email']?></td>
                                <td><?=$user['type']?></td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>