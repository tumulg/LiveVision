<?php
    if(isset($_POST['btn-send']))
    {
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Phoneno = $_POST['phno'];
        $Subject = $_POST['subject'];
        $Description = $_POST['desc'];

        if(empty($Name) || empty($Email) || empty($Subject) || empty($Description))
        {
            header('location:contactus.php?error');
        }
        else
        {
            $to = 'tumulgupta11@gmail.com';

            if(mail($to,$Subject,$Description,$Email))
            {
                header("location:contactus.php?success");
            }
        }
    }
    else
    {
        header("location:contactus.php");
    }
?>