<?
    include(ROOT ."/views/head-admin.php");
    include(ROOT ."/views/header-admin.php");
?>
<section class="admin-header">
    <div class="container">
    <?php include(ROOT.'/components/alert_text.php');?>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email</th>
                    <th scope="col">Access</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($users as $user){
                    echo "
                    <tr>
                        <td>".$user['id']."</td>
                        <td>".$user['name']."</td>
                        <td>".$user['password']."</td>
                        <td>".$user['email']."</td>
                        <td>".$user['access']."</td>
                        <td>*</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</section>
<?
    include(ROOT ."/views/footer.php");
?>