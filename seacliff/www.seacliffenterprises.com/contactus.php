<?php
if(isset($_POST['submit'])){
$name = $_POST['name'] ;
$lname = $_POST['lastname'] ;
$num = $_POST['phone_number'] ;
$email = $_POST['email'] ;
$enq = $_POST['enquiry'] ;
$to = "info@seacliffenterprises.com";
$subject = "Client order";
// $headers = "From: $email\n";
$message = 'Name: '.$name."\n"."Last Name: ".$lname."\n"."Contact Number: ".$num."\n"."Email: ".$email."\n"."Enquiry: ".$enq ;
// $usersubject = "Thank You";
// $userheaders = "From: you@youremailaddress.com\n";
// $usermessage = "Thank you for subscribing to our mailing list.";
mail($to,$subject,$message);
//mail($user,$usersubject,$usermessage,$userheaders);
}
?>


<html>
<!-- Mirrored from www.seafoodexpress.in/contactus.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2017 12:35:53 GMT -->
<head>

<meta http-equiv="Content-Language" content="en-us">

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>SeaCliff Enterprises</title>

 <link rel="icon" type="image/gif" href="images/main_01.png" />

<!--slider-->

<script type="text/javascript" src="js/jquery.js"></script>

<script language="JavaScript">



function mmLoadMenus() {

  if (window.mm_menu_1031143908_0) return;

      window.mm_menu_1031143908_0 = new Menu("root",158,19,"Arial, Helvetica, sans-serif, Bookman Old Style",13,"#FFFFFF","#FFFFFF","#0B52A3","#278ACA","left","middle",3,0,1000,-5,7,true,true,true,2,true,true);

  mm_menu_1031143908_0.addMenuItem("Blue Swim Crab","window.open('Blue_Swim_Crab.html', '_top');");

  mm_menu_1031143908_0.addMenuItem("3 Spotted Crab","window.open('3_Spotted_Crab.html', '_top');");

  mm_menu_1031143908_0.addMenuItem("Stringray","window.open('Stringray.html', '_top');");

  mm_menu_1031143908_0.addMenuItem("Indian Mackerel","window.open('Indian_Mackerel.html', '_top');");

  mm_menu_1031143908_0.addMenuItem("Solefish","window.open('Solefish.html', '_top');");

  mm_menu_1031143908_0.addMenuItem("Squid","window.open('Squid.html', '_top');");

  mm_menu_1031143908_0.addMenuItem("Cephalopods","window.open('Razor_Clam.html', '_top');");

  mm_menu_1031143908_0.addMenuItem("Topshell","window.open('Topshell.html', '_top');");

  mm_menu_1031143908_0.addMenuItem("Other Products","window.open('Other_Products.html', '_top');");

   mm_menu_1031143908_0.fontWeight="bold";

   mm_menu_1031143908_0.hideOnMouseOut=true;

   mm_menu_1031143908_0.bgColor='#FFFFFF';

   mm_menu_1031143908_0.menuBorder=1;

   mm_menu_1031143908_0.menuLiteBgColor='#FFFFFF';

   mm_menu_1031143908_0.menuBorderBgColor='#FFFFFF';



mm_menu_1031143908_0.writeMenus();

} // mmLoadMenus()</script>

<script type="text/javascript" src="js/easySlider1.7.js"></script>

<script type="text/javascript">

		$(document).ready(function(){	

			$("#slider").easySlider({

				auto: true, 

				continuous: true

			});

		});	

	</script>

<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />



<script language="JavaScript" src="mm_menu.js"></script>

</head>



<body style="margin:0 auto; background:url(images/bg2.jpg) no-repeat fixed center top #011b4c;">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38551839-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script language="JavaScript1.2">mmLoadMenus();</script>



