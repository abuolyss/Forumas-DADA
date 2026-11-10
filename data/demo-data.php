<?php
$categories = [
    1 => ['name' => 'Technologijos', 'description' => 'Naujausios technologijų tendencijos, įrenginiai ir skaitmeninis gyvenimas.', 'posts' => 248, 'followers' => 1260, 'engagement' => 86, 'growth' => 14, 'status' => 'open', 'created' => '2024-02-14', 'edited' => '2026-10-28', 'color' => 'blue'],
    2 => ['name' => 'Programavimas', 'description' => 'Kodas, architektūra ir praktiniai patarimai kuriantiems produktus.', 'posts' => 312, 'followers' => 1894, 'engagement' => 92, 'growth' => 21, 'status' => 'open', 'created' => '2024-01-21', 'edited' => '2026-11-02', 'color' => 'violet'],
    3 => ['name' => 'Žaidimai', 'description' => 'Žaidimų naujienos, apžvalgos ir bendruomenės rekomendacijos.', 'posts' => 176, 'followers' => 978, 'engagement' => 78, 'growth' => 9, 'status' => 'open', 'created' => '2024-03-08', 'edited' => '2026-10-19', 'color' => 'orange'],
    4 => ['name' => 'Automobiliai', 'description' => 'Kelionės, automobiliai, priežiūra ir elektrinio mobilumo ateitis.', 'posts' => 143, 'followers' => 742, 'engagement' => 64, 'growth' => 6, 'status' => 'closed', 'created' => '2024-04-04', 'edited' => '2026-09-11', 'color' => 'green'],
    5 => ['name' => 'Mokslas', 'description' => 'Įdomūs faktai, tyrimai ir pokalbiai apie mus supantį pasaulį.', 'posts' => 96, 'followers' => 514, 'engagement' => 71, 'growth' => 11, 'status' => 'open', 'created' => '2024-05-17', 'edited' => '2026-10-05', 'color' => 'pink'],
    6 => ['name' => 'Laisvalaikis', 'description' => 'Knygos, filmai, kelionės ir idėjos kokybiškam laisvalaikiui.', 'posts' => 207, 'followers' => 835, 'engagement' => 69, 'growth' => 12, 'status' => 'open', 'created' => '2024-02-27', 'edited' => '2026-10-30', 'color' => 'yellow'],
];

$users = [
    1 => ['name' => 'Aistė V.', 'initials' => 'AV', 'role' => 'Kūrėja', 'bio' => 'Dizainerė, mėgstanti aiškias sistemas ir gerą kavą.', 'private' => false, 'joined' => '2024-01-14', 'color' => '#dbeafe'],
    2 => ['name' => 'Mantas K.', 'initials' => 'MK', 'role' => 'Programuotojas', 'bio' => 'Full-stack kūrėjas. Dalinuosi tuo, ką išmokstu.', 'private' => false, 'joined' => '2024-02-03', 'color' => '#ede9fe'],
    3 => ['name' => 'Rūta S.', 'initials' => 'RS', 'role' => 'Tyrinėtoja', 'bio' => 'Mokslas, kelionės ir smalsumas kiekvieną dieną.', 'private' => false, 'joined' => '2024-03-22', 'color' => '#fce7f3'],
    4 => ['name' => 'Lukas P.', 'initials' => 'LP', 'role' => 'Moderatorius', 'bio' => 'Žaidimai ir bendruomenės, kuriose gera būti.', 'private' => false, 'joined' => '2024-04-09', 'color' => '#ffedd5'],
    5 => ['name' => 'Gabija N.', 'initials' => 'GN', 'role' => 'Naudotoja', 'bio' => 'Automobilių entuziastė ir savaitgalio keliautoja.', 'private' => true, 'joined' => '2024-06-18', 'color' => '#dcfce7'],
    6 => ['name' => 'Tomas B.', 'initials' => 'TB', 'role' => 'Naudotojas', 'bio' => 'Technologijos, muzika ir gyvenimas tarp dviejų ekranų.', 'private' => false, 'joined' => '2024-07-01', 'color' => '#e0e7ff'],
];

$posts = [
    1 => ['category' => 2, 'title' => 'Kaip planuojate savo pirmąjį didesnį projektą?', 'excerpt' => 'Po kelių mažesnių projektų pagaliau ruošiuosi kurti produktą nuo nulio. Įdomu, kokius etapus planuojate jūs?', 'author' => 2, 'date' => '2026-11-08', 'likes' => 48, 'comments' => 12, 'views' => 1240],
    2 => ['category' => 1, 'title' => 'Kasdienio darbo vieta: kas iš tiesų svarbu?', 'excerpt' => 'Atnaujinau savo darbo vietą ir supratau, kad ne monitorių skaičius lemia produktyvumą. Dalinuosi keliais atradimais.', 'author' => 1, 'date' => '2026-11-07', 'likes' => 31, 'comments' => 8, 'views' => 864],
    3 => ['category' => 3, 'title' => 'Žaidimai, kuriuos verta išbandyti šį rudenį', 'excerpt' => 'Sudarau nedidelį sąrašą žaidimų tiems vakarams, kai norisi įtraukiančios istorijos, bet ne šimtų valandų grindo.', 'author' => 4, 'date' => '2026-11-05', 'likes' => 64, 'comments' => 17, 'views' => 2130],
    4 => ['category' => 5, 'title' => 'Kodėl dangus naktį nėra visiškai juodas?', 'excerpt' => 'Paprastas klausimas, kuris nuveda į labai gražią istoriją apie šviesą, Visatą ir mūsų stebėjimo ribas.', 'author' => 3, 'date' => '2026-11-04', 'likes' => 27, 'comments' => 6, 'views' => 705],
    5 => ['category' => 6, 'title' => 'Vilniaus kavinių žemėlapis darbui', 'excerpt' => 'Kur galima ramiai praleisti kelias valandas su nešiojamuoju kompiuteriu? Dalinuosi savo mėgstamiausiomis vietomis.', 'author' => 6, 'date' => '2026-11-02', 'likes' => 22, 'comments' => 9, 'views' => 580],
    6 => ['category' => 4, 'title' => 'Elektromobilis kelionėms: pirmųjų metų patirtis', 'excerpt' => 'Ką išmokau per pirmuosius metus, kiek iš tiesų kainuoja įkrovimas ir ką daryčiau kitaip.', 'author' => 5, 'date' => '2026-10-29', 'likes' => 19, 'comments' => 11, 'views' => 934],
];

$comments = [
    1 => [['author' => 1, 'text' => 'Labai artimas klausimas. Man padėjo pradėti nuo vieno aiškaus naudotojo scenarijaus.', 'date' => '2026-11-08', 'likes' => 9], ['author' => 3, 'text' => 'Svarbiausia neperplanuoti. Mažas veikiantis prototipas dažnai pasako daugiau.', 'date' => '2026-11-08', 'likes' => 5]],
    2 => [['author' => 6, 'text' => 'Mano atradimas – geras apšvietimas. Akys dėkoja labiau nei dar vienas aksesuaras.', 'date' => '2026-11-07', 'likes' => 7]],
    3 => [['author' => 2, 'text' => 'Į sąrašą dar įtraukčiau praėjusių metų nepriklausomą hitą.', 'date' => '2026-11-06', 'likes' => 12], ['author' => 5, 'text' => 'Išsisaugau savaitgaliui, ačiū!', 'date' => '2026-11-06', 'likes' => 3]],
];

$roleLabels = ['guest' => 'Svečias', 'user' => 'Naudotojas', 'admin' => 'Administratorius'];
?>
