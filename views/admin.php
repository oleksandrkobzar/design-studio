<?
    include(ROOT ."/views/head.php");
    include(ROOT ."/views/header-admin.php");
?>
<section class="admin-header">
    <div class="container">
    <?php include(ROOT.'/components/alert_text.php');?>
        <table class="table table-dark table-data">
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
            <tbody id="data">
            </tbody>
        </table>
    </div>
</section>
<?
    include(ROOT ."/views/footer.php");
?>