@extends('layouts.handling')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('The server has received too many requests from the client within a given timeframe. Please try again later or reduce the frequency of your requests.'))
