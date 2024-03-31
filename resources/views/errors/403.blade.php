@extends('layouts.handling')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Access to the requested resource is forbidden. You don\'t have the necessary permissions to view this page.'))
