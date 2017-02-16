<?php

/*
 * Data for terra website
 * 
 * Author: syl-via@dcc.fc.up.pt
 * 
 */

class TerraLandscape {

    protected $contentDir = "content";
    protected $baseURL = "http://localhost/~sylwia/terra/";#http://terralandscape.eu/";

    public function __construct() {
        
    }

    public function getBaseURL() {
        return $this->baseURL;
    }

    public function getConfig() {
        return
                [
                    'keywords' => 'landscape architecture,architektura krajobrazu, arquitectura paisagista, architecture de paysage,landscape,krajobraz, paysage, paisagista',
                    'author' => 'Agnieszka Olszewska',
                    'title' => 'Terra-Landscape',
                    'intro-text' => [
                'en' => ' "The landscape can express human freedom towards the nature but also it can be a manifestation of nature through the contemplation."',
                'pt' => ' "A Paisagem é um lugar para nascer e morrer ... todo em que cada elemento que a compõem influencia e é influenciado pelos restantes, numa cadeia em permanente movimento, determinada pelo meio e recriada pelo homem” ',
                'pl' => ' "Projektowany krajobraz może być odzwierciedleniem wolności człowieka względem natury, lecz również manifestacją natury poprzez kontemplację"',
                'it' => ' "Il paesaggio può esprimere la libertà dell\'uomo verso la natura, ma può anche essere una manifestazione della natura attraverso la contemplazione."'],
                    'intro-autor' => [
                'en' => 'J.Ritter, 1968',
                'pt' => 'R. Telles, 1992',
                'pl' => 'J. Ritter, 1968',
                'it' => 'J. Ritter, 1968'],
        ];
    }

    public function getTranlatedConfig($lang) {
        $data = [
            'en' => [
                'description' => 'We are a team of experienced landscape architects, who launched their activity in 2009. Since then we\'ve created unique gardens across Portugal, Scotland, Poland, Italy and France. The essence of our design philosophy is to join together high aesthetics, functionality and that certain special spark that just makes you feel good to be there! Our designs always reflect a great respect to the natural habitat and climatic conditions. We offer reasonable prices and an individualized, case-to-case treatment for each and every client. 
'
            ],
            'pt' => [
                'description' => 'Terralandscape é um atelier de arquitectura paisagista recente, com conceitos inovadores e adaptados às necessidades do utente final. Apresenta uma equipa de arquitectos paisagistas em colaboração com arquitectos, engenheiros e biólogos, alargando assim o seu leque de intervenção.',
            ],
            'pl' => [
                'description' => 'Terra-Landscape to firma, zajmująca się szeroko pojętą architekturą krajobrazu. Projektujemy i realizujemy tereny zieleni prywatnej i publicznej, dla klientów prywatnych, gmin i społeczności lokalnych. W zakres prac firmy wchodzą projekty ogrodów, przestrzeni publicznej, parków, zieleni miejskiej, rewaloryzacja obiektów historycznych, inwentaryzacje zadrzewień, land-art oraz pielęgnacja zieleni i usługi ogrodnicze. Nasi projektanci to świetnie wykwalifikowani młodzi ludzie, pragnący przekazać świeże spojrzenie i rozumienie otaczającej przestrzeni. Mamy świadomość, że kształtowanie charakteru miejsca to zadanie, wymagające nie tylko talentu i kreatywności, lecz także odpowiedzialności i pokory. Dlatego nieodzowne jest dla nas projektowanie w myśl filozofii poszanowania natury i człowieka. W naszych projektach wartości intelektualne i estetyczne odgrywają ważną rolę a sztuka idzie w parze z funkcjonalnością. Oprócz praktyki zawodowej prowadzimy również działalność naukową w kierunku badań nad nową metodą projektowania i waloryzacji przestrzeni miejskich.',
            ],
            'it' => [
                'description' => 'Progettiamo e realizziamo aree verdi private e pubbliche, per i privati​​, le comunità locali ed i comuni. L´ambito del nostro lavoro comprende: i progetti di giardini, spazi pubblici, parchi, aree verdi, il restauro di edifici storici, inventari delle aree verdi, land-art, manutenzione di aree verdi e servizi di giardinaggio.I nostri progettisti sono giovani ben qualificati che desiderano dare una nuova prospettiva ed una nuova visione allo spazio circostante. Siamo consapevoli che la definizione del carattere del luogo un compito che richiede non solo il talento e la creatività, ma anche la responsabilità; e l´umiltà. Pertanto è essenziale per noi progettare nel rispetto della natura e l´uomo. Nei nostri progetti, i canoni estetici hanno un ruolo importante ma l’estetica va di pari passo con la funzionalità; è per questo che oltre alla pratica professionale svolgiamo anche un intensa attività scientifica volta alla ricerca di nuovi metodi di progettazione e alla valorizzazione degli spazi urbani.',
        ]];

        return $data[$lang];
    }

