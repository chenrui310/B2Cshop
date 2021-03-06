{{-- 模板名字 --}} 
@extends('Layout/HomeBase') 



{{-- 页面名字 --}} 
@section('title', '商城主页') 




{{-- 加载css文件 --}} 
@section('css')

<link href="{{asset('Home/css/hmstyle.css')}}" rel="stylesheet" type="text/css" />
<style type="text/css">
	.clock {
		display: block;
		height: 145px;
		background:url("{{asset('Home/images')}}/clockbg.png") repeat;
		position: relative;
	}
</style>
@endsection 




{{-- 网页主体 --}}
@section('main')

<div class="banner">
	<!--轮播 -->
	<div class="am-slider am-slider-default scoll" data-am-flexslider id="demo-slider-0">
		<ul class="am-slides">
			<li class="banner1">
				<a href="javascript:;"><img src="{{asset('Home/images/ad1.jpg')}}" /></a>
			</li>
			<li class="banner2">
				<a href="javascript:;"><img src="{{asset('Home/images/ad2.jpg')}}" /></a>
			</li>
			<li class="banner3">
				<a href="javascript:;"><img src="{{asset('Home/images/ad3.jpg')}}" /></a>
			</li>
			<li class="banner4">
				<a href="javascript:;"><img src="{{asset('Home/images/ad4.jpg')}}" /></a>
			</li>
		</ul>
	</div>
	<div class="clear"></div>
</div>

