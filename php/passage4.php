<html>
<head>
<meta name="viewport" content="width=device-width ,initial-scale=1">
<meta name="keywords" content="9thnet,第九网络组,9th,the9,西安建筑科技大学,西安建筑科技大学第九网络组,子午社联,子午社联第九网络组">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/t9.gif" type="image/gif" > 
<title>第九网络组</title>
<link rel="stylesheet" href="css.css" type="text/css">
</head>

<body bgcolor="F5F5F5">
<img src="9th2.jpg">
<div class="toolbar">
<div>
<a class="toolbarimg" href="http://www.9thnet.com"><img src="images/9th.jpg" width="45" height="40" /></a>
<a class="toolbartext" href="read.php">资讯</a><a class="toolbartext" href="security.php">网络安全</a>
</div>
</div>
<div class="toolbar2">
  <div>
    <ul>
      <li><a href="read.php">系统</a></li>
      <li><a href="security.php">网络安全</a></li>
      <li><a href="#">IT新闻</a></li>
      <li><a href="#">建大热点</a></li>
      <li><a href="#">社团动态</a></li>
    </ul>
  </div>
</div>
<br>
<br>
<p>第九网络组社团 > 网络安全</p>
<br>
<br>
<div class="text"><p><h2><center>社会工程学简介</center></h2></p>
<p>作者：贺钧威</p>
<br>
<p>杯子的容积是有限的，将10盎司的的液体往8盎司的杯子里倒，会发生什么？当然是液体溢出，流的到处都是。如果强行向杯子中倒入超过其容积的液体，只会使杯子在压力作用下破碎。</p><br>
<p>同样的原理也适用于计算机程序。设想一个小程序，开发人员为用户名字段分配了一定数量的内存空间，刚好保存"admin"这个字符长度。如果你在该字段输入20个"A"然后点击确认键，会怎么样呢？程序会崩溃并弹出错误提示窗口。因为输入的字符比分配的内存空间长，并且没有正确的错误处理程序来抛出异常，所以程序崩溃了。</p><br>
<p>软件黑客的目的就是找到能引起程序崩溃的地址，并在该地址插入恶意代码。通过控制执行过程，黑客可以让程序“执行”他想要的任何程序。他能在程序的空间中注入任何的命令，因为他有完全的掌控权，没有什么比让程序按照其意愿执行更令人兴奋的事情了。</p><br>
<p>人类的思维也可以被看做一系列运行的“软件”，随着时间的累积，渐渐地你形成了自己特有的“软件包”，建立自己的指令集、缓冲区和内存长度。人类思维的运行模式亦如此。我们为特定数据集分配了空间，如果特定数据集不能放入申请的空间，会发生什么呢？不像计算机，大脑不会崩溃，但会出现短暂的空档期，这时就可以植入命令，通过额外的数据告诉大脑该如何做。社会工程学黑客的目的是识别出运行的“程序”，并向程序插入代码，使你能植入命令，从根本上控制思维导向。
</p><br>
<h3>案例解析(选自《社会工程安全体系中的人性漏洞》)</h3><br>
<p>1.       419骗局<br><br>419骗局又称尼日利亚骗局，已发展成为一种很流行的骗局。一般情况下，骗局开始于向目标发送一封邮件（近来是发送一条短信），告诉对方被选中进行一笔很赚钱的交易，但是需要他提供一个小小的帮助。如果目标愿意帮助发信人从一家外国银行提取一大笔钱，那么他也可以分到一部分。一旦目标相信了这件事，并且“愿意帮忙”，就会出现一个问题，二解决这个问题需要目标支付一定的费用。在付出费用之后，另外一个问题又会冒出来，需要支付另一笔费用。每个问题都是“最后一个问题”和“最后一笔费用”，但在几个月之后还会冒出新问题。整个过程中目标不仅看不到一分钱，而且还会付出1万到5万美元。该骗局的惊人之处在于，过去报道过的骗局，有的采用官方文档、论文、书信抬头甚至面对面的欺骗方式。<br><br>
最近此类骗局出现了一种变化，受害者会收到一张真实的支票。诈骗者承诺一大笔钱，谎称自己仅要其中的一部分。如果目标汇出一小笔钱（例如1万美元），当收到承诺的支票时，他就可以兑现支票，留下其中的差额。这些案例中，受害者汇出了钱，但拿到的支票时假的，当他兑现支票时，会因兑现假支票而被处罚金。<br><br>2.       黑市和斯普特林大师<br><br>
2009年，一则故事曝光了一个名为“黑市”的地下组织，“黑市”类似于罪犯的网络拍卖市场。该组织联系紧密，主要用于交易被盗的信用卡号，身份盗用工具和身份伪造工具等物品。<br><br>
穆拉斯基是美国联邦调查局的一名探员，他秘密打入了这个地下组织。一段时间以后，穆拉斯基探员成为了该网站的管理员。尽管该组织有很多人对他心存怀疑，但他还是管理这个网站长达三年之久。<br><br>
在这段时间里，穆拉斯基必须伪装成恶意黑客，说话，行动与思考的方式必须一致。他伪装成一名恶意垃圾邮件发送者，这方面丰富的知识也是他成功渗透的基础。他的伪装和社会工程技巧之所以大获成功，是因为他使用了不起眼的斯普特林大师的身份进入了黑市网站，三年之后整个身份盗用团伙被摧毁了。<br><br>
三年的社会工程渗透行动让59名罪犯落网，阻止了7000多万美元的银行欺诈。这仅是社会工程技巧具有积极意义的一个范例。</p>
</div><br><br><br>
	<div id="footer">
		<p>Copyright (c)<?php echo date("y.m.d");?> The 9th Network Team</p>
	</div>
</body>
</html>
