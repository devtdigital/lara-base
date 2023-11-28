<?php

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});


it('should be return login route', function(){

    $response = $this->get('/login');

    $response->assertStatus(200);
});

it('should be return dashboard route', function(){

    $response = $this->get('/dashboard');

    $response->assertStatus(200);
});


it('should be return view from route login', function(){
    $response = $this->get('login');

    $response->assertStatus(200);
    $response->assertViewIs('admin.login');
});

it('should be return view from route dashboard', function(){
    $response = $this->get('dashboard');

    $response->assertStatus(200);
    $response->assertViewIs('admin.dashboard');
});
