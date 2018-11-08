<?php

$main = new  MainClass();

$subid = mysqli_real_escape_string($main->MsqlConRes,$_GET['sub']);

    if (is_numeric($subid))
    {
        $main->query = mysqli_query($main->MsqlConRes,"SELECT * FROM subjects WHERE id = $subid") or die(mysqli_error());
        if (mysqli_num_rows($main->query) > 0)
        {
            ?>
             <table class="SubCont">
                     <tr>
                         <th class = "normalTh" colspan="2">Index > montada > Mawdo3 1</th>
                     </tr>
                     <tr class = "trHead">
                         <td width="15%" class="leftSubj">d</td>
                         <td  class="MainSubj" width="85%">
                            <div id="SubContainer">
                                <br><br>sassddddddddad<br>sffffffffasad<br>sasad<br>sasffffad<br>sasad<br>sasa<br><br><br>
                            </div>
                         </td>
                     </tr>
                     <tr>
                         <th colspan="2" class="footSubject">End of subject</th>
                     </tr>
             </table>
            <?php
        }
        else
            echo'Not Found !';
    }
    else
        $main->errors(404);






?>