<?php
 
class Paginator {
 

    private $_limit;
    private $_page;
    private $_query;
    private $_total;

    // $conn       = new mysqli( '127.0.0.1', 'root', 'root', 'world' );
 
    $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 25;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
    $query      = "SELECT * FROM data";
 
    // $Paginator  = new Paginator( $conn, $query );
 
    // $results    = $Paginator->getData( $page, $limit )


    public function __construct($query) {
     

	    $this->_query = $query;
	 
	    $rs= $this->db->select($this->_query);
	    $this->_total = count($rs);
     
	}

	public function getData( $limit = 10, $page = 1 ) {
     
	    $this->_limit   = $limit;
	    $this->_page    = $page;
	 
	    if ( $this->_limit == 'all' ) {
	        $query      = $this->_query;
	    } else {
	        $query      = $this->_query . " LIMIT " . ( ( $this->_page - 1 ) * $this->_limit ) . ", $this->_limit";
	    }
	    $results             = $this->db->select($query);
	
	 
	    $result         = new stdClass();
	    $result->page   = $this->_page;
	    $result->limit  = $this->_limit;
	    $result->total  = $this->_total;
	    $result->data   = $results;
	 
	    return $result;
	}

	public function createLinks( $links, $list_class ) {
	    if ( $this->_limit == 'all' ) {
	        return '';
	    }
	 
	    $last       = ceil( $this->_total / $this->_limit );
	 
	    $start      = ( ( $this->_page - $links ) > 0 ) ? $this->_page - $links : 1;
	    $end        = ( ( $this->_page + $links ) < $last ) ? $this->_page + $links : $last;
	 
	    $html       = '<ul class="' . $list_class . '">';
	 
	    $class      = ( $this->_page == 1 ) ? "disabled" : "";
	    $html       .= '<li class="' . $class . '"><a href="?limit=' . $this->_limit . '&page=' . ( $this->_page - 1 ) . '">&laquo;</a></li>';
	 
	    if ( $start > 1 ) {
	        $html   .= '<li><a href="?limit=' . $this->_limit . '&page=1">1</a></li>';
	        $html   .= '<li class="disabled"><span>...</span></li>';
	    }
	 
	    for ( $i = $start ; $i <= $end; $i++ ) {
	        $class  = ( $this->_page == $i ) ? "active" : "";
	        $html   .= '<li class="' . $class . '"><a href="?limit=' . $this->_limit . '&page=' . $i . '">' . $i . '</a></li>';
	    }
	 
	    if ( $end < $last ) {
	        $html   .= '<li class="disabled"><span>...</span></li>';
	        $html   .= '<li><a href="?limit=' . $this->_limit . '&page=' . $last . '">' . $last . '</a></li>';
	    }
	 
	    $class      = ( $this->_page == $last ) ? "disabled" : "";
	    $html       .= '<li class="' . $class . '"><a href="?limit=' . $this->_limit . '&page=' . ( $this->_page + 1 ) . '">&raquo;</a></li>';
	 
	    $html       .= '</ul>';
	
	    return $html;
	}

 
}