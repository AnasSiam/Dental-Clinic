@extends('layouts.app')

@section('title', 'لوحة التحكم - لازورد')

@section('content')
<div class="container" style="padding: 120px 20px 60px;">
    <h1 style="text-align: center; margin-bottom: 30px;">مرحباً {{ $user->name }}</h1>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; max-width: 1200px; margin: 0 auto;">
        <div style="background: #f0fdf4; padding: 30px; border-radius: 12px; text-align: center;">
            <h3 style="font-size: 2rem; color: #27ae60;">0</h3>
            <p>الطلبات الحالية</p>
        </div>
        <div style="background: #f0fdf4; padding: 30px; border-radius: 12px; text-align: center;">
            <h3 style="font-size: 2rem; color: #27ae60;">0</h3>
            <p>الطلبات المكتملة</p>
        </div>
        <div style="background: #f0fdf4; padding: 30px; border-radius: 12px; text-align: center;">
            <h3 style="font-size: 2rem; color: #27ae60;">0</h3>
            <p>في الانتظار</p>
        </div>
    </div>
</div>
@endsection