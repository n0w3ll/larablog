<x-app-layout :meta-title="'Posts by category - ' . $category->title" meta-description="By category description">

    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        @foreach($posts as $post)
            <x-post-item :post="$post"></x-post-item>
        @endforeach

        <!-- Pagination -->
        <div class="flex items-center py-8">
            {{ $posts->links() }}
        </div>

    </section>

    <x-sidebar />
</x-app-layout>