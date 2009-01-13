<?php

/**
 * Polish (Poland) language pack
 * @package sapphire
 * @subpackage i18n
 */

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(array_key_exists('pl_PL', $lang) && is_array($lang['pl_PL'])) {
	$lang['pl_PL'] = array_merge($lang['en_US'], $lang['pl_PL']);
} else {
	$lang['pl_PL'] = $lang['en_US'];
}

$lang['pl_PL']['AdvancedSearchForm']['ALLWORDS'] = 'Wszystkich Słów';
$lang['pl_PL']['AdvancedSearchForm']['ATLEAST'] = 'Co Najmniej Jednego Ze Słów';
$lang['pl_PL']['AdvancedSearchForm']['EXACT'] = 'Dokładnego Wyrażenia';
$lang['pl_PL']['AdvancedSearchForm']['FROM'] = 'Z';
$lang['pl_PL']['AdvancedSearchForm']['GO'] = 'Idź';
$lang['pl_PL']['AdvancedSearchForm']['LASTUPDATED'] = 'Daty ostatniej edycji';
$lang['pl_PL']['AdvancedSearchForm']['LASTUPDATEDHEADER'] = 'OSTATNIE EDYTOWANE';
$lang['pl_PL']['AdvancedSearchForm']['PAGETITLE'] = 'Tytuł strony';
$lang['pl_PL']['AdvancedSearchForm']['RELEVANCE'] = 'Trafności';
$lang['pl_PL']['AdvancedSearchForm']['SEARCHBY'] = 'SZUKAJ WG';
$lang['pl_PL']['AdvancedSearchForm']['SORTBY'] = 'SORTUJ WYNIKI WG';
$lang['pl_PL']['AdvancedSearchForm']['TO'] = 'Do';
$lang['pl_PL']['AdvancedSearchForm']['WITHOUT'] = 'Bez Słów';
$lang['pl_PL']['BankAccountField']['VALIDATIONJS'] = 'Wpisz prawidłowy numer konta bankowego';
$lang['pl_PL']['BasicAuth']['ENTERINFO'] = 'Wprowadź username i hasło';
$lang['pl_PL']['BasicAuth']['ERRORNOTADMIN'] = 'Ten użytkownik nie jest administratorem';
$lang['pl_PL']['BasicAuth']['ERRORNOTREC'] = 'Nie istnieje taki username/hasło';
$lang['pl_PL']['BBCodeParser']['ALIGNEMENT'] = 'Wyrównanie';
$lang['pl_PL']['BBCodeParser']['ALIGNEMENTEXAMPLE'] = 'wyrównany w prawo';
$lang['pl_PL']['BBCodeParser']['BOLD'] = 'Pogrubiony tekst';
$lang['pl_PL']['BBCodeParser']['BOLDEXAMPLE'] = 'Pogrubienie';
$lang['pl_PL']['BBCodeParser']['CODE'] = 'Blok kodu';
$lang['pl_PL']['BBCodeParser']['CODEDESCRIPTION'] = 'Nieformatowany blok kodu';
$lang['pl_PL']['BBCodeParser']['CODEEXAMPLE'] = 'Blok kodu';
$lang['pl_PL']['BBCodeParser']['COLORED'] = 'Kolorowy tekst';
$lang['pl_PL']['BBCodeParser']['COLOREDEXAMPLE'] = 'niebieski tekst';
$lang['pl_PL']['BBCodeParser']['EMAILLINK'] = 'Link e-mail';
$lang['pl_PL']['BBCodeParser']['EMAILLINKDESCRIPTION'] = 'Stwórz link do adresu e-mail';
$lang['pl_PL']['BBCodeParser']['IMAGE'] = 'Obrazek';
$lang['pl_PL']['BBCodeParser']['IMAGEDESCRIPTION'] = 'Pokaż obrazek w swoim poście';
$lang['pl_PL']['BBCodeParser']['ITALIC'] = 'Kursywa';
$lang['pl_PL']['BBCodeParser']['ITALICEXAMPLE'] = 'Kursywa';
$lang['pl_PL']['BBCodeParser']['LINK'] = 'Link do strony';
$lang['pl_PL']['BBCodeParser']['LINKDESCRIPTION'] = 'Link do innej strony lub URL';
$lang['pl_PL']['BBCodeParser']['STRUCK'] = 'Wykreślony tekst';
$lang['pl_PL']['BBCodeParser']['STRUCKEXAMPLE'] = 'Wykreślenie';
$lang['pl_PL']['BBCodeParser']['UNDERLINE'] = 'Podkreślony tekst';
$lang['pl_PL']['BBCodeParser']['UNDERLINEEXAMPLE'] = 'Podkreślenie';
$lang['pl_PL']['BBCodeParser']['UNORDERED'] = 'Nienumerowana lista';
$lang['pl_PL']['BBCodeParser']['UNORDEREDDESCRIPTION'] = 'Nienumerowana lista';
$lang['pl_PL']['BBCodeParser']['UNORDEREDEXAMPLE1'] = 'nienumerowany element 1';
$lang['pl_PL']['BBCodeParser']['UNORDEREDEXAMPLE2'] = 'nienumerowany element 2';
$lang['pl_PL']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'Zmieniłeś hasło na';
$lang['pl_PL']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'Teraz możesz używać następujących danych do logowania się:';
$lang['pl_PL']['ChangePasswordEmail.ss']['EMAIL'] = 'Email';
$lang['pl_PL']['ChangePasswordEmail.ss']['HELLO'] = 'Cześć';
$lang['pl_PL']['ChangePasswordEmail.ss']['PASSWORD'] = 'Hasło';
$lang['pl_PL']['CollectionController_Results.ss']['NEXT'] = 'Następne';
$lang['pl_PL']['CollectionController_Results.ss']['NORESULTSFOUND'] = 'Nie znaleziono żadnych rekordów';
$lang['pl_PL']['CollectionController_Results.ss']['PREV'] = 'Poprzednie';
$lang['pl_PL']['CollectionController_Results.ss']['RESULTS'] = 'Wyniki';
$lang['pl_PL']['ComplexTableField']['CLOSEPOPUP'] = 'Zamknij Okienko';
$lang['pl_PL']['ComplexTableField.ss']['ADDITEM'] = 'Dodaj';
$lang['pl_PL']['ComplexTableField.ss']['CSVEXPORT'] = 'Eksportuj do CSV';
$lang['pl_PL']['ComplexTableField.ss']['NOITEMSFOUND'] = 'Brak znalezionych pozycji';
$lang['pl_PL']['ComplexTableField.ss']['SORTASC'] = 'Sortuj rosnąco';
$lang['pl_PL']['ComplexTableField.ss']['SORTDESC'] = 'Sortuj malejąco';
$lang['pl_PL']['ComplexTableField']['SUCCESSADD'] = 'Dodano %s %s %s';
$lang['pl_PL']['ComplexTableField']['SUCCESSEDIT'] = 'Zapisano %s %s %s';
$lang['pl_PL']['ComplexTableField_popup.ss']['NEXT'] = 'Następny';
$lang['pl_PL']['ComplexTableField_popup.ss']['PREVIOUS'] = 'Poprzedni';
$lang['pl_PL']['CompositeDateField']['DAY'] = 'Dzień';
$lang['pl_PL']['CompositeDateField']['DAYJS'] = 'dzień';
$lang['pl_PL']['CompositeDateField']['MONTH'] = 'Miesiąc';
$lang['pl_PL']['CompositeDateField']['MONTHJS'] = 'miesiąc';
$lang['pl_PL']['CompositeDateField']['VALIDATIONJS1'] = 'Upewnij się, że ustawiłeś';
$lang['pl_PL']['CompositeDateField']['VALIDATIONJS2'] = 'poprawnie';
$lang['pl_PL']['CompositeDateField']['YEARJS'] = 'rok';
$lang['pl_PL']['ConfirmedPasswordField']['ATLEAST'] = 'Hasła muszą mieć co najmniej %s znaków.';
$lang['pl_PL']['ConfirmedPasswordField']['BETWEEN'] = 'Hasła muszą mieć długość od %s do %s znaków. ';
$lang['pl_PL']['ConfirmedPasswordField']['HAVETOMATCH'] = 'Hasła muszą się zgadzać.';
$lang['pl_PL']['ConfirmedPasswordField']['LEASTONE'] = 'Hasła muszą zawierać co najmniej jedną cyfrę i jeden znak alfanumeryczny.';
$lang['pl_PL']['ConfirmedPasswordField']['MAXIMUM'] = 'Hasła muszą mieć co najwyżej %s znaków.';
$lang['pl_PL']['ConfirmedPasswordField']['NOEMPTY'] = 'Hasła nie mogą być puste.';
$lang['pl_PL']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = 'Musisz zalogować się za pomocą swojego hasła do CMSa, aby obejrzeć brudnopis i zarchiwizowaną treść. <a href="%s">Kliknij tutaj aby powrócić do opublikowanej strony.</a>';
$lang['pl_PL']['Controller']['FILE'] = 'Plik';
$lang['pl_PL']['Controller']['IMAGE'] = 'Obraz';
$lang['pl_PL']['CreditCardField']['FIRST'] = 'pierwszy';
$lang['pl_PL']['CreditCardField']['FOURTH'] = 'czwarty';
$lang['pl_PL']['CreditCardField']['SECOND'] = 'drugi';
$lang['pl_PL']['CreditCardField']['THIRD'] = 'trzeci';
$lang['pl_PL']['CreditCardField']['VALIDATIONJS1'] = 'Upewnij się, że wpisałeś';
$lang['pl_PL']['CreditCardField']['VALIDATIONJS2'] = 'numer karty kredytowej poprawnie.';
$lang['pl_PL']['CurrencyField']['CURRENCYSYMBOL'] = '$';
$lang['pl_PL']['CurrencyField']['VALIDATIONJS'] = 'Wpisz poprawną wartość walutową.';
$lang['pl_PL']['Date']['AGO'] = 'temu';
$lang['pl_PL']['Date']['AWAY'] = 'temu';
$lang['pl_PL']['Date']['DAY'] = 'dzień';
$lang['pl_PL']['Date']['DAYS'] = 'dni';
$lang['pl_PL']['Date']['HOUR'] = 'godzina';
$lang['pl_PL']['Date']['HOURS'] = 'godziny';
$lang['pl_PL']['Date']['MIN'] = 'min';
$lang['pl_PL']['Date']['MINS'] = 'minuty';
$lang['pl_PL']['Date']['MONTH'] = 'miesiąc';
$lang['pl_PL']['Date']['MONTHS'] = 'miesiące';
$lang['pl_PL']['Date']['SEC'] = 'sekunda';
$lang['pl_PL']['Date']['SECS'] = 'sekundy';
$lang['pl_PL']['Date']['YEAR'] = 'rok';
$lang['pl_PL']['Date']['YEARS'] = 'lata';
$lang['pl_PL']['DateField']['NODATESET'] = 'Brak ustawionej daty';
$lang['pl_PL']['DateField']['NOTSET'] = 'nie ustawiono';
$lang['pl_PL']['DateField']['TODAY'] = 'dzisiaj';
$lang['pl_PL']['DateField']['VALIDATIONJS'] = 'Wpisz poprawną datę (DD-MM-RRRR).';
$lang['pl_PL']['DateField']['VALIDDATEFORMAT'] = 'Proszę podać prawidłowy format daty (DD/MM/RRRR).';
$lang['pl_PL']['DMYDateField']['VALIDDATEFORMAT'] = 'Wpisz poprawną datę (DD-MM-RRRR).';
$lang['pl_PL']['DropdownField']['CHOOSE'] = '(wybierz)';
$lang['pl_PL']['EmailField']['VALIDATION'] = 'Wprowadź adres e-mail';
$lang['pl_PL']['EmailField']['VALIDATIONJS'] = 'Wpisz adres e-mail.';
$lang['pl_PL']['ErrorPage']['400'] = '400 - Nieprawidłowe zapytanie';
$lang['pl_PL']['ErrorPage']['401'] = '401 - Nieautoryzowany Dostęp';
$lang['pl_PL']['ErrorPage']['403'] = '403 - Zabroniony';
$lang['pl_PL']['ErrorPage']['404'] = '404 - Nie Znaleziono';
$lang['pl_PL']['ErrorPage']['405'] = '405 - Niedozwolona Metoda';
$lang['pl_PL']['ErrorPage']['406'] = '406 - Niedozwolone';
$lang['pl_PL']['ErrorPage']['407'] = '407 - Wymagane Uwierzytelnienie do Serwera Proxy';
$lang['pl_PL']['ErrorPage']['408'] = '408 - Koniec czasu oczekiwania na żądanie';
$lang['pl_PL']['ErrorPage']['409'] = '409 - Konflikt';
$lang['pl_PL']['ErrorPage']['410'] = '410 - Zniknął (usunięto)';
$lang['pl_PL']['ErrorPage']['411'] = '411 - Wymagana Długość';
$lang['pl_PL']['ErrorPage']['412'] = '412 - Warunek wstępny nie może być spełniony';
$lang['pl_PL']['ErrorPage']['413'] = '413 - Encja zapytania zbyt długa';
$lang['pl_PL']['ErrorPage']['414'] = '414 - Adres URI zapytania zbyt długi';
$lang['pl_PL']['ErrorPage']['415'] = '415 - Nieznany sposób żądania';
$lang['pl_PL']['ErrorPage']['416'] = '416 - Zakres bajtowy podany w zapytaniu nie do obsłużenia';
$lang['pl_PL']['ErrorPage']['417'] = '417 - Oczekiwana wartość nie do zwrócenia';
$lang['pl_PL']['ErrorPage']['500'] = '500 - Wewnętrzny błąd serwera';
$lang['pl_PL']['ErrorPage']['501'] = '501 - Nie zaimplementowano';
$lang['pl_PL']['ErrorPage']['502'] = '502 - Błąd bramy';
$lang['pl_PL']['ErrorPage']['503'] = '503 - Usługa niedostępna';
$lang['pl_PL']['ErrorPage']['504'] = '504 - Przekroczony czas bramy';
$lang['pl_PL']['ErrorPage']['505'] = '505 - Wersja HTTP nie obsługiwana';
$lang['pl_PL']['ErrorPage']['CODE'] = 'Kod błędu';
$lang['pl_PL']['ErrorPage']['DEFAULTERRORPAGECONTENT'] = '<p>Niestety, próbujesz wejść na stronę, która nie istnieje.</p><p>Sprawdź pisownię adresu URL i spróbuj ponownie.</p>';
$lang['pl_PL']['ErrorPage']['DEFAULTERRORPAGETITLE'] = 'Nie znaleziono strony';
$lang['pl_PL']['File']['NOFILESIZE'] = 'Rozmiar pliku to zero bajtów.';
$lang['pl_PL']['FileIframeField']['NOTEADDFILES'] = 'Możesz dodać tylko jeden plik za pierwszym razem';
$lang['pl_PL']['Folder']['CREATED'] = 'Wysłane jako pierwsze';
$lang['pl_PL']['Folder']['DELETEUNUSEDTHUMBNAILS'] = 'Usuń nieużywane miniatury';
$lang['pl_PL']['Folder']['DELSELECTED'] = 'Usuń zaznaczone pliki';
$lang['pl_PL']['Folder']['DETAILSTAB'] = 'Szczegóły';
$lang['pl_PL']['Folder']['FILENAME'] = 'Nazwa pliku';
$lang['pl_PL']['Folder']['FILESTAB'] = 'Pliki';
$lang['pl_PL']['Folder']['LASTEDITED'] = 'Wysłane jako ostatnie';
$lang['pl_PL']['Folder']['TITLE'] = 'Tytuł';
$lang['pl_PL']['Folder']['TYPE'] = 'Typ';
$lang['pl_PL']['Folder']['UNUSEDFILESTAB'] = 'Nieużywane pliki';
$lang['pl_PL']['Folder']['UNUSEDFILESTITLE'] = 'Nieużywane pliki';
$lang['pl_PL']['Folder']['UNUSEDTHUMBNAILSTITLE'] = 'Nieużywane miniatury';
$lang['pl_PL']['Folder']['UPLOADTAB'] = 'Wyślij';
$lang['pl_PL']['Folder']['URL'] = 'URL';
$lang['pl_PL']['Folder']['VIEWASSET'] = 'Zobacz Obiekt';
$lang['pl_PL']['Folder']['VIEWEDITASSET'] = 'Zobacz/Edytuj Obiekt';
$lang['pl_PL']['ForgotPasswordEmail.ss']['HELLO'] = 'Cześć';
$lang['pl_PL']['ForgotPasswordEmail.ss']['TEXT1'] = 'Oto twój';
$lang['pl_PL']['ForgotPasswordEmail.ss']['TEXT2'] = 'link zmiany hasła';
$lang['pl_PL']['ForgotPasswordEmail.ss']['TEXT3'] = 'dla';
$lang['pl_PL']['Form']['DATENOTSET'] = '(brak ustawionej daty)';
$lang['pl_PL']['Form']['FIELDISREQUIRED'] = '%s jest wymagane';
$lang['pl_PL']['Form']['LANGAOTHER'] = 'Inny język';
$lang['pl_PL']['Form']['LANGAVAIL'] = 'Dostępne języki';
$lang['pl_PL']['Form']['NOTSET'] = '(nie ustawiono)';
$lang['pl_PL']['Form']['SAVECHANGES'] = 'Zachowaj zmiany';
$lang['pl_PL']['Form']['VALIDATIONALLDATEVALUES'] = 'Proszę się upewnić, czy wartości wszystkich dat zostały ustawione';
$lang['pl_PL']['Form']['VALIDATIONBANKACC'] = 'Proszę podać prawidłowy numer bankowy';
$lang['pl_PL']['Form']['VALIDATIONCREDITNUMBER'] = 'Upewnij się, że wprowadzono prawidłowy numer karty kredytowej %s';
$lang['pl_PL']['Form']['VALIDATIONFAILED'] = 'Walidacja nie powiodła się';
$lang['pl_PL']['Form']['VALIDATIONNOTUNIQUE'] = 'Wprowadzona wartość nie jest unikalna';
$lang['pl_PL']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'Hasła nie są takie same';
$lang['pl_PL']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'Hasło nie może być puste';
$lang['pl_PL']['Form']['VALIDATIONSTRONGPASSWORD'] = 'Hasło musi posiadać jeden unikalny znak';
$lang['pl_PL']['Form']['VALIDATOR'] = 'Walidator';
$lang['pl_PL']['Form']['VALIDCURRENCY'] = 'Proszę wpisać prawidłową walutę.';
$lang['pl_PL']['FormField']['NONE'] = 'brak';
$lang['pl_PL']['GhostPage']['NOLINKED'] = 'Ta wirtualna witryna nie jest połączona z żadną stroną.';
$lang['pl_PL']['GSTNumberField']['VALIDATION'] = 'Proszę wprowadzić poprawny numer GST';
$lang['pl_PL']['GSTNumberField']['VALIDATIONJS'] = 'Wpisz poprawny numer GST';
$lang['pl_PL']['HtmlEditorField']['ALTTEXT'] = 'Opis';
$lang['pl_PL']['HtmlEditorField']['ANCHOR'] = 'Wstaw/edytuj kotwicę';
$lang['pl_PL']['HtmlEditorField']['ANCHORVALUE'] = 'Odnośnik';
$lang['pl_PL']['HtmlEditorField']['BULLETLIST'] = 'Wypuntowanie';
$lang['pl_PL']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'Wyrównaj do środka';
$lang['pl_PL']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'Wyjustowanie';
$lang['pl_PL']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'Wyrównaj do lewej';
$lang['pl_PL']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'Wyrównaj do prawej';
$lang['pl_PL']['HtmlEditorField']['BUTTONBOLD'] = 'Pogrubienie (Ctrl+B)';
$lang['pl_PL']['HtmlEditorField']['BUTTONEDITIMAGE'] = 'Edytuj obraz';
$lang['pl_PL']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'Wstaw animację Flash';
$lang['pl_PL']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'Wstaw obraz';
$lang['pl_PL']['HtmlEditorField']['BUTTONINSERTLINK'] = 'Wstaw link';
$lang['pl_PL']['HtmlEditorField']['BUTTONITALIC'] = 'Kursywa (Ctrl+I)';
$lang['pl_PL']['HtmlEditorField']['BUTTONREMOVELINK'] = 'Zmień link';
$lang['pl_PL']['HtmlEditorField']['BUTTONSTRIKE'] = 'przekreślenie';
$lang['pl_PL']['HtmlEditorField']['BUTTONUNDERLINE'] = 'Podkreślenie (Ctrl+U)';
$lang['pl_PL']['HtmlEditorField']['CHARMAP'] = 'Wstaw symbol';
$lang['pl_PL']['HtmlEditorField']['CLOSE'] = 'zamknij';
$lang['pl_PL']['HtmlEditorField']['COPY'] = 'Kopiuj (Ctrl+C)';
$lang['pl_PL']['HtmlEditorField']['CREATEFOLDER'] = 'utwórz folder';
$lang['pl_PL']['HtmlEditorField']['CSSCLASS'] = 'Wyrównanie/styl';
$lang['pl_PL']['HtmlEditorField']['CSSCLASSCENTER'] = 'Wyśrodkowane';
$lang['pl_PL']['HtmlEditorField']['CSSCLASSLEFT'] = 'Tekst po lewej';
$lang['pl_PL']['HtmlEditorField']['CSSCLASSLEFTALONE'] = 'Samo, po lewej.';
$lang['pl_PL']['HtmlEditorField']['CSSCLASSRIGHT'] = 'Tekst po prawej';
$lang['pl_PL']['HtmlEditorField']['CUT'] = 'Wytnij (Ctrl+X)';
$lang['pl_PL']['HtmlEditorField']['DELETECOL'] = 'Usuń kolumnę';
$lang['pl_PL']['HtmlEditorField']['DELETEROW'] = 'Usuń rząd';
$lang['pl_PL']['HtmlEditorField']['EDITCODE'] = 'Edytuj kod HTML';
$lang['pl_PL']['HtmlEditorField']['EMAIL'] = 'Adres e-mail';
$lang['pl_PL']['HtmlEditorField']['FILE'] = 'Plik';
$lang['pl_PL']['HtmlEditorField']['FLASH'] = 'Wstaw flash';
$lang['pl_PL']['HtmlEditorField']['FOLDER'] = 'Folder';
$lang['pl_PL']['HtmlEditorField']['FOLDERCANCEL'] = 'anuluj';
$lang['pl_PL']['HtmlEditorField']['FORMATADDR'] = 'adres';
$lang['pl_PL']['HtmlEditorField']['FORMATH1'] = 'Nagłówek 1';
$lang['pl_PL']['HtmlEditorField']['FORMATH2'] = 'Nagłówek 2';
$lang['pl_PL']['HtmlEditorField']['FORMATH3'] = 'Nagłówek 3';
$lang['pl_PL']['HtmlEditorField']['FORMATH4'] = 'Nagłówek 4';
$lang['pl_PL']['HtmlEditorField']['FORMATH5'] = 'Nagłówek 5';
$lang['pl_PL']['HtmlEditorField']['FORMATH6'] = 'Nagłówek 6';
$lang['pl_PL']['HtmlEditorField']['FORMATP'] = 'Paragraf';
$lang['pl_PL']['HtmlEditorField']['FORMATPRE'] = 'Preformatowane';
$lang['pl_PL']['HtmlEditorField']['HR'] = 'Wstaw linię';
$lang['pl_PL']['HtmlEditorField']['IMAGE'] = 'Wstaw obraz';
$lang['pl_PL']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'Rozmiar';
$lang['pl_PL']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'Wysokość (px)';
$lang['pl_PL']['HtmlEditorField']['IMAGEWIDTHPX'] = 'Szerokość (px)';
$lang['pl_PL']['HtmlEditorField']['INDENT'] = 'Zwiększ wcięcie';
$lang['pl_PL']['HtmlEditorField']['INSERTCOLAFTER'] = 'Wstaw kolumnę później';
$lang['pl_PL']['HtmlEditorField']['INSERTCOLBEF'] = 'Wstaw kolumnę wcześniej';
$lang['pl_PL']['HtmlEditorField']['INSERTROWAFTER'] = 'Wstaw rząd później';
$lang['pl_PL']['HtmlEditorField']['INSERTROWBEF'] = 'Wstaw rząd wcześniej';
$lang['pl_PL']['HtmlEditorField']['INSERTTABLE'] = 'Wstaw tabelę';
$lang['pl_PL']['HtmlEditorField']['LINK'] = 'Wstaw/edytuj link z podświetlonego tekstu ';
$lang['pl_PL']['HtmlEditorField']['LINKANCHOR'] = 'Odnośnik na tej stronie';
$lang['pl_PL']['HtmlEditorField']['LINKDESCR'] = 'Opis linku';
$lang['pl_PL']['HtmlEditorField']['LINKEMAIL'] = 'Adres e-mail';
$lang['pl_PL']['HtmlEditorField']['LINKEXTERNAL'] = 'Inna strona';
$lang['pl_PL']['HtmlEditorField']['LINKFILE'] = 'Pobierz plik';
$lang['pl_PL']['HtmlEditorField']['LINKINTERNAL'] = 'Strona na tej witrynie';
$lang['pl_PL']['HtmlEditorField']['LINKOPENNEWWIN'] = 'Otworzyć link w nowym oknie?';
$lang['pl_PL']['HtmlEditorField']['LINKTO'] = 'Linkuj do';
$lang['pl_PL']['HtmlEditorField']['OK'] = 'ok';
$lang['pl_PL']['HtmlEditorField']['OL'] = 'Lista numerowana';
$lang['pl_PL']['HtmlEditorField']['OUTDENT'] = 'Zmniejsz odstęp';
$lang['pl_PL']['HtmlEditorField']['PAGE'] = 'Strona';
$lang['pl_PL']['HtmlEditorField']['PASTE'] = 'Wklej (Ctrl+V)';
$lang['pl_PL']['HtmlEditorField']['PASTETEXT'] = 'Wklej tekst';
$lang['pl_PL']['HtmlEditorField']['PASTEWORD'] = 'Wklej z Worda';
$lang['pl_PL']['HtmlEditorField']['REDO'] = 'Przywróć (Ctrl+Y)';
$lang['pl_PL']['HtmlEditorField']['SELECTALL'] = 'Zaznacz Wszystko (Ctrl+A)';
$lang['pl_PL']['HtmlEditorField']['UNDO'] = 'Cofnij (Ctrl+Z)';
$lang['pl_PL']['HtmlEditorField']['UNLINK'] = 'Zmień link';
$lang['pl_PL']['HtmlEditorField']['UPLOAD'] = 'wgraj';
$lang['pl_PL']['HtmlEditorField']['URL'] = 'URL';
$lang['pl_PL']['HtmlEditorField']['VISUALAID'] = 'Pokaż/schowaj wytyczne';
$lang['pl_PL']['ImageField']['NOTEADDIMAGES'] = 'Po pierwszym zapisie można dodawać zdjęcia.';
$lang['pl_PL']['ImageUplaoder']['ONEFROMFILESTORE'] = 'W jednym z folderów strony';
$lang['pl_PL']['ImageUploader']['ATTACH'] = 'Załącz %s';
$lang['pl_PL']['ImageUploader']['DELETE'] = 'Usuń %s';
$lang['pl_PL']['ImageUploader']['FROMCOMPUTER'] = 'Na twoim komputerze';
$lang['pl_PL']['ImageUploader']['FROMFILESTORE'] = 'Ze schowka plików';
$lang['pl_PL']['ImageUploader']['ONEFROMCOMPUTER'] = 'na jednym z twoich komputerów';
$lang['pl_PL']['ImageUploader']['REALLYDELETE'] = 'Naprawdę chcesz usunąć ten %s?';
$lang['pl_PL']['ImageUploader']['REPLACE'] = 'Zastąp %s';
$lang['pl_PL']['Image_iframe.ss']['TITLE'] = 'Ładowanie Zdjęć (Iframe)';
$lang['pl_PL']['Member']['ADDRESS'] = 'Adres';
$lang['pl_PL']['Member']['BUTTONCHANGEPASSWORD'] = 'Zmień hasło';
$lang['pl_PL']['Member']['BUTTONLOGIN'] = 'Zalogowany';
$lang['pl_PL']['Member']['BUTTONLOGINOTHER'] = 'Zalogowany jako ktoś inny';
$lang['pl_PL']['Member']['BUTTONLOSTPASSWORD'] = 'Zgubiłem hasło';
$lang['pl_PL']['Member']['CONFIRMNEWPASSWORD'] = 'Potwierdź nowe hasło';
$lang['pl_PL']['Member']['CONFIRMPASSWORD'] = 'Potwierdź hasło';
$lang['pl_PL']['Member']['CONTACTINFO'] = 'Informacja kontaktowa';
$lang['pl_PL']['Member']['EMAIL'] = 'E-mail';
$lang['pl_PL']['Member']['EMAILPASSWORDAPPENDIX'] = 'Twoje hasło zostało zmienione. Zatrzymaj tego maila do przyszłych potwierdzeń';
$lang['pl_PL']['Member']['EMAILPASSWORDINTRO'] = 'Oto Twoje nowe hasło';
$lang['pl_PL']['Member']['EMAILSIGNUPINTRO1'] = 'Dziękujemy za rejestrację jako nowy użytkownik, szczegóły możesz zobaczyć poniżej w celu przyszłego potwierdzenia';
$lang['pl_PL']['Member']['EMAILSIGNUPINTRO2'] = 'Możesz sie zalogować na tę stronę używając danych z listy poniżej';
$lang['pl_PL']['Member']['EMAILSIGNUPSUBJECT'] = 'Dziękujemy za rejestrację';
$lang['pl_PL']['Member']['ERRORLOCKEDOUT'] = 'Twoje konto zostało tymczasowo zablokowane z powodu zbyt wielu błędnych prób logowania. Spróbuj ponownie w ciągu 20 minut.';
$lang['pl_PL']['Member']['ERRORNEWPASSWORD'] = 'Wprowadziłeś niepoprawnie nowe hasło, spróbuj ponownie';
$lang['pl_PL']['Member']['ERRORPASSWORDNOTMATCH'] = 'Twoje hasło nie zgadza się, spróbuj ponownie';
$lang['pl_PL']['Member']['ERRORWRONGCRED'] = 'E-mail lub hasło są nieprawidłowe, Spróbuj ponownie';
$lang['pl_PL']['Member']['FIRSTNAME'] = 'Imię';
$lang['pl_PL']['Member']['GREETING'] = 'Witamy';
$lang['pl_PL']['Member']['INTERFACELANG'] = 'Język interfejsu';
$lang['pl_PL']['Member']['LOGGEDINAS'] = 'Zostałeś zalogowany jako %s';
$lang['pl_PL']['Member']['MOBILE'] = 'Telefon komórkowy';
$lang['pl_PL']['Member']['NAME'] = 'Nazwa';
$lang['pl_PL']['Member']['NEWPASSWORD'] = 'Nowe hasło';
$lang['pl_PL']['Member']['PASSWORD'] = 'Hasło';
$lang['pl_PL']['Member']['PASSWORDCHANGED'] = 'Twoje hasło zostało zmienione a kopia została wysłana na Twój adres e-mail';
$lang['pl_PL']['Member']['PERSONALDETAILS'] = 'Dane personalne';
$lang['pl_PL']['Member']['PHONE'] = 'Telefon';
$lang['pl_PL']['Member']['REMEMBERME'] = 'Zapamiętaj mnie?';
$lang['pl_PL']['Member']['SECURITYGROUPS'] = 'Grupy Bezpieczeństwa';
$lang['pl_PL']['Member']['SUBJECTPASSWORDCHANGED'] = 'Twoje hasło zostało zmienione';
$lang['pl_PL']['Member']['SUBJECTPASSWORDRESET'] = 'Twój link do zmiany hasła';
$lang['pl_PL']['Member']['SURNAME'] = 'Nazwisko';
$lang['pl_PL']['Member']['USERDETAILS'] = 'Szczegóły użytkownika';
$lang['pl_PL']['Member']['VALIDATIONMEMBEREXISTS'] = 'Użytkownik z tym adresem już istnieje';
$lang['pl_PL']['Member']['WELCOMEBACK'] = 'Witamy ponownie, %s';
$lang['pl_PL']['Member']['YOUROLDPASSWORD'] = 'Twoje stare hasło';
$lang['pl_PL']['MemberAuthenticator']['TITLE'] = 'E-mail i Hasło';
$lang['pl_PL']['NumericField']['VALIDATION'] = '\'%s\' nie jest liczbą, tylko liczby są akceptowane przez to pole';
$lang['pl_PL']['NumericField']['VALIDATIONJS'] = 'nie jest liczbą, jedynie liczby są akceptowane dla tego pola';
$lang['pl_PL']['Permission']['FULLADMINRIGHTS'] = 'Pełne prawa administracyjne';
$lang['pl_PL']['Permission']['PERMSDEFINED'] = 'Zdefiniowano następujące kody dostępu';
$lang['pl_PL']['PhoneNumberField']['VALIDATION'] = 'Wprowadź poprawny numer telefonu';
$lang['pl_PL']['RedirectorPage']['HASBEENSETUP'] = 'Strona przekierowująca została ustawiona bez celu, do którego ma przekierowywać.';
$lang['pl_PL']['RedirectorPage']['HEADER'] = 'Ta strona przeniesie użytkowników na inną stronę';
$lang['pl_PL']['RedirectorPage']['OTHERURL'] = 'Inny adres URL strony';
$lang['pl_PL']['RedirectorPage']['REDIRECTTO'] = 'Przenieś do';
$lang['pl_PL']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'Inna strona';
$lang['pl_PL']['RedirectorPage']['REDIRECTTOPAGE'] = 'Strona na Twojej stronie www';
$lang['pl_PL']['RedirectorPage']['YOURPAGE'] = 'Strona na Twojej stronie www';
$lang['pl_PL']['RelationComplexTableField.ss']['ADD'] = 'Dodaj';
$lang['pl_PL']['RelationComplexTableField.ss']['CSVEXPORT'] = 'Eksportuj do CSV';
$lang['pl_PL']['RelationComplexTableField.ss']['DELETE'] = 'usuń';
$lang['pl_PL']['RelationComplexTableField.ss']['EDIT'] = 'edytuj';
$lang['pl_PL']['RelationComplexTableField.ss']['NOTFOUND'] = 'Nie znaleziono żadnych obiektów';
$lang['pl_PL']['RelationComplexTableField.ss']['SHOW'] = 'pokaż';
$lang['pl_PL']['SearchForm']['GO'] = 'Idź';
$lang['pl_PL']['SearchForm']['SEARCH'] = 'Szukaj';
$lang['pl_PL']['Security']['ALREADYLOGGEDIN'] = 'Nie masz dostępu do tej strony. Jeśli posiadasz inne konto, które umożliwi Ci dostęp do tej strony, możesz się zalogować poniżej';
$lang['pl_PL']['Security']['BUTTONSEND'] = 'Wyślij mi link do zresetowania hasła';
$lang['pl_PL']['Security']['CHANGEPASSWORDBELOW'] = 'Możesz zmienić swoje hasło poniżej';
$lang['pl_PL']['Security']['CHANGEPASSWORDHEADER'] = 'Zmień swoje hasło';
$lang['pl_PL']['Security']['EMAIL'] = 'E-mail:';
$lang['pl_PL']['Security']['ENCDISABLED1'] = 'Wyłączono szyfrowanie hasła!';
$lang['pl_PL']['Security']['ENCDISABLED2'] = 'Aby szyfrować hasła zmień ustawienia haseł dodając';
$lang['pl_PL']['Security']['ENCDISABLED3'] = 'do mysite/_config.php';
$lang['pl_PL']['Security']['ENCRYPT'] = 'Szyfrowanie wszystkich haseł';
$lang['pl_PL']['Security']['ENCRYPTEDMEMBERS'] = 'Zaszyfrowane dane użytkownika &quot;';
$lang['pl_PL']['Security']['ENCRYPTWITH'] = 'Hasła zostaną zaszyfrowane używając algorytmu &quot;%s&quot;';
$lang['pl_PL']['Security']['ENCRYPTWITHOUTSALT'] = 'bez soli w celu podwyższenia bezpieczeństwa.';
$lang['pl_PL']['Security']['ENCRYPTWITHSALT'] = 'z użyciem soli w celu podwyższenia bezpieczeństwa.';
$lang['pl_PL']['Security']['ENTERNEWPASSWORD'] = 'Proszę wprowadż nowe hasło';
$lang['pl_PL']['Security']['ERRORPASSWORDPERMISSION'] = 'Musisz być zalogowany aby zmienić hasło';
$lang['pl_PL']['Security']['ID'] = 'ID:';
$lang['pl_PL']['Security']['IPADDRESSES'] = 'Adresy IP';
$lang['pl_PL']['Security']['LOGGEDOUT'] = 'Zostałeś wylogowany. Jeśli chcesz się zalogować ponownie wpisz dane poniżej';
$lang['pl_PL']['Security']['LOGIN'] = 'Logowanie';
$lang['pl_PL']['Security']['LOSTPASSWORDHEADER'] = 'Zapomniałeś hasła';
$lang['pl_PL']['Security']['NOTEPAGESECURED'] = 'Ta strona jest zabezpieczona. Wpisz swoje dane a my wyślemy Ci potwierdzenie niebawem';
$lang['pl_PL']['Security']['NOTERESETPASSWORD'] = 'Wpisz adres e-mail, na który mamy wysłać link gdzie możesz zresetować swoje hasło';
$lang['pl_PL']['Security']['NOTHINGTOENCRYPT1'] = 'Brak haseł do zaszyfrowania';
$lang['pl_PL']['Security']['NOTHINGTOENCRYPT2'] = 'Brak użytkowników z niezaszyfrowanymi hasłami!';
$lang['pl_PL']['Security']['PASSWORDSENTHEADER'] = 'Link do zresetowania hasła \'%s\'';
$lang['pl_PL']['Security']['PASSWORDSENTTEXT'] = 'Dziękujemy! Nowy link do hasła został wysłany do \'%s"';
$lang['pl_PL']['Security']['PERMFAILURE'] = 'Ta strona jest zabezpieczona i do zobaczenia jej wymagane są uprawnienia administratorskie. Wpisz swoje dane poniżej.';
$lang['pl_PL']['SecurityAdmin']['ADVANCEDONLY'] = 'Ta sekcja jest jedynie dla zaawansowanych użytkowników.
Przeczytaj <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">tę stronę</a>
aby dowiedzieć się więcej.';
$lang['pl_PL']['SecurityAdmin']['CODE'] = 'Kod';
$lang['pl_PL']['SecurityAdmin']['GROUPNAME'] = 'Nazwa Grupy';
$lang['pl_PL']['SecurityAdmin']['IPADDRESSESHELP'] = '<p>Możesz zawęzić tą grupę dla pewnych określonych adresów IP. Wpisuj jeden zakres na linię. Zakresy mogą być podane w jednej z czterech poniższych form: <br />
203.96.152.12<br />
203.96.152/24<br />
203.96/16<br />
203/8<br /><br />Jeśli wpiszesz jeden lub więcej adresów w to pole, użytkownicy otrzymają prawa związane z członkostwem w tej grupie jedynie w wypadku, w którym zalogują się z jednego z poprawnych adresów IP. Nie uniemożliwia to logowania. Jest to spowodowane faktem, że użytkownik może usiłować uzyskać dostęp do części nie posiadających restrykcji IP.';
$lang['pl_PL']['SecurityAdmin']['MEMBERS'] = 'Użytkownicy';
$lang['pl_PL']['SecurityAdmin']['OPTIONALID'] = 'Opcjonalne ID';
$lang['pl_PL']['SecurityAdmin']['PERMISSIONS'] = 'Zezwolenia';
$lang['pl_PL']['SecurityAdmin']['VIEWUSER'] = 'Zobacz Użytkownika';
$lang['pl_PL']['SimpleImageField']['NOUPLOAD'] = 'Nie wgrano zdjęć';
$lang['pl_PL']['SiteTree']['ACCESSANYONE'] = 'Ktokolwiek';
$lang['pl_PL']['SiteTree']['ACCESSHEADER'] = 'Kto może zobaczyć tę stronę?';
$lang['pl_PL']['SiteTree']['ACCESSLOGGEDIN'] = 'Tylko zarejestrowani użytkownicy';
$lang['pl_PL']['SiteTree']['ACCESSONLYTHESE'] = 'Tylko Ci ludzie (wybierz z listy)';
$lang['pl_PL']['SiteTree']['ADDEDTODRAFT'] = 'Dodano do roboczej strony';
$lang['pl_PL']['SiteTree']['ALLOWCOMMENTS'] = 'Zezwolić na komentarze na stronie?';
$lang['pl_PL']['SiteTree']['APPEARSVIRTUALPAGES'] = 'Ta zawartość pojawia sie także na wirtualnych stronach w sekcjach %s.';
$lang['pl_PL']['SiteTree']['BUTTONCANCELDRAFT'] = 'Anuluj wprowadzone zmiany';
$lang['pl_PL']['SiteTree']['BUTTONCANCELDRAFTDESC'] = 'Usuń zmiany i wróć do istniejącej wersji opublikowanej strony';
$lang['pl_PL']['SiteTree']['BUTTONSAVEPUBLISH'] = 'Zapisz i opublikuj';
$lang['pl_PL']['SiteTree']['BUTTONUNPUBLISH'] = 'Nieopublikowane';
$lang['pl_PL']['SiteTree']['BUTTONUNPUBLISHDESC'] = 'Zmień tę stronę na opublikowaną';
$lang['pl_PL']['SiteTree']['CHANGETO'] = 'Zmień na';
$lang['pl_PL']['SiteTree']['CURRENT'] = 'aktualnie';
$lang['pl_PL']['SiteTree']['CURRENTLY'] = 'Aktualnie';
$lang['pl_PL']['SiteTree']['DEFAULTABOUTCONTENT'] = '<p>Możesz wypełnić tę stronę własną treścią, usunąć ją i tworzyć własne strony.<br /></p>';
$lang['pl_PL']['SiteTree']['DEFAULTABOUTTITLE'] = 'O nas';
$lang['pl_PL']['SiteTree']['DEFAULTCONTACTCONTENT'] = '<p>Możesz wypełnić tę stronę własną treścią, usunąć ją i tworzyć własne strony.<br /></p>';
$lang['pl_PL']['SiteTree']['DEFAULTCONTACTTITLE'] = 'Kontakt';
$lang['pl_PL']['SiteTree']['DEFAULTHOMECONTENT'] = '<p>Witaj w SilverStripe! To jest domyślna strona domowa. Możesz ją edytować, otwierając <a href="admin/">CMS</a>. Możesz teraz otworzyć <a href="http://doc.silverstripe.com">dokumentację dla developerów</a>, lub rozpocząć <a href="http://doc.silverstripe.com/doku.php?id=tutorials">jeden z samouczyków.</a></p>';
$lang['pl_PL']['SiteTree']['DEFAULTHOMETITLE'] = 'Strona Domowa';
$lang['pl_PL']['SiteTree']['EDITANYONE'] = 'Każdy to jest zalogowany w systemie CMS';
$lang['pl_PL']['SiteTree']['EDITHEADER'] = 'Kto może edytować wewnątrz systemu CMS?';
$lang['pl_PL']['SiteTree']['EDITONLYTHESE'] = 'Tylko Ci ludzi (wybierz z listy)';
$lang['pl_PL']['SiteTree']['GROUP'] = 'Grupa';
$lang['pl_PL']['SiteTree']['HASBROKENLINKS'] = 'Ta strona ma niedziałający link';
$lang['pl_PL']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'Domena(y)';
$lang['pl_PL']['SiteTree']['HTMLEDITORTITLE'] = 'Zawartość';
$lang['pl_PL']['SiteTree']['LINKSALREADYUNIQUE'] = '%s jest unikalny';
$lang['pl_PL']['SiteTree']['LINKSCHANGEDTO'] = 'zmieniono %s na %s';
$lang['pl_PL']['SiteTree']['MENUTITLE'] = 'Sekcja nawigacji';
$lang['pl_PL']['SiteTree']['METAADVANCEDHEADER'] = 'Zaawansowane opcje ...';
$lang['pl_PL']['SiteTree']['METADESC'] = 'Opis';
$lang['pl_PL']['SiteTree']['METAEXTRA'] = 'Własne Meta Tagi';
$lang['pl_PL']['SiteTree']['METAHEADER'] = 'Meta-tagi wyszukiwarki';
$lang['pl_PL']['SiteTree']['METAKEYWORDS'] = 'Słowa kluczowe';
$lang['pl_PL']['SiteTree']['METANOTEPRIORITY'] = 'Ręczne wprowadzenie specyfikacji dla Google SiteMaps ważności dla tej strony. To jest przewodnik dla Google, jak ważna jest strona: (wprowadź wartość od 0 do 1 gdzie 0 wprowadza stronę do indexu).';
$lang['pl_PL']['SiteTree']['METAPAGEPRIO'] = 'Priorytet Strony';
$lang['pl_PL']['SiteTree']['METATITLE'] = 'Tytuł';
$lang['pl_PL']['SiteTree']['MODIFIEDONDRAFT'] = 'Zmodyfikowano na roboczej stronie';
$lang['pl_PL']['SiteTree']['NOBACKLINKS'] = 'Do tej strony nie prowadzą żadne odnośniki z innych stron.';
$lang['pl_PL']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'Użyj tej strony jako \'strony startowej\' dla następujących domen: (oddziel domeny cudzysłowem)';
$lang['pl_PL']['SiteTree']['PAGESLINKING'] = 'Następujące strony mają adres:';
$lang['pl_PL']['SiteTree']['PAGETITLE'] = 'Nazwa strony';
$lang['pl_PL']['SiteTree']['PAGETYPE'] = 'Rodzaj strony';
$lang['pl_PL']['SiteTree']['PRIORITYAUTOSET'] = 'Auto-ustawianie na podstawie głębokości strony';
$lang['pl_PL']['SiteTree']['PRIORITYLEASTIMPORTANT'] = 'Najmniej ważny';
$lang['pl_PL']['SiteTree']['PRIORITYMOSTIMPORTANT'] = 'Najważniejszy';
$lang['pl_PL']['SiteTree']['PRIORITYNOTINDEXED'] = 'Nie zindexowany';
$lang['pl_PL']['SiteTree']['REMOVEDFROMDRAFT'] = 'Usunięto z roboczej strony';
$lang['pl_PL']['SiteTree']['SHOWINMENUS'] = 'Pokazuj w menu?';
$lang['pl_PL']['SiteTree']['SHOWINSEARCH'] = 'Pokazuj w wyszukiwarce?';
$lang['pl_PL']['SiteTree']['TABACCESS'] = 'Dostęp';
$lang['pl_PL']['SiteTree']['TABBACKLINKS'] = 'Linki zwrotne';
$lang['pl_PL']['SiteTree']['TABBEHAVIOUR'] = 'Zachowanie';
$lang['pl_PL']['SiteTree']['TABCONTENT'] = 'Zawartość';
$lang['pl_PL']['SiteTree']['TABMAIN'] = 'Główny';
$lang['pl_PL']['SiteTree']['TABMETA'] = 'Meta-dane';
$lang['pl_PL']['SiteTree']['TABREPORTS'] = 'Raporty';
$lang['pl_PL']['SiteTree']['TODOHELP'] = '<p>Możesz używać tej opcji do zaznaczania, które części strony wymagają jeszcze Twojej pracy. Aby zobaczyć wszystkie strony, na których ją umieściłeś, otwórz okno \'Raporty Stron\' z lewej strony i wybierz \'Do Zrobienia\'</p>';
$lang['pl_PL']['SiteTree']['TOPLEVEL'] = 'Zawartość strony (Główny Poziom)';
$lang['pl_PL']['SiteTree']['URL'] = 'URL';
$lang['pl_PL']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'Inna strona używa tego adresu URL. Adres URL musi być unikalny dla każdej strony.';
$lang['pl_PL']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'Adresy URL mogą składać się jedynie z liczb, cyfr oraz znaków \'-\'.';
$lang['pl_PL']['TableField']['ISREQUIRED'] = 'W %s \'%s\' jest wymagane';
$lang['pl_PL']['TableField.ss']['ADD'] = 'Dodaj nowy rząd';
$lang['pl_PL']['TableField.ss']['CSVEXPORT'] = 'Eksportuj do CSV';
$lang['pl_PL']['TableListField']['CSVEXPORT'] = 'Eksportuj do CSV';
$lang['pl_PL']['TableListField']['PRINT'] = 'Drukuj';
$lang['pl_PL']['TableListField_PageControls.ss']['DISPLAYING'] = 'Wyświetlane';
$lang['pl_PL']['TableListField_PageControls.ss']['OF'] = 'z';
$lang['pl_PL']['TableListField_PageControls.ss']['TO'] = 'to';
$lang['pl_PL']['TableListField_PageControls.ss']['VIEWFIRST'] = 'Zobacz pierwsze';
$lang['pl_PL']['TableListField_PageControls.ss']['VIEWLAST'] = 'Zobacz ostatnie';
$lang['pl_PL']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Zobacz następne';
$lang['pl_PL']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Zobacz poprzednie';
$lang['pl_PL']['ToggleCompositeField.ss']['HIDE'] = 'Ukryj';
$lang['pl_PL']['ToggleCompositeField.ss']['SHOW'] = 'Pokaż';
$lang['pl_PL']['ToggleField']['LESS'] = 'mniej';
$lang['pl_PL']['ToggleField']['MORE'] = 'więcej';
$lang['pl_PL']['Translatable']['CREATE'] = 'Stwórz nowe tłumaczenie';
$lang['pl_PL']['Translatable']['CREATEBUTTON'] = 'Utwórz';
$lang['pl_PL']['Translatable']['EXISTING'] = 'Istniejące tłumaczenia:';
$lang['pl_PL']['Translatable']['NEWLANGUAGE'] = 'Nowy język';
$lang['pl_PL']['Translatable']['TRANSLATIONS'] = 'Tłumaczenia';
$lang['pl_PL']['TreeSelectorField']['CANCEL'] = 'anuluj';
$lang['pl_PL']['TreeSelectorField']['SAVE'] = 'zapisz';
$lang['pl_PL']['TypeDropdown']['NONE'] = 'Nic';
$lang['pl_PL']['VirtualPage']['CHOOSE'] = 'Zmień link do strony';
$lang['pl_PL']['VirtualPage']['EDITCONTENT'] = 'kliknij tutaj aby edytować zawartość';
$lang['pl_PL']['VirtualPage']['HEADER'] = 'To jest wirtualna strona';

?>