<?php
echo "<table border=0 align='center' cellpadding=5px>";
echo "<tr>
<td colspan=3 align=center> <font style='font-size:25px; color:red; font-family:courier; letter-spacing:4px'>";
echo $_POST['fn'];
echo "'s Profile</font></td></tr>";
echo "<tr><td>Name</td><td>";
echo $_POST['fn']." ".$_POST['sn']." ".$_POST['ln'];
echo "</td>";
$fname = $_FILES["uploaded_pic"]["name"];
$tfname = $_FILES["uploaded_pic"]["tmp_name"];
$loc = 'Uploaded_Images';
move_uploaded_file($tfname,"$loc/$fname");
echo "<td align='center' rowspan=3>";
echo "<img src='$loc/$fname' width=75 height=110>";
echo "</td></tr>";
echo "<tr><td>Gender</td><td>";
echo $_POST['gender'];
echo "</td></tr>";
echo "<tr><td>Date of Birth</td><td>";
echo $_POST['dob'];
echo "</td></tr>";
echo "<tr><td>Mobile Number</td><td colspan=2>";
echo $_POST['mblno'];
echo "</td></tr>";
echo "<tr><td>e-mail ID</td><td colspan=2>";
echo $_POST['mailid'];
echo "</td></tr>";
echo "<tr><td>Address for Communication</td><td colspan=2>";
echo $_POST['address'];
echo "</td></tr>";
echo "</table>"
?>