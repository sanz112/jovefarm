   <?php
                            if(isset($_POST['submit'])) {
                              $to = "witttechnologies@gmail.com";
                              $subject = $_POST['subject'];
                              $txt = $_POST['message'];
                              //$txt = $_POST['email'];
                              //$headers = $_POST['name'];

                              mail($to,$subject,$txt);
                            }
                            ?>