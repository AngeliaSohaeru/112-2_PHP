<?php
    function adminLogin()
    {
        session_start();
        if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true))
        {
            echo"
            <script>
            alert('please login first');
                window.location.href='index.php';
            </script>
            ";
        }
    }

    function redirect($url)
    {
        echo"
        <script>
            window.location.href='$url';
        </script>
        ";
    }
?>