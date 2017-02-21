@extends('layouts.master')

@section('title', '特种设备智能监督平台')

@section('welcome')
    <div class="right-top-menu">
        <nav id="gooey-upper" style="width: 130px;height: 70px;">
            <input type="checkbox" class="menu-open" name="menu-open1" id="menu-open1"/>

            <label class="open-button" for="menu-open1">
                <span class="burger burger-1"></span>
                <span class="burger burger-2"></span>
                <span class="burger burger-3"></span>
            </label>
            @if (Auth::guest())
                <a href="{{ url('/login') }}" class="gooey-menu-item">
                    <i title="登录" class="fa fa-sign-in"></i>
                </a>
            @else
                <a href="{{ url('/admin') }}" class="gooey-menu-item">
                    <i title="Horizontal Menu" class="fa fa-gears"></i>
                </a>
                <a href="{{ url('/logout') }}" class="gooey-menu-item"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i title="登出" class="fa fa-sign-out"></i>
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif
            {{--<a href="#h-spaced-menu" class="gooey-menu-item">--}}
                {{--<i title="Horizontal Menu" class="fa fa-arrows-h"></i>--}}
            {{--</a>--}}
            {{--<a href="#menu-v-example" class="gooey-menu-item">--}}
                {{--<i title="Vertical Menu" class="fa fa-arrows-v"></i>--}}
            {{--</a>--}}
            {{--<a href="#docs" class="gooey-menu-item">--}}
                {{--<i title="Docs" class="fa fa-book"></i>--}}
            {{--</a>--}}
            {{--<a href="#event-api" class="gooey-menu-item">--}}
                {{--<i title="Event API" class="fa fa-code"></i>--}}
            {{--</a>--}}
            {{--<a href="#round" class="gooey-menu-item">--}}
                {{--<i title="Round Menu" class="fa fa-circle"></i>--}}
            {{--</a>--}}
        </nav>
    </div>
    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            <div class="wrapper wrapper-content animated fadeIn">
                <div class="container">
                    <div class="ibox-content m-b-sm border-bottom">
                        <div class="p-xs">
                            <div class="pull-left m-r-md">
                                <i class="fa fa-globe text-navy mid-icon"></i>
                            </div>
                            <h2>欢迎来到特种设备智能监督平台</h2>
                            <span>你可以自由选择你感兴趣的图表。</span>
                            <div class="pull-right m-r-md">
                                <a href="#">
                                    <span class="badge badge-primary">友情链接</span>
                                </a>
                            </div>
                            <div class="pull-right m-r-md">
                                <a href="#">
                                    <span class="badge badge-primary">友情链接</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            {{--<div class="ibox float-e-margins">--}}
                                {{--<div class="ibox-content">--}}
                                    <div id="links" style="display: none">
                                        <a href="image/p_big1.jpg" title="Banana">
                                            <img src="image/p1.jpg" alt="Banana">
                                        </a>
                                        <a href="image/p_big2.jpg" title="Apple">
                                            <img src="image/p2.jpg" alt="Apple">
                                        </a>
                                        <a href="image/p_big3.jpg" title="Orange">
                                            <img src="image/p3.jpg" alt="Orange">
                                        </a>
                                    </div>
                                    <div id="blueimp-image-carousel" class="blueimp-gallery blueimp-gallery-carousel">
                                        <div class="slides"></div>
                                        <a class="prev">‹</a>
                                        <a class="next">›</a>
                                        <a class="play-pause"></a>
                                    </div>
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>面积图 <small>自定义颜色</small></h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="graph_morris.html#">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="graph_morris.html#">选项1</a>
                                            </li>
                                            <li><a href="graph_morris.html#">选项2</a>
                                            </li>
                                        </ul>
                                        <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div class="sk-double-bounce">
                                        <div class="sk-child sk-double-bounce1"></div>
                                        <div class="sk-child sk-double-bounce2"></div>
                                    </div>
                                    <div id="morris-area-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="ibox">
                                <div class="ibox-title">
                                    <h5>任务列表 <small><i class="fa fa-hand-o-up"></i> 并不能在列表之间拖动任务面板</small></h5>
                                </div>
                                <div class="ibox-content">
                                    <div class="input-group">
                                        <input type="text" placeholder="添加新任务" class="input input-sm form-control">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-plus"></i> 添加</button>
                                    </span>
                                    </div>
                                    <ul class="sortable-list connectList agile-list ui-sortable">
                                        <li class="warning-element">
                                            加强过程管理，及时统计教育经费使用情况，做到底码清楚，
                                            <div class="agile-detail">
                                                <a href="#" class="pull-right btn btn-xs btn-white">标签</a>
                                                <i class="fa fa-clock-o"></i> 2015.09.01
                                            </div>
                                        </li>
                                        <li class="success-element">
                                            支持财会人员的继续培训工作。
                                            <div class="agile-detail">
                                                <a href="#" class="pull-right btn btn-xs btn-white">标记</a>
                                                <i class="fa fa-clock-o"></i> 2015.05.12
                                            </div>
                                        </li>
                                        <li class="info-element">
                                            协同教导处搞好助学金、减免教科书费的工作。
                                            <div class="agile-detail">
                                                <a href="#" class="pull-right btn btn-xs btn-white">标记</a>
                                                <i class="fa fa-clock-o"></i> 2015.09.10
                                            </div>
                                        </li>
                                        <li class="danger-element">
                                            要求会计、出纳人员严格执行财务制度，遵守岗位职责，按时上报各种资料。
                                            <div class="agile-detail">
                                                <a href="#" class="pull-right btn btn-xs btn-primary">确定</a>
                                                <i class="fa fa-clock-o"></i> 2015.06.10
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>柱状图</h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="graph_morris.html#">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="graph_morris.html#">选项1</a>
                                            </li>
                                            <li><a href="graph_morris.html#">选项2</a>
                                            </li>
                                        </ul>
                                        <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div class="sk-double-bounce">
                                        <div class="sk-child sk-double-bounce1"></div>
                                        <div class="sk-child sk-double-bounce2"></div>
                                    </div>
                                    <div id="morris-bar-chart">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>环形图</h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="graph_morris.html#">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="graph_morris.html#">选项1</a>
                                            </li>
                                            <li><a href="graph_morris.html#">选项2</a>
                                            </li>
                                        </ul>
                                        <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div class="sk-double-bounce">
                                        <div class="sk-child sk-double-bounce1"></div>
                                        <div class="sk-child sk-double-bounce2"></div>
                                    </div>
                                    <div id="morris-donut-chart">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>简单线性图</h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="graph_morris.html#">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="graph_morris.html#">选项1</a>
                                            </li>
                                            <li><a href="graph_morris.html#">选项2</a>
                                            </li>
                                        </ul>
                                        <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div class="sk-double-bounce">
                                        <div class="sk-child sk-double-bounce1"></div>
                                        <div class="sk-child sk-double-bounce2"></div>
                                    </div>
                                    <div id="morris-one-line-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>中国地图</h5>
                                    <!-- <div class="ibox-tools">
                                      <a class="collapse-link">
                                          <i class="fa fa-chevron-up"></i>
                                      </a>
                                      <a class="dropdown-toggle" data-toggle="dropdown" href="graph_flot.html#">
                                          <i class="fa fa-wrench"></i>
                                      </a>
                                      <ul class="dropdown-menu dropdown-user">
                                          <li><a href="graph_flot.html#">选项1</a>
                                          </li>
                                          <li><a href="graph_flot.html#">选项2</a>
                                          </li>
                                      </ul>
                                      <a class="close-link">
                                          <i class="fa fa-times"></i>
                                      </a>
                                  </div> -->
                                </div>
                                <div class="ibox-content">
                                    <div id="map" style="height: 600px;"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="ibox">
                                <div class="ibox-content">
                                    <h2>客户管理</h2>
                                    <p>
                                        所有客户必须通过邮件验证
                                    </p>
                                    <!-- <div class="input-group">
                                        <input type="text" placeholder="查找客户" class="input form-control">
                                        <span class="input-group-btn"><button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> 搜索</button></span>
                                    </div> -->
                                    <div class="clients-list">
                                        <ul class="nav nav-tabs">
                                            <a href="#"><span class="pull-right small text-muted">点击查看全部1406个客户</span></a>
                                            <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"><i class="fa fa-user"></i> 联系人</a>
                                            </li>
                                            <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false"><i class="fa fa-briefcase"></i> 公司</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="tab-1" class="tab-pane active">
                                                <div class="slimScrollDiv" style="position: relative; width: auto; height: 100%;">
                                                    <div class="full-height-scroll" style="width: auto; height: 100%;">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped table-hover">
                                                                <tbody>
                                                                <tr>
                                                                    <td class="client-avatar"><img alt="image" src="image/a2.jpg"> </td>
                                                                    <td><a data-toggle="tab" href="#contact-1" class="client-link" aria-expanded="true">袁岳</a>
                                                                    </td>
                                                                    <td> 瑞安市海诚机械有限公司</td>
                                                                    <td class="contact-type"><i class="fa fa-envelope"> </i>
                                                                    </td>
                                                                    <td> gravida@qq.com</td>
                                                                    <td class="client-status"><span class="label label-primary">已验证</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="client-avatar">
                                                                        <a href="#"><img alt="image" src="image/a5.jpg">
                                                                        </a>
                                                                    </td>
                                                                    <td><a data-toggle="tab" href="#contact-4" class="client-link" aria-expanded="true">李全福</a>
                                                                    </td>
                                                                    <td>东莞市益健包装机械有限公司</td>
                                                                    <td class="contact-type"><i class="fa fa-phone"> </i>
                                                                    </td>
                                                                    <td> 15709758904</td>
                                                                    <td class="client-status"><span class="label label-warning">等待验证</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="client-avatar">
                                                                        <a href="#"><img alt="image" src="image/a2.jpg">
                                                                        </a>
                                                                    </td>
                                                                    <td><a data-toggle="tab" href="#contact-1" class="client-link" aria-expanded="true">袁岳</a>
                                                                    </td>
                                                                    <td> 瑞安市海诚机械有限公司</td>
                                                                    <td class="contact-type"><i class="fa fa-envelope"> </i>
                                                                    </td>
                                                                    <td> gravida@qq.com</td>
                                                                    <td class="client-status"><span class="label label-danger">已删除</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="client-avatar">
                                                                        <a href="#"><img alt="image" src="image/a7.jpg">
                                                                        </a>
                                                                    </td>
                                                                    <td><a data-toggle="tab" href="#contact-3" class="client-link" aria-expanded="true">萧志林</a>
                                                                    </td>
                                                                    <td>佛山市顺德区威利丰贸易有限公司 </td>
                                                                    <td class="contact-type"><i class="fa fa-envelope"> </i>
                                                                    </td>
                                                                    <td> pacheco@163.com</td>
                                                                    <td class="client-status"><span class="label label-info">未验证</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="client-avatar">
                                                                        <a href="#"><img alt="image" src="image/a2.jpg">
                                                                        </a>
                                                                    </td>
                                                                    <td><a data-toggle="tab" href="#contact-1" class="client-link" aria-expanded="true">袁岳</a>
                                                                    </td>
                                                                    <td> 瑞安市海诚机械有限公司</td>
                                                                    <td class="contact-type"><i class="fa fa-envelope"> </i>
                                                                    </td>
                                                                    <td> gravida@qq.com</td>
                                                                    <td class="client-status"><span class="label label-danger">已删除</span>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 4px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 365.112px;"></div>
                                                    <div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                                </div>
                                                <div class="agile-detail">
                                                    <a href="#" class="pull-right btn btn-xs btn-white">更多</a>
                                                    最后更新：<i class="fa fa-clock-o"></i> 2017-09-09 10:00
                                                </div>
                                            </div>
                                            <div id="tab-2" class="tab-pane">
                                                <div class="slimScrollDiv" style="position: relative; width: auto; height: 100%;">
                                                    <div class="full-height-scroll" style="width: auto; height: 100%;">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped table-hover">
                                                                <tbody>
                                                                <tr>
                                                                    <td><a data-toggle="tab" href="#company-2" class="client-link" aria-expanded="true">上海申弘投资发展有限公司</a>
                                                                    </td>
                                                                    <td>广州</td>
                                                                    <td><i class="fa fa-flag"></i> 中国</td>
                                                                    <td class="client-status"><span class="label label-primary">已验证</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a data-toggle="tab" href="#company-2" class="client-link" aria-expanded="true">上海申弘投资发展有限公司</a>
                                                                    </td>
                                                                    <td>广州</td>
                                                                    <td><i class="fa fa-flag"></i> 中国</td>
                                                                    <td class="client-status"><span class="label label-primary">已验证</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a data-toggle="tab" href="#company-2" class="client-link" aria-expanded="true">上海申弘投资发展有限公司</a>
                                                                    </td>
                                                                    <td>广州</td>
                                                                    <td><i class="fa fa-flag"></i> 中国</td>
                                                                    <td class="client-status"><span class="label label-primary">已验证</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a data-toggle="tab" href="#company-2" class="client-link" aria-expanded="true">上海申弘投资发展有限公司</a>
                                                                    </td>
                                                                    <td>广州</td>
                                                                    <td><i class="fa fa-flag"></i> 中国</td>
                                                                    <td class="client-status"><span class="label label-primary">已验证</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a data-toggle="tab" href="#company-1" class="client-link" aria-expanded="true">北京科诺耐尔科技发展有限公司</a>
                                                                    </td>
                                                                    <td>广州</td>
                                                                    <td><i class="fa fa-flag"></i> 中国，美国</td>
                                                                    <td class="client-status"><span class="label label-warning">等待验证</span>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="agile-detail">
                                                    <a href="#" class="pull-right btn btn-xs btn-white">更多</a>
                                                    最后更新：<i class="fa fa-clock-o"></i> 2015-09-01 12:00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="ibox">
                                <div class="ibox-content">
                                    <h3>任务列表</h3>
                                    <p class="small"><i class="fa fa-hand-o-up"></i> 并不能在列表之间拖动任务面板</p>
                                    <div class="input-group">
                                        <input type="text" placeholder="添加新任务" class="input input-sm form-control">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-plus"></i> 添加</button>
                                        </span>
                                    </div>
                                    <ul class="sortable-list connectList agile-list ui-sortable">
                                        <li class="warning-element">
                                            加强过程管理，及时统计教育经费使用情况，做到底码清楚，
                                            <div class="agile-detail">
                                                <a href="#" class="pull-right btn btn-xs btn-white">标签</a>
                                                <i class="fa fa-clock-o"></i> 2015.09.01
                                            </div>
                                        </li>
                                        <li class="success-element">
                                            支持财会人员的继续培训工作。
                                            <div class="agile-detail">
                                                <a href="#" class="pull-right btn btn-xs btn-white">标记</a>
                                                <i class="fa fa-clock-o"></i> 2015.05.12
                                            </div>
                                        </li>
                                        <li class="info-element">
                                            协同教导处搞好助学金、减免教科书费的工作。
                                            <div class="agile-detail">
                                                <a href="#" class="pull-right btn btn-xs btn-white">标记</a>
                                                <i class="fa fa-clock-o"></i> 2015.09.10
                                            </div>
                                        </li>
                                        <li class="danger-element">
                                            要求会计、出纳人员严格执行财务制度，遵守岗位职责，按时上报各种资料。
                                            <div class="agile-detail">
                                                <a href="#" class="pull-right btn btn-xs btn-primary">确定</a>
                                                <i class="fa fa-clock-o"></i> 2015.06.10
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="tabs-container">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-5" aria-expanded="true"> 第一个选项卡</a>
                                    </li>
                                    <li class=""><a data-toggle="tab" href="#tab-6" aria-expanded="false">第二个选项卡</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-5" class="tab-pane active">
                                        <div class="panel-body">
                                            <!-- <strong>HTML5 文档类型</strong>
                                        <p>Bootstrap 使用到的某些 HTML 元素和 CSS 属性需要将页面设置为 HTML5 文档类型。在你项目中的每个页面都要参照下面的格式进行设置。</p> -->
                                            <div class="ibox float-e-margins">
                                                <div class="ibox-content border-bottom">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <h4>测试测试测试测试测试测试测试</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ibox-content border-bottom">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <h4>测试测试测试测试测试测试测试</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ibox-content border-bottom">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <h4>测试测试测试测试测试测试测试</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-6" class="tab-pane">
                                        <div class="panel-body">
                                            <!-- <strong>移动设备优先</strong>
                                        <p>在 Bootstrap 2 中，我们对框架中的某些关键部分增加了对移动设备友好的样式。而在 Bootstrap 3 中，我们重写了整个框架，使其一开始就是对移动设备友好的。这次不是简单的增加一些可选的针对移动设备的样式，而是直接融合进了框架的内核中。也就是说，Bootstrap 是移动设备优先的。针对移动设备的样式融合进了框架的每个角落，而不是增加一个额外的文件。</p> -->
                                            <div class="ibox float-e-margins">
                                                <div class="ibox-content border-bottom">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <h4>测试2测试2测试2测试2测试2测试2测试2</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ibox-content border-bottom">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <h4>测试2测试2测试2测试2测试2测试2测试2</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ibox-content border-bottom">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <h4>测试2测试2测试2测试2测试2测试2测试2</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="tabs-container">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-3" aria-expanded="true"> 第一个选项卡</a>
                                    </li>
                                    <li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="false">第二个选项卡</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-3" class="tab-pane active">
                                        <div class="panel-body">
                                            <!-- <strong>HTML5 文档类型</strong>
                                        <p>Bootstrap 使用到的某些 HTML 元素和 CSS 属性需要将页面设置为 HTML5 文档类型。在你项目中的每个页面都要参照下面的格式进行设置。</p> -->
                                            <div class="ibox float-e-margins">
                                                <div class="ibox-content border-bottom">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <h4>测试测试测试测试测试测试测试</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ibox-content border-bottom">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <h4>测试测试测试测试测试测试测试</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ibox-content border-bottom">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <h4>测试测试测试测试测试测试测试</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-4" class="tab-pane">
                                        <div class="panel-body">
                                            <!-- <strong>移动设备优先</strong>
                                        <p>在 Bootstrap 2 中，我们对框架中的某些关键部分增加了对移动设备友好的样式。而在 Bootstrap 3 中，我们重写了整个框架，使其一开始就是对移动设备友好的。这次不是简单的增加一些可选的针对移动设备的样式，而是直接融合进了框架的内核中。也就是说，Bootstrap 是移动设备优先的。针对移动设备的样式融合进了框架的每个角落，而不是增加一个额外的文件。</p> -->
                                            <div class="ibox float-e-margins">
                                                <div class="ibox-content border-bottom">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <h4>测试2测试2测试2测试2测试2测试2测试2</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ibox-content border-bottom">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <h4>测试2测试2测试2测试2测试2测试2测试2</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ibox-content border-bottom">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <h4>测试2测试2测试2测试2测试2测试2测试2</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="pull-right">
                    By：<a href="http://nsilearning.cn/" target="_blank">rpdict's blog</a>
                </div>
                <div>
                    <strong>Copyright</strong> rpdict &copy; 2014
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(function() {
            $("#gooey-upper").gooeymenu({

                // 'horizontal', 'circle' or 'vertical'
                style: "vertical",
                size: 40,
                margin: "small",
                bgColor: "#1ab394",
                contentColor: "white",
                transitionStep: 100,
                bounce: false,
                bounceLength: "medium",
                hover: "#179e83",
                circle: {
                    radius: 50
                },
                horizontal: {
                    menuItemPosition: "glue"
                },
                vertical: {
                    menuItemPosition: "glue",
                    direction: "down"
                }
            });
        });

        $(document).ready(function() {
            blueimp.Gallery(
                    document.getElementById('links').getElementsByTagName('a'),
                    {
                        container: '#blueimp-image-carousel',
                        carousel: true
                    }
            );
        });
    </script>
@endsection