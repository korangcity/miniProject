<?php
//database information

$dbHost='localhost';
$dbUser='root';
$dbPass='';
$dbName='bigStore';

$mysqli=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

//turn off error reporting after project completion
ini_set('display_errors','on');


//website information
define('QA_TITLE','سامانه مدیریت فروشگاه');
define('QA_DESC','در این سیستم شما میتوانید محصولات خود در انبارهای مختلف ثبت و استعلام کنید');
define('QA_HOME_URL','http://localhost/miniProject/inc/');
define('QA_DATE_FORMAT',"d F Y");
define('QA_HOME_NAME',"خانه");
define('QA_NEW_PROREP',"تغییرات انبار و محصول ");
define('QA_ADD_PRODUCT',"افزودن محصول به انبار");
define('QA_REPOSITORY_SEARCH',"استعلام انبار");
define('QA_GOODS_SEARCH',"استعلام محصول");
define('QA_REPOSITORY_NAME',"نام انبار: ");
define('QA_REPOSITORY_SELECT',"انتخاب انبار ");
define('QA_REPOSITORY_NEW',"افزودن انبار جدید ");
define('QA_REPOSITORY_NEW_NAME',"نام انبار جدید ");
define('QA_REPOSITORY_NEW_ADDED'," انبار جدید با موفقیت اضافه شد. ");
define('QA_REPOSITORY_NEW_ADDED_ERROR'," فیلد انبار نمی تواند خالی باشد. ");
define('QA_REPOSITORY_NEW_ADDED_PROBLEM'," مشکلی در ثبت انبار جدید وجود دارد. ");
define('QA_REPOSITORY_DELETE',"حذف انبار  ");
define('QA_REPOSITORY_DO_EMPTY',"خالی کردن انبار از محصول ها ");
define('QA_REPOSITORY_EMPTY',"انبار خالی از محصول هست.");
define('QA_REPOSITORY_DELETE_NAME',"نام انبار برای حذف  ");
define('QA_REPOSITORY_DELETE_NAME_EMPTY',"نام انبار برای تخلیه کامل  ");
define('QA_REPOSITORY_DELETE_EMPTY_SUCCESSFUL',"تخلیه شد.  ");
define('QA_REPOSITORY_DELETE_SUCCESSFUL',"حذف شد  ");
define('QA_REPOSITORY_DELETE_ERROR',"امکان حذف انبار وجود ندارد چون در داخل انبار محصولاتی وجود دارد. ");
define('QA_GOODS_NAME',"نام محصول: ");
define('QA_GOODS_NEW',"افزودن محصول جدید ");
define('QA_GOODS_NEW_NAME',"نام محصول جدید ");
define('QA_GOODS_NEW_REGISTERY',"محصول جدید با موفقیت ثبت شد.");
define('QA_GOODS_NEW_REGISTERY_ERROR',"فیلد محصول نمی تواند خالی باشد.");
define('QA_GOODS_NEW_REGISTERY_PROBLEM',"مشکلی در ثبت محصول جدید وجود دارد.");
define('QA_GOODS_DELETE',"حذف محصول  ");
define('QA_GOODS_DO_EMPTY',"حذف محصول از انبارها  ");
define('QA_GOODS_DELETE_SUCCESSFUL',"حذف شد.  ");
define('QA_GOODS_DELETE_NAME',"نام محصول برای حذف  ");
define('QA_GOODS_DELETE_NAME_EMPTY',"نام محصول برای حذف از انبار ها  ");
define('QA_GOODS_DELETE_ERROR',"امکان حذف محصول وجود ندارد چون در داخل انباری همچین محصولی وجود دارد.  ");
define('QA_GOODS_DELETE_EMPTY_SUCCESSFUL',"تخلیه شد.  ");
define('QA_GOODS_DELETE_EMPTY_PROBLEM',"انبارها خالی از این نوع محصول می باشد.  ");
define('QA_GOODS_SELECT',"انتخاب محصول ");
define('QA_GOODS_NUMBER',"تعداد محصول: ");
define('QA_GOODS_EMPTY',"محصول با مشخصات وارد شده در هیچ انباری موجود نمی باشد. ");
define('QA_SEARCH',"جستجو");
define('QA_ADD',"اضافه کن");
define('QA_DELETE',"حذف کن");
define('QA_EMPTY',"تخلیه کن");
define('QA_PRODUCTS_NUMBER_ERROR',"تعداد محصول وارد شده غیر مجاز است.");






















