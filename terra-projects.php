<?php
ob_start("ob_gzhandler");
/*
 * Data for terra website
 * 
 * Author: syl-via@dcc.fc.up.pt
 * 
 */
require_once 'terra-data.php';

class TerraProjects extends TerraLandscape {

	protected $projectsDir = "content/projects";
	protected $public = "content/projects/public";
	protected $private = "content/projects/private";
	protected $front = "content/projects/last_projects";

	public function __construct() {

	}

	public function loadConfig($lang) {
		$projects_config = ['heading' => [
		'en' => 'Terra Projects',
		'pt' => 'Projectos da Terra',
		'pl' => 'Terra Projects',
		'it' => 'Terra Projects']];
		return array_merge(parent::getConfig(), parent::getTranlatedConfig($lang), $projects_config);
	}

	public function getBaseURL() {
		return parent::getBaseURL();
	}

	public function getMainMenu() {
		return parent::getMainMenu();
	}

	public function getContact() {
		return parent::getContact();
	}

	public function getSocial() {
		return parent::getSocial();
	}

	public function getWorks() {
		return [
		'header' => [
		'en' => 'Environmental Analyses',
		'pt' => 'Estudos ambientais',
		'pl' => 'Opracowania Przyrodnicze',
		'it' => 'Analisi Ambientale'],
		'intro' => [
		'en' => 'Intro about Research of Terra Landscape',
		'pt' => 'Intro about Research of Terra Landscape',
		'pl' => 'Intro about Research of Terra Landscape',
		'it' => 'Intro about Research of Terra Landscape'],
		'investor' => [
		'en' => 'Investor',
		'pt' => 'Investidor',
		'pl' => 'Inwestor',
		'it' => 'Investitore'],
		'area' => [
		'en' => 'Area',
		'pt' => 'Área',
		'pl' => 'Powierzchnia',
		'it' => 'Zona']
		];
	}

