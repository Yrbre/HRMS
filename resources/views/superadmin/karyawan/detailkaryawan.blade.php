@extends('layouts.app')
@section('title','Detail Karyawan')
@section('menu','Detail Profile')
@section('content')
@livewire('superadmin.karyawan.detailkaryawan', ['karyawan_id' => $employee->id])
@endsection