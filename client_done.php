<html>

<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

<?php
global $wpdb;
$loged_user_id = get_current_user_id();
function title_for_id($post_title, $post_status) {
global $wpdb;
//$lesson1_part1 = 'مخطط لصفحات موقع قاموس "مصطلحات الكمبيوتر المصور"';
//$lesson1_part2 = 'متطلبات ومراحل إنتاج المشروع';
//$lesson1_part3 = 'اختبار';
$post_id = $wpdb->get_var("SELECT ID FROM wp_posts WHERE post_title = '$post_title' AND post_status = '$post_status'" );
//$post_id = $wpdb->get_var("SELECT ID FROM wp_posts WHERE post_title = '$lesson1_part1'" );
return $post_id ;
}


function page_views_data($pagetitle) {
// copy this and paste it in the title of each element change the title in the current_post_id
// give the post title to this function to get the post id

global $wpdb;
$loged_user_id = get_current_user_id();
$current_post_id = title_for_id($pagetitle, 'publish');
$viewsCount = $wpdb->get_var("SELECT count(meta_key) FROM wp_postmeta WHERE meta_key = '_post_view' AND post_id=$current_post_id AND meta_value=$loged_user_id");
if (!empty($viewsCount)) {
echo 'عدد الزيارات: ' . $viewsCount . ' , ';
} else {
echo 'عدد الزيارات: ' . '0 , ';
}


$view_dates = $wpdb->get_var("SELECT meta_value FROM wp_postmeta WHERE meta_key = $loged_user_id AND post_id=$current_post_id ORDER BY meta_id DESC");

if (!empty($view_dates)) {
//Get the current time in Unix.
$currentTime = $view_dates;
//The amount of hours that you want to add.
$hoursToAdd = 2;
//Convert the hours into seconds.
$secondsToAdd = $hoursToAdd * (60 * 60);
//Add the seconds onto the current Unix timestamp.
$newTime = $currentTime + $secondsToAdd;
//Print it out in a format that suits you.
$last_vist_time = date("d/m/y H:i:s", $newTime);

echo 'تاريخ اخر زيارة : ' . $last_vist_time;
} else {
  $last_vist_time = 'تاريخ اخر زيارة ' . ': لايوجد';
  echo $last_vist_time;
}

}
?>



<div dir=RTL>

<h3 align=center><strong>متطلبات ومراحل إنتاج المشروع</strong></h3>

<h4><strong>1- </strong>مرحلة تصميم صفحات الموقع</h4>


<p><span style="font-size: 16pt; color: red; font-family: Symbol;">&middot;</span>
<a  class="page_link" href="http://localhost/wordpress1/مخطط-لصفحات-موقع-قاموس-مصطلحات-الكمبي/" title="يحتوى الدرس على شرح لمخطط لصفحات موقع قاموس مصطلحات الكمبيوتر المصور
<?php page_views_data('مخطط لصفحات موقع قاموس "مصطلحات الكمبيوتر المصور"'); ?>

">

<strong  data-post-id='<?php echo title_for_id('مخطط لصفحات موقع قاموس "مصطلحات الكمبيوتر المصور"', 'publish'); ?>'
  data-loged-uid='<?php echo  get_current_user_id(); ?>'>
  مخطط لصفحات موقع قاموس "مصطلحات الكمبيوتر المصور"</strong></a></p>




<p><span style="font-size:16.0pt;font-family:Symbol;color:red" >·</span>
  <!-- title step add this function with post title inside it -->
<a class="page_link" href="http://localhost/wordpress1/متطلبات-ومراحل-إنتاج-المشروع/‎" title="يحتوى الدرس على شرح لمتطلبات ومراحل إنتاج المشروع
<?php page_views_data('متطلبات ومراحل إنتاج المشروع'); ?>
">


<!-- add this data attrbuites to each <strong> element -->
<strong data-post-id='<?php echo title_for_id('متطلبات ومراحل إنتاج المشروع', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>'>
  متطلبات ومراحل إنتاج المشروع</strong></a></p>

<p><span style="font-size:16.0pt;font-family:Symbol;color:red" >·</span>
<a class="page_link" href="http://localhost/wordpress1/%d8%a7%d8%ae%d8%aa%d8%a8%d8%a7%d8%b1/" title="يحتوى الرابط على اختبار عن مرحلة تصميم صفحات الموقع
<?php page_views_data('اختبار'); ?>
">
<strong data-post-id='<?php echo title_for_id('اختبار', 'publish'); ?>'  data-loged-uid='<?php echo  get_current_user_id(); ?>'>اختبار (1)</strong></a></p>




