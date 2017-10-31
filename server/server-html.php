<?php
	//added standard php/mysql config file with host, user and password info
	require "config.php";

	//models and collections
	require "domain/models/filter-result-model.php";
	require "domain/collection/filter-result-collection.php";

	//domain
	require "domain/action.php";
	require "domain/sorting.php";
	require "domain/pagination.php";
	require "domain/filtering.php";
	require "domain/server.php";

	//controls
	require "controls/sortdropdown.php";
	require "controls/textbox.php";
	require "controls/checkboxgroupfilter.php";
	require "controls/filterdropdown.php";
	require "controls/filterselect.php";
    require "controls/range-slider.php";
    require "controls/range-filter.php";
    require "controls/button-text-filter.php";

	class jPListHTML extends jPListServer{

		/**
		* get html for one item
		* @param {Object} $item
		* @return {string} html
		*/
		private function getHTML($item){

			$html = "";
			$html .= "<div class='list-item box'>";
			$html .= "<a href='cprofile.php?id=" . $item['id'] . "'>";
			$html .= "	<div class='img left'>";
			$html .= "		<img src='assets/img/demo/property-4.jpg' style='width: 100%;max-width:100%; margin-top:5px;' alt='' title=''/>";
//				$html .= "		<img src='" . $item['image'] . "' alt='' title=''/>";
			$html .= "	</div>";

			$html .= "	<div class='block right'>";
			$html .= "		<p class='title' style='text-transform: uppercase;'>" . $item['title'] . "</p>";
			$html .= "		<p class='desc' style='overflow: hidden; text-overflow: ellipsis; display: -webkit-box; line-height: 18px; max-height: 110px; -webkit-line-clamp: 5; -webkit-box-orient: vertical;'>" . $item['description'] . "</p>";
//			$html .= "		<p class='like'>" . $item['likes'] . " Likes</p>";
//            $html .= "		<p class='views'>" . $item['viewsnumber'] . " Views</p>";
			$html .= "		<p class='theme'>" . $item['keyword1'] . ", " . $item['keyword2'] . "</p>";
			$html .= "	</div>";
			$html .= "</a>";
			$html .= "</div>";
			
			

			return $html;
		}

		/**
		* get the whole html
		* @param {string} $itemsHtml - items html
		* @return {string} html
		*/
		private function getHTMLWrapper($itemsHtml){

			$html = "";

			$html .= "<div data-type='jplist-dataitem' data-count='" . $this->pagination->numberOfPages . "' class='box'>";
			$html .= $itemsHtml;
			$html .= "</div>";

			return $html;
		}

		/**
		* constructor
		*/
		public function __construct(){

			$html = "";

			try{
                parent::__construct();

				if(isset($this->statuses)){

					$items = $this->getData();

					if($items){
						foreach($items as $item){
							$html .= $this->getHTML($item);
						}
					}

                    ob_clean();

					//print html
					echo($this->getHTMLWrapper($html));
				}

				//close the database connection
				$this->db = NULL;
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
