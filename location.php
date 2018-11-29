<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gym Finder</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
.mySlides {display:none;}
</style>

<style>
body {background-color: lightgrey;}
</style>


    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">
    <link rel="stylesheet" href="register.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.css" rel="stylesheet">

  </head>


  <body id="page-top">

    <div>
      <?php
        require 'navbar.php';
      ?>
    </div>
      
      
      <br><br><br>
      
      <h3>Learn about the different gyms and their locations!</h3>
      <br><h4>GoodLife</h4>
      <text>Founded in 1979, GoodLife Fitness has been helping to transform the health and wellness of Canadians every day. GoodLife Fitness is proud to be the home of thousands of personal stories of change. From first time gym goers overcoming fear, to weightloss that renews your attitude on health and fitness, and to those on the journey to empowerment through community - our doors are open and we are here to serve you, support you, and ultimately change your story.</text>
            <div class="locTable">
          <h6>Locations:</h6>
<?php  
   
 // get XML remotely / locally / or / just set it as string '<root>...</root>'  
 $sXml = file_get_contents('goodlifeloc.xml');
   
 // parse XML  
 $oXML = simplexml_load_string($sXml);  
 if (!$oXML) {  
      die('xml format not valid or simplexml module missing.');  
 }  
   
 // assuming running the root  
 $oXmlRoot = $oXML; // or can be [$oXML->food]  
   
 //echo '<pre>'; print_r( $oXmlRoot ); echo '</pre>';  
 echo xmlToHtmlTable($oXmlRoot);  
   
   
 function xmlToHtmlTable($p_oXmlRoot) {  
      $bIsHeaderProceessed = false;  
        
      $sTHead = '';  
      $sTBody = '';       
      foreach ($p_oXmlRoot as $oNode) {  
           $sTBody .= '<tr>';  
           foreach ($oNode as $sName => $oValue){  
                if (!$bIsHeaderProceessed) {  
                     $sTHead .= "<th>{$sName}</th>";  
                }  
                $sValue = (string)$oValue;  
                $sTBody .= "<td>{$sValue}</td>";                 
           }  
           $bIsHeaderProceessed = true;  
           $sTBody .= '</tr>';  
      }  
        
      $sHTML = "<table border=1>  
                     <thead><tr>{$sTHead}</tr></thead>  
                     <tbody>{$sTBody}</tbody>  
                </table>";  
      return $sHTML;  
 }  
      
      ?>
      </div>
      <br><br><h4>LA Fitness</h4>
      <text>LA Fitness continues to increase its presence by focusing on the one lifelong benefit valued by everyone: good health. Founded in Southern California in 1984, LA Fitness continues to seek innovative ways to enhance the physical and emotional well-being of our increasingly diverse membership base. Today, our state-of-the-art clubs span the continent, and we’re still expanding. Our strong and successful growth stems from our commitment to understanding and meeting the distinct needs of each community we serve. With our wide range of amenities and a highly trained staff, we provide fun and effective workout options to family members of all ages and interests.</text>
    
       <div class="locTable">
                 <h6>Locations:</h6>
                <?php  
   
 // get XML remotely / locally / or / just set it as string '<root>...</root>'  
 $sXml2 = file_get_contents('LAloc.xml');
   
 // parse XML  
 $oXML2 = simplexml_load_string($sXml2);  
 if (!$oXML2) {  
      die('xml format not valid or simplexml module missing.');  
 }  
   
 // assuming running the root  
 $oXmlRoot2 = $oXML2; // or can be [$oXML->food]  
   
 //echo '<pre>'; print_r( $oXmlRoot ); echo '</pre>';  
 echo xmlToHtmlTable2($oXmlRoot2);  
   
   
 function xmlToHtmlTable2($p_oXmlRoot2) {  
      $bIsHeaderProceessed2 = false;  
        
      $sTHead2 = '';  
      $sTBody2 = '';       
      foreach ($p_oXmlRoot2 as $oNode2) {  
           $sTBody2 .= '<tr>';  
           foreach ($oNode2 as $sName2 => $oValue2){  
                if (!$bIsHeaderProceessed2) {  
                     $sTHead2 .= "<th>{$sName2}</th>";  
                }  
                $sValue2 = (string)$oValue2;  
                $sTBody2 .= "<td>{$sValue2}</td>";                 
           }  
           $bIsHeaderProceessed2 = true;  
           $sTBody2 .= '</tr>';  
      }  
        
      $sHTML2 = "<table border=1>  
                     <thead><tr>{$sTHead2}</tr></thead>  
                     <tbody>{$sTBody2}</tbody>  
                </table>";  
      return $sHTML2;  
 }  
      
      ?>
                </div>
      <br><br><h4>OrangeTheory</h4>
      <text>Orangetheory Fitness is a privately owned fitness franchise based in Boca Raton, Florida. It offers group personal training workouts based on high intensity interval training that blend cardiovascular and strength training.Orangetheory is a science-backed, technology-tracked, coach-inspired group workout designed to produce results from the inside out. We make it simple to push yourself to be your personal best and give you more. MORE results. MORE confidence. MORE Life. Because you shouldn’t live to exercise. You should exercise to live.</text>
                  <div class="locTable">
          <h6>Locations:</h6>
