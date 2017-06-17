<?php

$data = get_csv_content('https://docs.google.com/spreadsheets/d/1GFG-phtItT3V3JGGqyZgpN6aViDkY-rg3HUTBeOjD3Q/pub?output=csv');


	function get_csv_content($spreadsheet_url){
		if(!ini_set('default_socket_timeout', 15)) 
		echo "<!-- unable to change socket timeout -->";

		if (($handle = fopen($spreadsheet_url, "r")) !== FALSE) {
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				$spreadsheet_data[] = $data;
			}
			fclose($handle);
			return $spreadsheet_data;
		}
	}
	
	function validate_data($data){
		return true;
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>seva-setu-nrc</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="logo">
                    <a href="http://sevasetu.org" class="image-link" target="__blank">
                        <img src = "logo.jpg" height="120" width="95"/>
                    </a>
                </div>
                <div class="title"><h2> seva setu </h2>
                </div>
                <div class="header bg-white">            		
            			<h1> child care </h1>
                </div>
            </div>

            <div class="row">
                <div class="col">
                   <img src="map2.gif" usemap="#image-map">

<map name="image-map">
    <area onclick="document.getElementById('para').innerHTML = 'pashchim champaran'" alt="paschim champaran" title="paschim champaran"  coords="117,36,118,33,113,22,122,22,129,24,137,24,145,22,150,14,157,16,165,21,169,25,171,30,177,34,185,37,202,41,218,42,235,58,235,72,233,86,229,96,241,100,241,106,231,118,237,132,237,145,225,148,209,157,197,163,193,151,183,149,178,140,170,142,173,122,165,113,157,120,141,113,137,89,141,77,131,81,133,65,119,47,117,35" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'purba champaran'" alt="purba champaran" title="purba champaran"  coords="209,166,217,159,222,157,233,159,241,146,249,133,238,121,245,111,253,105,261,106,269,110,277,115,281,119,285,129,297,133,305,133,313,150,315,157,315,169,313,182,298,194,309,201,321,206,322,211,310,207,318,217,309,214,297,213,281,214,273,213,266,217,261,223,249,214,241,201,235,194,225,189,217,189,210,179" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'gopalganj'" alt="gopalganj" title="gopalganj"  coords="189,169,177,167,168,171,156,168,145,164,141,171,137,177,128,181,118,179,116,185,122,188,130,188,138,195,144,199,154,201,165,207,170,207,177,209,188,203,201,204,209,209,217,211,221,215,232,211,226,196,205,188,201,174" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'saran'" alt="saran" title="saran"  coords="209,302,201,291,201,276,195,268,209,267,217,262,221,252,221,242,225,238,229,228,223,224,233,220,239,216,246,224,254,234,261,243,262,258,262,270,269,276,277,276,282,280,286,290,290,300,297,308,301,323,301,335,289,319,265,319,253,320,245,320,226,314,221,320" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'siwan'" alt="siwan" title="siwan"  coords="193,292,181,281,173,275,161,275,147,261,134,247,129,235,142,233,149,231,157,219,157,211,165,220,173,217,183,220,189,209,201,219,207,219,215,225,219,232,213,248,210,255,206,263,189,264,193,278,193,287,189,290" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'patna'" alt="patna" title="patna"  coords="347,374,354,378,365,379,366,387,370,391,379,386,386,392,393,398,403,400,407,404,413,396,422,394,429,396,435,392,421,386,413,374,411,366,401,358,389,370,377,373,362,373,357,366,342,370,328,361,316,359,308,346,296,343,287,336,283,327,272,323,260,326,252,333,251,339,248,348,239,360,240,368,237,377,231,385,234,394,234,400,242,403,247,407,257,397,273,393,284,400,298,392,301,378,314,380,325,381,333,375" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'bhojpur'" alt="bhojpur" title="bhojpur"  coords="160,375,170,371,175,360,176,348,175,334,184,332,189,330,199,332,205,328,217,327,230,323,239,330,248,334,242,342,235,353,232,364,231,373,226,387,219,393,214,400,204,403,187,410,174,403,168,389,162,384" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'buxar'" alt="buxar" title="buxar"  coords="143,323,136,326,132,332,132,339,118,340,106,353,98,360,93,367,90,374,97,381,104,388,112,391,117,384,123,372,127,378,138,375,148,375,153,378,157,369,164,365,168,359,170,348,173,324,164,337,157,337,149,331" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'rohtas'" alt="rohtas" title="rohtas"  coords="128,381,139,385,146,383,157,389,162,403,166,413,177,418,176,429,162,440,148,458,137,467,121,488,107,509,91,520,74,522,57,525,37,521,42,517,66,519,76,517,79,495,77,477,85,450,97,423,100,410,103,396,122,401" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'bhabhua'" alt="bhabhua" title="bhabhua"  coords="43,392,20,407,17,415,16,424,10,434,16,441,18,451,18,465,23,474,30,481,38,487,39,495,40,501,45,511,68,514,72,502,66,477,71,464,79,450,84,436,84,417,93,393,77,372,58,388" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'gaya'" alt="gaya" title="gaya"  coords="238,449,229,451,224,464,217,472,221,482,231,485,226,495,223,503,215,508,208,518,203,528,188,532,180,522,174,532,162,538,170,549,175,547,180,559,188,564,190,552,196,551,202,545,207,547,213,543,219,534,228,531,235,525,244,529,248,539,256,553,265,554,279,547,285,551,288,547,290,539,299,538,306,535,321,531,314,519,313,509,316,503,309,495,311,486,319,473,327,461,317,449,303,454,289,453,279,461,269,455,262,463,247,460" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'aurangabad'" alt="aurangabad" title="aurangabad"  coords="141,474,160,454,180,437,216,441,218,452,217,460,207,470,217,489,220,499,200,517,199,524,187,526,177,514,166,530,155,517,146,515,130,532,123,518,116,504" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'katihar'" alt="katihar" title="katihar"  coords="639,341,661,343,681,346,701,332,711,329,723,329,721,307,730,320,734,332,750,343,750,360,752,369,738,359,730,366,722,371,718,378,704,392,711,397,716,410,705,407,689,400,676,394,662,389,652,383,636,384,634,390,626,381,623,374,634,359" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'araria'" alt="araria" title="araria"  coords="599,187,605,207,613,214,629,212,633,219,640,221,649,219,653,213,662,211,670,212,678,218,684,223,691,237,698,251,696,259,695,266,689,268,682,271,681,277,671,282,655,282,644,285,629,284,613,288,606,286,615,277,616,268,606,265,613,256,606,243,604,228,606,218" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'purnia'" alt="purnia" title="purnia"  coords="592,295,604,292,613,293,634,288,649,290,664,289,680,287,689,284,689,273,698,272,702,266,711,268,718,270,716,287,711,300,714,310,716,322,704,322,697,327,691,333,680,337,667,335,651,334,635,333,626,336,631,342,633,348,628,356,619,366,617,373,613,378,604,377,607,363,601,359,597,345,600,333,595,322,599,313" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'banka'" alt="banka" title="banka"  coords="538,442,551,440,577,447,599,450,608,452,607,471,601,483,598,498,592,513,583,515,571,512,570,521,568,531,559,524,552,516,543,521,534,522,527,512,520,503,518,491,516,474,511,460,527,469,535,459" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'jamui'" alt="jamui" title="jamui"  coords="406,455,419,454,433,456,446,457,462,450,482,446,492,449,499,448,498,455,505,461,507,472,509,480,505,495,513,499,515,510,523,517,514,530,502,539,504,550,497,557,482,549,473,545,482,534,480,522,470,525,461,518,458,525,449,518,451,502,443,496,441,485,433,483,431,472,415,475" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'nawada'" alt="nawada" title="nawada"  coords="319,493,325,479,335,472,335,461,348,456,360,457,366,449,375,441,387,440,387,449,391,456,400,460,398,466,405,468,407,477,415,480,423,479,429,488,423,495,411,488,402,481,393,484,387,479,381,489,378,498,377,504,369,507,373,513,373,520,362,521,357,526,347,526,337,526,327,524,323,515,325,503,323,498" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'vaishali'" alt="vaishali" title="vaishali"  coords="293,284,300,278,318,278,319,285,326,288,340,289,355,293,368,291,365,299,368,308,370,316,368,323,359,332,354,345,356,354,350,361,338,364,327,357,316,344,309,331,307,318,305,302" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'arwal'" alt="arwal" title="arwal"  coords="228,395,222,403,229,402,235,403,230,407,233,413,245,410,241,417,238,429,242,435,241,441,225,449,221,445,229,441,219,433,209,431,199,429,187,433,183,423,193,413,209,411,219,406" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'sheikhpur'" alt="sheikhpur" title="sheikhpur"  coords="382,429,383,415,385,405,391,411,397,415,409,415,413,423,414,432,410,441,407,449,393,453,398,436,389,435,371,435" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'jahanabad'" alt="jahanabad" title="jahanabad"  coords="242,426,250,415,258,407,267,401,278,405,290,403,296,402,298,413,298,423,298,430,298,437,300,447,287,451,278,454,268,450,258,455,248,453" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'shivhar'" alt="shivhar" title="shivhar"  coords="313,189,319,184,321,173,325,163,330,172,335,185,337,193,330,201,318,201" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'muzaffar'" alt="muzaffar" title="muzaffar"  coords="269,225,281,221,295,221,309,223,317,229,327,219,337,223,343,229,357,213,367,214,373,221,383,225,385,243,389,249,381,262,379,271,369,281,365,286,341,285,329,283,326,273,315,270,305,271,295,273,285,273,273,267,269,243,265,233" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'nalanda'" alt="nalanda" title="nalanda"  coords="305,429,301,415,311,405,305,399,307,381,319,387,329,384,337,381,345,379,357,383,363,391,367,399,375,403,377,411,375,423,363,428,363,433,361,439,353,441,346,445,341,449,329,447,313,439" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'samastipur'" alt="samastipur" title="samastipur"  coords="368,334,377,326,379,313,376,300,379,282,387,276,403,278,413,285,421,293,435,298,461,304,467,314,467,324,475,326,483,328,480,334,475,340,463,330,459,322,447,314,443,321,451,322,439,325,435,332,432,342,423,333,411,334,405,337,406,349,395,347,387,358,381,363,371,367,365,362,363,345" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'bhagalpur'" alt="bhagalpur" title="bhagalpur"  coords="565,377,574,378,585,378,599,377,601,388,617,384,622,394,637,390,646,392,659,398,669,402,659,406,661,413,651,414,639,412,633,424,633,432,621,436,614,442,605,444,593,440,573,440,559,434,546,434,549,426,538,418,553,414,558,405,569,400" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'kishanganj'" alt="kishanganj" title="kishanganj"  coords="694,219,694,230,699,236,702,250,702,262,717,262,727,267,737,270,737,260,745,252,757,248,767,239,777,230,778,223,773,214,774,203,766,198,762,207,758,215,751,222,741,218,733,211,727,210,717,208,709,216,697,214" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'madhubani'" alt="madhubani" title="madhubani"  coords="429,175,433,169,445,171,453,175,473,183,485,177,501,185,533,205,538,213,521,221,509,235,497,243,501,249,511,253,501,259,497,265,489,263,486,247,477,235,469,239,453,241,445,235,437,223,423,221,418,228,413,216,410,204,405,199,414,187,421,181" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'supaul'" alt="supaul" title="supaul"  coords="522,232,537,223,546,215,557,210,569,210,581,199,593,192,597,212,590,232,597,242,597,256,598,268,583,266,563,262,551,262,538,270,533,275,513,274,506,266,527,256,515,244" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'sitamarchi'" alt="sitamarchi" title="sitamarchi"  coords="323,147,337,151,342,145,355,144,369,135,385,131,393,147,389,163,402,173,409,180,401,189,397,195,389,197,385,207,385,213,386,219,377,213,369,207,354,208,349,215,341,217,333,204,341,197,345,188" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'darbhanga'" alt="darbhanga" title="darbhanga"  coords="390,264,397,255,397,246,390,235,397,227,395,216,389,206,397,204,405,216,403,226,410,232,419,234,426,230,431,235,435,242,447,246,457,246,469,250,475,252,481,264,486,272,486,284,485,292,478,302,486,307,494,320,493,327,475,320,473,311,469,298,457,298,441,294,426,288,410,275,394,274" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'madhepura'" alt="madhepura" title="madhepura"  coords="533,284,542,282,547,267,565,268,579,271,597,276,599,286,585,290,585,300,590,314,589,326,591,339,593,354,594,363,599,364,597,371,585,368,569,368,565,352,559,344,569,338,569,322,569,304,553,302,545,303,545,296,534,292" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'begusarai'" alt="begusarai" title="begusarai"  coords="441,332,454,333,459,342,467,344,473,346,473,362,477,373,491,378,502,384,493,390,481,397,477,404,461,409,447,396,437,388,425,374,413,356,409,340,433,354" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'luckeesarai'" alt="luckeesarai" title="luckeesarai"  coords="417,402,428,401,433,404,437,399,444,403,452,412,460,416,475,413,482,405,477,422,477,433,470,439,460,443,449,451,440,449,429,448,416,445,421,420" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'saharsa'" alt="saharsa" title="saharsa"  coords="489,303,495,285,497,276,513,279,521,281,526,292,533,296,541,305,550,309,558,309,565,315,562,328,561,336,553,340,543,339,531,339,519,345,509,337,505,328,497,311,493,309" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'munger'" alt="munger" title="munger"  coords="487,404,497,397,506,392,513,384,519,384,521,396,521,404,525,412,530,416,537,424,533,433,529,446,529,454,525,460,517,458,507,450,501,440,493,441,482,438,479,438,483,420" shape="poly">
    <area onclick="document.getElementById('para').innerHTML = 'khagaria'" alt="khagaria" title="khagaria"  coords="481,357,481,345,493,334,499,337,506,347,517,349,529,349,545,347,557,353,558,367,557,381,557,391,553,395,549,402,541,406,530,407,529,391,525,378,517,373,507,381,498,367,487,367" shape="poly">
</map>
                       <br> district : <p id="para"> none </p>
                    

                </div>         	
            </div>

            

            </div>
        </div>
    </body>
</html>

    
