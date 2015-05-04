<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to CodeIgniter</title>

<style type="text/css">
::selection {
	background-color: #E13300;
	color: white;
}

::moz-selection {
	background-color: #E13300;
	color: white;
}

::webkit-selection {
	background-color: #E13300;
	color: white;
}
</style>
</head>
<body>

	<div id="container">
		<div class="warp">
			<div class="header clearfix">
				<h1 class="logo fl">
					<a href="/index" class="h_a"><span class="undis">换芯宝</span></a>
				</h1>
				<ul class="menu fr">
					<li><a id="nav-cleaning" href="/" class="on"><b class="wb01">首页<span>Home</span></b></a></li>
					<li><a href="/appointment"><b class="wb02">在线预约<span>Online booking</span></b></a></li>
					<li><a href="/card"><b class="wb03">加入会员<span>Membership</span></b></a></li>
					<li><a href="/faq"><b class="wb04">常见问题<span>FAQ</span></b></a></li>
					<li><a href="/join"><b class="wb05">加入我们<span>Join us</span></b></a></li>
					<ul>
					</ul>
				</ul>
			</div>
		</div>

		<div id="body">
			<table width="1098" height="127" border="1">
				<tr>
					<td width="200" align="center" valign="middle"><a href="1.html"
						target="_self">ID</a></td>
					<td width="200" align="center" valign="middle"><a href="2.html"
						target="_blank">Name</a></td>
					<td width="200" align="center" valign="middle"><a href="3.html"
						target="_blank">School</a></td>
					<td width="200" align="center" valign="middle"><a href="4.html">Birthday</a></td>
					<td width="200" align="center" valign="middle"><a href="5.html"></a></td>
				</tr>
				<?php
				$query = $this->db->get ( 'test_teacher' );
				foreach ( $query->result () as $row ) {
					echo '<tr>';
					echo '<td width="200" align="center" valign="middle"><a href="1.html" target="_self">' . $row->id . '</a></td>';
					echo '<td width="200" align="center" valign="middle"><a href="2.html" target="_blank">' . $row->name . '</a></td>';
					echo '<td width="200" align="center" valign="middle"><a href="3.html" target="_blank">' . $row->address . '</a></td>';
					echo '<td width="200" align="center" valign="middle"><a href="4.html">' . $row->year . '</a></td>';
					echo '<td width="200" align="center" valign="middle"><a href="5.html"></a></td></tr>';
				}
				?>
			</table>

		</div>

		<p class="footer">
			Page rendered in <strong>{elapsed_time}</strong> seconds
		</p>
	</div>

</body>
</html>