<p>
<img border=0 width=32 height=30 id="Picture 262" src="project_files/image003.png">
<a class="page_link" href="http://www.4themers.com/eman2/intro-to-design-website-pages/" title="يحتوى الرابط على تمهيد لمرحلة تصميم صفحات الموقع

<?php page_views_data('تمهيد'); ?>
">

<b data-post-id='<?php echo title_for_id('تمهيد', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>'  >تمهيد</b></a>

<img border=0 width=32 height=30 id="Picture 263" src="project_files/image004.png">
<a class="page_link" href="http://www.4themers.com/eman2/website-pages-plan-video/" title="يحتوى الرابط على فيديوهات لشرح مرحلة تصميم صفحات الموقع
<?php page_views_data('فيديوهات'); ?>

">
<b data-post-id='<?php echo title_for_id('فيديوهات', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >فيديوهات</b></a>

<img border=0 width=32 height=30 id="Picture 264" src="project_files/image005.png">
<a class="page_link" href="http://www.4themers.com/eman2/webpages-design-activ/" title="يحتوى الرابط على مجموعة انشطة للتطبيق على مرحلة تصميم صفحات الموقع

<?php page_views_data('أنشطة'); ?>

">

<b data-post-id='<?php echo title_for_id('أنشطة', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >أنشطة</b></a></p>

<br>
<br>

<h4><strong>2- مرحلة إنشاء جداول قاعدة البيانات</strong></h4>

<p><span style='font-size:16.0pt;font-family:Symbol;color:red'>·</span>
<a class="page_link" href="http://www.4themers.com/eman2/concepts-of-database/" title="يحتوى الرابط على مفاهيم اساسية خاصة بقواعد البيانات

<?php page_views_data('مفاهيم اساسية خاصة بقواعد البيانات'); ?>

">
<b data-post-id='<?php echo title_for_id('مفاهيم اساسية خاصة بقواعد البيانات', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>'>
مفاهيم اساسية خاصة بقواعد البيانات</b></a></p>

<p><span style='font-size:16.0pt;font-family:Symbol;color:red'>·</span>
<a class="page_link" href="http://www.4themers.com/eman2/create-database/" title="يحتوى الرابط على شرح عن كيفية انشاء قاعدة بيانات باستخدام برنامج MySQL

<?php page_views_data('انشاء قاعدة بيانات باستخدام برنامج MySQL'); ?>

">
<b data-post-id='<?php echo title_for_id('انشاء قاعدة بيانات باستخدام برنامج MySQL', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >
انشاء قاعدة بيانات باستخدام برنامج MySQL</b></a></p>

<p><span style='font-size:16.0pt;font-family:Symbol;color:red'>·</span><a class="page_link"
href="http://www.4themers.com/eman2/test-2/" title="يحتوى الرابط على اختبار عن مفاهيم خاصة بقواعد البيانات

<?php page_views_data('اختبار (2)'); ?>

">
<b data-post-id='<?php echo title_for_id('اختبار (2)', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >اختبار (2)</b></a></p>

<p><span style='font-size:16.0pt;font-family:Symbol;color:red'>·</span>
<a class="page_link" href="http://www.4themers.com/eman2/test-3/" title="يحتوى الرابط على الاختبار الثانى عن كيفية  انشاء قاعدة بيانات باستخدام برنامج MySQL

<?php page_views_data('اختبار (3)'); ?>

">
<b data-post-id='<?php echo title_for_id('اختبار (3)', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >اختبار (3)</span></b></a></p>

<p><span style='font-size:16.0pt;font-family:Symbol;color:red'>·</span>
<a class="page_link" href="http://localhost/wordpress1/%d8%a3%d9%86%d9%88%d8%a7%d8%b9-%d8%a7%d9%84%d8%b9%d9%84%d8%a7%d9%82%d8%a7%d8%aa-%d9%81%d9%8a-%d9%82%d9%88%d8%a7%d8%b9%d8%af-%d8%a7%d9%84%d8%a8%d9%8a%d8%a7%d9%86%d8%a7%d8%aa/" title="يحتوى الدرس على شرح انواع العلاقات فى قواعد البيانات

<?php page_views_data('أنواع العلاقات في قواعد البيانات'); ?>

">
<b data-post-id='<?php echo title_for_id('أنواع العلاقات في قواعد البيانات', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >أنواع العلاقات في قواعد البيانات</b></a></p>

