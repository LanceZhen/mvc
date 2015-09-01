<?php
/**
 * 文章模型类.
 * User: Administrator
 * Date: 2015/8/28 0028
 * Time: 下午 8:52
 */
class ArticleModel extends Model{
    protected $table = 'cms_article';//表名
    protected $pk = 'id';//主键
    protected $field = array('id','title','categoryId','postTime','summary','author','source','keyword','isRecommend','content','audit');//字段

    protected $_pad = array('audit','value',0);//自动填充
    protected $_valid = array(//自动验证  array('验证的字段名',0/1/2(验证场景),'报错提示','require/in(某几种情况)/between(范围)/length(某个范围)','参数')
        array('title',1,'文章标题不能为空!','require'),
        array('title',2,'标题不能超过30个字符!','length','1,30'),
        array('categoryId',1,'文章分类错误','number'),
        array('postTime',1,'发布时间不能为空','require'),
        array('postTime',1,'发布时间格式不正确','date'),
        array('summary',0,'文章摘要必须小于100个汉字','length','1,300'),
        array('source',0,'文章来源必须小于100字符','length','1,100'),
        array('isRecommend',1,'是否推荐错误','in','0,1'),
        array('content',1,'文章内容不能为空','require'),
        array('content',2,'文章内容超过300字','length','1,900')
    );
}