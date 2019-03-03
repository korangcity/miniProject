<?php require_once 'header.php'; ?>
<div class="container">


        <label for="pwd"><?php echo QA_REPOSITORY_NAME;?></label>
        <select class="form-control perNum" id="repNmSrch" >

            <?php
            $sql="select repName from repository";
            $result=$mysqli->query($sql);
            echo "<option value=''>". QA_REPOSITORY_SELECT ."</option>";
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {

                    echo "<option  value='".$row["repName"]."'> " . $row["repName"]. "</option>>";
                }
            }
            ?>

        </select><br>
    <button class="btn btn-outline-primary" id="btnRep"><?php echo QA_SEARCH;?></button><br><br>

    <div id="rsltRep"></div>

</div>
