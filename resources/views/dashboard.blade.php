<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('What other people say...') }}
        </h2>
    </x-slot>
    <article>
        <div class="py-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <!--author-->
                    <div class="flex items-center border-2 p-2">
                        <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />

                        <div class=" ml-8 text-2xl">
                            {{Auth::user()->name}}
                        </div>
                    </div>
                    <div class="p-2">
                        <!--title-->
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight border-b-2 p-6 text-center">
                            What is Lorem Ipsum?
                        </h2>
                        <!--content-->
                        <div class="p-4 border-b-2">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    
                        </div>
                    </div>
                    <!--Comments-->
                    <div class="">
                        <h4 class="font-semibold text-m text-gray-800 leading-tight p-6 ">
                            Comments
                        </h4>
                        <div class="p-6">
                            <div class="border-l-2">
                                <div class="flex items-center border-b-2 p-2">
                                    <img class="h-6 w-6 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                
                                    <div class=" ml-8 text-m">
                                        {{Auth::user()->name}}
                                    </div>
                                </div>
                                <div class="p-6 bottom-b-2 text-sm">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('post.create') }}" method="post">
                            <div class="form-group">
                                <textarea class="form-control form-textarea" style="resize:none; width:100%;" name="body" id="new-post" rows="1" placeholder="What do you think about it..."></textarea>
                            </div>
                            <div class="flex items-center justify-end">
                                <x-jet-button>
                                    {{__('Submit')}}
                                </x-jet-button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </article>
    <article>
        <div class="py-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <!--author-->
                    <div class="flex items-center border-2 p-2">
                        <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />

                        <div class=" ml-8 text-2xl">
                            {{Auth::user()->name}}
                        </div>
                    </div>
                    <div class="p-2">
                        <!--title-->
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight border-b-2 p-6 text-center">
                            What is Lorem Ipsum?
                        </h2>
                        <!--content-->
                        <div class="p-4 border-b-2">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    
                        </div>
                    </div>
                    <!--Comments-->
                    <div class="">
                        <h4 class="font-semibold text-m text-gray-800 leading-tight p-6 ">
                            Comments
                        </h4>
                        <div class="p-6">
                            <div class="border-l-2">
                                <div class="flex items-center border-b-2 p-2">
                                    <img class="h-6 w-6 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                
                                    <div class=" ml-8 text-m">
                                        {{Auth::user()->name}}
                                    </div>
                                </div>
                                <div class="p-6 bottom-b-2 text-sm">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('post.create') }}" method="post">
                            <div class="form-group">
                                <textarea class="form-control form-textarea" style="resize:none; width:100%;" name="body" id="new-post" rows="1" placeholder="What do you think about it..."></textarea>
                            </div>
                            <div class="flex items-center justify-end">
                                <x-jet-button>
                                    {{__('Submit')}}
                                </x-jet-button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </article>
    <article>
        <div class="py-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <!--author-->
                    <div class="flex items-center border-2 p-2">
                        <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />

                        <div class=" ml-8 text-2xl">
                            {{Auth::user()->name}}
                        </div>
                    </div>
                    <div class="p-2">
                        <!--title-->
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight border-b-2 p-6 text-center">
                            What is Lorem Ipsum?
                        </h2>
                        <!--content-->
                        <div class="p-4 border-b-2">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    
                        </div>
                    </div>
                    <!--Comments-->
                    <div class="">
                        <h4 class="font-semibold text-m text-gray-800 leading-tight p-6 ">
                            Comments
                        </h4>
                        <div class="p-6">
                            <div class="border-l-2">
                                <div class="flex items-center border-b-2 p-2">
                                    <img class="h-6 w-6 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                
                                    <div class=" ml-8 text-m">
                                        {{Auth::user()->name}}
                                    </div>
                                </div>
                                <div class="p-6 bottom-b-2 text-sm">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('post.create') }}" method="post">
                            <div class="form-group">
                                <textarea class="form-control form-textarea" style="resize:none; width:100%;" name="body" id="new-post" rows="1" placeholder="What do you think about it..."></textarea>
                            </div>
                            <div class="flex items-center justify-end">
                                <x-jet-button>
                                    {{__('Submit')}}
                                </x-jet-button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </article>
</x-app-layout>
