<html>
<head>
    
    <script data-ad-client="ca-pub-9924035486481132" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    
    <link rel="icon" type="image/gif/png" href="aaaa.jpg">
    
    
   <meta charset="UTF-8">
  <meta name="description" content=" বাংলাদেশের করোনা পরিসংখ্যান  , জেলা ভিত্তিক আক্রান্ত বাক্তির তথ্য , লকডাউন অঞ্ছলসমুহ , করোনা টেস্ট নাম্বার , ডাক্তারের যোগাযোগ তথ্য , ম্যাপে করোনা আক্রান্তের তথ্য , কোয়ারেন্টাইন ও আইসলেসনের তথ্য  হালনাগাত করা হয়  এবং সাধারণ জিজ্ঞাসা ও তার উত্তর সাথে করোনা উপদেশ দেয়ার তথ্য উল্লেখিত । ">
  <meta name="keywords" content=" বাংলাদেশ করোনা পরিসংখ্যা, জেলা ভিত্তিক আক্রান্ত বাক্তির তথ্য  , করোনা  জেলা ভিত্তিক আক্রান্ত বাক্তির তথ্য  , বিভিন্ন জেলার করোনার তথ্য , ডাক্তারের যোগাযোগ তথ্য ,  ম্যাপে করোনা আক্রান্তের তথ্য
   , করোনা ম্যাপ   , করোনা রুগী  , বিভিন্ন জেলায় করোনা , bivinno jelay korona , korona rugi ,corona rugi ,corona poramorso, corona cikitsha , corona test number ,corona ,covid-19 , bangladesh corona , corona update , doctors info , corona test, corona test number , বাংলাদেশ করোনা পরিসংখ্যান  , বাংলাদেশ করোনা ,  করোনা , করোনা ভাইরাস ,  কভিড-১৯  ">
    
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <meta name="google-site-verification" content="p5kaMHO-hiGXoBnQ_1jHzi0Pr98EaQlCGXEf07JSYCM" />
 
 
 <title> বাংলাদেশ করোনা পরিসংখ্যান  </title>
 
 
 
 <!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->
 
 

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

 <style>
 
 
 #div1
 {
 font-size :24px;
 }
 
 #header1
 {
	 background-color:#cdff9c;
	 width:100%;
	 padding:10x;
	 
 }
 
 
 #niyom
 {
	margin-top:10px;
	margin-bottom:60px;
	 
 }
 
 </style>


</head>
<body>

<div class="container" style="margin-bottom:20px; margin-top:10px; background-color:#f3e5f5; ">

<h5 class="text-white text-center bg-info"> বাংলাদেশ করোনা পরিসংখ্যান   </h5> 

<marquee direction="left" >   
<span style="background-color:#f8bbd0 ; "> 
হটলাইন নাম্বার সমূহ  ঃ  জাতীয় কল সেন্টার  - ৩৩৩  , স্বাস্থ্য বাতায়ন  - ১৬২৬৩  , আইইডিসিআর - ১০৬৫৫ , বিশেষজ্ঞ হেলথ লাইন - ০৯৬১১৬ ৭৭৭৭৭ , জাতীয় হেল্পলাইন - ১০৯ ।
</span>
</marquee>