<div class="shopNav">
	<div class="slideall">
		<div class="long-title"><span class="all-goods">全部分类</span></div>
		<div class="nav-cont">
			<ul>
				<li class="index">
					<a href="/">首页</a>
				</li>
				<li class="qc">
					<a href="javascript:;">闪购</a>
				</li>
				<li class="qc">
					<a href="javascript:;">限时抢</a>
				</li>
				<li class="qc">
					<a href="javascript:;">团购</a>
				</li>
				<li class="qc last">
					<a href="javascript:;">大包装</a>
				</li>
			</ul>
		</div>

		<!--侧边导航 -->
		<div id="nav" class="navfull">
			<div class="area clearfix">
				<div class="category-content" id="guide_2">

					<div class="category">
						<ul class="category-list" id="js_climit_li">
							<li class="appliance js_toggle relative first">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="{{asset('Home/images/cake.png')}}"></i><a class="ml-22" title="点心">点心/蛋糕</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="蛋糕">蛋糕</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="蛋糕">点心</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
													</dl>

												</div>
												<div class="brand-side">
													<dl class="dl-sort">
														<dt><span>实力商家</span></dt>
														<dd>
															<a rel="nofollow" title="呵官方旗舰店" target="_blank" href="javascript:;" rel="nofollow"><span class="red">呵官方旗舰店</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="格瑞旗舰店" target="_blank" href="javascript:;" rel="nofollow"><span>格瑞旗舰店</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="飞彦大厂直供" target="_blank" href="javascript:;" rel="nofollow"><span class="red">飞彦大厂直供</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="红e·艾菲妮" target="_blank" href="javascript:;" rel="nofollow"><span>红e·艾菲妮</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="本真旗舰店" target="_blank" href="javascript:;" rel="nofollow"><span class="red">本真旗舰店</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="杭派女装批发网" target="_blank" href="javascript:;" rel="nofollow"><span class="red">杭派女装批发网</span></a>
														</dd>
													</dl>

												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="{{asset('Home/images/cookies.png')}}"></i><a class="ml-22" title="饼干、膨化">饼干/膨化</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="饼干">饼干</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														>
														<a title="马卡龙" href="javascript:;"><span>马卡龙</span></a>
														</dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="薯片">薯片</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="蛋糕">虾条</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd>
															<a rel="nofollow" title="YYKCLOT" target="_blank" href="javascript:;" rel="nofollow"><span class="red">YYKCLOT</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="池氏品牌男装" target="_blank" href="javascript:;" rel="nofollow"><span class="red">池氏品牌男装</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="男装日志" target="_blank" href="javascript:;" rel="nofollow"><span>男装日志</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="索比诺官方旗舰店" target="_blank" href="javascript:;" rel="nofollow"><span>索比诺官方旗舰店</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="onTTno傲徒" target="_blank" href="javascript:;" rel="nofollow"><span class="red">onTTno傲徒</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="玛狮路男装旗舰店" target="_blank" href="javascript:;" rel="nofollow"><span>玛狮路男装旗舰店</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="劳威特品牌男装" target="_blank" href="javascript:;" rel="nofollow"><span>劳威特品牌男装</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="卡斯郎世家批发城" target="_blank" href="javascript:;" rel="nofollow"><span class="red">卡斯郎世家批发城</span></a>
														</dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="{{asset('Home/images/meat.png')}}"></i><a class="ml-22" title="熟食、肉类">熟食/肉类</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="猪肉脯">猪肉脯</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="软面包" href="javascript:;"><span>软面包</span></a>
														</dd>
														<dd>
															<a title="马卡龙" href="javascript:;"><span>马卡龙</span></a>
														</dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="牛肉丝">牛肉丝</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="软面包" href="javascript:;"><span>软面包</span></a>
														</dd>
														<dd>
															<a title="马卡龙" href="javascript:;"><span>马卡龙</span></a>
														</dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="小香肠">小香肠</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="软面包" href="javascript:;"><span>软面包</span></a>
														</dd>
														<dd>
															<a title="铜锣烧" href="javascript:;"><span>铜锣烧</span></a>
														</dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd>
															<a rel="nofollow" title="花颜巧语 " target="_blank" href="javascript:;" rel="nofollow"><span class="red">花颜巧语 </span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="糖衣小屋" target="_blank" href="javascript:;" rel="nofollow"><span>糖衣小屋</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="卡拉迪克  " target="_blank" href="javascript:;" rel="nofollow"><span class="red">卡拉迪克  </span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="暖春童话 " target="_blank" href="javascript:;" rel="nofollow"><span>暖春童话 </span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="华盛童装批发行 " target="_blank" href="javascript:;" rel="nofollow"><span>华盛童装批发行 </span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="奈仕华童装旗舰店" target="_blank" href="javascript:;" rel="nofollow"><span>奈仕华童装旗舰店</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="斑蒂尼BONDYNI" target="_blank" href="javascript:;" rel="nofollow"><span class="red">斑蒂尼BONDYNI</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="猫儿朵朵 " target="_blank" href="javascript:;" rel="nofollow"><span>猫儿朵朵 </span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="童衣阁" target="_blank" href="javascript:;" rel="nofollow"><span class="red">童衣阁</span></a>
														</dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="{{asset('Home/images/bamboo.png')}}"></i><a class="ml-22" title="素食、卤味">素食/卤味</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="豆干">豆干</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="铜锣烧" href="javascript:;"><span>铜锣烧</span></a>
														</dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="干笋">干笋</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="铜锣烧" href="javascript:;"><span>铜锣烧</span></a>
														</dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="鸭脖">鸭脖</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="软面包" href="javascript:;"><span>软面包</span></a>
														</dd>
														<dd>
															<a title="马卡龙" href="javascript:;"><span>马卡龙</span></a>
														</dd>
														<dd>
															<a title="千层饼" href="javascript:;"><span>千层饼</span></a>
														</dd>
														<dd>
															<a title="甜甜圈" href="javascript:;"><span>甜甜圈</span></a>
														</dd>
														<dd>
															<a title="蒸三明治" href="javascript:;"><span>蒸三明治</span></a>
														</dd>
														<dd>
															<a title="铜锣烧" href="javascript:;"><span>铜锣烧</span></a>
														</dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd>
															<a rel="nofollow" title="歌芙品牌旗舰店" target="_blank" href="javascript:;" rel="nofollow"><span class="red">歌芙品牌旗舰店</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="爱丝蓝内衣厂" target="_blank" href="javascript:;" rel="nofollow"><span>爱丝蓝内衣厂</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="香港优蓓尔防辐射" target="_blank" href="javascript:;" rel="nofollow"><span>香港优蓓尔防辐射</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="蓉莉娜内衣批发" target="_blank" href="javascript:;" rel="nofollow"><span>蓉莉娜内衣批发</span></a>
														</dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="{{asset('Home/images')}}/nut.png"></i><a class="ml-22" title="坚果、炒货">坚果/炒货</a></h3>
									<em>&gt;</em>
								</div>
								<div class="menu-item menu-in top">
									<div class="area-in"> 
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="蛋糕">坚果</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="软面包" href="javascript:;"><span>软面包</span></a>
														</dd>
														<dd>
															<a title="马卡龙" href="javascript:;"><span>马卡龙</span></a>
														</dd>
														<dd>
															<a title="千层饼" href="javascript:;"><span>千层饼</span></a>
														</dd>
														<dd>
															<a title="甜甜圈" href="javascript:;"><span>甜甜圈</span></a>
														</dd>
														<dd>
															<a title="蒸三明治" href="javascript:;"><span>蒸三明治</span></a>
														</dd>
														<dd>
															<a title="铜锣烧" href="javascript:;"><span>铜锣烧</span></a>
														</dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="蛋糕">锅巴</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="软面包" href="javascript:;"><span>软面包</span></a>
														</dd>
														<dd>
															<a title="马卡龙" href="javascript:;"><span>马卡龙</span></a>
														</dd>
														<dd>
															<a title="千层饼" href="javascript:;"><span>千层饼</span></a>
														</dd>
														<dd>
															<a title="甜甜圈" href="javascript:;"><span>甜甜圈</span></a>
														</dd>
														<dd>
															<a title="蒸三明治" href="javascript:;"><span>蒸三明治</span></a>
														</dd>
														<dd>
															<a title="铜锣烧" href="javascript:;"><span>铜锣烧</span></a>
														</dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd>
															<a rel="nofollow" title="呵呵嘿官方旗舰店" target="_blank" href="javascript:;" rel="nofollow"><span class="red">呵呵嘿官方旗舰店</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="格瑞旗舰店" target="_blank" href="javascript:;" rel="nofollow"><span>格瑞旗舰店</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="飞彦大厂直供" target="_blank" href="javascript:;" rel="nofollow"><span class="red">飞彦大厂直供</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="红e·艾菲妮" target="_blank" href="javascript:;" rel="nofollow"><span>红e·艾菲妮</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="本真旗舰店" target="_blank" href="javascript:;" rel="nofollow"><span class="red">本真旗舰店</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="杭派女装批发网" target="_blank" href="javascript:;" rel="nofollow"><span class="red">杭派女装批发网</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="华伊阁旗舰店" target="_blank" href="javascript:;" rel="nofollow"><span>华伊阁旗舰店</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="独家折扣旗舰店" target="_blank" href="javascript:;" rel="nofollow"><span>独家折扣旗舰店</span></a>
														</dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="{{asset('Home/images')}}/candy.png"></i><a class="ml-22" title="糖果、蜜饯">糖果/蜜饯</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="糖果">糖果</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="软面包" href="javascript:;"><span>软面包</span></a>
														</dd>
														<dd>
															<a title="马卡龙" href="javascript:;"><span>马卡龙</span></a>
														</dd>
														<dd>
															<a title="千层饼" href="javascript:;"><span>千层饼</span></a>
														</dd>
														<dd>
															<a title="甜甜圈" href="javascript:;"><span>甜甜圈</span></a>
														</dd>
														<dd>
															<a title="蒸三明治" href="javascript:;"><span>蒸三明治</span></a>
														</dd>
														<dd>
															<a title="铜锣烧" href="javascript:;"><span>铜锣烧</span></a>
														</dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="蜜饯">蜜饯</span></dt>
														<dd>
															<a title="猕猴桃干" href="javascript:;"><span>猕猴桃干</span></a>
														</dd>
														<dd>
															<a title="糖樱桃" href="javascript:;"><span>糖樱桃</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="软面包" href="javascript:;"><span>软面包</span></a>
														</dd>
														<dd>
															<a title="马卡龙" href="javascript:;"><span>马卡龙</span></a>
														</dd>
														<dd>
															<a title="千层饼" href="javascript:;"><span>千层饼</span></a>
														</dd>
														<dd>
															<a title="甜甜圈" href="javascript:;"><span>甜甜圈</span></a>
														</dd>
														<dd>
															<a title="蒸三明治" href="javascript:;"><span>蒸三明治</span></a>
														</dd>
														<dd>
															<a title="铜锣烧" href="javascript:;"><span>铜锣烧</span></a>
														</dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd>
															<a rel="nofollow" title="YYKCLOT" target="_blank" href="javascript:;" rel="nofollow"><span class="red">YYKCLOT</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="池氏品牌男装" target="_blank" href="javascript:;" rel="nofollow"><span class="red">池氏品牌男装</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="男装日志" target="_blank" href="javascript:;" rel="nofollow"><span>男装日志</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="索比诺官方旗舰店" target="_blank" href="javascript:;" rel="nofollow"><span>索比诺官方旗舰店</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="onTTno傲徒" target="_blank" href="javascript:;" rel="nofollow"><span class="red">onTTno傲徒</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="卡斯郎世家批发城" target="_blank" href="javascript:;" rel="nofollow"><span class="red">卡斯郎世家批发城</span></a>
														</dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="{{asset('Home/images')}}/chocolate.png"></i><a class="ml-22" title="巧克力">巧克力</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="蛋糕">巧克力</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="软面包" href="javascript:;"><span>软面包</span></a>
														</dd>
														<dd>
															<a title="马卡龙" href="javascript:;"><span>马卡龙</span></a>
														</dd>
														<dd>
															<a title="千层饼" href="javascript:;"><span>千层饼</span></a>
														</dd>
														<dd>
															<a title="甜甜圈" href="javascript:;"><span>甜甜圈</span></a>
														</dd>
														<dd>
															<a title="蒸三明治" href="javascript:;"><span>蒸三明治</span></a>
														</dd>
														<dd>
															<a title="铜锣烧" href="javascript:;"><span>铜锣烧</span></a>
														</dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="蛋糕">果冻</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="软面包" href="javascript:;"><span>软面包</span></a>
														</dd>
														<dd>
															<a title="马卡龙" href="javascript:;"><span>马卡龙</span></a>
														</dd>
														<dd>
															<a title="千层饼" href="javascript:;"><span>千层饼</span></a>
														</dd>
														<dd>
															<a title="甜甜圈" href="javascript:;"><span>甜甜圈</span></a>
														</dd>
														<dd>
															<a title="蒸三明治" href="javascript:;"><span>蒸三明治</span></a>
														</dd>
														<dd>
															<a title="铜锣烧" href="javascript:;"><span>铜锣烧</span></a>
														</dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd>
															<a rel="nofollow" title="花颜巧语 " target="_blank" href="javascript:;" rel="nofollow"><span class="red">花颜巧语 </span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="糖衣小屋" target="_blank" href="javascript:;" rel="nofollow"><span>糖衣小屋</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="卡拉迪克  " target="_blank" href="javascript:;" rel="nofollow"><span class="red">卡拉迪克  </span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="暖春童话 " target="_blank" href="javascript:;" rel="nofollow"><span>暖春童话 </span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="华盛童装批发行 " target="_blank" href="javascript:;" rel="nofollow"><span>华盛童装批发行 </span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="奈仕华童装旗舰店" target="_blank" href="javascript:;" rel="nofollow"><span>奈仕华童装旗舰店</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="斑蒂尼BONDYNI" target="_blank" href="javascript:;" rel="nofollow"><span class="red">斑蒂尼BONDYNI</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="童衣阁" target="_blank" href="javascript:;" rel="nofollow"><span class="red">童衣阁</span></a>
														</dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="{{asset('Home/images/fish.png')}}"></i><a class="ml-22" title="海味、河鲜">海味/河鲜</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="海带丝">海带丝</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="软面包" href="javascript:;"><span>软面包</span></a>
														</dd>
														<dd>
															<a title="马卡龙" href="javascript:;"><span>马卡龙</span></a>
														</dd>
														<dd>
															<a title="千层饼" href="javascript:;"><span>千层饼</span></a>
														</dd>
														<dd>
															<a title="甜甜圈" href="javascript:;"><span>甜甜圈</span></a>
														</dd>
														<dd>
															<a title="蒸三明治" href="javascript:;"><span>蒸三明治</span></a>
														</dd>
														<dd>
															<a title="铜锣烧" href="javascript:;"><span>铜锣烧</span></a>
														</dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="小鱼干">小鱼干</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="软面包" href="javascript:;"><span>软面包</span></a>
														</dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="鱿鱼丝">鱿鱼丝</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="软面包" href="javascript:;"><span>软面包</span></a>
														</dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd>
															<a rel="nofollow" title="歌芙品牌旗舰店" target="_blank" href="javascript:;" rel="nofollow"><span class="red">歌芙品牌旗舰店</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="爱丝蓝内衣厂" target="_blank" href="javascript:;" rel="nofollow"><span>爱丝蓝内衣厂</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="炫点服饰" target="_blank" href="javascript:;" rel="nofollow"><span>炫点服饰</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="雪茵美内衣厂批发" target="_blank" href="javascript:;" rel="nofollow"><span>雪茵美内衣厂批发</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="金钻夫人" target="_blank" href="javascript:;" rel="nofollow"><span>金钻夫人</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="伊美莎内衣" target="_blank" href="javascript:;" rel="nofollow"><span class="red">伊美莎内衣</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="粉客内衣旗舰店" target="_blank" href="javascript:;" rel="nofollow"><span>粉客内衣旗舰店</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="泽芳行旗舰店" target="_blank" href="javascript:;" rel="nofollow"><span>泽芳行旗舰店</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="彩婷" target="_blank" href="javascript:;" rel="nofollow"><span class="red">彩婷</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="黛兰希" target="_blank" href="javascript:;" rel="nofollow"><span>黛兰希</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="香港优蓓尔防辐射" target="_blank" href="javascript:;" rel="nofollow"><span>香港优蓓尔防辐射</span></a>
														</dd>
														<dd>
															<a rel="nofollow" title="蓉莉娜内衣批发" target="_blank" href="javascript:;" rel="nofollow"><span>蓉莉娜内衣批发</span></a>
														</dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="{{asset('Home/images/tea.png')}}"></i><a class="ml-22" title="花茶、果茶">花茶/果茶</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="蛋糕">蛋糕</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="软面包" href="javascript:;"><span>软面包</span></a>
														</dd>
														<dd>
															<a title="马卡龙" href="javascript:;"><span>马卡龙</span></a>
														</dd>
														<dd>
															<a title="千层饼" href="javascript:;"><span>千层饼</span></a>
														</dd>
														<dd>
															<a title="甜甜圈" href="javascript:;"><span>甜甜圈</span></a>
														</dd>
														<dd>
															<a title="蒸三明治" href="javascript:;"><span>蒸三明治</span></a>
														</dd>
														<dd>
															<a title="铜锣烧" href="javascript:;"><span>铜锣烧</span></a>
														</dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="蛋糕">点心</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="软面包" href="javascript:;"><span>软面包</span></a>
														</dd>
														<dd>
															<a title="马卡龙" href="javascript:;"><span>马卡龙</span></a>
														</dd>
														<dd>
															<a title="千层饼" href="javascript:;"><span>千层饼</span></a>
														</dd>
														<dd>
															<a title="甜甜圈" href="javascript:;"><span>甜甜圈</span></a>
														</dd>
														<dd>
															<a title="蒸三明治" href="javascript:;"><span>蒸三明治</span></a>
														</dd>
														<dd>
															<a title="铜锣烧" href="javascript:;"><span>铜锣烧</span></a>
														</dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd>
															<a title="今生只围你" target="_blank" href="javascript:;" rel="nofollow"><span>今生只围你</span></a>
														</dd>
														<dd>
															<a title="忆佳人" target="_blank" href="javascript:;" rel="nofollow"><span class="red">忆佳人</span></a>
														</dd>
														<dd>
															<a title="斐洱普斯" target="_blank" href="javascript:;" rel="nofollow"><span class="red">斐洱普斯</span></a>
														</dd>
														<dd>
															<a title="聚百坊" target="_blank" href="javascript:;" rel="nofollow"><span class="red">聚百坊</span></a>
														</dd>
														<dd>
															<a title="朵朵棉织直营店" target="_blank" href="javascript:;" rel="nofollow"><span>朵朵棉织直营店</span></a>
														</dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative last">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="{{asset('Home/images/package.png')}}"></i><a class="ml-22" title="品牌、礼包">品牌/礼包</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="大包装">大包装</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="软面包" href="javascript:;"><span>软面包</span></a>
														</dd>
														<dd>
															<a title="马卡龙" href="javascript:;"><span>马卡龙</span></a>
														</dd>
														<dd>
															<a title="千层饼" href="javascript:;"><span>千层饼</span></a>
														</dd>
														<dd>
															<a title="甜甜圈" href="javascript:;"><span>甜甜圈</span></a>
														</dd>
														<dd>
															<a title="蒸三明治" href="javascript:;"><span>蒸三明治</span></a>
														</dd>
														<dd>
															<a title="铜锣烧" href="javascript:;"><span>铜锣烧</span></a>
														</dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="两件套">两件套</span></dt>
														<dd>
															<a title="蒸蛋糕" href="javascript:;"><span>蒸蛋糕</span></a>
														</dd>
														<dd>
															<a title="脱水蛋糕" href="javascript:;"><span>脱水蛋糕</span></a>
														</dd>
														<dd>
															<a title="瑞士卷" href="javascript:;"><span>瑞士卷</span></a>
														</dd>
														<dd>
															<a title="软面包" href="javascript:;"><span>软面包</span></a>
														</dd>
														<dd>
															<a title="马卡龙" href="javascript:;"><span>马卡龙</span></a>
														</dd>
														<dd>
															<a title="千层饼" href="javascript:;"><span>千层饼</span></a>
														</dd>
														<dd>
															<a title="甜甜圈" href="javascript:;"><span>甜甜圈</span></a>
														</dd>
														<dd>
															<a title="蒸三明治" href="javascript:;"><span>蒸三明治</span></a>
														</dd>
														<dd>
															<a title="铜锣烧" href="javascript:;"><span>铜锣烧</span></a>
														</dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd>
															<a title="琳琅鞋业" target="_blank" href="javascript:;" rel="nofollow"><span>琳琅鞋业</span></a>
														</dd>
														<dd>
															<a title="宏利鞋业" target="_blank" href="javascript:;" rel="nofollow"><span>宏利鞋业</span></a>
														</dd>
														<dd>
															<a title="比爱靓点鞋业" target="_blank" href="javascript:;" rel="nofollow"><span>比爱靓点鞋业</span></a>
														</dd>
														<dd>
															<a title="浪人怪怪" target="_blank" href="javascript:;" rel="nofollow"><span>浪人怪怪</span></a>
														</dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!--小导航 -->
		<div class="am-g am-g-fixed smallnav">
			<div class="am-u-sm-3">
				<a href="sort.html"><img src="{{asset('Home/images/navsmall.jpg')}}" />
					<div class="title">商品分类</div>
				</a>
			</div>
			<div class="am-u-sm-3">
				<a href="javascript:;"><img src="{{asset('Home/images/huismall.jpg')}}" />
					<div class="title">大聚惠</div>
				</a>
			</div>
			<div class="am-u-sm-3">
				<a href="javascript:;"><img src="{{asset('Home/images/mansmall.jpg')}}" />
					<div class="title">个人中心</div>
				</a>
			</div>
			<div class="am-u-sm-3">
				<a href="javascript:;"><img src="{{asset('Home/images/moneysmall.jpg')}}" />
					<div class="title">投资理财</div>
				</a>
			</div>
		</div>

		<!--走马灯 -->

		<div class="marqueen">
			<span class="marqueen-title">商城头条</span>
			<div class="demo">
				<ul>
					<li class="title-first">
						<a target="_blank" href="javascript:;">
							<img src="{{asset('Home/images/TJ2.jpg')}}"></img>
							<span>[特惠]</span>商城爆品1分秒
						</a>
					</li>
					<li class="title-first">
						<a target="_blank" href="javascript:;">
							<span>[公告]</span>商城与广州市签署战略合作协议
							<img src="{{asset('Home/images/TJ.jpg')}}"></img>
							<p>XXXXXXXXXXXXXXXXXX</p>
						</a>
					</li>
					<div class="mod-vip">
						<div class="m-baseinfo">
							<a href="../person/index.html">
								<img src="{{asset('Home/images/getAvatar.do.jpg')}}">
							</a>
							<em>
									Hi,<span class="s-name">小叮当</span>
									<a href="javascript:;"><p>点击更多优惠活动</p></a>                                 
								</em>
						</div>
						<div class="member-logout">
							<a class="am-btn-warning btn" href="/login">登录</a>
							<a class="am-btn-warning btn" href="/register">注册</a>
						</div>
						<div class="member-login">
							<center>
								<a class="am-btn-warning btn" href="/logout">注销登录</a>
							</center>
							<!-- <a href="javascript:;"><strong>0</strong>待收货</a>
								<a href="javascript:;"><strong>0</strong>待发货</a>
								<a href="javascript:;"><strong>0</strong>待付款</a>
								<a href="javascript:;"><strong>0</strong>待评价</a> -->
						</div>
						<div class="clear"></div>
					</div>
					<li>
						<a target="_blank" href="javascript:;"><span>[特惠]</span>洋河年末大促，低至两件五折</a>
					</li>
					<li>
						<a target="_blank" href="javascript:;"><span>[公告]</span>华北、华中部分地区配送延迟</a>
					</li>
					<li>
						<a target="_blank" href="javascript:;"><span>[特惠]</span>家电狂欢千亿礼券 买1送1！</a>
					</li>
				</ul>
				<div class="advTip"><img src="{{asset('Home/images/advTip.jpg')}}" /></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>