<?php  
   
 // get XML remotely / locally / or / just set it as string '<root>...</root>'  
 $sXml3 = file_get_contents('orange.xml');
   
 // parse XML  
 $oXML3 = simplexml_load_string($sXml3);  
 if (!$oXML3) {  
      die('xml format not valid or simplexml module missing.');  
 }  
   
 // assuming running the root  
 $oXmlRoot3 = $oXML3; // or can be [$oXML->food]  
   
 //echo '<pre>'; print_r( $oXmlRoot ); echo '</pre>';  
 echo xmlToHtmlTable3($oXmlRoot3);  
   
   
 function xmlToHtmlTable3($p_oXmlRoot3) {  
      $bIsHeaderProceessed3 = false;  
        
      $sTHead3 = '';  
      $sTBody3 = '';       
      foreach ($p_oXmlRoot3 as $oNode3) {  
           $sTBody3 .= '<tr>';  
           foreach ($oNode3 as $sName3 => $oValue3){  
                if (!$bIsHeaderProceessed3) {  
                     $sTHead3 .= "<th>{$sName3}</th>";  
                }  
                $sValue3 = (string)$oValue3;  
                $sTBody3 .= "<td>{$sValue3}</td>";                 
           }  
           $bIsHeaderProceessed3 = true;  
           $sTBody3 .= '</tr>';  
      }  
        
      $sHTML3 = "<table border=1>  
                     <thead><tr>{$sTHead3}</tr></thead>  
                     <tbody>{$sTBody3}</tbody>  
                </table>";  
      return $sHTML3;  
 } 
 ?>
      </div>
      
      
      <br><br><h4>Fit4Less</h4>
      <text>Proudly Canadian? So are we! With the goal of helping Canada get fit at a super low cost, Fit4Less opened its first location in Mississauga on a bright and sunny Friday in April 2011. We have continued to expand rapidly, opening 85+ locations across Canada since this wonderful day. No matter if you’re exploring Peggy and her cove in Nova Scotia or skiing the majestic mountains in BC, we have a gym conveniently located close to you.</text>
      
       <div class="locTable">
                 <h6>Locations:</h6>
                <?php  
   
 // get XML remotely / locally / or / just set it as string '<root>...</root>'  
 $sXml4 = file_get_contents  ('fit4less.xml');
   
 // parse XML  
 $oXML4 = simplexml_load_string($sXml4);  
 if (!$oXML4) {  
      die('xml format not valid or simplexml module missing.');  
 }  
   
 // assuming running the root  
 $oXmlRoot4 = $oXML4; // or can be [$oXML->food]  
   
 //echo '<pre>'; print_r( $oXmlRoot ); echo '</pre>';  
 echo xmlToHtmlTable4($oXmlRoot4);  
   
   
 function xmlToHtmlTable4($p_oXmlRoot4) {  
      $bIsHeaderProceessed4 = false;  
        
      $sTHead4 = '';  
      $sTBody4 = '';       
      foreach ($p_oXmlRoot4 as $oNode4) {  
           $sTBody4 .= '<tr>';  
           foreach ($oNode4 as $sName4 => $oValue4){  
                if (!$bIsHeaderProceessed4) {  
                     $sTHead4 .= "<th>{$sName4}</th>";  
                }  
                $sValue4 = (string)$oValue4;  
                $sTBody4 .= "<td>{$sValue4}</td>";                 
           }  
           $bIsHeaderProceessed4 = true;  
           $sTBody4 .= '</tr>';  
      }  
        
      $sHTML4 = "<table border=1>  
                     <thead><tr>{$sTHead4}</tr></thead>  
                     <tbody>{$sTBody4}</tbody>  
                </table>";  
      return $sHTML4;  
 }  
      
      ?>
                </div>
      <br><br><h4>YMCA</h4>
      <text>Big or small, every gift helps children, youth, adults and families in our communities. There are many ways to give to the YMCA of Greater Toronto. Find the option below that works best for you.</text>
      
       <div class="locTable">
                 <h6>Locations:</h6>
                <?php  
   
 // get XML remotely / locally / or / just set it as string '<root>...</root>'  
 $sXml5 = file_get_contents  ('ymca.xml');
   
 // parse XML  
 $oXML5 = simplexml_load_string($sXml5);  
 if (!$oXML5) {  
      die('xml format not valid or simplexml module missing.');  
 }  
   
 // assuming running the root  
 $oXmlRoot5 = $oXML5; // or can be [$oXML->food]  
   
 //echo '<pre>'; print_r( $oXmlRoot ); echo '</pre>';  
 echo xmlToHtmlTable5($oXmlRoot5);  
   
   
 function xmlToHtmlTable5($p_oXmlRoot5) {  
      $bIsHeaderProceessed5 = false;  
        
      $sTHead5 = '';  
      $sTBody5 = '';       
      foreach ($p_oXmlRoot5 as $oNode5) {  
           $sTBody5 .= '<tr>';  
           foreach ($oNode5 as $sName5 => $oValue5){  
                if (!$bIsHeaderProceessed5) {  
                     $sTHead5 .= "<th>{$sName5}</th>";  
                }  
                $sValue5 = (string)$oValue5;  
                $sTBody5 .= "<td>{$sValue5}</td>";                 
           }  
           $bIsHeaderProceessed5 = true;  
           $sTBody5 .= '</tr>';  
      }  
        
      $sHTML5 = "<table border=1>  
                     <thead><tr>{$sTHead5}</tr></thead>  
                     <tbody>{$sTBody5}</tbody>  
                </table>";  
      return $sHTML5;  
 }  
      
      ?>
                </div>
      <br><br><h4>World Gym</h4>
            <text>With a heritage that traces back to the glory days of Muscle Beach in Los Angeles, CA, we’ve been keeping people fit and changing lives for over 40 years. Our experience runs deep. We know the difference between cheap fads and time-proven techniques. We’ve learned the best ways to get your hearts pounding and your adrenaline pumping. We make sure all of our gyms have all the tools you need to perform your best.</text>
       <div class="locTable">
                 <h6>Locations:</h6>
                <?php  
   
 // get XML remotely / locally / or / just set it as string '<root>...</root>'  
 $sXml6 = file_get_contents  ('world.xml');
   
 // parse XML  
 $oXML6 = simplexml_load_string($sXml6);  
 if (!$oXML6) {  
      die('xml format not valid or simplexml module missing.');  
 }  
   
 // assuming running the root  
 $oXmlRoot6 = $oXML6; // or can be [$oXML->food]  
   
 //echo '<pre>'; print_r( $oXmlRoot ); echo '</pre>';  
 echo xmlToHtmlTable6($oXmlRoot6);  
   
   
 function xmlToHtmlTable6($p_oXmlRoot6) {  
      $bIsHeaderProceessed6 = false;  
        
      $sTHead6 = '';  
      $sTBody6 = '';       
      foreach ($p_oXmlRoot6 as $oNode6) {  
           $sTBody6 .= '<tr>';  
           foreach ($oNode6 as $sName6 => $oValue6){  
                if (!$bIsHeaderProceessed6) {  
                     $sTHead6 .= "<th>{$sName6}</th>";  
                }  
                $sValue6 = (string)$oValue6;  
                $sTBody6 .= "<td>{$sValue6}</td>";                 
           }  
           $bIsHeaderProceessed6 = true;  
           $sTBody6 .= '</tr>';  
      }  
        
      $sHTML6 = "<table border=1>  
                     <thead><tr>{$sTHead6}</tr></thead>  
                     <tbody>{$sTBody6}</tbody>  
                </table>";  
      return $sHTML6;  
 }  
      
      ?>
                </div>

      
      

          
       
      
      
      
      
    




    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>




  </body>
</html>
