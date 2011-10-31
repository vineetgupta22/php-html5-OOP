<?PHP
/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation,either version 3 of the License.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details. You should have
 * received a copy of the GNU General Public License along with
 * this program.
 *
 * 
 *
 * @package		PHP-HTML5-OOP
 * @contents	Standard Library Starts here
 * @copyright	2011,Cee Emm Infotech,All Rights Reserved.
 * @author		Vineet Gupta <vineetgupta22@gmail.com>
 *
 */

	defined('_pH50') or die('Direct Access to the File is not allowed.');

	class pH5O_meta{
		protected $name = array();
		protected $http_equiv = array();
		protected $charset=array();

		public function add($type,$meta_name,$value){
			$type_http_equiv_allowed = array('content-language',
											'content-type',
											'default-style',
											'refresh',
											'Cache-Control',
											'Content-Disposition',
											'Expires',
											'X-UA-Compatible'
			);

			$type_name_allowed = array('application-name',
									'autor',
									'description',
									'generator',
									'keywords',
									'alexaverifyid',
									'apple-mobile-web-app-capable',
									'apple-mobile-web-app-status-bar-style',
									'bainduspider',
									'csrf-param',
									'csrf-token',
									'dc.date.issued',
									'dcterms.abstract',
									'dcterms.accessRights',
									'dcterms.accrualMethod',
									'dcterms.accrualPeriodicity',
									'dcterms.accrualPolicy',
									'dcterms.alternative',
									'dcterms.audience',
									'dcterms.available',
									'dcterms.bibliographicCitation',
									'dcterms.conformsTo',
									'dcterms.contributor',
									'dcterms.coverage',
									'dcterms.created',
									'dcterms.creator',
									'dcterms.date',
									'dcterms.dateAccepted',
									'dcterms.dateCopyrighted',
									'dcterms.dateSubmitted',
									'dcterms.description',
									'dcterms.educationLevel',
									'dcterms.extent',
									'dcterms.format',
									'dcterms.hasFormat',
									'dcterms.hasPart',
									'dcterms.hasVersion',
									'dcterms.identifier',
									'dcterms.instructionalMethod',
									'dcterms.isFormatOf',
									'dcterms.isPartOf',
									'dcterms.isReferencedBy',
									'dcterms.isReplacedBy',
									'dcterms.isRequiredBy',
									'dcterms.issued',
									'dcterms.isVersionOf',
									'dcterms.language',
									'dc.language',
									'dcterms.license',
									'dcterms.mediator',
									'dcterms.medium',
									'dcterms.modified',
									'dcterms.provenance',
									'dcterms.publisher',
									'dcterms.references',
									'dcterms.relation',
									'dcterms.replaces',
									'dcterms.requires',
									'dcterms.rights',
									'dcterms.rightsHolder',
									'dcterms.source',
									'dcterms.spatial',
									'dcterms.subject',
									'dcterms.tableOfContents',
									'dcterms.temporal',
									'dcterms.title',
									'dcterms.type',
									'dcterms.valid',
									'designer',
									'publisher',
									'review_date',
									'es.title',
									'format-detection',
									'geo.country',
									'geo.placename',
									'geo.position',
									'geo.region',
									'googlebot',
									'revisit-after',
									'icbm',
									'itemsPerPage',
									'msapplication-task',
									'msapplication-starturl',
									'msapplication-tooltip',
									'msapplication-navbutton-color',
									'msvalidate.01',
									'norton-safeweb-site-verification',
									'rating',
									'referrer',
									'rights-standard',
									'robots',
									'slurp',
									'startIndex',
									'teoma',
									'totalResults',
									'verify-v1',
									'viewport',
									'wt.cg_n',
									'wt.cg_s',
									'wt.ac',
									'wt.ad',
									'wt.mc_id',
									'wt.sv',
									'wt.ti',
									'globrix.instruction',
									'globrix.price',
									'globrix.postcode',
									'globrix.bedrooms',
									'globrix.bathrooms',
									'globrix.type',
									'globrix.condition',
									'globrix.features',
									'globrix.outsidespace',
									'globrix.parking',
									'globrix.period',
									'globrix.poa',
									'globrix.tenure',
									'globrix.underoffer',
									'globrix.priceproximity',
									'globrix.latitude',
									'globrix.longitude',
									'wot-verification',
									'blogcatalog',
									'nibbler-site-verification',
									'og:title',
									'og:type',
									'og:url',
									'og:image',
									'og:site_name',
									'fb:admins',
									'og:description',
									'fb:page_id'
				);
			if($type==1){
				foreach($type_name_allowed as $m_name){
					if($m_name===$meta_name){
						$this->name[$m_name] = $value;
					}
				}
			}
			if($type==2){
				foreach($type_http_equiv_allowed as $m_name){
					if($m_name===$meta_name){
						$this->http_equiv[$m_name] = $value;
					}
				}
			}
			if($type==3){
				$this->charset[]= $value;
			}
		}

		public function render(){
			$m_name=$this->name;
			foreach($m_name as $key => $value){
				echo "\t<meta name='".$key."' content='".$value."' />\n";
			}
			$m_name=$this->http_equiv;
			foreach($m_name as $key => $value){
				echo "\t<meta http_equiv='".$key."' content='".$value."' />\n";
			}
			$m_name=$this->charset;
			foreach($m_name as $key => $value){
				echo "\t<meta charset='".$value."' />\n";
			}
		}
	}
?>