    public function loadConfig($lang) {
        return array_merge($this->getConfig(), $this->getTranlatedConfig($lang));
    }

    public function getMainMenu() {
        return [
            '#about' => [
                'en' => 'About',
                'pt' => 'Sobre nos',
                'pl' => 'O nas',
                'it' => 'Chi Siamo'],
            'projects' => [
                'en' => 'Projects',
                'pt' => 'Projetos',
                'pl' => 'Projekty',
                'it' => 'Progetti'],
            '#studio' => [
                'en' => 'Studio',
                'pt' => 'Studio',
                'pl' => 'Studio',
                'it' => 'Studio'],
            'research' => [
                'en' => 'Research',
                'pt' => 'Investigação',
                'pl' => 'Badania',
                'it' => 'Ricerca'],
            '#contact' => [
                'en' => 'Contact',
                'pt' => 'Contactos',
                'pl' => 'Kontakt',
                'it' => 'Contatto']
        ];
    }

    public function getResearchData() {
        return [
            'header' => [
                'en' => 'Research',
                'pt' => 'Investigação',
                'pl' => 'Badania',
                'it' => 'Ricerca'],
            'intro' => [
                'en' => 'Comming Soon!',
                'pt' => 'Comming Soon!',
                'pl' => 'Comming Soon!',
                'it' => 'Comming Soon!'],
            'link' => [
                'en' => 'visit neurolandscape.org',
                'pt' => 'visite neurolandscape.org',
                'pl' => 'odwiedź neurolandscape.org',
                'it' => 'visita neurolandscape.org'
            ]
        ];
    }

    public function getAboutUsData() {
        return [
            'header' => [
                'en' => 'About Us',
                'pt' => 'Sobre Nos',
                'pl' => 'O Nas',
                'it' => 'About Us'],
            'subheader' => [
                'en' => 'Team',
                'pt' => 'Equipa',
                'pl' => 'Zespół',
                'it' => 'Persone']
        ];
    }

    /**
     * Returns content from files 'welcome_<lang>'
     * @param string $lang en|pt|pl|it
     * @return array with key for each language. 
     * Example: 'en' => [paragraphs] 
     */
    public function loadAboutParagraphs($lang, $baseDir = "") {
        $paragraphs = ['We are a team of experienced landscape architects, who launched their activity in 2009. Since then we\'ve created unique gardens across Portugal, Scotland, Poland, Italy and France.
                        ',
            'The essence of our design philosophy is to join together high aesthetics, functionality and that special spark that just makes you feel good to be there!',
            'Our designs always reflect a great respect to the natural habitat and climatic conditions. We offer reasonable prices and an individualized, case-to-case treatment for each and every client.',
            'Enjoy the visit on our website!'];
//        return $paragraphs;
//        print $lang;
//        print __DIR__;
//        print '<br>';
        $files = $this->getFiles($baseDir . $this->contentDir, TRUE, 'txt');

        foreach ($files as $i => $file) {
            if (is_file($file) && strtolower(substr($file, -6, 2)) == $lang) {
                $rawContent = file($file);
            }
        }

        return $rawContent;
//    echo "load dir";
//    echo opendir($contentDir);
//    die;
    }