	public function getWorksDetails() {
		$works = [
		2015 => [
                //item 1
		[
		'desc' => [
		'en' => 'Verification of the inventory requesting the removal of trees from the area of the four properties located within the Municipality Rudna',
		'pl' => 'Weryfikacja inwentaryzacji wnioskowanych do wycinki drzew z terenu czterech nieruchomości położonych w obrębie Gminy Rudna.',
		'pt' => 'A verificação do inventário que solicita a remoção de árvores a partir da zona dos quatro propriedades localizados dentro do Concelho Rudna',
		'it' => 'Verifica dell´inventario richiede la rimozione di alberi dalla zona dei quattro proprietà situate all´interno Comune Rudna',
		],
		'investor' => [
		'en' => 'Rudna City Hall',
		'pl' => 'Gmina Rudna',
		'pt' => 'Freguesia Rudna',
		'it' => 'Rudna',
		],
		'area' => [
		'en' => '15 ha',
		'pl' => '15 ha',
		'pt' => '15 ha',
		'it' => '15 ettari',
		],
		'link' => ''],
		],
		2014 => [
                //item 1
			[
			'desc' => [
			'en' => 'Complex technical elaboration the fire-protection belts along the rail-tracks, providing the administrative decisions for removing trees from lots belonging to private owners or to National Forests, developing the necessary technical and geodesic documentation.',
			'pl' => 'Wykonanie kompletnej dokumentacji geodezyjnej, uzyskanie decyzji na wycinkę drzew dla działek nie będących własnością PKP , opracowanie operatu dendrologicznego, przygotowanie niezbędnej dokumentacji technicznej dla wyznaczenia pasów przeciwpożarowych wzdłuż linii kolejowych.',
			'pt' => 'Elaboração técnica dos cintos de protecção contra incêndios ao longo do trilhos de comboios, proporcionando as decisões administrativas para a remoção de árvores, desenvolvendo a documentação técnica e geodésica necessário.',
			'it' => 'Complessa elaborazione tecnica dei nastri antincendio lungo le tracce ferroviarie, con le decisioni amministrative per la rimozione, la documentazione tecnica e geodetica necessaria.',
			],
			'investor' => [
			'en' => 'Polish Rails (PKP PLK S.A)',
			'pl' => 'PKP PLK S.A Zakład Linii Kolejowych w Rzeszowie',
			'pt' => 'Comboios da Polónia (PKP PLK S.A.)',
			'it' => 'Le Ferrovie Polacche (PKP PLK SA)',
			],
			'area' => [
			'en' => '90 km of rail-tracks (~135 ha)',
			'pl' => '90 km linii kolejowych (~135 ha)',
			'pt' => '90 km dos caminhos do ferro(~135 ha)',
			'it' => '90 km di tracce ferroviarie  (~ 135 ettari)',
			],
			'link' => ''],
	                //item 2
			[
			'desc' => [
			'en' => 'Evaluation of the trees fitosanitary condition and establishing their detailed maintenance plan ',
			'pl' => 'Ocena stanu zdrowotnego drzew wraz z opracowaniem zaleceń do dalszej pielęgnacji, lub wskazań do ich usunięcia, na terenie 4 dz.ew.',
			'pt' => 'Avaliação de condição fitossanitária dos árvores e estabelecimento do plano de manutenção detalhada',
			'it' => 'Valutazione della condizione fitosanitaria degli alberi e stabilimento del piano di manutenzione ',
			],
			'investor' => [
			'en' => 'Ministry of Administration (MSW)',
			'pl' => 'Ministerstwo Spraw Wewnętrznych RP',
			'pt' => 'Ministério da Administração Interna',
			'it' => 'Ministero dell\'Amministrazione (MSW)',
			],
			'area' => [
			'en' => '50 ha',
			'pl' => '50 ha',
			'pt' => '50 ha',
			'it' => '50 ettari',
			],
			'link' => ''],
				    //item 3
			[
			'desc' => [
			'en' => 'Detailed inventory of trees and shrubs growing on the area of the rafinery PKN Orlen, together with the removal request',
			'pl' => 'Szczegółowa inwentaryzacja drzew i krzewów wraz z wnioskiem o wycinkę, na terenie Zakładu Produkcyjnego w Płocku.',
			'pt' => 'Inventário detalhado de árvores e arbustos que crescem na área da refinaria PKN Orlen, juntamente com o pedido de remoção',
			'it' => 'Inventario degli alberi e arbusti che crescono sulla zona della raffineria PKN Orlen, insieme con la richiesta di rimozione',
			],
			'investor' => [
			'en' => 'Polish Rafineries (PKN ORLEN Sp.Z.o.o)',
			'pl' => 'PKN ORLEN Sp.Z.o.o',
			'pt' => 'PKN ORLEN Sp.Z.o.o',
			'it' => 'Raffineria Polacca (PKN ORLEN Sp.Zoo)',
			],
			'area' => [
			'en' => '10 ha',
			'pl' => '10 ha',
			'pt' => '10 ha',
			'it' => '10 ettari',
			],
			'link' => ''],
	                //item 4
			[
			'desc' => [
			'en' => 'Trees and shrubs inventory, dz.ew.17 ob.5-05-09',
			'pl' => 'Inwentaryzacja drzew i krzewów, dz.ew.17 ob.5-05-09',
			'pt' => 'Inventário da vegetação.',
			'it' => 'Inventario degli alberi e arbusti',
			],
			'investor' => [
			'en' => 'National Research Center (O.P.I.)',
			'pl' => 'Ośrodek Przetwarzania Informacji-Państwowy Instytut Badawczy',
			'pt' => 'Centro Nacional de Investigação O.P.I.',
			'it' => 'Centro Nazionale delle Ricerche (OPI)',
			],
			'area' => [
			'en' => '5 ha',
			'pl' => '5 ha',
			'pt' => '5 ha',
			'it' => '5 ettari',
			],
			'link' => ''],
		],
		2013 => [
                //item 1
			[
			'desc' => [
			'en' => 'Inventory of the greenery existing on the National Memorial Place in Pecice (dz.ew.641 w Pecicach), geenery management plan, and providing the realization decision form the local Historical Restoration Officer.',
			'pl' => 'Wykonanie inwentaryzacji istniejącej zieleni na Miejscu Pamięci Narodowej (dz.ew.641 w Pęcicach), projektu gospodarki drzewostanem oraz uzgodnienie projektu z Mazowieckim Wojewódzkim Konserwatorem Zabytków.',
			'pt' => 'Inventário da vegetação existente em Memorial National, plano de gestão de vegetação, e fornecamento da decisão sobe o realização de inspector regional do património histórico',
			'it' => 'Inventario del verde esistente sul Memoriale Nazionale a Pecice, piano di gestione di vegetazione',
			],
			'investor' => [
			'en' => 'Municipality of Michalowice',
			'pl' => 'Urząd Gminy Michałowice',
			'pt' => 'Camara Municipal de Michalowice /Polónia',
			'it' => 'Comune di Michalowice',
			],
			'area' => [
			'en' => '5 ha',
			'pl' => '5 ha',
			'pt' => '5 ha',
			'it' => '5 ettari',
			],
			'link' => ''],
	                //item 2
			[
			'desc' => [
			'en' => 'Evaluation about the environmental value with valuation of existing trees (lot 20/20), Zaklad Produkcyjny w Plocku.',
			'pl' => 'Dokumentacja dot. oceny wartości przyrodniczej wraz z wyceną drzew na dz.ew 20/20, Zakład Produkcyjny w Płocku.',
			'pt' => 'Avaliação sobre o valor ambiental com valorização das árvores existentes (lote 20/20).',
			'it' => 'Inventario degli alberi e arbusti con valutazione',
			],
			'investor' => [
			'en' => 'Polish Rafineries (PKN ORLEN Sp.Z.o.o)',
			'pl' => 'PKN Orlen Sp.z.o.o.',
			'pt' => 'PKN Orlen Sp.z.o.o.',
			'it' => 'Raffineria Polacca (PKN ORLEN Sp.Zoo)',
			],
			'area' => [
			'en' => '10 ha',
			'pl' => '10 ha',
			'pt' => '10 ha',
			'it' => '10 ha',
			],
			'link' => ''],		
		],
		2010 => [
                //item 1
			[
			'desc' => [
			'en' => 'Trees and shrubs inventory on the foreground on the brown coal mine in Bogatynia /Poland',
			'pl' => 'Inwentaryzacja zadrzewień na terenie przedpola odkrywki kopalni węgla brunatnego;',
			'pt' => 'Inventário dos árvores e arbustos  em primeiro plano na mina de carvão marrom em Bogatynia / Polónia',
			'it' => 'Inventario degli alberi e arbusti sulla zona della miniera di Bogatynia',
			],
			'investor' => [
			'en' => 'PGE-KWB Turów S.A',
			'pl' => 'PGE-KWB Turów S.A',
			'pt' => 'PGE-KWB Turów S.A',
			'it' => 'PGE-KWB Turów S.A',
			],
			'area' => [
			'en' => '600 ha',
			'pl' => '600 ha',
			'pt' => '600 ha',
			'it' => '600 ettari',
			],
			'link' => ''],
	                //item 2
			[
			'desc' => [
			'en' => 'Trees and shrubs inventory (lot 6/8 ob.07-18), Wisniowa Góra.',
			'pl' => 'Inwentaryzacja zadrzewień na dz.ew 6/8 ob.07-18, Wiśniowa Góra.',
			'pt' => 'Inventário dos árvores e arbustos (lote 6/8 ob.07-18), Wisniowa Góra.',
			'it' => 'Inventario degli alberi e arbusti a Wisniowa Góra',
			],
			'investor' => [
			'en' => 'private person',
			'pl' => 'osoba prywatna',
			'pt' => 'privado',
			'it' => 'privato',
			],
			'area' => [
			'en' => '2 ha',
			'pl' => '2 ha',
			'pt' => '2 ha',
			'it' => '2 ettari',
			],
			'link' => ''],
		
            ],
		];

		return $works;
	}

