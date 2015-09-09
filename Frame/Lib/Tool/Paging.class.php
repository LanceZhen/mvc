<?php
/**
 * 分页类
 * User: Administrator
 * Date: 2015/9/5 0005
 * Time: 上午 12:53
 */
class Paging
{
    private $total;      //总记录  
    private $pageSize;    //每页显示多少条  
    private $limit;          //limit  
    private $page;           //当前页码  
    private $pageNum;      //总页码  
    private $url;           //地址  
    private $bothNum;      //两边保持数字分页的量

    //构造方法初始化  
    public function __construct($_total, $_pageSize = 10,$bothNum = 2)
    {
        $this->total = $_total ? $_total : 1;
        $this->pageSize = $_pageSize;
        $this->pageNum = ceil($this->total / $this->pageSize);
        $this->page = $this->setPage();
        $this->limit = ($this->page - 1) * $this->pageSize . ','.$this->pageSize;
        $this->url = $this->setUrl();
        $this->bothNum = $bothNum;
    }

    /**获得limit
     * @return string
     */
    public function getLimit(){
        return $this->limit;
    }

    //拦截器  
    /*    private function __get($_key)
        {
            return $this->$_key;
        }*/

    //获取当前页码  
    private function setPage()
    {
        if (!empty($_GET['page'])) {
            if ($_GET['page'] > 0) {
                if ($_GET['page'] > $this->pageNum) {
                    return $this->pageNum;
                } else {
                    return $_GET['page'];
                }
            } else {
                return 1;
            }
        } else {
            return 1;
        }
    }

    //获取地址  
    private function setUrl()
    {
        $_url = $_SERVER["REQUEST_URI"];

        $_par = parse_url($_url);
        if (isset($_par['query'])) {
            parse_str($_par['query'], $_query);
            unset($_query['page']);
            $_url = $_par['path'] . '?' . http_build_query($_query);
        }
        return $_url;
    }     //数字目录  



    //首页  
    private function first()
    {
        if ($this->page > $this->bothNum + 1) {
            return '<li class="paginItem"><a href="' . $this->url . '">1</a></li><li class="paginItem more"><a href="javascript:;">...</a></li>';
        }
    }

    private function pageList()
    {
        $_pageList = '';
        for ($i = $this->bothNum; $i >= 1; $i--) {
            $_page = $this->page - $i;
            if ($_page < 1) continue;
            $_pageList .= '<li class="paginItem"><a href="' . $this->url . '&page=' . $_page . '">' . $_page . '</a></li>';
        }
        $_pageList .= '<li class="paginItem current"><a href="javascript:;">'. $this->page .'</a></li>';
        for ($i = 1; $i <= $this->bothNum; $i++) {
            $_page = $this->page + $i;
            if ($_page > $this->pageNum) break;
            $_pageList .= '<li class="paginItem"><a href="' . $this->url . '&page=' . $_page . '">' . $_page . '</a></li>';
        }
        return $_pageList;
    }

    //上一页  
    private function prev()
    {
        if ($this->page == 1) {
            return '<li class="paginItem"><a href="javascript:;"><span class="pagepre"></span></a></li>';
        }
        return '<li class="paginItem"><a href="'.$this->url.'&page='.($this->page - 1).'"><span class="pagepre-on"></span></a></li>';
    }

    //下一页  
    private function next()
    {
        if ($this->page == $this->pageNum) {
            return '<li class="paginItem"><a href="javascript:;"><span class="pagenxt-dis"></span></a></li>';
        }
        return '<li class="paginItem"><a href="'.$this->url.'&page=' . ($this->page + 1) . '"><span class="pagenxt"></span></a></li>';
    }

    //尾页  
    private function last()
    {
        if ($this->pageNum - $this->page > $this->bothNum) {
            return '<li class="paginItem more"><a href="javascript:;">...</a></li><li class="paginItem"><a href="'.$this->url.'&page='.$this->pageNum.'">'.$this->pageNum.'</a></li>';
        }
    }

    //分页信息  
    public function showPage()
    {
        $_page  = '<div class="pagin">';
        $_page .=   '<div class="message">共<i class="blue">'.$this->pageNum.'</i>条记录，当前显示第&nbsp;<i class="blue">'.$this->page.'&nbsp;</i>页</div>';
        $_page .=   '<ul class="paginList">'.$this->prev();
        $_page .= $this->first();
        $_page .= $this->pageList();
        $_page .= $this->last();
        $_page .= $this->next();
        $_page .=   '</ul>';
        $_page .= '</div>';
        return $_page;
    }
}
//header('content-type:text/html; charset=utf-8');
//$_page = new Paging(80, 4); //其中 $_total 是数据集的总条数,$_pagesize 是每页显示的数量.
//echo $_page->showPage();
