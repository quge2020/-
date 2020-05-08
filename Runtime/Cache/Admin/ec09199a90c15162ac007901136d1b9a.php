<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">
    <!-- 引入header -->
        <title>默笙工具箱后台2.0管理系统</title>
    
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="/Public/Admin/vendor_components/bootstrap/dist/css/bootstrap.css">
    
    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="/Public/Admin/css/bootstrap-extend.css">
    
    <!-- theme style -->
    <link rel="stylesheet" href="/Public/Admin/css/master_style.css">
    
    <!-- horizontal menu style -->
    <link rel="stylesheet" href="/Public/Admin/css/horizontal_menu_style.css">
    
    <!-- Fab Admin skins -->
    <link rel="stylesheet" href="/Public/Admin/css/skins/_all-skins.css">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

     
  </head>

<body class="hold-transition skin-purple-light layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <div class="inside-header">
        <!-- Logo -->
        <a href="/admin.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <b class="logo-mini">
              <span class="light-logo"><img src="/Public/Admin/images/logo-light.png" alt="logo"></span>
              <span class="dark-logo"><img src="/Public/Admin/images/logo-dark.png" alt="logo"></span>
          </b>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">
              <img src="/Public/Admin/images/logo-light-text.png" alt="logo" class="light-logo">
              <img src="/Public/Admin/images/logo-dark-text.png" alt="logo" class="dark-logo">
          </span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle d-block d-lg-none" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="btn-group d-none d-lg-block">
             <a class="btn dropdown-toggle mr-10 btn-outline btn-white" href="/index.php">站点首页</a>
            
          </div>
        
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              
              <!-- Tasks -->
              <li class="dropdown tasks-menu">
                
                
              </li>
              <!-- User Account -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="http://q2.qlogo.cn/headimg_dl?dst_uin=<?php echo ($re["qq"]); ?>&spec=100" class="user-image rounded-circle" alt="User Image">
                </a>
                <ul class="dropdown-menu scale-up">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="http://q2.qlogo.cn/headimg_dl?dst_uin=<?php echo ($re["qq"]); ?>&spec=100" class="float-left rounded-circle" alt="User Image">

                    <p>
                      <?php echo ($re["name"]); ?>
                      <small class="mb-5"><?php echo ($re["email"]); ?></small>
                      <!-- <a href="#" class="btn btn-danger btn-sm btn-rounded">View Profile</a> -->
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="row no-gutters">
                      
                    <div role="separator" class="divider col-12"></div>
                      <div class="col-12 text-left">
                        <a href="<?php echo U('system/upinfo');?>"><i class="ti-settings"></i> 修改密码</a>
                      </div>
                    <div role="separator" class="divider col-12"></div>
                      <div class="col-12 text-left">
                        <a href="<?php echo U('index/LoginOut');?>"><i class="fa fa-power-off"></i> 退出登录</a>
                      </div>                
                    </div>
                    <!-- /.row -->
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
              </li>
            </ul>
          </div>
        </nav>  
    </div>
  </header>
    <!-- 结束 -->
  <!-- Main Navbar -->
  <div class="main-nav">    
      <nav class="navbar navbar-expand-lg">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/admin.php"><span class="active-item-here"></span><i class="fa fa-dashboard mr-5"></i> <span>仪表盘</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-th mr-5"></i> <span>应用中心</span>
                </a>                  
                <ul class="dropdown-menu multilevel scale-up-left">
                  <li class="nav-item"><a class="nav-link" href="<?php echo U('tools/index');?>">应用管理</a></li>
                  <li class="nav-item"><a class="nav-link active" href="<?php echo U('tools/add');?>">新增应用</a></li>     
                  <li class="nav-item"><a class="nav-link" href="<?php echo U('tools/classe');?>">分类管理</a></li> 
                  <li class="nav-item"><a class="nav-link" href="<?php echo U('tools/link');?>">友链管理</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo U('tools/menu');?>">导航管理</a></li>              
                </ul>                 
              </li> 
              
              <li class="nav-item dropdown m-menu m-fix">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-table mr-5"></i> <span>系统设置</span>
                </a>
                <div class="dropdown-menu menu-mega mega-menu-auto scale-up-left">
                    <ul class="dropdown-menu multilevel scale-up-left">
                        <li>
                            <a class="nav-link" href="<?php echo U('system/index');?>" title=""><i class="fa fa-creative-commons mr-15"></i>基础设置</a>
                        </li>
                        <li>
                            <a class="nav-link" href="<?php echo U('system/upinfo');?>" title=""><i class="fa fa-address-card-o mr-15"></i>信息修改</a>
                        </li>
                        <li>
                            <a class="nav-link" href="<?php echo U('system/temp');?>" title=""><i class="fa fa-cubes mr-15"></i>模板设置</a>
                        </li>
                       <!--  -->
                    </ul><!-- /.menu-mega-child one-four -->
                          
                    
                </div>
                  
              </li>
              
              <li class="nav-item dropdown m-menu">
                <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-laptop mr-5"></i> <span>应用商店</span>
                </a>
                <div class="dropdown-menu menu-mega scale-up-down">
                  
                    
                </div>
                  
              </li>               
              <li class="nav-item  active">
                <a class="nav-link" href="<?php echo U('update/index');?>"><span class="active-item-here"></span>
                  <i class="fa fa-puzzle-piece mr-5"></i>检查更新
                </a>
              </li>
               
            </ul>
          </div>
        </nav>    
  </div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="box">
            <div class="box-header">
              <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">检查更新</font></font></h3>
               <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">您可以点击下方</font></font><code>检查更新</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">按钮，来获取最新版本的默笙工具箱，如果您有自定义修改本源码，请不要点击该按钮！</font></font></p>
            </div>
            <div class="box-body pad res-tb-block">
              <div class="button-box">
            <button id="check" class="tst1 btn btn-info btn-rounded"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">检查更新</font></font></button>
         
        </div>              
            </div>
            <!-- /.box-body -->
          </div>
           <div class="box" style="display: none;" id="upsuccess"><!-- -->
            <div class="box-header">
              <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">正常警报</font></font></h3>
            </div>
            <div class="box-body pad res-tb-block">
               <div class="alert alert-success" id="info"></div>
                <div class="alert alert-secondary" id="log"></div>
                <input type="hidden" id="downurl" value="">
                <input type="hidden" id="bb" value="">
               <button id="upnow" class="tst1 btn btn-info btn-rounded"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">开始更新</font></font></button>             
            </div>
            <!-- /.box-body -->
          </div>
      </div>   


      <!-- /.row -->          
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- 引入footer -->
    <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Purchase Now</a>
          </li>
        </ul>
    </div>
      &copy; 2020 <a href="http://www.zye.cc/">ZYE.CC</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        
      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
    
     
      
    <!-- jQuery 3 -->
    <script src="/Public/Admin/vendor_components/jquery/dist/jquery.js"></script>
    
    <!-- jQuery UI 1.11.4 -->
    <script src="/Public/Admin/vendor_components/jquery-ui/jquery-ui.js"></script>
    
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    
    <!-- popper -->
    <script src="/Public/Admin/vendor_components/popper/dist/popper.min.js"></script>
    
    <!-- Bootstrap 4.0-->
    <script src="/Public/Admin/vendor_components/bootstrap/dist/js/bootstrap.js"></script>
    
    
    <!-- Fab Admin App -->
    <script src="/Public/Admin/js/template.js"></script>
    
    <!-- Fab Admin dashboard demo (This is only for demo purposes) -->
    <script src="/Public/Admin/js/pages/dashboard.js"></script>
    
    <!-- Fab Admin for demo purposes -->
    <script src="/Public/Admin/js/demo.js"></script>  
  <!-- 结束 -->
    <!-- Fab admin horizontal-layout -->
    <script src="/Public/Admin/js/horizontal-layout.js"></script>
    <script src="/Public/Admin/js/layer/layer.js"></script>
    <script type="text/javascript">
      $("#check").click(function () {
        var index = layer.load(1, {shade: false}); //0代表加载的风格，支持0-2
        var e = 0;
        var tool = 1;
        if (e == 0) {
            $.post("<?php echo U('update/checkup');?>", {name:tool}, function (data) {
                if (data.status == '1') {
                    layer.closeAll('loading');
                    layer.alert(data.info, { icon: 6 });//layer.msg('不开心。。', {icon: 5});
                    $("#upsuccess").show();
                    $('#info').html(data.msg+'&nbsp;&nbsp;&nbsp;&nbsp;服务器版本最后更新时间为：'+data.time);
                    $('#log').html('版本日志：<br>'+data.log);
                    $('#downurl').val(data.downurl);
                    $('#bb').val(data.bb);
                } else {
                     layer.closeAll('loading');
                     layer.alert(data.info, { icon: 6 });//layer.msg('不开心。。', {icon: 5});
                     $("#upsuccess").show();
                     $('#info').html(data.msg);
                     $('#log').html(data.msg);
                }
            })
        }

    })
    </script>
    <script type="text/javascript">
      $("#upnow").click(function () {
        var index = layer.load(1, {shade: false}); //0代表加载的风格，支持0-2
        var url=$("#downurl").val();
        var bb=$("#bb").val();
        if (url=='') {
          layer.closeAll('loading');
          layer.msg('当前已为最新版本', function () {
                //关闭后的操作
                return false;
            });
            return false;
        }
        if (bb=='') {
          layer.closeAll('loading');
          layer.msg('数据异常请重试', function () {
                //关闭后的操作
                return false;
            });
            return false;
        }
        var e = 0;
        if (e == 0) {
            $.post("<?php echo U('update/updown');?>", {url:url,bb:bb}, function (data) {
                // if (datam.status == 1) {
                    layer.closeAll('loading');
                    layer.alert("更新成功！", { icon: 6 });//layer.msg('不开心。。', {icon: 5});
                    window.location.reload()
                // } else {
                //     layer.closeAll('loading');
                //     layer.alert(data.info, { icon: 5 });
                // }
            })
        }

    })
    </script>
    
</body>
</html>