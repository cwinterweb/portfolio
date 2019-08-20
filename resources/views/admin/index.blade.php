@extends('admin.master')
@section('content')

    <header class="bg-white shadow z-10">
        <ul class="flex justify-between p-6">
            <li class="text-xl font-bold">clintgwinter CMS</li>
            <li>Sign Out</li>
        </ul>
    </header>

    <div class="flex flex-col md:flex-row mt-32 items-stretch">

        <nav class="min-w-64">
            <div class="px-1 md:px-2 py-8">
                <ul class="flex flex-col sm:flex-row md:flex-col text-lg">
                    <li 
                        :class="{ 'text-white bg-teal-600 hover:bg-teal-600': activeTab == 'blog' }" 
                        class="mb-2 py-3 px-8 cursor-pointer rounded hover:bg-gray-300" 
                        @click="setActiveTab('blog')"
                    >Blog Posts</li>
                    <li 
                        :class="{ 'text-white bg-teal-600': activeTab == 'project' }" 
                        class="mb-2 py-3 px-8 cursor-pointer rounded hover:bg-gray-300" 
                    >Projects</li>
                </ul>
            </div>
        </nav>

        <main class="flex-grow min-h-screen px-1 md:px-2 lg:px-8 mb-16 rounded">
            <div class="min-h-full bg-white shadow-md">
                <blog-container>
                    <blog-item v-for="blog in blogs" :key="blog.slug" :blog="blog"></blog-item>
                </blog-container>
            </div>
        </main>
    </div>

    <footer class="bg-gray-800 text-white px-16 py-8">
        <p>This is the footer!</p>
    </footer>

@endsection