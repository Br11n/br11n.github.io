<?php
session_start();
?>
<html>
<head>
<title>������� ��������</title>
</head>
<body>
<h2>������� ��������</h2>
<form action="testreg.php" method="post">
<!--**** testreg.php - ��� ����� �����������. �� ����, ����� ������� �� ������ "�����", ������ �� ����� ���������� �� ��������� testreg.php ������� "post" ***** -->
  <p>
    <label>��� �����:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
  </p>
<!--**** � ��������� ���� (name="login" type="text") ������������ ������ ���� ����� ***** -->  
  <p>
    <label>��� ������:<br></label>
    <input name="pass" type="pass" size="15" maxlength="15">
  </p>
<!--**** � ���� ��� ������� (name="pass" type="pass") ������������ ������ ���� ������ ***** -->  
<p>
<input type="submit" name="submit" value="�����">
<!--**** �������� (type="submit") ���������� ������ �� ��������� testreg.php ***** --> 
<br>
<!--**** ������ �� �����������, ���� ���-�� �� ������ ����� ���� �������� ***** --> 
<a href="reg.php">������������������</a> 
</p></form>
<br>
<?php
// ���������, ����� �� ����������� ������ � id ������������
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
// ���� �����, �� �� �� ������� ������
echo "�� ����� �� ����, ��� �����<br><a href='#'>��� ������ �������� ������ ������������������ �������������</a>";
}
else
   {
   // ���� �� �����, �� �� ������� ������
    echo "�� ����� �� ����, ��� ".$_SESSION['login']."<br>";
   }
?>
</body>
</html>