	public function getProjects() {
		return [
		'header1' => [
		'en' => 'Private Projects',
		'pt' => 'Projetos Privados',
		'pl' => 'Klienci Prywatni',
		'it' => 'Clienti Privati'],
		'header2' => [
		'en' => 'Public Projects & Competitions',
		'pt' => 'Projetos Públicos & Concursos',
		'pl' => 'Zamówienia Publicze i Konkursy',
		'it' => 'Appalti Pubblici e Concorsi'],
		'intro' => [
		'en' => 'Intro about Research of Terra Landscape',
		'pt' => 'Intro about Research of Terra Landscape',
		'pl' => 'Intro about Research of Terra Landscape',
		'it' => 'Intro about Research of Terra Landscape']
		];
	}

	public function getPath($type) {
		if ($type == 'public') {
			return $this->public;
		} elseif ($type == 'front') {
			return $this->front;
		} else {
			return $this->private;
		}
	}

    /**
     * Method to retrive info about projects from files.
     * File conventions. File with description in each language
     * should have name desc_en.txt, desc_pt.txt, desc_pl.txt etc.
     * If $oneProject['desc'] is empty, than no description.
     * If it has a file and it is possible to identify the lang - return. 
     * if it doesn't have current lang, we take en.
     * If it has one file, and has no lang, than no desc.  
     * 
     * Project has:
     * ['dir'] obligatory
     * ['images'] at least one
     * ['desc']
     * ['project_name']
     * ['project_location']
     * ['project_year']
     */
    public function getProjectsData($type, $lang, $baseDir = "") {

    	$structure = $this->processFiles($this->getPath($type), parent::getFiles($baseDir . $this->getPath($type)));

    	if ($structure !== false) {
    		foreach ($structure as $index => $oneProject) {
    			if ((strstr($oneProject['dir'], "../") != FALSE)) {
    				$dir = str_replace("../", "", $oneProject['dir']);
    			} else {
    				$dir = $oneProject['dir'];
    			}

    			if (empty($oneProject['images'])) {
    				continue;
    			}
                //01 to main image.
    			$mainImageIndex = -1;
    			foreach ($oneProject['images'] as $i => $image) {
    				if ((strstr($image, "01.") != FALSE) || (strstr(strtolower($image), "01.") != FALSE) || (strstr($image, "_01.") != FALSE)) {
    					$structure[$index]['main_image'] = $image;
    					$mainImageIndex = $i;
    					break;
    				}
    			}

    			if ($mainImageIndex != -1) {
    				unset($structure[$index]['images'][$mainImageIndex]);
    			}

    			if (!empty($oneProject['desc'])) {

                    $bestMatch = null; //reserved for desc_<lang>.txt
                    $goodMatch = null;
                    $anyMatch = null;
                    foreach ($oneProject['desc'] as $file) {
                        //check if has current $lang desc
                    	if ((strstr($file, "_" . $lang) != FALSE) || (strstr(strtolower($file), "_" . $lang) != FALSE)) {
                    		$bestMatch = $file;
                    	} elseif ((strstr($file, "_en") != FALSE) || (strstr(strtolower($file), "_en") != FALSE)) {
                    		$goodMatch = $file;
                    	} elseif ((strstr(trim($file), "desc") != FALSE) || (strstr(strtolower(trim($file)), "desc") != FALSE)) {
                    		$anyMatch = $file;
                    	}
                    }
                    
                    if ($bestMatch == null && $goodMatch == null && $anyMatch == null) {
                    	unset($structure[$index]['desc']);
                    	continue;
                    }
                    if ($bestMatch != null) {
                    	$structure[$index]['desc'] = file($baseDir . $this->$type . '/' . $dir . '/' . $bestMatch);
                    } elseif ($goodMatch != null) {
                    	$structure[$index]['desc'] = file($baseDir . $this->$type . '/' . $dir . '/' . $goodMatch);
                    } elseif ($anyMatch != null) {
                    	$structure[$index]['desc'] = file($baseDir . $this->$type . '/' . $dir . '/' . $anyMatch);
                    }
                    
                    
                    //content of desc file
                    if (strstr($structure[$index]['desc'][0], 'ProjectName:') != FALSE) {
                    	$structure[$index]['project_name'] = str_replace('ProjectName:', "", $structure[$index]['desc'][0]);
                    	unset($structure[$index]['desc'][0]);
                    }
                    if (strstr($structure[$index]['desc'][1], 'ProjectLocation:') != FALSE) {
                    	$structure[$index]['project_location'] = str_replace('ProjectLocation:', "", $structure[$index]['desc'][1]);
                    	unset($structure[$index]['desc'][1]);
                    }
                    if (strstr($structure[$index]['desc'][2], 'ProjectYear:') != FALSE) {
                    	$structure[$index]['project_year'] = str_replace('ProjectYear:', "", $structure[$index]['desc'][2]);
                    	unset($structure[$index]['desc'][2]);
                    }
                    if (empty(trim($structure[$index]['desc'][3]))) {
                    	unset($structure[$index]['desc'][3]);
                    }
                    
//                    print_r($structure[$index]['desc']);
                    
                    $structure[$index]['description'] = $structure[$index]['desc'];
                    
//                    if($anyMatch != null){
//                        print_r(file($baseDir . $this->$type . '/' . $dir . '/' . $anyMatch));
//                        print '<br><br>';
//                        print_r($structure[$index]['description']);
//                        die;
//                    }
                }
                unset($structure[$index]['desc']);
            }
        }
        
        #usort($structure, 'project_year');
        $structure = array_reverse($structure);
//                    print '<pre>';
//        print_r($structure);
//        print '</pre>';
        return $structure;
    }
    
    

