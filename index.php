<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Md5解密 | 安全猎人</title>
<meta name="keywords" content="md5解密,在线md5解密,md5破解" />
<meta name="description" content="md5解密数据库，共1,127,962,538,784条数据；免费开放md5查询api接口" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<link rel = "Shortcut Icon" href=favicon.ico>
</head>
<body>
<div id="top-image">
  <div id="content" class="container center-block">
    <div class="jumbotron">
      <div class="container">
        <p>共1,127,962,538,784条数据</p>>
        <p>MD5 Hash: (required)</p><form action="" method="post">
        <div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></span>
          
		  <input type="text" class="form-control" placeholder="请输入32位MD5" aria-describedby="sizing-addon1" name="input_hash"  >
          <span class="input-group-btn">
          
		  </form>
		
          </span> </div>	  
<h3> 
                <?php
error_reporting(0);
if (isset($_REQUEST["input_hash"]) && !is_null($_REQUEST["input_hash"])) {
    $result = file_get_contents('http://www.nitrxgen.net/md5db/' . $_REQUEST["input_hash"]);
    if ($result == "") echo trim("No hash found!");
    else echo "Results:$result";
}
?>     
            </h3>
      </div>
    </div><a href="http://lr3800.com/privacy-policy/" target="_blank" >隐私政策</a> | <a href="http://MD5.lr3800.com/api.html" target="_blank" >API接口</a> | <a href="https://github.com/lr3800/md5" target="_blank" >批量解密</a>
  </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/ios-parallax.js"></script> 
<script type="text/javascript">
$(document).ready(function() {
  $('#top-image').iosParallax({
	movementFactor: 50
  });
});
</script>

</body>
</html>