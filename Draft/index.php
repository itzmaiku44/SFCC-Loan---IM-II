<?php

    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: admin.php");
        exit();
    }
    include("connect.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Panel</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="source/index.css">

</head>

<body style="">
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">SFCC LOANS</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item pstn">
                    <a class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span class="ofcName" id="pos"><?php echo $_SESSION['fname']; ?> <?php echo $_SESSION['lname']; ?></span>
                        <span class="position h6"><?php echo $_SESSION['positn']; ?></span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="index.php" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-stamp"></i>
                        <span>Approval</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-thumbs-down"></i>
                        <span>Rejects</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-trash-can"></i>
                        <span>Recycle Bin</span>
                    </a>
                </li>
                
            </ul>
            <div class="sidebar-footer mb-3">
                <a href="action/logout.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main p-3" >
            <div class="container1 table-responsive">
                <h2 class="titlewrap mb-5 text-center">Application Dashboard</h2>
                <!-- <a class="btn btn-success" href="action/create.php" role="button">New Client</a>
                <br> -->
                <table class="table table-stripped table-hover mt-3 text-center rounded border-2">
                    <caption class="caption-top">List of Applications</caption>
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Birthdate</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Loan Amount</th>
                            <th>Term Length</th>
                            <th>Purpose</th>
                            <th>Date of Application</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "select * from application";     /* Select all data from table */
                            $result = $data->query($sql);           /* Check SQL Connection */
                            if(!$result)
                            {
                                die("Invalid Query: " . $data->error);
                            }
                            while($row = $result->fetch_assoc())  /* CHECK ALL data from table by row */
                            {
                                echo "
                                <tr>
                                    <td>$row[id]</td>
                                    <td>$row[fname] $row[lname]</td>
                                    <td>$row[age]</td>
                                    <td>$row[bmonth]/$row[bday]/$row[byear]</td>
                                    <td>$row[phonenum]</td>
                                    <td>$row[email]</td>
                                    <td>$row[loanAmount]</td>
                                    <td>$row[term]</td>
                                    <td>$row[fundPurpose]</td>
                                    <td>$row[applyDate]</td>
                                    <td>$row[applicationStatus]</td>
                                    <td>
                                        <div class='d-grid gap-2 d-md-block'>
                                        <a class='btn btn-success btn-sm m-1 fs-5 align-baseline viewBtn' data-bs-toggle='modal' data-bs-target='#viewData' data-id='" . $row['id'] . "'><i class='bi bi-eye'></i></a> 
                                        <a class='btn btn-primary btn-sm m-1 fs-5 align-baseline' ><i class='bi bi-envelope-check'></i></a> 
                                        <a class='btn btn-danger btn-sm m-1 fs-5 align-baseline' ><i class='bi bi-trash'></i></a>
                                        </div>
                                    </td>
                                </tr>
                                ";
                            }
                            
        
                        ?>

                    </tbody>
                </table>
            </div> <!-- END OF DATABASE TABLE -->


                            <!-- VIEW BUTTON FUNCTION -->
            <div class="modal fade" id="viewData">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">

                        <div class="modal-header" id="modal-header" style="background: green;color: #fff;">
                            <h4 class="modal-title">Application #<label id="modalID"></label> </h4>
                            <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">

                            <form action="#" id="myForm" style="display: flex;justify-content: space-between;align-items: flex-start;padding: 0;">

                                <div class="card imgholder" id="imgholder"style="width: 330px;height: 250px;position: relative;border-radius: 20px;overflow: hidden;">
                                    <img src="image/id-card-icon.png" alt="" width="330" height="250" class="showImg">
                                </div>

                                <div class="inputField" id="inputField" style="flex-basis: 55%;border-left: 5px groove rgb(2, 121, 2);padding-left: 20px;padding-right: 50px;">
                                    <div style="width: 100%;display: flex;justify-content: space-between; align-items: center;margin-bottom: 20px;">
                                        <label for="name" style="font-size: 20px;font-weight: 500;">Name:  <span id="modalName" style="font-size: 25px; font-weight: bold;"> </span></label>
                                        <!-- <input type="text" name="" id="modalName" value=" " disabled style="width: 80%;"> -->
                                    </div>
                                    <div style="width: 100%;display: flex;justify-content: space-between; align-items: center;margin-bottom: 20px;">
                                        <label for="age" style="font-size: 20px;font-weight: 500;">Age: <span id="modalAge" style="font-size: 25px; font-weight: bold;"> </span></label>
                                    </div>
                                    <div style="width: 100%;display: flex;justify-content: space-between; align-items: center;margin-bottom: 20px;">
                                        <label for="age" style="font-size: 20px;font-weight: 500;">Birthdate: <span id="modalBirth" style="font-size: 25px; font-weight: bold;"> </span></label>
                                    </div>
                                    <div style="width: 100%;display: flex;justify-content: space-between; align-items: center;margin-bottom: 20px;">
                                        <label for="age" style="font-size: 20px;font-weight: 500;">Address: <span id="modalAddress" style="font-size: 25px; font-weight: bold;"> </span></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="modalQuery.js"></script>
            <script src="adminQuery.js"></script>

                        





        </div> <!-- end of main -->                
    </div>    <!-- END OF WRAPPER -->
                            <!-- DONT ADD CONTENT BELOW THIS LINE -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="sidebarToggle.js"></script>
    
</body>

</html>
