<?php

test('portfolio page loads in english by default', function () {
    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertSee('Systems Analyst');
    $response->assertSee('Start a Project');
    $response->assertSee('The Vision');
});

test('language switcher can switch to french and persist locale', function () {
    $switchResponse = $this->get(route('lang.switch', 'fr'));
    $switchResponse->assertRedirect();

    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertSee('Analyste');
    $response->assertSee('Démarrer un projet');
    $response->assertSee('La Vision');
});

test('language switcher can switch back to english', function () {
    $this->get(route('lang.switch', 'fr'));
    $this->get(route('lang.switch', 'en'));

    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertSee('Systems Analyst');
    $response->assertSee('Start a Project');
});
