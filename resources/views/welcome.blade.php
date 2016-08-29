@extends('layouts.app')

@section('title', 'Contact Info')

@section('content')
	<div class="container">
		<div class="row welcome">
			<div class="col s8 offset-s2">
				<h3>স্বাগতম বন্ধু</h3>
				<p>
					<h4>ইতিমধ্যেই {{ $userCount }} জন বন্ধু এখানে রেজিস্টেশন করে তাদের তথ্য শেয়ার করেছে। </h4>
					<a href="/login">এখানে</a> থেলে লগিন অথবা একাউন্ট না থাকলে <a href="/register">এখানে</a> থেকে রেজিস্টার করে নিজের প্রোফাইল তৈরি করো <br>
					আর বন্ধু দের সাথে শেয়ার করো।

				</p>

			</div>
		</div>
	</div>
@stop
