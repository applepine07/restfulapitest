<?php
// ↓↓↓restful api主要使用到$_server，先印出來看看
// dd($_SERVER);

// ↓↓↓在網址輸入什麼他就會印出什麼
$uri = $_SERVER['REQUEST_URI'];
$uri = trim($uri, "/");
$uri = explode("/", $uri);
dd($uri);
echo "<hr>";
echo $_SERVER['REQUEST_METHOD'];
switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        switch ("$uri[1]") {
            case "books":
                echo "取得資料";
                echo "你要看的書是編號" . $uri[2];
                echo "內容為" . $uri[3];
                break;
            case "house";
                echo "取得資料";
                echo "你要看的房子是編號" . $uri[2];
                echo "屋主為" . $uri[3];
                break;
            default:
                echo "無此服務";
        }
        break;
    case "POST":
        echo "新增資料";
        echo "你要新增的書名稱為" . $uri[2];
        echo "編號為" . rand(1000, 9999);
        break;
    case "PUT":
        echo "更新資料";

        break;
    case "DELETE":
        echo "刪除資料";
        break;
        default:
        echo "無此方法";
}


function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "<pre>";
}
