@extends('layouts.handling')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('The server encountered an internal error that cannot be identified while attempting to process the request.'))
