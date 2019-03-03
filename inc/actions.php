<?php
require_once 'config.php';
sleep(2);
$errorMsg=false;//error msg
if(isset($_POST['sub'])){

        $repNmSrch = isset($_POST['repNmSrch'])?$_POST['repNmSrch']:0;
        $proNmSrch = isset($_POST['proNmSrch'])?$_POST['proNmSrch']:0;
        $goodsNum = isset($_POST['goodsNum'])?$_POST['goodsNum']:0;

        $rep="select id from repository where repName like '%$repNmSrch%'";
        $resultr=$mysqli->query($rep);
    if(mysqli_num_rows($resultr) > 0){
        while($row = mysqli_fetch_array($resultr)){
            $idR=$row['id'];
        }
    }


    $pro="select id from products where proName like '%$proNmSrch%'";
    $resultp=$mysqli->query($pro);
    if(mysqli_num_rows($resultp) > 0){
        while($row = mysqli_fetch_array($resultp)){
            $idP=$row['id'];
        }
    }


    $db = 'insert into search (id,idP,numberOfProduct,idR) values (null,"'.$idP.'","'.$goodsNum.'","'.$idR.'")';
        if($mysqli->query($db)){
            echo "<br> <p class='bg-success text-center text-light'>".QA_GOODS_NEW_REGISTERY."</p>";
        }else{
            echo "<p class='bg-danger text-center text-light'>".QA_PRODUCTS_NUMBER_ERROR."</p>";
        }
}
//**********************************************************************************************************************

