<?php
use yii\helpers\Url;
?>
<ol class="breadcrumb">
    <li><a href="<?= Url::toRoute(['index/index'])?>">主页</a></li>
    <li>管理员管理</li>
    <li class="active">管理员列表</li>
    <div class="quit">
        <span type="button" >管理员:毛何远</span>
        <a href="#">[退出]</a>
    </div>
</ol>
<nav class="navbar navbar-default">
    <div class="container-fluid pdl0">
        <div class="collapse navbar-collapse pdl0" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-left pdl2">

                <div class="btn-group form-group" >

                    <button type="button" class="btn btn-primary create" title="管理员新增" data-url="{:U('admin/add')}"><i class="fa fa-plus" aria-hidden="true"></i></button>

                </div>
                <button type="submit" name="submit" value="export" class="btn btn-default">导出</button>
                <a  href="" class="btn btn-primary"><i class="fa fa-refresh" aria-hidden="true"></i></a>
            </form>


        </div>
    </div>
</nav>

<div class="ml5">
    <table class="table table-bordered table-hover ">
        <thead>
        <tr class="info">
            <th width="50"><input id="select-all" type="checkbox"></th>
            <th width="50">编号</th>
            <th>管理员名称</th>
            <th width="100">修改时间</th>
            <th  width="100">操作</th>
        </tr>
        </thead>
        <tbody>
            <?= $list?>
        </tbody>
    </table>
</div>
