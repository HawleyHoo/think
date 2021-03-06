<?php
namespace app\home\controller;
//页面渲染模板
use think\View;

class Index
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }

    public function test()
    {
        $data = ['name' => 'thinkphp', 'url' => 'thinkphp.cn', 'apppath' => APP_PATH, 'appurl' => config('app_host')];
        return json(['data' => $data, 'code' => 1, 'message' => '操作完成']);
    }

    public function hello()
    {
        $data = array("a" => '操作完成', 'bbb' => 'bbb', 'ccc' => 'bbb'
        , 'dd' => 'bbb', 'e' => 'bbb'
        , 'f' => 'bbb', 'g' => array("a" => 'aaa', 'bbb' => 'bbb', 'ccc' => 'bbb'
            , 'dd' => 'bbb', 'e' => 'bbb'
            , 'f' => 'bbb'));
        dump($data);
    }
    //http://www.thinkphp.net/home/index/hello1/name/2
    public function hello1($name = 'thinkphp')
    {
        echo $name. '<br/>';
        echo \think\Request::instance()->has('name','get',true). '<br/>';
        dump(empty(\think\Request::instance()->has('name','get',true))). '<br/>';
        echo input("?get.name"). '<br/>';
        $request = \think\Request::instance();
        // 获取当前域名
        echo 'domain: ' . $request->domain() . '<br/>';
        // 获取当前入口文件
        echo 'file: ' . $request->baseFile() . '<br/>';
        // 获取当前URL地址 不含域名
        echo 'url: ' . $request->url() . '<br/>';
        // 获取包含域名的完整URL地址
        echo 'url with domain: ' . $request->url(true) . '<br/>';
        // 获取当前URL地址 不含QUERY_STRING
        echo 'url without query: ' . $request->baseUrl() . '<br/>';
        // 获取URL访问的ROOT地址
        echo 'root:' . $request->root() . '<br/>';
        // 获取URL访问的ROOT地址
        echo 'root with domain: ' . $request->root(true) . '<br/>';
        // 获取URL地址中的PATH_INFO信息
        echo 'pathinfo: ' . $request->pathinfo() . '<br/>';
        // 获取URL地址中的PATH_INFO信息 不含后缀
        echo 'pathinfo: ' . $request->path() . '<br/>';
        // 获取URL地址中的后缀信息
        echo 'ext: ' . $request->ext() . '<br/>';
    }

    public function myview()
    {
        $view = new View();
        $name = ['name'=>'myview'];
        return $view->fetch('index',$name);
    }

    public function myview1()
    {
        $name = ['name'=>'myview1'];
        return view('index',$name);
    }
}
