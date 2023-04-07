<!DOCTYPE html>
<html lang="en">

<head>
    <title>BENo- Your Best Technical Support System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>



<body>



    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2">
                <div>
                    <?php
                    require('profile.php');
                    ?>
                </div>

                <h2>NEWS</h2>
                <p>C++ Basic Course Updated, Dec 7, 2022</pf>
                <p>Python compact Course Launched, Dec 7, 2022</pf>
                <p>Offline/Online Contacts</pf>



                <h3 class="mt-4">TOPICS</h3>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">PYTHON</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">JAVA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">WEB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">C++</a>
                    </li>
                </ul>



            </div>

            <div class="   col-md-10">
                <div class="card text-center">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">User</th>
                                <th scope="col">Time</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php


                            require("db.php");
                            $sql = "select MAX(no) from post;";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            $max_post = $row[0];
                            $page = 1;
                            if(isset($_GET['page'])){
                                $page = $_GET['page'];
                            }
                          
                            $max_post -= 10*($page-1);
                            
                            for ($i = $max_post; $i >= $max_post - 10; $i--) {

                                $sql = "select title,user_id, date from post where no=$i;";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_array($result);
                                
                                if(!$row){
                                    break;
                                }
                                echo "
                                    <tr> 
                                    <th scope=\"row\">" . $i . "</th>" .
                                    "<td>" .
                                    "<a href=\"read.php?no=" . $i . "\"  style=\" text-decoration:none;\"   >" .
                                    $row[0] .
                                    "</a>" .
                                    "</td>" .
                                    "<td>" .
                                    $row[1] .
                                    "</td>" .
                                    "<td>" .
                                    $row[2] .
                                    "</td>" .
                                    "</tr>";
                            }


                            ?>

                        </tbody>
                    </table>
                    <div class="row">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center ">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <?php
                                for($i=1;$i<=10;$i++){
                                    echo "<li class=\"page-item\">
                                                <a class=\"page-link\" href=\"index.php?page=".$i."\">".
                                                $i.
                                                "</a>
                                          </li>";}
                                
                                ?>
                                
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>

                                <li>

                                    <button class="btn btn-default justify-content-right justify-content-center">
                                        <a href="post.php">WRITE</a>
                                    </button>
                                </li>
                            </ul>

                        </nav>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>created for 2sem project parul university</p>
    </div>







</body>


<script>


var not_first=0;
window.onscroll = function(ev) {
  
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            if(not_first)
           {
                window.location = "index.php?page="+<?php echo $page+1;?>
           } 
            not_first=1;
            
    }
};


</script>


</html>