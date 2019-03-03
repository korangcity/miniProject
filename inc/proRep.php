<?php require_once 'header.php';?>

<div class="container">

    <table class="table table-borderless table-responsive">
        <tr>
            <td><?php echo QA_REPOSITORY_NEW;?></td>
            <td> <input type="checkbox" name="chkRep" id="chkRep"><br></td>
            <td><?php echo QA_REPOSITORY_DELETE;?> </td>
            <td> <input type="checkbox" name="chkRepDel" id="chkRepDel"><br></td>
            <td><?php echo QA_REPOSITORY_DO_EMPTY;?> </td>
            <td> <input type="checkbox" name="chkRepEmp" id="chkRepEmp"><br></td>
        </tr>
        <tr>
            <td><?php echo QA_GOODS_NEW;?></td>
            <td> <input type="checkbox" name="chkPro" id="chkPro"><br></td>
            <td><?php echo QA_GOODS_DELETE;?> </td>
            <td> <input type="checkbox" name="chkProDel" id="chkProDel"><br></td>
            <td><?php echo QA_GOODS_DO_EMPTY;?> </td>
            <td> <input type="checkbox" name="chkProEmp" id="chkProEmp"><br></td>
        </tr>
    </table>
    <!--***************************************************************************************************************-->

    <div id="repIdd">
    <label for="repp"><?php echo QA_REPOSITORY_NEW_NAME;?></label>
    <input class="form-control" type="text" name="repp" id="repp"><br>
    <button class="btn btn-outline-primary" id="btnAddRep"><?php echo QA_ADD;?></button>
        <div id="rsltRepIdd"></div>
    </div><br>
    <!--**************************************************************************************************************-->

    <div id="proIdd">
        <label for="proo"><?php echo QA_GOODS_NEW_NAME;?></label>
        <input class="form-control" type="text" name="proo" id="proo"><br>
        <button class="btn btn-outline-primary" id="btnAddPro"><?php echo QA_ADD;?></button>
        <div id="rsltProIdd"></div>
    </div>

    <!--***************************************************************************************************************-->

    <div id="repDel">
    <label><?php echo QA_REPOSITORY_DELETE_NAME;?></label>
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
    <button class="btn btn-outline-danger" id="btnDelRep"><?php echo QA_DELETE;?></button>
    <div id="rsltRepDel"></div>
    </div>
    <!--**************************************************************************************************************-->

    <div id="proDel">
    <label><?php echo QA_GOODS_DELETE_NAME;?></label>
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
    <br>
    <button class="btn btn-outline-danger" id="btnDelPro"><?php echo QA_DELETE;?></button>
    <div id="rsltProDel"></div>
    </div>


<!--******************************************************************************************************************-->

<div id="repEmp">
    <label><?php echo QA_REPOSITORY_DELETE_NAME_EMPTY;?></label>
    <select class="form-control perNum" id="repNmEmp" >

        <?php
        $sqll="select repName from repository";
        $resultt=$mysqli->query($sqll);
        echo "<option value=''>". QA_REPOSITORY_SELECT ."</option>";
        if (mysqli_num_rows($resultt) > 0) {
            while($row = mysqli_fetch_assoc($resultt)) {

                echo "<option  value='".$row["repName"]."'> " . $row["repName"]. "</option>>";
            }
        }
        ?>

    </select><br>
    <button class="btn btn-outline-danger" id="btnEmpRep"><?php echo QA_EMPTY;?></button>
    <div id="rsltRepEmp"></div>
</div>

    <!--*****************************************************************************************************************-->
    <div id="proEmp">
        <label><?php echo QA_GOODS_DELETE_NAME_EMPTY;?></label>
        <select class="form-control perNum" id="proNmEmp" >

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
        <br>
        <button class="btn btn-outline-danger" id="btnEmpPro"><?php echo QA_EMPTY;?></button>
        <div id="rsltProEmp"></div>
    </div>





</div>



