<p><span style='font-size:16.0pt;font-family:Symbol;color:red'>·</span>
<a class="page_link" href="http://www.4themers.com/eman2/test-4/" title="يحتوي الرابط على الاختبار الثالث عن انواع العلاقات فى قواعد البيانات

<?php page_views_data('اختبار (4)'); ?>

">
<b data-post-id='<?php echo title_for_id('اختبار (4)', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >اختبار (4)</b></a></p>

<p>
<img border=0 width=32 height=30 id="Picture 262" src="project_files/image003.png">
<a class="page_link" href="http://www.4themers.com/eman2/intro-to-create-database/" title="يحتوى الرابط على تمهيد إنشاء جداول قاعدة البيانات

<?php page_views_data('تمهيد'); ?>

">
<b  data-post-id='<?php echo title_for_id('تمهيد', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >تمهيد</b></a>

<img border=0 width=32 height=30 id="Picture 263" src="project_files/image004.png">
<a class="page_link" href="http://localhost/wordpress1/%d9%81%d9%8a%d8%af%d9%8a%d9%88%d9%87%d8%a7%d8%aa/" title="يحتوى الرابط على فيديوهات لشرح مرحلة إنشاء جداول قاعدة البيانات

<?php page_views_data('فيديوهات'); ?>

">
<b data-post-id='<?php echo title_for_id('فيديوهات', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >فيديوهات</b></a>

<img border=0 width=32 height=30 id="Picture 264" src="project_files/image005.png">
<a class="page_link" href="http://www.4themers.com/eman2/create-database-activ/" title="يحتوى الرابط على مجموعة انشطة للتطبيق على مرحلة إنشاء جداول قاعدة البيانات

<?php page_views_data('أنشطة'); ?>

">
<b data-post-id='<?php echo title_for_id('أنشطة', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >أنشطة</b></a></p>


<br>
<br>

<h4><strong>3- مرحلة إنشاء صفحات الموقع</strong></h4>

<p><span style='font-size:16.0pt;font-family:Symbol;color:red'>·</span>
<a class="page_link" href="http://www.4themers.com/eman2/expression-web-setup/" title="يحتوى الدرس على شرح خطوات تحميل تطبيق Expression Web على جهازك.

<?php page_views_data('خطوات تحميل تطبيق Expression Web على جهازك.'); ?>

">
<b data-post-id='<?php echo title_for_id('خطوات تحميل تطبيق Expression Web على جهازك.', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >
خطوات تحميل تطبيق Expression Web على جهازك.</b></a></p>

<p><span style='font-size:16.0pt;font-family:Symbol; color:red'>·</span>
<a class="page_link" href="http://www.4themers.com/eman2/connection-php/" title="يحتوى الدرس على شرح لكيفية   إنشاء صفحة الاتصال بقاعدة البيانات Connection.php

<?php page_views_data('إنشاء صفحة الاتصال بقاعدة البيانات'); ?>

">
<b data-post-id='<?php echo title_for_id('إنشاء صفحة الاتصال بقاعدة البيانات', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >إنشاء صفحة الاتصال بقاعدة البيانات</b></a></p>

<p>- المتغيرات
- الثوابت</b></p>

<p><span style='font-size:16.0pt;font-family:Symbol;color:red'>·</span>
<a class="page_link" href="http://www.4themers.com/eman2/test-5/" title="يحتوى الرابط على اختبار عن مرحلة إنشاء صفحات الموقع

<?php page_views_data('اختبار (5)'); ?>

">
<b data-post-id='<?php echo title_for_id('اختبار (5)', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >اختبار (5)</b></a></p>

<p><span style='font-size:16.0pt;font-family:Symbol; color:red'>·</span>
<a class="page_link" href="http://www.4themers.com/eman2/create-header/" title="يحتوى الدرس على شرح لكيفية إنشاء صفحة راس الصفحة بقاعدة البيانات Header.php

<?php page_views_data('إنشاء صفحة راس الصفحة بقاعدة البيانات Header.php'); ?>

">
<b data-post-id='<?php echo title_for_id('إنشاء صفحة راس الصفحة بقاعدة البيانات Header.php', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >
إنشاء صفحة راس الصفحة بقاعدة البيانات Header.php</b></a></p>

<p><span style='font-size:16.0pt;font-family:Symbol; color:red'>·</span>
<a class="page_link" href="http://www.4themers.com/eman2/add-term/" title="يحتوى الدرس على شرح لكيفية  إنشاء صفحة إدخال مصطلح بقاعدة البيانات Add_Term.php