    public function getHeaderData() {
        $headerData = [
            [
                'img' => '01.jpg',
                'link' => '#',
                'desc' => [
                    'en' => ['title' => 'Beach House Garden', 'place' => 'Praia del Rey, Portugal'],
                    'pt' => ['title' => 'Jardim na praia', 'place' => 'Praia del Rey, Portugal'],
                    'pl' => ['title' => 'Ogród na nadmorskim klifie', 'place' => 'Praia del Rey, Portugalia'],
                    'it' => ['title' => 'Beach House Garden', 'place' => 'Praia del Rey, Portugal']]
            ],
            [
                'img' => '02.jpg',
                'link' => '#',
                'desc' => [
                    'en' => ['title' => 'Tropical garden', 'place' => 'Margate, Florida'],
                    'pt' => ['title' => 'Jardim tropical', 'place' => 'Margate, Florida'],
                    'pl' => ['title' => 'Ogród tropikalny', 'place' => 'Margate, Floryda'],
                    'it' => ['title' => 'Il giardino tropicale', 'place' => 'Margate, Florida']]
            ],
            [
                'img' => '03.jpg',
                'link' => '#',
                'desc' => [
                    'en' => ['title' => 'National Memorial Area', 'place' => 'Pecice, Poland'],
                    'pt' => ['title' => 'Memorial Nacional', 'place' => 'Pecice, Polónia'],
                    'pl' => ['title' => 'Otoczenie Pomnika', 'place' => 'Pęcice, Polska'],
                    'it' => ['title' => 'Memoriale Nazionale', 'place' => 'Pecice, Polonia']]
            ],
            [
                'img' => '04.jpg',
                'link' => '#',
                'desc' => [
                    'en' => ['title' => 'Private garden', 'place' => 'Porto, Portugal'],
                    'pt' => ['title' => 'Jardim privado', 'place' => 'Porto, Portugal'],
                    'pl' => ['title' => 'Ogród prywatny', 'place' => 'Porto, Portugalia'],
                    'it' => ['title' => 'Giardino privato', 'place' => 'Porto, Portugal']]
            ],
            [
                'img' => '05.jpg',
                'link' => '#',
                'desc' => [
                    'en' => ['title' => 'Forest-trees inventory', 'place' => 'Podkarpacie, Poland'],
                    'pt' => ['title' => 'Inventorio da floresta', 'place' => 'Podkarpacie, Polónia'],
                    'pl' => ['title' => 'Inwentaryzacja terenów leśnych', 'place' => 'Podkarpacie, Polska'],
                    'it' => ['title' => 'Inventario degli alberi', 'place' => 'Podkarpacie, Polonia']]
            ],
            [
                'img' => '06.jpg',
                'link' => '#',
                'desc' => [
                    'en' => ['title' => 'Bus Stop Area', 'place' => 'Kozlow, Poland'],
                    'pt' => ['title' => 'Paragem de Autocarro', 'place' => 'Kozlow, Polónia'],
                    'pl' => ['title' => 'Otoczenie Przystanku', 'place' => 'Kozłów, Polska'],
                    'it' => ['title' => 'Bus Stop Area', 'place' => 'Kozlow, Polonia']]
            ],
        ];

        return $headerData;
    }

