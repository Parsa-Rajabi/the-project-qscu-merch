<?php
include '../includes/session.php';
include '../includes/inputValidation.php';
include '../includes/db_credentials.php';
include '../includes/validateAdmin.php';

//"getUserList.php?searchInput=&searchType="

validateAdminRequest($_SESSION);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['searchType']) && isset($_GET['searchInput']) && $_GET['searchType'] != "") {
        $searchInput = $_GET['searchInput'];
        $searchType = $_GET['searchType'];
        try {


            $mysql = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
            if ($mysql->errno) {
                die();
            }

            $input = '%' . $searchInput . '%';
            $stmt;


            if ($searchInput === "") {
                $query = "SELECT uid, fname, lname, uEmail, contentType, profilePicture, customerBanned, isAdmin FROM User";
                $stmt = $mysql->prepare($query);
            } else {
                switch ($searchType) {
                    case "userName":
                        $query = "SELECT uid, fname, lname, uEmail, contentType, profilePicture, customerBanned, isAdmin FROM User WHERE fname LIKE ? OR lname LIKE ?";
                        $stmt = $mysql->prepare($query);
                        $stmt->bind_param('ss', $input, $input);

                    case "userEmail":
                        $query = "SELECT uid, fname, lname, uEmail, contentType, profilePicture, customerBanned, isAdmin FROM User WHERE uEmail Like ?";
                        $stmt = $mysql->prepare($query);
                        $stmt->bind_param('s', $input);

                    default:
                        throw new Exception;
                }
            }

            $stmt->bind_result($uid, $firstName, $lastName, $userEmail, $contentType, $image, $isBanned, $isAdmin);
            $stmt->execute();

            $data = [];
            while ($stmt->fetch()) {
                $item = array("userid" => $uid, "firstName" => $firstName, "lastName" => $lastName, "userEmail" => $userEmail, "contentType" => $contentType, "profilePic" => base64_encode($image), "isBanned" => $isBanned, "isAdmin" => $isAdmin);
                array_push($data, $item);
            }
            header('Content-Type: application/json');
            echo json_encode($data);
        }catch (Exception $e){

        }finally{
            $mysql->close();
            die();
        }
    }
}