<?php
include 'db.php';
$result = mysqli_query($connection,"SELECT * FROM country");
if (mysqli_num_rows($result) > 0) {
?>

 <table align="center"  class=""  style="width:60%; font-size:16px; ">  

<?php
$i=1;
while($row = mysqli_fetch_array($result)) {
	
?>
<tr class="text-center">
<td colspan="2" style="background-color: #ffe0b2  ;"> গত ২৪ ঘন্টায় করোনা ফলাফল  </td>

</tr>
 <tr>   
    <td style="background-color:#90caf9 ;">  আক্রান্ত  </td> 
    <td  style="background-color: #c8e6c9 ; "> <?php echo $row["tt"]; ?> </td>
 </tr>
 
 <tr> 
 <td style="background-color:#bbdefb ;">  মৃত্যু   </td>
  <td style="background-color:#f0f4c3 ;"><?php echo $row["dd"]; ?></td>
 </tr>
 
 <tr> 
	<td style="background-color:#f0f4c3 ;">  সুস্থ   </td>		
     <td style="background-color:#90caf9 ;"><?php echo $row["ss"]; ?></td>		
</tr>

 <tr> 
     <td style="background-color:#90caf9 ;"> বর্তমান রোগী   </td>		
       <td  style="background-color: #c8e6c9 ; ">  <?php echo $row["active"]; ?></td>		
</tr>

<tr> 
	<td style="background-color:#bbdefb ;">    টেস্ট সংখ্যা   </td>		
    <td style="background-color:#f0f4c3 ;">  <?php echo $row["test"]; ?></td>		
</tr>

<tr> 
     <td style="background-color:#f0f4c3 ;">  মহিলা   </td>		
    <td  style="background-color: #c8e6c9 ; "> <?php echo $row["female"]; ?></td>		
</tr>

<tr> 
	<td style="background-color:#bbdefb ;">   পুরুষ   </td>		
      <td style="background-color:#f0f4c3 ;">  <?php echo $row["male"]; ?></td>		
</tr>





<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>


</div>

<div class="container bg-light" style="margin-bottom:20px; ">
<span style="font-size:10px;"> Updated 1 hour ago ......  </span>
<?php
include 'db.php';
$result = mysqli_query($connection,"SELECT * FROM world");
if (mysqli_num_rows($result) > 0) {
?>
  <table class="table table-hover text-center"  style="width:100%;">
  
  <tr class=" bg-info text-white">
    <td> স্থান  </td>
	 <td>মৃত্যুর হার  </td>
    <td>মোট আক্রান্ত  </td>
    <td>মৃতের সংখ্যা </td>
    <td>সুস্থ হয়েছে  </td>
    <td>বর্তমান রোগী </td>
	
	
  </tr>
<?php
$i=1;
while($row = mysqli_fetch_array($result)) {
	
?>
<tr class="" style="  font-size:16px; ">   
    <td style="background-color:#f0f4c3   ;">  বিশ্ব   </td>
		<td><?php  	
	$rate =  (100*$row["death"])/$row["total"];	
		echo number_format((float)$rate, 2, '.', '');	
	?> %</td>
	
    <td><?php echo $row["total"]; ?></td>
    <td><?php echo $row["death"]; ?></td>
    <td><?php echo $row["recover"]; ?></td>
	<td><?php echo $row["active"]; ?></td>
	
	
</tr>
<?php
$i++;
}
?>

 <?php
}
else{
    echo "No result found";
}
?>

<?php
include 'db.php';
$result = mysqli_query($connection,"SELECT * FROM country");
if (mysqli_num_rows($result) > 0) {
?>
 
<?php
$i=1;
while($row = mysqli_fetch_array($result)) {
	
?>
<tr class="" style="  font-size:16px; ">   
<td style="background-color:#ffe0b2   ;">  বাংলাদেশ   </td>  
  <td><?php  	
	$rate =  (100*$row["death"])/$row["total"];	
		echo number_format((float)$rate, 2, '.', '');	
	?> %</td>
    <td><?php echo $row["total"]; ?></td>
    <td><?php echo $row["death"]; ?></td>
    <td><?php echo $row["recover"]; ?></td>
	<td><?php echo $row["active"]; ?></td>
	
	
	
	
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>

</div>

<div class="container text-center bg-light" style="margin-bottom:20px;  ; padding:10px;">

<button  class="btn btn-info" onclick="window.location.href = 'content.php';"> জেলা ভিত্তিক আক্রান্ত রোগীর সংখ্যা দেখুন  </button>
<button  style="margin-left:5px; margin-top:5px;" class="btn btn-success" onclick="window.location.href = 'lockdown.php';"> লক ডাউন অঞ্চলসমূহ  দেখুন </button>


</div>

  
<div class="container bg-light" style="margin-bottom:20px;  padding:10px;">


<?php
include 'db.php';
$result = mysqli_query($connection,"SELECT * FROM isolation");
if (mysqli_num_rows($result) > 0) {
?>
  <table cellpadding="5" style="width:100%;"  class="text-center">
  
<?php
$i=1;
while($row = mysqli_fetch_array($result)) { 
	
?>
<tr >   
    <td>মোট  কোয়ারেন্টাইন   </td>
    <td><?php echo $row["qua"]; ?></td>
</tr>
<tr>	
  <td>  কোয়ারেন্টাইন  শেষ  হয়েছে    </td>
    <td><?php echo $row["quacom"]; ?></td>
</tr>
<tr>	
	  <td>মোট  আইসোলেশন   </td>
    <td><?php echo $row["iso"]; ?></td>
</tr>
<tr>	
  <td>  আইসোলেশন শেষ   হয়েছে</td>
	<td><?php echo $row["isocom"]; ?></td>
	
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 
 
 </div>  
  
  

<div class="container bg-light" style="margin-bottom:20px;  padding:10px;">
			
			<p align="justify" class="text-info">  নিচের অপশন নির্বাচন করুন  : </p>
			
			<ol class="text-danger">
			
			<li> <a href="contact.php" class="text-dark">ডাক্তার এবং করোনা টেস্ট অনুসন্ধান   ( click here ) </a>  </li>
			
				<li> <a href="https://livecoronatest.com/?fbclid=IwAR0ROQ_NNaR2odX-nuCNd1KRnSiOmklzdg95ahKHO5IpTmBqqcOv1rx1BCI" class="text-dark"> লাইভ করোনা ঝুঁকি টেস্ট   ( click here ) </a>  </li>
			
			
			<li>  <a href="maphome.php" class="text-dark">  করোনা ম্যাপ   ( click here )</a> </li>
			<!--  <li> <a href="donar.html"><u> Registration Here </u></a>  </li>   -->
		
		<!-- 	<li> <a href="public.html" class="text-dark"><u> করনার  তথ্য এখানে দিন  যদি সন্দেহ হয় অথবা কেউ আক্রান্ত হয়     </u></a>  </li>   -->
			
				<li>  <a href="FAQ_COVID-19.pdf" class="text-dark">   সাধারণ জিজ্ঞাসা ও উত্তরসমূহ    ( click here )</a> </li>
			</ol>


</div>


 

 

<div class="container bg-light" style="margin-bottom:20px;  padding:10px;">



<p align="justify">

<h5 class="text-info text-center"> করোনাভাইরাস: কী করবেন, কী করবেন না   </h5>

<dl>
  <dt>বারবার হাত ধোয়া</dt>
  <dd>-  নিয়মিত এবং ভালো করে বারবার হাত ধোবেন (অন্তত ২০ সেকেন্ড যাবৎ) । </dd>
  
  <dt>দূরে থাকুন </dt>
  <dd>-   এই সময় যেকোনো সর্দি–কাশি, জ্বর বা অসুস্থ ব্যক্তির কাছ থেকে অন্তত এক মিটার বা ৩ ফুট দূরত্ব বজায় রাখুন।</dd>
  
   <dt>নাক–মুখ স্পর্শ নয় </dt>
  <dd>-   হাত দিয়ে আমরা সারা দিন নানা কিছু স্পর্শ করি। সেই বস্তু থেকে ভাইরাস হাতে লেগে যেতে পারে। তাই সতর্ক থাকুন। অপরিষ্কার হাত দিয়ে কখনো নাক–মুখ–চোখ স্পর্শ করবেন না।</dd>
  
   <dt> কাশির আদবকেতা মেনে চলুন</dt>
  <dd>-  নিজে কাশির আদবকেতা বা রেসপিরেটরি হাইজিন মেনে চলুন, অন্যকেও উৎসাহিত করুন। কাশি বা হাঁচি দেওয়ার সময় নাক, মুখ রুমাল বা টিস্যু, কনুই দিয়ে ঢাকুন। টিস্যুটি ঠিক জায়গায় ফেলুন।</dd>
  
   <dt> প্রয়োজনে ঘরে থাকুন</dt>
  <dd>-  অসুস্থ হলে ঘরে থাকুন, বাইরে যাওয়া অত্যাবশ্যক হলে নাক-মুখ ঢাকার জন্য মাস্ক ব্যবহার করুন।</dd>
  
   <dt> খাবারের ক্ষেত্রে সাবধানতা</dt>
  <dd>-  কাঁচা মাছ–মাংস আর রান্না করা খাবারের জন্য আলাদা চপিং বোর্ড, ছুরি ব্যবহার করুন। কাঁচা মাছ–মাংস ধরার পর ভালো করে সাবান–পানি দিয়ে হাত ধুয়ে ফেলুন। ভালো করে সেদ্ধ করে রান্না করা খাবার গ্রহণ করুন। অসুস্থ প্রাণী কোনোমতেই খাওয়া যাবে না।</dd>
  
   <dt>  ভ্রমণে সতর্ক থাকুন</dt>
  <dd>-  জরুরি প্রয়োজন ছাড়া বিদেশভ্রমণ করা থেকে বিরত থাকুন এবং অন্য দেশ থেকে প্রয়োজন ছাড়া বাংলাদেশ ভ্রমণে নিরুৎসাহিত করুন। অত্যাবশ্যকীয় ভ্রমণে সাবধানতা অবলম্বন করুন।</dd>
  
    <dt> অভ্যর্থনায় সতর্কতা</dt>
  <dd>-  কারও সঙ্গে হাত মেলানো (হ্যান্ড শেক), কোলাকুলি থেকে বিরত থাকুন</dd>
  
  
    <dt> কারও সঙ্গে হাত মেলানো (হ্যান্ড শেক), কোলাকুলি থেকে বিরত থাকুন</dt>
  <dd>-  এ সময়ে কোনো কারণে অসুস্থ বোধ করলে, জ্বর হলে, কাশি বা শ্বাসকষ্ট হলে দ্রুত নিকটস্থ স্বাস্থ্যকর্মীর সাহায্য নিন। তিনি বিষয়টি গোচরে আনতে ও ভাইরাস ছড়ানো বন্ধে ভূমিকা রাখতে পারবেন। অথবা আইইডিসিআরের সঙ্গে যোগাযোগ করুন। আইইডিসিআরের হটলাইন নম্বর: ০১৯২৭৭১১৭৮৪, ০১৯২৭৭১১৭৮৫, ০১৯৩৭০০০০১১ এবং ০১৯৩৭১১০০১১।</dd>
  
  <dt>  References :  </dt>
  <dd>  - <a href="https://www.prothomalo.com/">  Prothomalo </a>  </dd>
   <dd>  -  <a href="https://www.iedcr.gov.bd/"> আইইডিসিআর  </a> </dd>
      <dd>  -  <a href="https://www.worldometers.info/coronavirus/"> Worldometers  </a> </dd>
 
  
 
 
</dl>

</p>


</div>

<div class="container">

<big class="text-danger"> Total Page Views :</big>
<!-- hitwebcounter Code START -->
<a href="https://www.hitwebcounter.com" target="_blank">
<img src="https://hitwebcounter.com/counter/counter.php?page=7230783&style=0003&nbdigits=5&type=page&initCount=0" title="User Stats" Alt="PHP Hits Count"   border="0" >
</a>                                        
                  


                 
</div>


</body>

</html>