    public function getHonors() {
        $honors = [
            'subheader' => [
                'en' => 'Honors',
                'pt' => 'Honras',
                'pl' => 'Osiągnięcia ',
                'it' => 'Onori'],
            'data' => [
                2015 => [
                    [
                        'name' => [
                            'en' => '1st prize in a Public Park in Tluszcz design competition',
                            'pl' => 'Pierwsze miejsce w konkursie na opracowanie koncepcji parku miejskiego w Tłuszczu',
                            'pt' => 'Primeiro premio no concurso para proposta de Parque da Cidade do Tluszcz (Polonia) ',
                            'it' => 'Primo premio in un concorso di progettazione di un parco pubblico a Tluszcz / Polonia',
                        ],
                        'link' => 'http://www.tluszcz.bip.net.pl/?a=3839'],
                    [
                        'name' => [
                            'en' => 'Awarded a Polish Government financing for running the bussiness activity',
                            'pl' => 'Dofinansowanie z UP na prowadzenie działalności gospodarczej',
                            'pt' => 'Premiado com um financiamento Governo Polaco para a execução da atividade empresarial',
                            'it' => 'Concessione di un finanziamento del governo polacco per l\'esecuzione dell\'attivita commerciale',
                        ],
                        'link' => ''],
                    [
                        'name' => [
                            'en' => '3DS International Roundup Business Meetup in Porto',
                            'pl' => 'Udział w międzynarodowym spotkaniu dla przedsiębiorców 3DS Roundup w Porto',
                            'pt' => '3DS International Roundup Business Meetup no Porto',
                            'it' => '3DS Internazionale Roundup Business Meetup a Porto',
                        ],
                        'link' => '']
                ],
                2014 => [
                    [
                        'name' => [
                            'en' => '51st International Making Cities Livable Conference on Making Cities Healthy For All, Portland, Oregon',
                            'pl' => 'Udział w międzynarodowej Konferencji Urbanistycznej "Making Cities Liveable" w Portland (USA)',
                            'pt' => 'Conferéncia Internacional "Making Cities Livable" em tornar as cidades saudável para todos, Portland, Oregon',
                            'it' => 'Partecipazione alla Conferenza Internazionale "Making Cities Liveable"; Portland, Oregon\A0',
                        ],
                        'link' => ''],
                    [
                        'name' => [
                            'en' => 'International Conference Beyond Architecture, New Intersections & Connections ; ARCC/EAAE ',
                            'pl' => 'Udział w międzynarodowej Konferencji "Beyond Architecture" organizowanej przez Stowarzyszenie Naukowe dla Architektury ARCC, Honolulu (USA)',
                            'pt' => 'Conferéncia Internacional "Beyond Architecture, New Intersecções e Conexões"; ARCC / EAAE',
                            'it' => 'Partecipazione alla Conferenza Internazionale "Beyond Architecture"; organizzata dall\'Associazione Scientifica per \'Architettura ARCC, Honolulu/Stati Uniti d\'America',
                        ],
                        'link' => ''],
                    [
                        'name' => [
                            'en' => 'Publications in Anteprojectos Architecture & Construction magazine',
                            'pl' => 'Publikacje w magazynie architektoniczno-budowlanym "Anteprojectos"',
                            'pt' => 'Publicações na revista Anteprojectos ',
                            'it' => 'Pubblicazioni in "Anteprojectos", rivista di architettura e costruzioni',
                        ],
                        'link' => 'http://www.anteprojectos.com.pt/empresa/22396/terra-landscape/'],
                ],
                2013 => [
                    [
                        'name' => [
                            'en' => 'International Conference Spaces and Flows – Urban and Extra Urban Studies , Amsterdam/ Netherlands',
                            'pl' => 'Międzynarodowa Konferencja Badań Urbanistycznych "Spaces and Flows", Amsterdam',
                            'pt' => 'Conferéncia Internacional "Spaces and Flows" Estudos Urbanos e Extra-Urbanos, Amsterdam / Holanda',
                            'it' => 'Conferenza Internazionale "Spaces and Flows, Urban and Extra Urban Studies&" Amsterdam / Paesi Bassi',
                        ],
                        'link' => ''],
                    [
                        'name' => [
                            'en' => 'International Conference ECLAS "Specifics" Hamburg/ Germany ',
                            'pl' => 'Międzynarodowa Konferencja ECLAS, Hamburg',
                            'pt' => 'Conferencia Internacional ECLAS, Hamburg',
                            'it' => 'Conferenza Internationale ECLAS "Specifics"; Amburgo / Germania',
                        ],
                        'link' => ''],
                    [
                        'name' => [
                            'en' => 'II CAN-2nd Cognitive and Affective Neuropsychophysiology Summer School: Acquisition, processing and analysis of EEG signal ',
                            'pl' => 'Intensywny Kurs Poznawczej i Afektywnej Neuropsycho-fizjologii, pozyskiwanie, przetwarzanie i analiza sygnału EEG',
                            'pt' => 'II CAN, Neuropsicofisiologia Cognitivo e Afetivo, Curso Intensivo de Verão: Aquisição, processamento e analise de sinal EEG ',
                            'it' => 'II CAN-2nd Cognitive and Affective Neuropsychophysiology Summer School: acquisizione, elaborazione e analisi dei segnali EEG',
                        ],
                        'link' => ''],
                    [
                        'name' => [
                            'en' => 'Emotiv EPOC Headset Workshop – Laboratory of Neuropsychophysiology, Faculty of Psychology and Education Sciences, University of Porto',
                            'pl' => 'Kurs pozyskiwania, przetwarzania i analizowania sygnału EEG pozyskanego przez sprzęt EMOTIV EPOC',
                            'pt' => 'Emotiv EPOC, Um workshop no Laboratório de Neuropsicofisiologia Faculdade de Psicologia e de Ciencias da Educação da Universidade do Porto',
                            'it' => 'Emotiv EPOC Headset Workshop; Laboratory of Neuropsychophysiology, Facolta di Psicologia e Scienze della Formazione, Universit&#224; di Porto',
                        ],
                        'link' => '']],
                2012 => [
                    //item 1
                    [
                        'name' => [
                            'en' => 'Award of the Doctoral Scholarship from Portuguese Foundation for Science and Technology',
                            'pl' => 'Przyznanie stypendium doktoranckiego przez Portugalską Fundację dla Nauki i Technologii (FCT), na badania w dziedzinie architektury krajobrazu i neuro-psycho fizjologii',
                            'pt' => 'Bolsa para investigação individual de doutoramento (FCT) ',
                            'it' => 'Borsa di studio per il dottorato dalla Fondazione portoghese per la Scienza e la Tecnologia',
                        ],
                        'link' => ''],
                    //item 1	
                   
                ],
                2011 => [
                    [
                        'name' => [
                            'en' => 'Completion of European EU Program for Young Entrepreneurs (EYE) ',
                            'pl' => 'Półroczna współpraca biznesowa z portugalskim biurem architektury krajobrazu Antonio Miguel Pinheiro Lda. w ramach europejskiego programu EYE dla młodych przedsiębiorców',
                            'pt' => 'Programa europeu para jovens empreendedores (EYE) ',
                            'it' => 'Completamento del Programma Europeo UE per giovani imprenditori (EYE)',
                        ],
                        'link' => ''],
                    [
                        'name' => [
                            'en' => 'Recomendation Card for starting the company by Portuguese Government (ACIDI/PEI) ',
                            'pl' => 'Karta referencji dla biznesu przyznana przez Ministerstwo Gospodarki (Portugalia/ ACIDI/PEI) ',
                            'pt' => 'Cartão de recomendação de negocio (ACIDI/PEI) ',
                            'it' => 'Carta di raccomandazione del governo portoghese per iniziare l´azienda (ACIDI/PEI)',
                        ],
                        'link' => ''],
                    [
                        'name' => [
                            'en' => 'Completion of the course for foreign entrepreneurs (ACIDI/PEI)',
                            'pl' => 'Ukończenie kursu dla zagranicznych przedsiebiorców w Portugalii, (CEI)',
                            'pt' => 'Formação para Empreendedorismo Imigrante (CEI) ',
                            'it' => 'Completamento del corso per imprenditori stranieri (ACIDI / PEI progetto (Promocao del Empreendedorismo Imigrante)',
                        ],
                        'link' => ''],
                    [
                        'name' => [
                            'en' => 'European Competition, and design of iPolis_Smart City id Alleroed Denmark',
                            'pl' => 'Konkurs EUROPAN na projekt inteligentnego osiedla w Danii (Alleroed) ',
                            'pt' => 'Concurso EUROPAN de projecto de cidade inteligente Alleroed /Dinamarca ',
                            'it' => 'Concorso europeo, e la progettazione di iPolis_Smart Città id Alleroed Danimarca',
                        ],
                        'link' => ''],
                    [
                        'name' => [
                            'en' => 'Workshops with Prof. Carls Steinitz on Master Plan of Coimbra city/Portugal',
                            'pl' => 'Warsztaty z Prof. Carlem Steinitz z Uniwersytetu Harwardzkiego przy opracowaniu projektu dla miasta Coimbra w Portugalii',
                            'pt' => 'Curso Intensivo com Prof. Carl Steinitz sobre plano geral para a cidade da Coimbra',
                            'it' => 'Workshop con Prof. Carl Steinitz sul Master Plan della città di Coimbra / Portogallo',
                        ],
                        'link' => ''],
                    [
                        'name' => [
                            'en' => 'Voluntary jobs for gardens in National Art Museum Soares dos Reis Porto/Portugal',
                            'pl' => 'Prace przy renowacji ogrodów historycznych Narodowego Muzeum Sztuki Soares dos Reis, Porto.',
                            'pt' => 'Volontariado nos jardins the Museu Nacional Soares dos Reis',
                            'it' => 'Lavoro di volontariato per i giardini del National Art Museum Soares dos Reis, Porto / Portogallo',
                        ],
                        'link' => '']
                ],
                2010 => [
                    [
                        'name' => [
                            'en' => 'Award in the National Business-Plan Competition organized by Innovation Business Creator, AIP & Ministry of Higher Education/Poland',
                            'pl' => 'Terra-Landscape laureatem konkursu Kreatora Innowacyjnosci na biznesplany',
                            'pt' => 'Concorso Nacional de Inovação em Business, AIP, Ministerio de Educação (Polónia) ',
                            'it' => 'Concorso Nazionale per Business Innovation Creatore, AIP e Ministero dell´istruzione superiore / Polonia',
                        ],
                        'link' => ''],
                    [
                        'name' => [
                            'en' => 'Blue Ocean Business Strategy training',
                            'pl' => 'Szkolenie z zakresu nowoczesnych strategii biznesowych Blue Ocean Bussiness Strategy',
                            'pt' => 'Formação Blue Ocean Business Strategy',
                            'it' => 'Blue Ocean Business Strategy training',
                        ],
                        'link' => ''],
                    [
                        'name' => [
                            'en' => 'Business communication training organized by A.I.P.',
                            'pl' => 'Szkolenie z Komunikacji w Biznesie w ramach AIP',
                            'pt' => 'Formação em Comunicação em Bussiness, A.I.P',
                            'it' => 'Business communication training organizzato da AIP',
                        ],
                        'link' => ''],
                    [
                        'name' => [
                            'en' => 'Interview for pracuj.pl about developing the company',
                            'pl' => 'Wywiad dla portalu pracuj.pl na temat młodych przedsiębiorców',
                            'pt' => 'Entrevista para o portal pracuj.pl',
                            'it' => 'Intervista per il portale pracuj.pl sullo sviluppo della società',
                        ],
                        'link' => 'http://stary.pracuj.pl/student-rynek-pracy-w-polsce-studenci-biznesmeni.htm#top'],
                     [
                        'name' => [
                            'en' => 'Interview for bankier.pl about developing the company',
                            'pl' => 'Wywiad dla portalu bankier.pl na temat początków Terra-Landscape',
                            'pt' => 'Entrevista para o portal bankier.pl',
                            'it' => 'Intervista per il portale bankier.pl sullo sviluppo della società',
                        ],
                        'link' => 'http://www.bankier.pl/wiadomosc/Kobiecy-pomysl-na-biznes-projektowanie-przestrzeni-miejskich-2417124.html'],
                    [
                        'name' => [
                            'en' => 'Warsaw City Hall competition for design of Trzech Krzyży Square',
                            'pl' => 'Konkurs Urzędu Miasta Stołecznego Warszawy na koncepcję Placu Trzech Krzyży w Warszawie',
                            'pt' => 'Concorso de Camara Municipal da Varsovia para projeto da praça de Trzech Krzyzy',
                            'it' => 'Warsaw City Hall concorso per la progettazione di Piazza Trzech Krzyzy',
                        ],
                        'link' => '']
                ],
                2009 => [
                    [
                        'name' => [
                            'en' => 'Audience award in the Land-Art Competition Gdynia-Kolibki',
                            'pl' => 'Pierwsza nagroda publiczności w konkursie land-artowym "Rzeźba w krajobrazie", Gdynia-Kollibki',
                            'pt' => 'Promeiro prazo na competição Land-Art , Gdynia-Kolibki',
                            'it' => 'Concorso Land-Art, Gdynia-Kolibki',
                        ],
                        'link' => '']
                    ,
                    [
                        'name' => [
                            'en' => 'Rewards for a gardening, designing work for O.S.P Oblasy',
                            'pl' => 'Specjalne podziękowania za współpracę z O.S.P Oblasy',
                            'pt' => 'Premio de projeto di jardim , O.S.P Oblasy',
                            'it' => 'Premio per progettazione di giardini per TSO Oblasy',
                        ],
                        'link' => '']
                    , [
                        'name' => [
                            'en' => 'International Intensive Course about Forest Recreational Designing, Bragança/Portugal',
                            'pl' => 'Letni intensywny kurs projektowania w zakresie turystyki i rekreacji w Parku Montesinho, Bragança/Portugal',
                            'pt' => 'Curso Intensivo de verão, Desenvolvimento do projeto recreacional do Parque Natural de Montesinho, Bragança/ Portugal',
                            'it' => 'Corso intensivo internazionale su Forest Recreational Progettazione Bragança / Portogallo',
                        ],
                        'link' => '']
                ],
                2008 => [
                    [
                        'name' => [
                            'en' => 'Recommendation from Stone, Wood, Water & Light, Edinburgh/Scotland',
                            'pl' => 'Rekomendacje po udanej współpracy z firmą Stone, Wood, Water& Light, Edinburgh /Scotland',
                            'pt' => 'Recomendação de Stone, Wood, Water & Light, Edimburgo/ Escotia',
                            'it' => 'Raccomandazione da "Pietra, Legno, Acqua & Chiaro, Edinburgh / Scozia',
                        ],
                        'link' => '']
                    , [
                        'name' => [
                            'en' => 'Volunteering landscaping in Seyðisfjörður / Iceland',
                            'pl' => 'Wolontariackie prace w krajobrazie na terenach fiordów wschodnich, Seyðisfjörður / Islandia',
                            'pt' => 'Volontariado na Islandia, fiordes de oriente, Seyðisfjörður / Iceland',
                            'it' => 'Volontariato paesaggio in Islanda',
                        ],
                        'link' => '']],
                2007 => [
                    [
                        'name' => [
                            'en' => 'Recommendation from Mike Hyatt Landscape Architects, Glasgow/Scotland',
                            'pl' => 'Rekomendacje po udanej wspólpracy z Mike Hyatt Landscape Architects, Glasgow/Scotland',
                            'pt' => 'Recomendação de Mike Hyatt Landscape Architects, Glasgow / Escotia',
                            'it' => 'Raccomandazione da Mike Hyatt Landscape Architects, Glasgow / Scozia',
                        ],
                        'link' => '']
                    , [
                        'name' => [
                            'en' => 'Half Life - Landscape Art Event/Scotland',
                            'pl' => 'Half Life - Landscape Art Event/Szkocja',
                            'pt' => 'Half-Life - Evento da Arte do Paisagem / Escotia',
                            'it' => 'Half Life - Art Landscape Evento / Scozia',
                        ],
                        'link' => 'http://nva.org.uk/artwork/half-life/']
                ]]
        ];

        return $honors;
    }

