<?php
	//added standard php/mysql config file with host, user and password info
	require "server/config.php";
	
	//models and collections
	require "server/domain/models/filter-result-model.php";
	require "server/domain/collection/filter-result-collection.php";
	
	//domain
	require "server/domain/action.php";
	require "server/domain/filtering.php";
	
	//controls
	require "server/controls/textbox.php";	
	require "server/controls/checkboxgroupfilter.php";
	require "server/controls/filterdropdown.php";
	require "server/controls/filterselect.php";
    require "server/controls/range-slider.php";	
    require "server/controls/range-filter.php";
?>

<!doctype html>
<html>
<head>
    <title>Fallback for search engines demo | jPList - jQuery Data Grid Controls</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- font libs -->
    <link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />

    <!-- demo page styles -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/jplist/5.2.0/css/jplist.demo-pages.min.css" rel="stylesheet" type="text/css" />

    <!-- jQuery lib -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- jPList core js and css  -->
    <link href="dist/css/jplist.core.min.css" rel="stylesheet" type="text/css" />
    <script src="dist/js/jplist.core-ajax.min.js"></script>

    <!-- jPList sort bundle -->
    <script src="dist/js/jplist.sort-bundle.min.js"></script>

    <!-- jPList textbox filter control -->
    <script src="dist/js/jplist.textbox-filter.min.js"></script>
    <link href="dist/css/jplist.textbox-filter.min.css" rel="stylesheet" type="text/css" />

    <!-- jPList pagination bundle -->
    <script src="dist/js/jplist.pagination-bundle.min.js"></script>
    <link href="dist/css/jplist.pagination-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- jPList history bundle -->
    <script src="dist/js/jplist.history-bundle.min.js"></script>
    <link href="dist/css/jplist.history-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- jPList toggle bundle -->
    <script src="dist/js/jplist.filter-toggle-bundle.min.js"></script>
    <link href="dist/css/jplist.filter-toggle-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- jplist views control -->
    <script src="dist/js/jplist.list-grid-view.min.js"></script>
    <link href="dist/css/jplist.list-grid-view.min.css" rel="stylesheet" type="text/css" />

    <!-- filter dropdown control -->
    <script src="dist/js/jplist.filter-dropdown-bundle.min.js"></script>

    <!-- preloader -->
    <script src="dist/js/jplist.preloader-control.min.js"></script>
    <link href="dist/css/jplist.preloader-control.min.css" rel="stylesheet" type="text/css" />

    <script>
        $('document').ready(function () {
            $('#demo').jplist({

                itemsBox: '.list'
                , itemPath: '.list-item'
                , panelPath: '.jplist-panel'
                , deepLinking: true
                , hashStart: '?'
                , delimiter1: '&'

                //data source
                , dataSource: {

                    type: 'server'
                    , server: {

                        //ajax settings
                        ajax: {
                            url: 'server/server-html.php'
                            , dataType: 'html'
                            , type: 'POST'
                        }
                    }
                }

            });
        });
    </script>

</head>
<body>

<!-- top bar -->
<div id="black-top-bar" class="box">
    <div class="center">
        <div class="box">

            <!-- left menu -->
            <ul id="black-top-bar-left-menu" class="hmenu left iphone-hidden">
                <li class="glow">
                    <a title="" href="//github.com/no81no/jplist/issues?state=open">
                        <i class="fa fa-asterisk"></i> Request a feature / <i class="fa fa-bug"></i> Report a bug
                    </a>
                </li>
            </ul>

            <!-- social menu -->
            <ul id="social-menu" class="hmenu right">
                <li class="glow"><a title="" href="//www.facebook.com/jplist"><i class="fa fa-facebook"></i>&nbsp;</a></li>
                <li class="glow"><a rel="publisher" title="" href="//plus.google.com/+Jplistjs"><i class="fa fa-google-plus"></i></a></li>
                <li class="glow"><a title="" href="//twitter.com/jquery_jplist"><i class="fa fa-twitter"></i></a></li>
                <li class="glow"><a title="" href="//github.com/no81no/jplist"><i class="fa fa-github"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<!-- header -->
