<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="tq/src/main.css" />
	<title>����̨ǰ����̨ǰ@̨ǰ��</title>
	<LINK href="tq/src/css.css" type=text/css rel=stylesheet>
	<SCRIPT src="tq/src/xixi.js" type=text/javascript></SCRIPT>
  </head>
  <body>
    <div id="header">
	  <div>
	    <div class="page_title">
		  <div class="title_style" style="float:left;">
		    <div style="width:360px;border-right:1px solid #0099FF;float:left;">
		      <div style="float:left;">
			    <span style="font-size:28px;">����̨ǰ����̨ǰ</span>
			  </div>
			  <div style="float:right;">
				<span style="font-size:16px;color:#0099FF;">@̨ǰ��</span><br />
			    <span style="font-size:10px;color:#0099FF;">TAIQIANWANG</span>
			  </div>
			</div>
			<div style="margin:8px 0 0 0px;float:left;">
		      <span style="font-size:22px;color:#0099FF;">һվʽ����ƽ̨</span>
			</div>
			<div style="margin:12px 0 0 48px;float:left;font-size:14px;">
		      <span style="color:#666666;">�� </span><span style="color:#FF9900;">����֮�ǹ�����</span><span style="color:#666666;"> �ṩ����֧��</span>
			  <br />
			  <span style="font-weight:normal;"><?php echo date("Y��m��d�� H:i:s",time())?></span><br />
			  <div style="margin-left:-28px;"><script type="text/javascript" src="http://ext.weather.com.cn/66786.js"></script></div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<div id="nav">
	    <div id="nav_content">
		  <ul>
		    <li><a href="index.php" title="">��ҳ</a></li>
		    <li class="seleted"><a href="items.php" title="">��פ�ͻ�</a></li>
			<li><a href="lbs/index.php" title="">��ͼ����</a></li>
			<li><a href="#" title="">ҵ�����</a></li>
			<li><a href="about.php" title="">��������</a></li>
			<li><a href="contect.php" title="">��ϵ����</a></li>
		  </ul>
		</div>
	  </div>
	<div id="content">
	  <div id="main">
		<div id="second" style="width:100%;padding:10px;font:12px/1.5 tahoma,arial,����;">
		  <div id="category_title">
		    <span>��Сѧ���׶�԰</span>
		  </div>
		    <?php 
				$values = array(
					array("name"=>"����֮����վ������","url"=>"taiqian/contect.php"),
					array("name"=>"̨ǰ˼Դʵ��ѧУ","url"=>"siyuan"),
					array("name"=>"̨ǰ��־��ѧ","url"=>"lizhi"),
					array("name"=>"̨ǰ�廪С��ʿ�׶�԰","url"=>"xiaoboshi"),
					array("name"=>"̨ǰ���Сѧ","url"=>"cyh"),
					array("name"=>"̨ǰ��԰�׶�԰","url"=>"yiyuan"),
					array("name"=>"̨ǰ����ҽԺ","url"=>"#")
				);
				$numbers = count($values);
				for($i=0;$i<$numbers;$i++){
			?>
			<div id="service">
			  <a href="<?php echo 'http://taiqianwang.eicp.net/'.$values[$i%$numbers]["url"]?>" target="_blank">
				<div id="service_2">
				  <div id="name">
					<img style="width:100%;" src="tq/images/<?php echo $i%$numbers+1?>.jpg">
					<span><?php echo $values[$i]["name"]?></span>
				  </div>
				  <div id="content_2">
					<span>�򵥽���У԰�Ļ���</span><br />
					<span>�绰��13472604861</span><br />
					<span>λ�ã�̨ǰ��������·������·��</span>
				  </div>
				</div>
			  </a>
		  </div>
		    <?php 
				}
		    ?>
		  <br />
		  <div class="clearfloat" style=""></div>
		</div>
		<div class="clearfloat" style=""></div>
		<!-- item end -->
		<div id="thirds" style="width:100%;padding:10px;font:12px/1.5 tahoma,arial,����;">
		  <div id="category_title">
		    <span>��ҵ��λ��ҽԺ</span>
		  </div>
		    <?php 
				$values = array(
					array("name"=>"̨ǰ����ҽԺ","url"=>"#")
				);
				$numbers = count($values);
				for($i=0;$i<$numbers;$i++){
			?>
			<div id="service">
			  <a href="<?php echo 'http://taiqianwang.eicp.net/'.$values[$i%$numbers]["url"]?>" target="_blank">
				<div id="service_2">
				  <div id="name">
					<img style="width:100%;" src="tq/images/<?php echo $i%$numbers+1?>.jpg">
					<span><?php echo $values[$i]["name"]?></span>
				  </div>
				  <div id="content_2">
					<span>�򵥽���У԰�Ļ���</span><br />
					<span>�绰��13472604861</span><br />
					<span>λ�ã�̨ǰ��������·������·��</span>
				  </div>
				</div>
			  </a>
		  </div>
		    <?php 
				}
		    ?>
		  <br />
		  <div class="clearfloat" style=""></div>
		</div>
		<!-- item end -->
		</div>
	  </div>
	  <div class="clearfloat"></div>
	</div>
	<div id="footer">
	  <div style="margin-top:20px;text-align:center;font-size:12px;line-height:24px;">
	    <a href="about.php" style="">����֧��@����֮�ǹ�����</a><br />
		<span style="">����ʹ��IE8�����ϡ������Chrome����������</span>
	  </div>
	</div>
  </body>
</html>