    public function getStudioData() {
        return [
            'en' => 'Studio',
            'pt' => 'Studio',
            'pl' => 'Studio',
            'it' => 'Studio'];
    }

    public function getTeam() {
        return [
            'subheader' => [
                'en' => 'Team',
                'pt' => 'Equipa',
                'pl' => 'Zespół',
                'it' => 'Team'],
            'person' => [
                'Agnieszka Anna Olszewska' => [
                    'en' => [
                        'Master in Landscape Architecture, Warsaw University of Life Sciences',
                        'Doctoral program on Landscape Architecture and Urban Ecology, University of Porto/Portugal',
                        'Specialization: Contemplative landscapes, Landscape Perception, Environmental Psychology, Cognitive Neuroscience'
                    ],
                    'pt' => [
                        'Mestrado em Arquitectura Paisagista, Warsaw University of Life Sciences;',
                        'Doutoramento em Arquitectura Paisagista e Ecologia Urbana, Universidade do Porto',
                        'Teoria de design, Psicologia ambiental, Neurociencias'
                    ],
                    'pl' => [
                        'Studia inżynierskie i magisterskie na kierunku Architektura Krajobrazu, SGGW, Warszawa',
                        'Doktorat na kierunku Architektury Krajobrazu i Ekologii Miasta, Uniwersytet w Porto, Portugalia',
                        'Specjalizacja: Teoria projektowania, Percepcja Krajobrazu, Psychologia Środowiskowa, Neuro-psychologia'
                    ],
                    'it' => [
                        'Laurea con master in Architettura del Paesaggio, Warsaw University of Life Sciences',
                        'Dottorato in Architettura del Paesaggio ed Ecologia Urbana, Università di Porto / Portogallo',
                        'Teoria del Design, Percezione del Paesaggio, Psicologia Ambientale '
                    ]],
                'Agnieszka Chadała' => [
                    'en' => [
                        'Master of Science in Engineering of Environmental Development, Planning Management, Warsaw University of Technology',
                        'Engineer in Landscape Architecture, Warsaw University of Life Sciences',
                        'Specialization: Landscape Planning, Landscape Assessment, Dendrology'
                    ],
                    'pt' => [
                        'Mestrado em Ordenamento de Território, Universidade Politécnico da Varsóvia',
                        'Licenciatura em Arquitectura Paisagista, Warsaw University of Life Scieces',
                        'Ordenameno do Território, Analises ambientais, Dendrologia'
                    ],
                    'pl' => [
                        'Studia wyższe inżynierskie i magisterskie na kierunku Gospodarka Przestrzenna Politechniki Warszawskiej',
                        'Studia inżynierskie na kierunku Architektura Krajobrazu SGGW, Warszawa',
                        'Specjalizacja: Gospodarka Przestrzenna; Ekspertyzy i Opracowania przyrodnicze'
                    ],
                    'it' => [
                        'Laurea con master in Pianificazione territoriale, Warsaw University of Technology',
                        'Laurea in Architettura del Paesaggio, Warsaw University of Life Sciences',
                        'Progettazione del Paesaggio, Dendrologia'
                    ]
                ]
            ]
        ];
    }