<header id="header" class="box">
    <div id="header-box" class="box">
        <div class="center">
            <div class="box">

                <!-- logo -->
                <div class="align-center text-shadow" id="logo">
                    <p>
                        <img title="jPList - jQuery Data Grid Controls" alt="jPList - jQuery Data Grid Controls" src="//jplist.com/content/img/common/rocket.png" />
                        <a title="" href="//jplist.com">jPList - jQuery Data Grid Controls</a>
                    </p>
                    <h1 class="h1-30-normal">Fallback for search engines demo</h1>
                </div>

            </div>
        </div>
    </div>
</header>

<!-- main content -->
<div class="box">
    <div class="center">
        <!--<><><><><><><><><><><><><><><><><><><><><><><><><><> DEMO START <><><><><><><><><><><><><><><><><><><><><><><><><><>-->

        <div id="demo" class="box jplist">

            <!-- ios button: show/hide panel -->
            <div class="jplist-ios-button">
                <i class="fa fa-sort"></i>
                jPList Actions
            </div>

            <!-- panel -->
            <div class="jplist-panel box panel-top">

                <!-- reset button -->
                <button
                        type="button"
                        class="jplist-reset-btn"
                        data-control-type="reset"
                        data-control-name="reset"
                        data-control-action="reset">
                    Reset &nbsp;<i class="fa fa-share"></i>
                </button>

                <div
                        class="jplist-drop-down"
                        data-control-type="items-per-page-drop-down"
                        data-control-name="paging"
                        data-control-action="paging">

                    <ul>
                        <li><span data-number="3"> 3 per page </span></li>
                        <li><span data-number="5"> 5 per page </span></li>
                        <li><span data-number="10" data-default="true"> 10 per page </span></li>
                        <li><span data-number="all"> View All </span></li>
                    </ul>
                </div>

                <div
                        class="jplist-drop-down"
                        data-control-type="sort-drop-down"
                        data-control-name="sort"
                        data-control-action="sort">

                    <ul>
                        <li><span data-path="default">Sort by</span></li>
                        <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                        <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                        <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                        <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                        <li><span data-path=".like" data-order="asc" data-type="number">Likes asc</span></li>
                        <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                    </ul>
                </div>

                <!-- filter by title -->
                <div class="text-filter-box">

                    <!--[if lt IE 10]>
                    <div class="jplist-label">Filter by Title:</div>
                    <![endif]-->

                    <input
                            data-path=".title"
                            data-button="#title-search-button"
                            type="text"
                            value=""
                            placeholder="Filter by Title"
                            data-control-type="textbox"
                            data-control-name="title-filter"
                            data-control-action="filter"
                    />

                    <button
                            type="button"
                            id="title-search-button">
                        <i class="fa fa-search"></i>
                    </button>
                </div>

                <!-- filter by description -->
                <div class="text-filter-box">

                    <!--[if lt IE 10]>
                    <div class="jplist-label">Filter by Description:</div>
                    <![endif]-->

                    <input
                            data-path=".desc"
                            data-button="#desc-search-button"
                            type="text"
                            value=""
                            placeholder="Filter by Description"
                            data-control-type="textbox"
                            data-control-name="desc-filter"
                            data-control-action="filter"
                    />

                    <button
                            type="button"
                            id="desc-search-button">
                        <i class="fa fa-search"></i>
                    </button>
                </div>

                <!-- filter dropdown control -->
                <div
                        class="jplist-drop-down"
                        data-control-type="filter-drop-down"
                        data-control-name="category-dropdown-filter"
                        data-control-action="filter">

                    <ul>
                        <li><span data-path="default">Filter by category</span></li>
                        <li><span data-path=".architecture">Architecture</span></li>
                        <li><span data-path=".christmas">Christmas</span></li>
                        <li><span data-path=".lifestyle">LifeStyle</span></li>
                        <li><span data-path=".nature">Nature</span></li>
                    </ul>
                </div>

                <!-- checkbox filters -->
                <div
                        class="jplist-group"
                        data-control-type="checkbox-group-filter"
                        data-control-action="filter"
                        data-control-name="themes">

                    <input
                            data-path=".architecture"
                            id="architecture"
                            type="checkbox"
                    />

                    <label for="architecture">Architecture</label>

                    <input
                            data-path=".christmas"
                            id="christmas"
                            type="checkbox"
                    />

                    <label for="christmas">Christmas</label>

                    <input
                            data-path=".nature"
                            id="nature"
                            type="checkbox"
                    />

                    <label for="nature">Nature</label>

                    <input
                            data-path=".lifestyle"
                            id="lifestyle"
                            type="checkbox"
                    />

                    <label for="lifestyle">Lifestyle</label>
                </div>

                <div
                        class="jplist-group"
                        data-control-type="checkbox-group-filter"
                        data-control-action="filter"
                        data-control-name="colors">

                    <input
                            data-path=".red"
                            id="red-color"
                            type="checkbox"
                    />

                    <label for="red-color">Red</label>

                    <input
                            data-path=".green"
                            id="green-color"
                            type="checkbox"
                    />

                    <label for="green-color">Green</label>

                    <input
                            data-path=".blue"
                            id="blue-color"
                            type="checkbox"
                    />

                    <label for="blue-color">Blue</label>

                    <input
                            data-path=".brown"
                            id="brown-color"
                            type="checkbox"
                    />

                    <label for="brown-color">Brown</label>

                </div>

                <!-- views -->
                <div
                        class="jplist-views"
                        data-control-type="views"
                        data-control-name="views"
                        data-control-action="views"
                        data-default="jplist-list-view">

                    <button type="button" class="jplist-view jplist-list-view" data-type="jplist-list-view"></button>
                    <button type="button" class="jplist-view jplist-grid-view" data-type="jplist-grid-view"></button>
                </div>

                <!-- pagination results -->
                <div
                        class="jplist-label"
                        data-type="Page {current} of {pages}"
                        data-control-type="pagination-info"
                        data-control-name="paging"
                        data-control-action="paging">
                </div>

                <!-- pagination -->
                <div
                        class="jplist-pagination"
                        data-control-type="pagination"
                        data-control-name="paging"
                        data-control-action="paging">
                </div>

                <!-- preloader for data sources -->
                <div
                        class="jplist-hide-preloader jplist-preloader"
                        data-control-type="preloader"
                        data-control-name="preloader"
                        data-control-action="preloader">
                    <img src="demo/img/common/ajax-loader-line.gif" alt="Loading..." title="Loading..." />
                </div>

            </div>

            <!-- ajax content here -->
            <div class="list box text-shadow">
                   
                <?php

                    class jPListHTML{

                        /**
                        * database instance
                        */
                        protected $db;

                        /**
                        * filter
                        */
                        protected $filter;

                        /**
                        * jplist statuses
                        */
                        protected $statuses;

                        /**
                        * execute query and get data from db
                        * @return {Object} data
                        */
                        protected function getData(){

                            $items = null;

                            //init qury
                            $query = "SELECT title, description, image, likes, viewsnumber, keyword1, keyword2 FROM " . DB_TABLE . " ";

                            if($this->filter->filterQuery){				
                                $query .= " " . $this->filter->filterQuery . " ";
                            }

                            if(count($this->filter->preparedParams) > 0){	

                                $stmt = $this->db->prepare($query);
                                $stmt->execute($this->filter->preparedParams);
                                $items = $stmt->fetchAll();
                            }
                            else{
                                $items = $this->db->query($query);
                            }	

                            return $items;
                        }

                        /**
                        * get html for one item
                        * @param {Object} $item
                        * @return {string} html
                        */
                        private function getHTML($item){

                            $html = "";

                            $html .= "<div class='list-item box'>";	
                            $html .= "	<div class='img left'>";
                            $html .= "		<img src='" . $item['image'] . "' alt='' title=''/>";
                            $html .= "	</div>";

                            $html .= "	<div class='block right'>";
                            $html .= "		<p class='title'>" . $item['title'] . "</p>";
                            $html .= "		<p class='desc'>" . $item['description'] . "</p>";
                            $html .= "		<p class='like'>" . $item['likes'] . " Likes</p>";
                            $html .= "		<p class='views'>" . $item['viewsnumber'] . " Views</p>";
                            $html .= "		<p class='theme'>" . $item['keyword1'] . ", " . $item['keyword2'] . "</p>";
                            $html .= "	</div>";
                            $html .= "</div>";

                            return $html;
                        }

                        /**
                        * constructor
                        */
                        public function __construct(){

                            $html = "";

                            try{
                                //get title filter value from the query string
                                $titleFilterValue = $_GET['title-filter:value'];

                                if(isset($titleFilterValue)){

                                    $statuses = '[{
                                        "action": "filter",
                                        "name": "title-filter",
                                        "type": "textbox",
                                        "data": {
                                            "path": ".title",
                                            "ignore": "",
                                            "value": "' . $titleFilterValue . '",
                                            "mode": "contains",
                                            "filterType": "TextFilter"
                                        },
                                        "inStorage": true,
                                        "inAnimation": true,
                                        "isAnimateToTop": false,
                                        "inDeepLinking": true
                                    }]';

                                    //connect to database 
                                    $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);	

                                    //decode statuses
                                    $this->statuses = json_decode($statuses);

                                    //start filter
                                    $this->filter = new Filter($this->statuses);	

                                    //get html data
                                    $items = $this->getData();

                                    if($items){
                                        foreach($items as $item){
                                            $html .= $this->getHTML($item);					
                                        }
                                    }

                                    //print html
                                    echo($html);

                                    //close the database connection
                                    $this->db = NULL;
                                }
                            }
                            catch(PDOException $ex){
                                print "Exception: " . $ex->getMessage();
                            }

                        }
                    }

                    /**
                    * start
                    */
                    new jPListHTML();
                ?>
            </div>

            <!-- no result found -->
            <div class="box jplist-no-results text-shadow align-center jplist-hidden">
                <p>No results found</p>
            </div>

            <!-- ios button: show/hide panel -->
            <div class="jplist-ios-button">
                <i class="fa fa-sort"></i>
                jPList Actions
            </div>

            <!-- panel -->
            <div class="jplist-panel box panel-bottom" style="margin: 0 0 20px 0">

                <div
                        class="jplist-drop-down left"
                        data-control-type="items-per-page-drop-down"
                        data-control-name="paging"
                        data-control-action="paging"
                        data-control-animate-to-top="true">

                    <ul>
                        <li><span data-number="3"> 3 per page </span></li>
                        <li><span data-number="5"> 5 per page </span></li>
                        <li><span data-number="10" data-default="true"> 10 per page </span></li>
                        <li><span data-number="all"> View All </span></li>
                    </ul>
                </div>
                <div
                        class="jplist-drop-down left"
                        data-control-type="sort-drop-down"
                        data-control-name="sort"
                        data-control-action="sort"
                        data-control-animate-to-top="true">

                    <ul>
                        <li><span data-path="default">Sort by</span></li>
                        <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                        <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                        <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                        <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                        <li><span data-path=".like" data-order="asc" data-type="number">Likes asc</span></li>
                        <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                    </ul>
                </div>

                <!-- pagination results -->
                <div
                        class="jplist-label"
                        data-type="{start} - {end} of {all}"
                        data-control-type="pagination-info"
                        data-control-name="paging"
                        data-control-action="paging">
                </div>

                <!-- pagination -->
                <div
                        class="jplist-pagination"
                        data-control-type="pagination"
                        data-control-name="paging"
                        data-control-action="paging"
                        data-control-animate-to-top="true">
                </div>
            </div>
        </div>

        <!--<><><><><><><><><><><><><><><><><><><><><><><><><><> DEMO END <><><><><><><><><><><><><><><><><><><><><><><><><><>-->
    </div>
</div>

<!-- footer -->
<footer class="box" id="footer">
    <div class="center">
        <div class="box">
            <p id="footer-content" class="align-center glow">
                <a href="//jplist.com" title="">Copyright &copy; <script>document.write(new Date().getFullYear())</script> <b>jPList Software</b></a>
            </p>
        </div>
    </div>
</footer>
 
</body>
</html>
