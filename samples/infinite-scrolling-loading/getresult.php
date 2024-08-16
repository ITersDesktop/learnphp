<?php
require_once("db.php");
$perPage = 3;
$sql = "SELECT * from php_interview_questions";

$page = 1;
if (!empty($_GET["page"])) {
    $page = $_GET["page"];
}
$start = ($page - 1) * $perPage;
if ($start < 0) {
    $start = 0;
}
$statement = $GLOBALS["connection"]->prepare($sql);
$statement->execute();
$result = $statement->get_result();
$pages = ceil($result->num_rows / $perPage);


$query = $sql . " limit " . $start . "," . $perPage;
$statement = $GLOBALS["connection"]->prepare($query);
$statement->execute();
$result = $statement->get_result();

$output = '';
if (!empty($result)) {
    $output .= '<input type="hidden" class="pagenum" value="' . $page . '" />
                <input type="hidden" class="total-page" value="' . $pages . '" />';
    while ($row = mysqli_fetch_array($result)) {

        $output .= '<div class="question">' . $row["question"] . '</div >';

        $output .= '<div class="answer">' . $row["answer"] . '</div>';
    }
}
print $output;
?>