    public function getContact() {
        return [
            'address' => [
                'en' => 'Pony Express<br>P.O. Box 266851<br>Weston Florida<br>U.S. 33326',
                'pt' => 'Rua da Povoa 569, 1 esq,<br>4000-399 Porto,<br> Portugal',
                'pl' => 'os. Rosochy 79 lok. 15, <br>Ostrowiec Św.,<br> Polska',
                'it' => 'os. Rosochy 79 lok. 15,<br>Ostrowiec Św.,<br> Polonia'],
            'telefone' => [
                'en' => '(+888) 913-2489',
                'pt' => '(+351) 910 159 926',
                'pl' => '(+48) 510 650 248',
                'it' => '(+48) 510 650 248 <br>(+39) 342 389 00 93'],
            'mail' => 'info@terralandscape.eu',
            'header' => [
                'en' => 'Let´s Get In Touch!',
                'pt' => 'Encontre Nos!',
                'pl' => 'Skontaktuj sie z nami!',
                'it' => 'Let\'s Get In Touch!'],
            'subheader' => [
                'en' => 'Ready to start your next project with us? That\'s great! Give us a call or send us an email and we will get back to you as soon as possible!',
                'pt' => 'Pronto para começar o seu próximo projeto conosco? Ótimo! Liga-nos ou envia-nos um email, vamos voltar para você o mais rapidamente possível!',
                'pl' => 'Gotowi, aby rozpocząć współpracę z nami? To wspaniale! Zadzwoń do nas lub wyślij nam e-mail, a my skontaktujemy się z Tobą tak szybko, jak to możliwe!',
                'it' => '']
        ];
    }

