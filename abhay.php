<?php
	echo"Good to go. hi this is abhay kumar chaudhary";
?>

https://code.tutsplus.com/articles/become-a-modern-php-developer-with-tuts-courses--cms-21099

<?php
//initialize session 
$ch = curl_init();

//set option
//curl_setopt(ch, optino, value)
curl_setopt($ch, CURLOPT_URL, "http://www.jarvisitech.com");

//execute session 
curl_exec($ch);

//session
curl_close();

?>
<?php
//this is another program to downloads file using cURL
class Download {

	const URL_MAX_LENGTH = 2050 
	//clean url
	protected function cleanUrl($url){
		if(isse($url)){
			if(!empty($url)){
				if(strlen($url) < self::URL_MAX_LENGTH){
						return strip_tags($url);
				}
			}
		}
	}
	//is url
	protected function isUrl($url){
		$url = $this->cleanUrl($url);
		if(isset($url)){
			if(filter_var($url, FILTER_VALIDATE_URI, FILTER_FLAG_PATH_REQUIRED)){
				return $url;
}
		}
	}
	//return extension
	protected function returnExtension($url){
		if($this->isUrl($url)){
			$end = end(preg_split("/[.]+/",$url));
			if(isset($end)){
				return $end;
				}
		}
	}
	//Download file
	public function downloadFile($url){
		if($this->isUrl($url)){
			$extension = $this->returnExtension($url);
			if($ectension){
				//echo $url;
				$ch = curl_init();
				curl_stopt($ch, CURLOPT_URL, $URL);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
				$return = curl_exec($ch);
				curl_close($ch);
				$destination = "downloads/file.$extension"
				$file = fopen($destination,"w+");
				fputs($file, $return);
if(fclose($file)){
	echo"file downdoaded";
	}
			}

		}
	}
$obj = new Download();
if(isset($_PST['url'])){
	$url = $_POST['url'];	
}
}

?>
<form method="post" action="">
	<input type="text" name="url" maxlength="2000" />
	<input type="submit" name="Downloads" value="Downloads"/>
</form>
<?php
if(isset($url)){
	$obj->downloadFile($url);
}

?>
