<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>借款可视化报表-p2p金融借贷平台</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/personal.min.css">
    <!-- 兼容IE9以下的浏览器 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 验证用户身份是否合法 -->
    <script src="./dist/js/userStateCheck.min.js"></script>
</head>
<body>
    <!-- 引入头部信息 -->
    <?php
       require_once("header.php");
    ?>

    <!-- 模板的内容开始 -->
    <div class="container" id="personal">
        <div class="row">
            <!-- 左侧的菜单 -->
            <?php
               require_once("./leftTreeMenu.php");
            ?>
    <!-- 模板的内容开始 -->
    <div class="col-sm-9 col-xs-12" id="mainContent">
                <button type="button" class="btn btn-primary btn-xs" id="btnOnOff">隐藏</button>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">借款类别及金额统计</h3>
                    </div>
                    <div class="panel-body">
                        <!-- 1. 为ECharts准备一个具备大小（宽高）的Dom -->    
                        <div id="mybox" style="width: 100%; height:400px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>       
    <!-- 模板的内容结尾 -->

    <!-- 引入页脚 -->
     <?php
       require_once("footer.php");
    ?>

    <!-- 引入jqueryTemplate模板引擎的库文件 -->
    <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入自定义的效果 -->
    <script src="./dist/js/p2p.min.js"></script>
    <!-- 个人中心的交互特效 -->
    <script src="./dist/js/personal.min.js"></script>
    <!-- 引入报表js -->
    <script src="./lib/echarts/echarts-all.js"></script>
    <script>
       //初始化报表对象
       var mycharts=echarts.init(document.getElementById('mybox'));

       //配置参数
       var optionObj = {
            title: {
                text: '借款类型的金额统计',
                subtext: '2018-09统计',
                x: 'center'
            },
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            legend: {
                orient: 'vertical',
                x: 'left',
                //图例
                data: [] //后端提供数据
            },
            toolbox: {
                show: true,
                feature: {
                    mark: { show: true },
                    dataView: { show: true,readOnly: false },
                    magicType: {
                        show: true,
                        type: ['pie','funnel'],
                        option: {
                            funnel: {
                                x: '25%',
                                width: '50%',
                                funnelAlign: 'left',
                                max: 1548
                            }
                        }
                    },
                    restore: { show: true },
                    saveAsImage: { show: true }
                }
            },
            //是否可以重新计算
            calculable: true,
            //序列数据
            series: [
                {
                    name: '访问来源',
                    type: 'pie',
                    radius: '55%',
                    center: ['50%','60%'],
                    //数据
                    data: []  //后端提供数据
                }
            ]
        };

        //5. 为echarts对象加载数据 
        mycharts.setOption(optionObj);

        //>>6.发送ajax请求
        $.get('./api/borrowData.php',function(data){
           console.log("后端返回的Api",data);
           //重置数据
           optionObj.legend.data=data.title;
           optionObj. series[0].data=data.data;
           mycharts.hideLoading(); //隐藏loading动画
           mycharts.setOption(optionObj); //把新的配置设置到报表中
        },"json");    
    </script>
</body>
</html>