</div>

<div class="shopMainbg">
	<div class="shopMain" id="shopmain">

		<!--今日推荐 -->

		<div class="am-g am-g-fixed recommendation">
			<div class="clock am-u-sm-3 ">
				<img src="{{asset('Home/images/2016.png')}} "></img>
				<p>今日<br>推荐</p>
			</div>
			<div class="am-u-sm-4 am-u-lg-3 ">
				<div class="info ">
					<h3>真的有鱼</h3>
					<h4>开年福利篇</h4>
				</div>
				<div class="recommendationMain ">
					<img src="{{asset('Home/images/tj.png')}} "></img>
				</div>
			</div>
			<div class="am-u-sm-4 am-u-lg-3 ">
				<div class="info ">
					<h3>囤货过冬</h3>
					<h4>让爱早回家</h4>
				</div>
				<div class="recommendationMain ">
					<img src="{{asset('Home/images/tj1.png')}} "></img>
				</div>
			</div>
			<div class="am-u-sm-4 am-u-lg-3 ">
				<div class="info ">
					<h3>浪漫情人节</h3>
					<h4>甜甜蜜蜜</h4>
				</div>
				<div class="recommendationMain ">
					<img src="{{asset('Home/images/tj2.png')}} "></img>
				</div>
			</div>

		</div>
		<div class="clear "></div>

		<div class="am-container ">
			<div class="shopTitle ">
				<h4>甜品</h4>
				<h3>每一道甜品都有一个故事</h3>
				<div class="today-brands ">
					<a href="javascript:; ">桂花糕</a>
					<a href="javascript:; ">奶皮酥</a>
					<a href="javascript:; ">栗子糕 </a>
					<a href="javascript:; ">马卡龙</a>
					<a href="javascript:; ">铜锣烧</a>
					<a href="javascript:; ">豌豆黄</a>
				</div>
				<span class="more "><a class="more-link " href="javascript:; ">更多美味</a> </span>
			</div>
		</div>

		<div class="am-g am-g-fixed floodOne ">
			<div class="am-u-sm-5 am-u-md-3 am-u-lg-4 text-one ">
				<a href="javascript:; ">
					<div class="outer-con ">
						<div class="title ">
							零食大礼包开抢啦
						</div>
						<div class="sub-title ">
							当小鱼儿恋上软豆腐
						</div>
					</div>
					<img src="{{asset('Home/images')}}/act1.png " />
				</a>
			</div>
			<div class="am-u-sm-7 am-u-md-5 am-u-lg-4">
				<div class="text-two">
					<div class="outer-con ">
						<div class="title ">
							雪之恋和风大福
						</div>
						<div class="sub-title ">
							仅售：¥13.8
						</div>

					</div>
					<a href="javascript:; "><img src="{{asset('Home/images')}}/act2.png " /></a>
				</div>
				<div class="text-two last">
					<div class="outer-con ">
						<div class="title ">
							雪之恋和风大福
						</div>
						<div class="sub-title ">
							仅售：¥13.8
						</div>

					</div>
					<a href="javascript:; "><img src="{{asset('Home/images')}}/act2.png " /></a>
				</div>
			</div>

			<div class="am-u-sm-12 am-u-md-4 ">
				<div class="am-u-sm-3 am-u-md-6 text-three">
					<div class="outer-con ">
						<div class="title ">
							小优布丁
						</div>

						<div class="sub-title ">
							尝鲜价：¥4.8
						</div>
					</div>
					<a href="javascript:; "><img src="{{asset('Home/images')}}/act3.png " /></a>
				</div>

				<div class="am-u-sm-3 am-u-md-6 text-three">
					<div class="outer-con ">
						<div class="title ">
							小优布丁
						</div>

						<div class="sub-title ">
							尝鲜价：¥4.8
						</div>
					</div>
					<a href="javascript:; "><img src="{{asset('Home/images')}}/act3.png " /></a>
				</div>

				<div class="am-u-sm-3 am-u-md-6 text-three">
					<div class="outer-con ">
						<div class="title ">
							小优布丁
						</div>

						<div class="sub-title ">
							尝鲜价：¥4.8
						</div>
					</div>
					<a href="javascript:; "><img src="{{asset('Home/images')}}/act3.png " /></a>
				</div>

				<div class="am-u-sm-3 am-u-md-6 text-three last ">
					<div class="outer-con ">
						<div class="title ">
							小优布丁
						</div>

						<div class="sub-title ">
							尝鲜价：¥4.8
						</div>
					</div>
					<a href="javascript:; "><img src="{{asset('Home/images')}}/act3.png " /></a>
				</div>
			</div>

		</div>

		<div class="clear "></div>
		<!--坚果-->
		<div class="am-container ">
			<div class="shopTitle ">
				<h4>坚果</h4>
				<h3>酥酥脆脆，回味无穷</h3>
				<div class="today-brands ">
					<a href="javascript:; ">腰果</a>
					<a href="javascript:; ">松子</a>
					<a href="javascript:; ">夏威夷果 </a>
					<a href="javascript:; ">碧根果</a>
					<a href="javascript:; ">开心果</a>
					<a href="javascript:; ">核桃仁</a>
				</div>
				<span class="more ">
							<a class="more-link " href="javascript:; ">更多美味</a>
						</span>
			</div>
		</div>

		<div class="am-g am-g-fixed floodTwo ">

			<div class="am-u-sm-5 am-u-md-4 text-one ">
				<a href="javascript:; ">
					<img src="{{asset('Home/images')}}/act1.png " />
					<div class="outer-con ">
						<div class="title ">零食大礼包开抢啦</div>
						<div class="sub-title ">当小鱼儿恋上软豆腐</div>
					</div>
				</a>
			</div>

			<div class="am-u-sm-7 am-u-md-4 am-u-lg-2 text-two">
				<div class="outer-con ">
					<div class="title ">
						雪之恋和风大福
					</div>

					<div class="sub-title ">
						仅售：¥13.8
					</div>
				</div>
				<a href="javascript:; "><img src="{{asset('Home/images')}}/5.jpg " /></a>
			</div>

			<div class="am-u-md-4 am-u-lg-2 text-three">
				<div class="outer-con ">
					<div class="title ">
						小优布丁
					</div>

					<div class="sub-title ">
						尝鲜价：¥4.8
					</div>
				</div>
				<a href="javascript:; "><img src="{{asset('Home/images')}}/act3.png " /></a>
			</div>

			<div class="am-u-md-4 am-u-lg-2 text-three">
				<div class="outer-con ">
					<div class="title ">
						小优布丁
					</div>

					<div class="sub-title ">
						尝鲜价：¥4.8
					</div>
				</div>
				<a href="javascript:; "><img src="{{asset('Home/images')}}/act3.png " /></a>
			</div>
			<!--//2-->
			<div class="am-u-sm-6 am-u-md-4 am-u-lg-2 text-two ">
				<div class="outer-con ">
					<div class="title ">
						雪之恋和风大福
					</div>

					<div class="sub-title ">
						仅售：¥13.8
					</div>
				</div>
				<a href="javascript:; "><img src="{{asset('Home/images')}}/5.jpg " /></a>
			</div>

			<!--//转行-->
			<div class="am-u-sm-6 am-u-md-3 am-u-lg-2 text-four ">
				<div class="outer-con ">
					<div class="title ">雪之恋和风大福</div>
					<div class="sub-title ">仅售：¥13.8</div>
				</div>
				<a href="javascript:; "><img src="{{asset('Home/images')}}/5.jpg " /></a>
			</div>

			<div class="am-u-sm-4 am-u-md-3 am-u-lg-4 text-five">
				<div class="outer-con ">
					<div class="title ">
						小优布丁
					</div>
					<div class="sub-title ">
						尝鲜价：¥4.8
					</div>

				</div>
				<a href="javascript:; "><img src="{{asset('Home/images')}}/act2.png " /></a>
			</div>
			<div class="am-u-sm-4 am-u-md-3 am-u-lg-2 text-six">
				<div class="outer-con ">
					<div class="title ">
						小优布丁
					</div>

					<div class="sub-title ">
						尝鲜价：¥4.8
					</div>
				</div>
				<a href="javascript:; "><img src="{{asset('Home/images')}}/act3.png " /></a>
			</div>
			<div class="am-u-sm-4 am-u-md-3 am-u-lg-4 text-five">
				<div class="outer-con ">
					<div class="title ">小优布丁</div>
					<div class="sub-title ">尝鲜价：¥4.8</div>
				</div>
				<a href="javascript:; "><img src="{{asset('Home/images')}}/act2.png " /></a>
			</div>
		</div>

		<div class="clear "></div>

		<div class="am-container ">
			<div class="shopTitle ">
				<h4>海味</h4>
				<h3>你是我的优乐美么？不，我是你小鱼干</h3>
				<div class="today-brands ">
					<a href="javascript:; ">小鱼干</a>
					<a href="javascript:; ">海苔</a>
					<a href="javascript:; ">鱿鱼丝</a>
					<a href="javascript:; ">海带丝</a>
				</div>
				<span class="more ">
							<a class="more-link " href="javascript:; ">更多美味</a>
						</span>
			</div>
		</div>
		<div class="am-g am-g-fixed flood method3 ">
			<ul class="am-thumbnails ">
				<li>
					<div class="list ">
						<a href="javascript:; ">
							<img src="{{asset('Home/images')}}/cp.jpg " />
							<div class="pro-title ">萨拉米 1+1小鸡腿</div>
							<span class="e-price ">￥29.90</span>
						</a>
					</div>
				</li>
				<li>
					<div class="list ">
						<a href="javascript:; ">
							<img src="{{asset('Home/images')}}/cp2.jpg " />
							<div class="pro-title ">ZEK 原味海苔</div>
							<span class="e-price ">￥8.90</span>
						</a>
					</div>
				</li>
				<li>
					<div class="list ">
						<a href="javascript:; ">
							<img src="{{asset('Home/images')}}/cp.jpg " />
							<div class="pro-title ">萨拉米 1+1小鸡腿</div>
							<span class="e-price ">￥29.90</span>
						</a>
					</div>
				</li>
				<li>
					<div class="list ">
						<a href="javascript:; ">
							<img src="{{asset('Home/images')}}/cp2.jpg " />
							<div class="pro-title ">ZEK 原味海苔</div>
							<span class="e-price ">￥8.90</span>
						</a>
					</div>
				</li>
				<li>
					<div class="list ">
						<a href="javascript:; ">
							<img src="{{asset('Home/images')}}/cp.jpg " />
							<div class="pro-title ">萨拉米 1+1小鸡腿</div>
							<span class="e-price ">￥29.90</span>
						</a>
					</div>
				</li>
				<li>
					<div class="list ">
						<a href="javascript:; ">
							<img src="{{asset('Home/images')}}/cp2.jpg " />
							<div class="pro-title ">ZEK 原味海苔</div>
							<span class="e-price ">￥8.90</span>
						</a>
					</div>
				</li>
				<li>
					<div class="list ">
						<a href="javascript:; ">
							<img src="{{asset('Home/images')}}/cp.jpg " />
							<div class="pro-title ">萨拉米 1+1小鸡腿</div>
							<span class="e-price ">￥29.90</span>
						</a>
					</div>
				</li>
				<li>
					<div class="list ">
						<a href="javascript:; ">
							<img src="{{asset('Home/images')}}/cp2.jpg " />
							<div class="pro-title ">ZEK 原味海苔</div>
							<span class="e-price ">￥8.90</span>
						</a>
					</div>
				</li>
				<li>
					<div class="list ">
						<a href="javascript:; ">
							<img src="{{asset('Home/images')}}/cp.jpg " />
							<div class="pro-title ">萨拉米 1+1小鸡腿</div>
							<span class="e-price ">￥29.90</span>
						</a>
					</div>
				</li>
				<li>
					<div class="list ">
						<a href="javascript:; ">
							<img src="{{asset('Home/images')}}/cp2.jpg " />
							<div class="pro-title ">ZEK 原味海苔</div>
							<span class="e-price ">￥8.90</span>
						</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
</div>
<!-- </div> -->

@endsection



{{-- 页脚JS代码 --}}
@section('bottom-js')
<!--轮播 -->
<script type="text/javascript">
	(function() {
		$('.am-slider').flexslider();
	});
	$(document).ready(function() {
		$("li").hover(function() {
			$(".category-content .category-list li.first .menu-in").css("display", "none");
			$(".category-content .category-list li.first").removeClass("hover");
			$(this).addClass("hover");
			$(this).children("div.menu-in").css("display", "block")
		}, function() {
			$(this).removeClass("hover")
			$(this).children("div.menu-in").css("display", "none")
		});
	})
</script>
<script type="text/javascript">
	if($(window).width() < 640) {
		function autoScroll(obj) {
			$(obj).find("ul").animate({
				marginTop: "-39px"
			}, 500, function() {
				$(this).css({
					marginTop: "0px"
				}).find("li:first").appendTo(this);
			})
		}
		$(function() {
			setInterval('autoScroll(".demo")', 3000);
		})
	}
</script>
@endsection