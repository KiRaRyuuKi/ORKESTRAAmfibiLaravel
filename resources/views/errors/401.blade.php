@extends('layouts.handling')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Access to the resource is not allowed because the client did not provide valid credentials or has not been authenticated.'))
