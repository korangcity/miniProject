
<?php require_once './header.php';?>
<div class="container">
    <div class="form-group">
        <label for="pro"><?php echo QA_GOODS_NAME;?></label>
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
    </div>
    <button type="button" id="btnPro" class="btn btn-outline-primary"><?php echo QA_SEARCH;?></button><br>

    <div id="rsltPro"> </div>

</div>