<?php page_views_data('إنشاء صفحة إدخال مصطلح بقاعدة البيانات Add_Term.php'); ?>

">
<b data-post-id='<?php echo title_for_id('إنشاء صفحة إدخال مصطلح بقاعدة البيانات Add_Term.php', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >
إنشاء صفحة إدخال مصطلح بقاعدة البيانات Add_Term.php</b></a></p>

<p>- Get - Post</p>

<p><span style='font-size:16.0pt;font-family:Symbol; color:red'>·</span>
<a class="page_link" href="http://www.4themers.com/eman2/test-6/" title="يحتوى الرابط على اختبار عن مرحلة إنشاء صفحات الموقع

<?php page_views_data('اختبار (6)'); ?>

">
<b data-post-id='<?php echo title_for_id('اختبار (6)', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >اختبار (6)</b></a></p>

<p><span style='font-size:16.0pt;font-family:Symbol; color:red'>·</span>
<a class="page_link" href="http://www.4themers.com/eman2/final-test/" title="

<?php page_views_data('الاختبار النهائي'); ?>

">
<b data-post-id='<?php echo title_for_id('الاختبار النهائي', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >الاختبار النهائي</b></a></p>

<p>
<img border=0 width=32 height=30 id="Picture 262" src="project_files/image003.png">
<a class="page_link" href="http://www.4themers.com/eman2/intro-create-website-pages/" title="يحتوى الرابط على تمهيد  إنشاء صفحات الموقع

<?php page_views_data('تمهيد'); ?>

">
<b data-post-id='<?php echo title_for_id('تمهيد', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >تمهيد</b></a>

<img border=0 width=32 height=30 id="Picture 263" src="project_files/image004.png">
<a class="page_link" href="http://www.4themers.com/eman2/create-website-pages-video/" title="يحتوى الرابط على فيديوهات لشرح مرحلة  إنشاء صفحات الموقع

<?php page_views_data('فيديوهات'); ?>

">
<b data-post-id='<?php echo title_for_id('فيديوهات', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >فيديوهات</b></a>


<img border=0 width=32 height=30 id="Picture 264" src="project_files/image005.png">
<a class="page_link" href="http://www.4themers.com/eman2/create-webpages-activ1/" title="يحتوى الرابط على مجموعة انشطة للتطبيق على مرحلة  إنشاء صفحات الموقع

<?php page_views_data('أنشطة'); ?>

">
<b data-post-id='<?php echo title_for_id('أنشطة', 'publish'); ?>' data-loged-uid='<?php echo  get_current_user_id(); ?>' >أنشطة</b></a></p>

</div>


<script>



$(document).ready(function(){


  $('.page_link').click(function(){
    var today = new Date();
    var click_date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate()+', '+today.getHours() + ':' + today.getMinutes() + ':' +  today.getSeconds();
    String(click_date);

    var post_id = event.target.getAttribute('data-post-id');
    var loged_id = event.target.getAttribute('data-loged-uid');
                        jQuery.ajax({
                            type:"POST",
                            dataType : "json",

                            // without url it will handle the function in the same page
                            //url: "http://localhost/wordpress/wp-content/themes/twentyseventeen/ajax_handle.php",
                            data: {
                                action: 'getPrices',
                                post_id: post_id,
                                loged_user: loged_id,
                            },
                            success:function(response){
                                alert(response);
                            }
                            });
    });


});


</script>





<?php
/* Template Name: Twenty Seventeen */



$message = '';

function getPrices(){
    $post_id = $_REQUEST["post_id"];
    $loged_id = $_REQUEST["loged_user"];
    $the_time = time();
  if (!empty($post_id) && !empty($loged_id)) {
    global $wpdb;
    $table = $wpdb->prefix.'postmeta';
    $data = array('post_id' => $post_id, 'meta_key' => '_post_view', 'meta_value' => $loged_id);
    $format = array('%s','%s', '%s');
    $wpdb->insert($table,$data,$format);
    $my_id = $wpdb->insert_id;

    $table1 = $wpdb->prefix.'postmeta';
    $data1 = array('post_id' => $post_id, 'meta_key' => $loged_id, 'meta_value' => $the_time);
    $format1 = array('%d','%d', '%s');
    $wpdb->insert($table1,$data1,$format1);
    $my_id1 = $wpdb->insert_id;

    //  ajax
    $results = $get_time;
    die($results);
  }
}
getPrices();

?>

</body>

</html>