if(isset($_POST['que'])){
$R=0;
    $repNmSrch = $_POST['repNmSrch'];

    $repp="select id from repository where repName like '%$repNmSrch%'";
    $resultrr=$mysqli->query($repp);
    if(mysqli_num_rows($resultrr) > 0){
        while($row = mysqli_fetch_array($resultrr)){
            $idR=$row['id'];
        }
    }

    $sel="select * from search where idR like '".$idR."'";
    //$sel= 'SELECT * from tutorials_inf where name="sai"';
if($result = $mysqli->query($sel)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-hover table-responsive'>";
        echo "<tr class='table-info rtlResult'>";

        echo "<th>کد محصول</th>";
        echo "<th>نام محصول</th>";
        echo "<th>تعداد محصول</th>";
        echo "<th>تاریخ و ساعت ورود محصول به انبار</th>";
        echo "</tr>";

        while($row = mysqli_fetch_array($result)){
            $R+=$row['numberOfProduct'];
            echo "<tr class='perNum rtlResult'>";
            echo "<td>" . $row['idP'] . "</td>";
            echo "<td> محصول شماره &nbsp;" . $row['idP'] . "</td>";
            echo "<td>" . $row['numberOfProduct'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "</tr>";


        }

        echo "</table>";
        ?>
        <div class="perNum">
            <span>مجموع کالاهای موجود در  &nbsp;</span><?php echo $repNmSrch;?><span>&nbsp;برابر است با :</span><br>
            <?php echo $R;?>
        </div>

<?php
       // mysqli_free_result($result);
    } else {
        echo "<br><p class='bg-danger text-center text-light'>".QA_REPOSITORY_EMPTY."</p>";

    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}

}

//**********************************************************************************************************************
if(isset($_POST['qu'])){

    $R=0;
    $proNmSrch = $_POST['proNmSrch'];

    $proo="select id from products where proName like '%$proNmSrch%'";
    $resultpp=$mysqli->query($proo);
    if(mysqli_num_rows($resultpp) > 0){
        while($row = mysqli_fetch_array($resultpp)){
            $idP=$row['id'];
        }
    }


    $sel="select * from search where idP like '".$idP."'";

    if($result = $mysqli->query($sel)){
        if(mysqli_num_rows($result) > 0){


            echo "<br>";
            echo "<table class='table table-hover table-responsive'>";
            echo "<tr class='table-warning rtlResult'>";

            echo "<th>کد انبار</th>";
            echo "<th>نام انبار</th>";
            echo "<th>تعداد محصول</th>";
            echo "<th>تاریخ و ساعت ورود محصول به انبار</th>";
            echo "</tr>";

            while($row = mysqli_fetch_array($result)){
                $R+=$row['numberOfProduct'];
                echo "<tr class='perNum rtlResult'>";
                echo "<td>" . $row['idR'] . "</td>";
                echo "<td> انبار شماره &nbsp;" . $row['idR'] . "</td>";
                echo "<td>" . $row['numberOfProduct'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "</tr>";


            }

            echo "</table>";
            ?>
            <br>
            <div class="perNum">
                <span>مجموع  &nbsp;</span><?php echo $proNmSrch;?><span>&nbsp; موجود در انبارهابرابر است با :</span><br>
                <?php echo $R;?>
            </div>

            <?php
            // mysqli_free_result($result);
        } else {
            echo "<br><p class='bg-danger text-center text-light'>". QA_GOODS_EMPTY." </p>";
        }
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
    }

}

//**********************************************************************************************************************

if(isset($_POST['btnAdRep'])){
    $repName=(strlen($_POST['repName'])>0)?$_POST['repName']:false;
    if($repName){
    $sq="insert into repository (id,repName) values (null,'".$repName."')";
    if($mysqli->query($sq)){
        echo "<br><p class='bg-success text-center text-light'>".QA_REPOSITORY_NEW_ADDED."</p>";
    }else{
        echo "<br><p class='bg-danger text-center text-light'>".QA_REPOSITORY_NEW_ADDED_PROBLEM."</p>";
        die("error :".mysqli_error());
    }
    }else{
        echo "<br><p class='bg-danger text-center text-light'>".QA_REPOSITORY_NEW_ADDED_ERROR."</p>";
    }
}

//**********************************************************************************************************************

if(isset($_POST['btnAdPro'])){
   $proName=(strlen($_POST['proName'])>0)?$_POST['proName']:false;
   if($proName){
    $sqq="insert into products (id,proName) values (null,'".$proName."')";
    if($mysqli->query($sqq)){
        echo "<br><p class='bg-success text-center text-light'>".QA_GOODS_NEW_REGISTERY."</p>";
    }else{
        echo "<br><p class='bg-danger text-center text-light'>".QA_GOODS_NEW_REGISTERY_PROBLEM."</p>";
        die("error :".mysqli_error());
    }
   }else{
       echo "<br><p class='bg-danger text-center text-light'>".QA_GOODS_NEW_REGISTERY_ERROR."</p>";
   }
}
//**********************************************************************************************************************

if(isset($_POST['btnDlRep'])){
    $repDel=$_POST['repNmSrch'];
    $R=0;

    $repo="select id from repository where repName like '%$repDel%'";
    $resultDel=$mysqli->query($repo);
    if(mysqli_num_rows($resultDel) > 0){
        while($row = mysqli_fetch_array($resultDel)){
            $idRr=$row['id'];
        }
    }

    $del=' DELETE FROM repository WHERE repName = "'.$repDel.'"';
    //$del="delete * from repository where repName like '%$repDel%' and not exists (select * from products where idR like '".$idRr."')";
    $srch="select * from search where idR like '".$idRr."'";
    $resultSrch=$mysqli->query($srch);

    if(mysqli_num_rows($resultSrch) == 0){
        while($row = mysqli_fetch_array($resultSrch)){
           // $idRrr=$row['id'];
            $R++;
        }
    }else{

        $R=1;
    }
    if($R!=0){
       echo "<br><p class='bg-danger text-center text-light'>".QA_REPOSITORY_DELETE_ERROR."</p>";
    }else{

    if($dlt=$mysqli->query($del)){
        echo "<br><p class='bg-success text-center text-light perNum'>$repDel".QA_REPOSITORY_DELETE_SUCCESSFUL."</p>";
    }
    }
}
//**********************************************************************************************************************

if(isset($_POST['btnDlPro'])){
    $proDel=$_POST['proNmSrch'];
    $RR=0;

    $prod="select id from products where proName like '%$proDel%'";
    $resultDell=$mysqli->query($prod);
    if(mysqli_num_rows($resultDell) > 0){
        while($row = mysqli_fetch_array($resultDell)){
            $idPp=$row['id'];
        }
    }

    $dell=' DELETE FROM products WHERE proName = "'.$proDel.'"';
    $srchh="select * from search where idP like '".$idPp."'";
    $resultSrchh=$mysqli->query($srchh);

    if(mysqli_num_rows($resultSrchh) == 0){
        while($row = mysqli_fetch_array($resultSrchh)){
            // $idRrr=$row['id'];
            $RR++;
        }
    }else{

        $RR=1;
    }
    if($RR!=0){
        echo "<br><p class='bg-danger text-center text-light'>".QA_GOODS_DELETE_ERROR."</p>";
    }else{

        if($dlt=$mysqli->query($dell)){
            echo "<br><p class='bg-success text-center text-light perNum'>$proDel".QA_GOODS_DELETE_SUCCESSFUL."</p>";
        }
    }
}
//**********************************************************************************************************************

if(isset($_POST['btnEmpPro'])){
    $proNmEmp=$_POST['proNmEmp'];
$I=0;
    $produ="select id from products where proName like '%$proNmEmp%'";
    $resultEmpp=$mysqli->query($produ);
    if(mysqli_num_rows($resultEmpp) > 0){
        while($row = mysqli_fetch_array($resultEmpp)){
            $idPpp=$row['id'];
        }
    }

    $dell=' DELETE FROM search where idP like "'.$idPpp.'"';
    $resultEmpt=$mysqli->query($dell);

    if(@mysqli_num_rows($resultEmpt) > 0){
        while($row = mysqli_fetch_array($resultEmpt)){
            $I++;
        }
    }

    if($I!=0){
        echo "<br><p class='bg-danger text-center text-light'>".QA_GOODS_DELETE_EMPTY_PROBLEM."</p>";
    }else{
        echo "<br><p class='bg-success text-center text-light perNum'>$proNmEmp".QA_GOODS_DELETE_EMPTY_SUCCESSFUL."</p>";

    }
}

//**********************************************************************************************************************

if(isset($_POST['btnEmpRep'])){
    $repNmEmp=$_POST['repNmEmp'];
    $L=0;

    $repos="select id from repository where repName like '%$repNmEmp%'";
    $resultEmpty=$mysqli->query($repos);
    if(mysqli_num_rows($resultEmpty) > 0){
        while($row = mysqli_fetch_array($resultEmpty)){
            $idRrs=$row['id'];
        }
    }

    $delE=' DELETE FROM search WHERE idR = "'.$idRrs.'"';
    $resultEmt=$mysqli->query($delE);

    if(@mysqli_num_rows($resultEmt) > 0){
        while($row = mysqli_fetch_array($resultEmt)){
            $L++;
        }
    }
    if($L!=0){
        echo "<br><p class='bg-danger text-center text-light'>".QA_REPOSITORY_DELETE_ERROR."</p>";
    }else{
            echo "<br><p class='bg-success text-center text-light perNum'>$repNmEmp".QA_REPOSITORY_DELETE_EMPTY_SUCCESSFUL."</p>";

    }
}


