    public function getSocial() {
        return [
            'header' => [
                'en' => 'Connect With Us on Social Media!',
                'pt' => 'Siga-nos nas redes sociais!',
                'pl' => 'Połącz się z nami w mediach społecznościowych!',
                'it' => 'Connect With Us!'],
            'subheader' => [
                'en' => 'Ready to start your next project with us? That\'s great! Give us a call or send us an email and we will get back to you as soon as possible!',
                'pt' => '',
                'pl' => '',
                'it' => ''],
            'data' => [
                'facebook' => [
                    'active' => true,
                    'icon' => 'fa fa-facebook',
                    'link' => 'https://www.facebook.com/Terra-Landscape-134571073273121/?ref=aymt_homepage_panel',
                    'title' => [
                        'en' => 'Like our fanpage!',
                        'pt' => 'Faça Like!',
                        'pl' => 'Polub nasz fanpage!',
                        'it' => 'Like!']],
                'facebook1' => [
                    'active' => true,
                    'icon' => 'fa fa-facebook',
                    'link' => 'https://www.facebook.com/Inwentaryzacja-drzew-i-krzew%C3%B3w-906821756078049/?ref=hl',
                    'title' => [
                        'en' => 'Like our trees fanpage!',
                        'pt' => 'Faça Like!',
                        'pl' => 'Polub nasz dendrologiczny fanpage!',
                        'it' => 'Like!']],
                'skype' => [
                    'active' => FALSE,
                    'icon' => 'fa fa-skype',
                    'link' => '',
                    'title' => [
                        'en' => 'Connect With Us!',
                        'pt' => 'Connect With Us!',
                        'pl' => 'Connect With Us!',
                        'it' => 'Connect With Us!']],
                'google-plus' => [
                    'active' => false,
                    'icon' => 'fa fa-google-plus',
                    'link' => '',
                    'title' => [
                        'en' => 'Connect With Us!',
                        'pt' => 'Connect With Us!',
                        'pl' => 'Connect With Us!',
                        'it' => 'Connect With Us!']],
                'houzz' => [
                    'active' => true,
                    'icon' => 'fa fa-houzz',
                    'link' => 'http://www.houzz.com/pro/info4916/__public',
                    'title' => [
                        'en' => 'See our Houzz Profile!',
                        'pt' => 'O nosso Houzz profile!',
                        'pl' => 'Nasz profil Houzz!',
                        'it' => 'Houzz!']]
            ]
        ];
    }

