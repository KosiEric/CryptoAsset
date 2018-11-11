<?php 

require_once('config.php');

class  WebsiteHeader extends WebsiteConfigurationSettings {

             protected  $PageTitle = "";
             protected  $PageFavicon = "";
             protected  $PageDescription = "";
             protected  $PageKeywords = "";
             protected  $defaultPageHeadTags = "";
             protected  $defaultPageHeader ="";


             // Below i try to Initialize the defaultPageHeadTags Class variable

              public function setPageTitleDescriptionKeywords(string $title, string $description, string $keywords)
              {
                  // TODO: Implement setPageTitleDescriptionKeywords() method.
                  $this->PageTitle = $title;
                  $this->PageDescription = $description;
                  $this->PageKeywords = $keywords; 
              }

    function __construct(string $title , string $description , string $keywords) {
                 parent::__construct();
                 $this->setPageTitleDescriptionKeywords($title , $description , $keywords);

             	$this->defaultPageHeader = <<<DefaultPageHeadTags

<title>{$this->PageTitle}</title>
<meta name = "description" content="{$this->PageDescription}" />
<meta name="keywords" content="{$this->PageKeywords}" />
<meta name="">
<meta charset="utf-8" />
<meta name="copyright" content="{$this->SiteName} Inc." />
<meta name="language" content="EN" />
<meta name="robots" content="index,follow" />
<meta name="owner" content="{$this->SiteName}" />
<meta name="url" content="{$this->SiteNameWithHttps}" />
<meta name="identifier-URL" content="{$this->SiteNameWithHttps}" />
<meta name="directory" content="submission" />
<meta name="category" content="{$this->WebsiteCategory}"/>
<meta name="coverage" content="{$this->WebsiteCoverage}"/>
<meta name="distribution" content="{$this->WebsiteCoverage}"/>
<meta name="rating" content="General"/>
<meta name="target" content="all"/>
<meta name="HandheldFriendly" content="True"/>
<meta name="MobileOptimized" content="360"/>
<meta http-equiv="Expires" content="0" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="x-dns-prefetch-control" content="off" />
<meta name="Classification" content="{$this->WebsiteClassification}" />
<meta name="subject" content="{$this->WebsiteSubject}" />
<meta name="author" content = "{$this->SiteAuthor}" />
<meta name="description" content="{$this->PageDescription}" />
<script type="text/javascript" src="{$this->JS_FOLDER}jquery.min.js"></script>
<script type="text/javascript" src="{$this->JS_FOLDER}popper.js"></script>

<script type="text/javascript" src="{$this->JS_FOLDER}moment.js"></script>
<script type="text/javascript" src="{$this->JS_FOLDER}livestamp.js"></script>

<link rel="stylesheet" type="text/css" href="{$this->CSS_FOLDER}bootstrap.min.css" />
<link rel="stylesheet" type="text/css"  href="{$this->CSS_FOLDER}cairo.css" />
<script type="text/javascript" src="{$this->JS_FOLDER}defaults.js"></script>
<script type="text/javascript" language="JavaScript" src = "{$this->JS_FOLDER}main.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link rel="shortcut icon" href="upload/settings/35f7d3bce41674cd7c787b978eebfb15.png" />
        <!-- style css -->
        <link href="{$this->CSS_FOLDER}style.css" rel="stylesheet" type="text/css" />
        <!-- Chart -->
        <link href="{$this->CSS_FOLDER}export.css" rel="stylesheet" type="text/css" />
    <link href="{$this->CSS_FOLDER}font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="{$this->CSS_FOLDER}main.css" type="text/css" rel="stylesheet" />


<style type="text/css">
::-webkit-scrollbar-track {
      background-color: #b46868;
  } /* the new scrollbar will have a flat appearance with the set background color */

  ::-webkit-scrollbar-thumb {
      background-color: rgba(0, 0, 0, 0.2);
  } /* this will style the thumb, ignoring the track */

  ::-webkit-scrollbar-button {
      background-color: #7c2929;
  } /* optionally, you can style the top and the bottom buttons (left and right for horizontal bars) */

  ::-webkit-scrollbar-corner {
      background-color: black;
  }

body , html{

  padding:  0px;
  margin : 0px;
  //font-family: Cairo !important;
  position: relative;
  background-color : #fff;
}

* {

    outline: none;
}
a[href='#']{
        
        color : inherit;
        text-decoration : none;
    } 

            </style>
            
         

DefaultPageHeadTags;
             }
             public final function GetDefaultPageHeadTags() : string{

                      return $this->defaultPageHeader;



             } 







             
                 
}


?>