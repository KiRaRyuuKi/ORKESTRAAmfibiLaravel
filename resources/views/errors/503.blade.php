@extends('layouts.handling')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('The requested service is temporarily unavailable because the server is undergoing maintenance or is overloaded.'))
