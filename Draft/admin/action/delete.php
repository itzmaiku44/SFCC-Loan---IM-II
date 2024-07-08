<?php

if(isset($_GET["id"]))
{
    $id = $_GET["id"];

    $host= "localhost";
    $user= "root";
    $password= "";
    $db = "loan_db";

    $connect = new mysqli($host, $user, $password, $db);

    $sql = "DELETE FROM application WHERE id=$id";
    $connect->query($sql);
}

header("location:../officer/index.php");
exit;

?>
<!-- Delete Modal Confirmation -->
<!-- <div class='modal fade' id='delete' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title' id='staticBackdropLabel'>Delete</h5>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                        <span>Deleting this data will remove it from the database and cannot be retrieved again. Do you still want to proceed?</span>
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>No</button>
                            <button type='button' class='btn btn-primary' href="../action/delete.php?id=$row[id]">Yes</button>
                        </div>
                    </div>
                </div>
            </div> -->