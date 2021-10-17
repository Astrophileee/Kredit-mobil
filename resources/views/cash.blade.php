<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: /pembeli");
    exit;
}
?>

@extends('layouts/main')
@section('container')
@endsection