    /**
     * 
     */
    private function processFiles($dir, $dirContent) {

    	$files = [];
    	$curerentDir = "";
    	$dirIndex = 0;
    	foreach ($dirContent as $oneFile) {
    		$file_parts = pathinfo($oneFile);
    		$fileDir = str_replace($dir . '/', "", $file_parts['dirname']);
    		$file = $file_parts['basename'];
            // exclude hidden files/dirs starting with a .; this also excludes the special dirs . and ..
            // exclude files ending with a ~ (vim/nano backup) or # (emacs backup)
            // exclude desktop.ini
    		if ($file === 'desktop.ini' || (substr($file, 0, 1) === '.') || in_array(substr($file, -1), array('~', '#'))) {
    			continue;
    		}

    		$isDesc = false;
    		if ($file === 'desc.txt' || (strstr($file, 'text') != FALSE) || (strstr($file, 'desc') != FALSE)) {
    			$isDesc = true;
    		}

    		$isImage = false;
    		if (in_array(exif_imagetype($oneFile), [1, 2, 3, 6,])) {
    			$isImage = true;
    		}

    		if (empty($curerentDir)) {
    			$curerentDir = $fileDir;
    			$files[$dirIndex] = ['dir' => $fileDir];
    		} elseif ($curerentDir !== $fileDir) {
    			$curerentDir = $fileDir;
    			$dirIndex++;
    			$files[$dirIndex] = ['dir' => $curerentDir];
    		}

    		if ($isImage) {
    			$files[$dirIndex]['images'][] = $file;
    		}
    		if ($isDesc) {
    			$files[$dirIndex]['desc'][] = $file;
    		}
    	}
    	return $files;
    }

}