<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td style="vertical-align:top" align="center"><table width="952" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td style="vertical-align:top" align="left"><table width="952" border="0" cellspacing="0" cellpadding="0">

          <tr>

            <td style="vertical-align:top"><a href = "index.html" >	
							<img src="images/main_01.png" width="209" height="173" />
							</a></td>

            <!-- <td style="vertical-align:top"><img src="images/main_02.jpg" width="42" height="173" /></td> -->

            <td style="vertical-align:top"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td style="vertical-align:top">
				<div align="center">
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td align="right" style="vertical-align:top" height="36" style="background-image:url(images/top1.jpg); background-repeat:no-repeat" >
							&nbsp;</td></tr>
						<tr>
							<td style="vertical-align:top">
              <!-- <img border="0" src="images/top.jpg" width="701" height="84"> -->
            </td>	
						</tr>
					</table>	
				</div>
				</td>
              </tr>

              <tr>

                <td style="vertical-align:top"><img src="images/main_04.jpg" name="image1" width="701" height="36" border="0" usemap="#Map" id="image1" /></td>

              </tr>

              <tr>

                <td style="vertical-align:top"><img src="images/main_05.jpg" width="701" height="17" /></td>

              </tr>

            </table></td>

          </tr>

        </table></td>

      </tr>

      <tr>

        <td style="vertical-align:top; width:952px; height:309px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">

          <tr>

            <td style="vertical-align:top; width:14px;"><img src="images/line_v.png" width="14" height="309" /></td>

            <td style="vertical-align:top; width:195px; background:url(images/left_menu.png) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td style="vertical-align:top;" class="left_text"><a href="Blue_Swim_Crab.html" class="left_text">Blue Swim Crab</a></td>

              </tr>

              <tr>

                <td style="vertical-align:top;" class="left_text1"><a href="3_Spotted_Crab.html" class="left_text1">3 Spotted Crab</a></td>

              </tr>

              <tr>

                <td style="vertical-align:top;" class="left_text1"><a href="Stringray.html" class="left_text1">Stringray</a> </td>

              </tr>

              <tr>

                <td style="vertical-align:top;" class="left_text1"><a href="Indian_Mackerel.html" class="left_text1">Indian Macherel</a></td>

              </tr>

              <tr>

                <td style="vertical-align:top;" class="left_text1"><a href="Solefish.html" class="left_text1">Solefish</a></td>

              </tr>

              <tr>

                <td style="vertical-align:top;" class="left_text1"><a href="Squid.html" class="left_text1">Squid</a></td>

              </tr>

              <tr>

                <td style="vertical-align:top;" class="left_text1"><a href="Razor_Clam.html" class="left_text1">Razor Clam</a></td>

              </tr>

              <tr>

                <td style="vertical-align:top;" class="left_text1"><a href="Topshell.html" class="left_text1">Topshell</a></td>

              </tr>

              <tr>

                <td style="vertical-align:top;" class="left_text1"><a href="Other_Products.html" class="left_text1">Other Products</a></td>

              </tr>

            </table></td>

            <td style="vertical-align:top; width:42px"><img src="images/main_08.jpg" width="42" height="309" /></td>

            <td style="vertical-align:top; width:700px; ">

			<div align="center">

				<table border="0" width="100%" cellspacing="0" cellpadding="0">

					<tr>

						<td valign="top">

						<img border="0" src="images/contact_us.png" width="701" height="54"></td>

					</tr>

					<tr>

						<td valign="top" style="background:url(images/products_middle.png) repeat-y;">

						<div align="center">

							<table border="0" width="96%" cellspacing="0" cellpadding="0">

								<tr>

									<td valign="top">

									&nbsp;</td>

								</tr>

								<tr>

									<td align="center"><table width="92%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td style=" vertical-align:top; font-family:Arial; font-size:14px; font-weight:bold; padding-bottom:5px;">Head Office</td>

          </tr>

          <tr>

           <td align="left" style="vertical-align:top"></td>

          </tr>

          <tr>

            <td style="vertical-align:top"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td width="8%" style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">Address</td>

                <td width="3%" style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">:</td>

                <td width="89%" style="vertical-align:top; font-family:Arial; font-size:12px; padding-bottom:5px;">E-2( Old # D-6 ) Fish Harbour West Wharf, Karachi</td>

              </tr>

              <tr>

                <td style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">Email</td>

                <td style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">:</td>

                <td style="vertical-align:top; font-family:Arial; font-size:12px;  padding-bottom:5px;">Info@Seacliffenterprises.com</td>

              </tr>

              <tr>

                <td style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">Mobile</td>

                <td style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">:</td>

                <td style="vertical-align:top; font-family:Arial; font-size:12px; padding-bottom:5px;">

				<p style="margin-top: 0px; margin-bottom: 0">
            +923222522238 / +923242982092
        <!-- <img border="0" src="images/mobile.png" width="196" height="11"> -->
      </td>

              </tr>

              <!-- <tr>

                <td style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">

				Office</td>

                <td style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">

				: </td>

                <td style="vertical-align:top; font-family:Arial; font-size:12px; padding-bottom:5px;">

				<p style="margin-top: 5px; margin-bottom: 0">

				<img border="0" src="images/office.png" width="90" height="9"></td>

              </tr> -->

              <tr>

                <td style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">Skype</td>

                <td style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">:</td>

                <td style="vertical-align:top; font-family:Arial; font-size:12px; padding-bottom:5px;">seacliffenterprises_1</td>

              </tr>

              <!-- <tr>

                <td style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">Viber</td>

                <td style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">:</td>

                <td style="vertical-align:top; font-family:Arial; font-size:12px; padding-bottom:5px;">

				<p style="margin-top: 5px; margin-bottom: 0">

				<img border="0" src="images/viber.png" width="90" height="9"></td>

              </tr> -->

            </table></td>

  </tr>

         

         

</table></td>

								</tr>

								<tr>

									<td valign="top">

									&nbsp;</td>

								</tr>

								</table>

						</div>

						</td>

					</tr>

					<tr><td valign="top" style="background:url(images/products_middle.png) repeat-y;">

						<img border="0" src="images/feedback_form.png" width="701" height="54"></td></tr>

						<tr><td valign="top" style="background:url(images/products_middle.png) repeat-y;">

						<div align="center">
						 <form method="post" action="" name="form">


							<table border="0" width="96%" cellspacing="0" cellpadding="0">

								<tr>

              <td align="center"><table width="92%" border="0" cellspacing="0" cellpadding="0">

                <tr>

                  <td  style="vertical-align:top;">&nbsp;</td>

                  <td style="vertical-align:top;">&nbsp;</td>

                </tr>

                <tr>

                  <td width="12%"  style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">

					First Name :</td>

                  <td width="88%" style="vertical-align:top; padding-bottom:10px"><input type = "text" maxlength="100"  id="name" name="name" size="40" required></td>

                </tr>

                <tr>

                  <td  style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">

					Last Name :</td>

                  <td  style="vertical-align:top; padding-bottom:10px"><input type = "text" maxlength="100"  id="last_name" name="lastname" size="40" required></td>

                </tr>

                <tr>

                  <td  style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">

					Phone :</td>

                  <td  style="vertical-align:top; padding-bottom:10px"><input type="number" maxlength="100"  id="company_name2" name="phone_number" size="40" required ></td>

                </tr>

                <tr>

                  <td  style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">

					Email :</td>

                  <td  style="vertical-align:top; padding-bottom:10px"><input type="email"  id="company_name3" name="email" size="40" required ></td>

                </tr>

                <tr>

                  <td  style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">

					Enquiry :</td>

                  <td  style="vertical-align:top; padding-bottom:10px">
					<textarea cols="34" id="requirement" name="enquiry" rows="3" maxlength="100" required ></textarea></td>

                </tr>

                <tr>

                  <td  style="vertical-align:top; font-family:Arial; font-size:12px; font-weight:bold; padding-bottom:5px;">&nbsp;</td>

                  <td><input value="Submit" name="submit" type="submit"><input value="Reset" name="reset" type="reset"></td>

                </tr>

              </table></td>

            					</tr>

								<tr>

									<td valign="top">

									&nbsp;</td>

								</tr>

								</table>
</form>
						</div>

						</td></tr>

					<tr>

						<td valign="top">

						<img border="0" src="images/product_bottom.png" width="701" height="16"></td>

					</tr>

				</table>

			</div>

			</td>

          </tr>

        </table></td>

      </tr>

      <tr>

        <td style="vertical-align:top"><table width="100%" border="0" cellspacing="0" cellpadding="0">

         

          <tr>

            <td style="vertical-align:top">&nbsp;</td>

          </tr>

                   

          

        </table></td>

      </tr>

 <tr>

        <td align="center" style="vertical-align:top" class="footer">&copy; 2017 Seacliff Enterprises  |   All Rights Reserved<br />
          	Designed by Haris Shahid

         </td>

      </tr>

    </table></td>

  </tr>

</table>

<map name="Map" id="Map">

  <area shape="rect" coords="86,2,149,29" href="index.html" />

  <area shape="rect" coords="398,2,481,34" href="#" onMouseOver="MM_showMenu(window.mm_menu_1031143908_0,398,34,null,'image1')" onMouseOut="MM_startTimeout();" />

  <area shape="rect" coords="233,3,311,33" href="services.html" />

  <area shape="rect" coords="564,4,661,27" href="contactus.php" />

</map>
</body>


<!-- Mirrored from www.seafoodexpress.in/contactus.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2017 12:35:55 GMT -->
</html>

<script type="text/javascript">(function (d, w) {var x = d.getElementsByTagName('SCRIPT')[0];var f = function () {var s = d.createElement('SCRIPT');s.type = 'text/javascript';s.async = true;s.src = "http://np.lexity.com/embed/YW/671265490ec7307323bea393a0a3febc?id=88196e52be89";x.parentNode.insertBefore(s, x);};w.attachEvent ? w.attachEvent('onload',f) :w.addEventListener('load',f,false);}(document, window));</script>