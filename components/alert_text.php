<?
if(isset($_SESSION['error']) && isset($_SESSION['res'])){
    if($_SESSION['error'] == 1){
        echo"<div class='alert alert-dismissible alert-warning'>
            <button type='button' class='close' data-dismiss='alert'>×</button>
            <p>".$_SESSION['res'].".</p>
        </div>";
    }
    if($_SESSION['error'] == 0){
        echo"<div class='alert alert-dismissible alert-success'>
            <button type='button' class='close' data-dismiss='alert'>×</button>
            <p>".$_SESSION['res']."</p>
        </div>";
    }
    unset($_SESSION['res']);
    unset($_SESSION['error']);
}
?>