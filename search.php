<?php


$connection = mysqli_connect('127.0.0.1', 'root', 'admin', 'project');


if (!empty($_POST)) {
    $res = strtolower($_POST['search_data']);
    $sql = "SELECT * FROM news WHERE title='$res'";
    $result = mysqli_query($connection, $sql);
    $totalData = mysqli_num_rows($result);
    $outPut = "";
    if ($totalData > 0) {
        foreach ($result as $news) {
            $outPut = "<div class='col-md-12'>
                <h1>${news['title']}</h1>
                <p>${news['description']}</p>
            </div>";
        }

    } else {
        $outPut = "<div class='col-md-12'><h1>Data not found</h1></div>";
    }

    echo $outPut;

} else {

    header('Location:index.php');
}
