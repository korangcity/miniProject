<?php require_once 'header.php';?>

<div class="container">


    <div class="form-group">
        <label><?php echo QA_REPOSITORY_NAME;?></label>
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

       </select>

<br>
        <label><?php echo QA_GOODS_NAME;?></label>
        <select class="form-control perNum" id="proNmSrch" >

            <?php
            $sqll="select proName from products";
            $resultt=$mysqli->query($sqll);
            echo "<option value=''> ".QA_GOODS_SELECT."</option>";
            if (mysqli_num_rows($resultt) > 0) {
                while($roww = mysqli_fetch_assoc($resultt)) {

                    echo "<option  value='".$roww["proName"]."'> " . $roww["proName"]. "</option>>";
                }
            }
            ?>

        </select>


        <label for="proNum"><?php echo QA_GOODS_NUMBER;?></label>
        <input type="number" name="goodsNum" class="form-control" id="proNum" min="1">
    </div>

    <button type="submit" name="submit" id="btn" class="btn btn-outline-primary"><?php echo QA_ADD;?></button>
   <br>

    <div id="rslt"> </div>
</div>
