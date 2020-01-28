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
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Title</th>
                    <th scope="col">Text</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                foreach ($messages as $message){
                    echo "
                    <tr>
                        <td>".$message['id']."</td>
                        <td>".$message['name']."</td>
                        <td>".$message['email']."</td>
                        <td>".$message['title']."</td>
                        <td>".$message['text']."</td>
                        <td><a class='delete-message' href='".SRCPATH."/delete/".$message['id']."'>delete</a></td>
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