    /**
     * Recursively walks through a directory and returns all containing files
     * matching the specified file extension
     *
     * @param  string $directory     start directory
     * @param  string $fileExtension return files with the given file extension
     *     only (optional)
     * @param  int    $order   0 for ascending order, and 1 for descending order
     * @return array                 list of found files
     */
    protected function getFiles($directory, $onlyCurrentFiles = false, $fileExtension = '', $order = 0) {
        $directory = rtrim($directory, '/');
        $result = array();
        // scandir() reads files in alphabetical order
        $files = scandir($directory, $order);
        $fileExtensionLength = strlen($fileExtension);
        if ($files !== false) {
            foreach ($files as $file) {
                // exclude hidden files/dirs starting with a .; this also excludes the special dirs . and ..
                // exclude files ending with a ~ (vim/nano backup) or # (emacs backup)
                if ((substr($file, 0, 1) === '.') || in_array(substr($file, -1), array('~', '#'))) {
                    continue;
                }
                if (is_dir($directory . '/' . $file) && $onlyCurrentFiles == FALSE) {
                    // get files recursively
                    $result = array_merge($result, $this->getFiles($directory . '/' . $file, $fileExtension, $order));
                } elseif (empty($fileExtension) || (substr($file, -$fileExtensionLength) === $fileExtension)) {
                    $result[] = $directory . '/' . $file;
                }
            }
        }
        return $result;
    }

}