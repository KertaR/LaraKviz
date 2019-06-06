<?php

return [
	'create' => 'Készítés',
	'save' => 'Mentés',
	'edit' => 'Szerkesztés',
	'view' => 'Megtekintés',
	'update' => 'Frissítés',
	'list' => 'Listázás',
	'no_entries_in_table' => 'Nincs adat a táblában',
	'custom_controller_index' => 'Egyéni vezérlő index.',
	'logout' => 'Kijelentkezés',
	'add_new' => 'Új hozzáadása',
	'are_you_sure' => 'Biztos vagy benne?',
	'back_to_list' => 'Vissza a listához',
	'dashboard' => 'Irányítópult',
	'delete' => 'Törlés',
	'quickadmin_title' => 'LaraKvíz',

	'user-management' => [
		'title' => 'Felhasználók kezelése',
		'fields' => [
		],
	],

    'test' => [
        'new' => 'Új kvíz',
    ],

	'roles' => [
		'title' => 'Jogosultságok',
		'fields' => [
			'title' => 'Jogosultság neve',
		],
	],

	'users' => [
		'title' => 'Felhasználók',
		'fields' => [
			'name' => 'Felhasználónév',
			'email' => 'Email',
			'password' => 'Jelszó',
			'role' => 'Jogosultság',
			'remember-token' => 'Tóken',
		],
	],

	'user-actions' => [
		'title' => 'Felhasználói műveletek',
		'fields' => [
			'user' => 'Felhasználó',
			'action' => 'Művelet',
			'action-model' => 'Bővebben',
			'action-id' => 'Művelet id',
		],
	],

	'topics' => [
		'title' => 'Témakörök',
		'fields' => [
			'title' => 'Témakör neve',
		],
	],

	'questions' => [
		'title' => 'Kérdések',
		'fields' => [
			'topic' => 'Témakör',
			'question-text' => 'Kérdés',
			'code-snippet' => 'Kódrészlet',
			'answer-explanation' => 'Magyarázat',
			'more-info-link' => 'További információk',
		],
	],

	'questions-options' => [
		'title' => 'Kérdések beállítása',
		'fields' => [
			'question' => 'Kérdések',
			'option' => 'Válaszlehetőségek',
			'correct' => 'Helyes-e?',
		],
	],

	'results' => [
		'title' => 'Eredményeim',
		'fields' => [
			'user' => 'Felhasználó',
			'question' => 'Kérdés',
			'correct' => 'Jó válaszok',
			'date' => 'Dátum',
			'result' => 'Pontszám',
		],
	],

	'laravel-quiz' => 'Új LaraKvíz',
	'quiz' => 'Válaszolj a kérdésekre.',
	'submit_quiz' => 'Válaszlehetőség leadása',
	'view-result' => 'Eredmény megketintése',

];
