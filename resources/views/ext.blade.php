@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<div class="min-h-screen bg-gray-100">
    <!-- Hero Section -->
    <section class="bg-blue-500 text-white py-20">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold mb-2">Welcome to My Laravel App</h1>
            <p class="text-lg mb-4">Build modern websites with ease using Tailwind CSS and Laravel.</p>
            <a href="#" class="bg-white text-blue-500 px-4 py-2 rounded shadow hover:bg-gray-200">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="container mx-auto px-6 py-12">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold">Features</h2>
            <p class="text-gray-600">Some of the amazing features of our app.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-bold mb-2">Feature One</h3>
                <p class="text-gray-700 mb-4">Description of feature one.</p>
                <a href="#" class="text-blue-500 hover:underline">Learn more</a>
            </div>
            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-bold mb-2">Feature Two</h3>
                <p class="text-gray-700 mb-4">Description of feature two.</p>
                <a href="#" class="text-blue-500 hover:underline">Learn more</a>
            </div>
            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-bold mb-2">Feature Three</h3>
                <p class="text-gray-700 mb-4">Description of feature three.</p>
                <a href="#" class="text-blue-500 hover:underline">Learn more</a>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="bg-gray-200 py-12">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Contact Us</h2>
                <p class="text-gray-600">We would love to hear from you!</p>
            </div>
            <form class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                    <textarea id="message" name="message" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Send Message</button>
            </form>
        </div>
    </section>
</div>
@endsection
