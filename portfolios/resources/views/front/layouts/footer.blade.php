<footer class="mt-8">
    <div id="footer2" class="flex justify-center space-x-4 py-4">
        @if (!is_null($x))
            <a href="{{$x}}" target="_blank" class="p-2 transition duration-500">
                <div class="w-10 h-10 bg-white flex items-center justify-center hover:bg-blue-500 transition duration-500">
                    <img id="twitter" class="w-10 h-10" src="{{ asset('images/twitter.png') }}" />
                </div>
            </a>
        @endif
        @if (!is_null($instagram))
            <a href="{{$instagram}}" target="_blank" class="p-2 transition duration-500">
                <div class="w-10 h-10 bg-white flex items-center justify-center hover:bg-gradient-to-r from-yellow-400 via-pink-500 to-purple-600 transition duration-500">
                    <img id="insta" class="w-10 h-10" src="{{ asset('images/instagram.png') }}" />
                </div>
            </a>
        @endif
        @if (!is_null($youtube))
            <a href="{{$youtube}}" target="_blank" class="p-2 transition duration-500">
                <div class="bg-white flex items-center justify-center hover:bg-red-500 transition duration-500">
                    <img id="youtube" class="w-10 h-10" src="{{ asset('images/youtube.png') }}" />
                </div>
            </a>
        @endif
        @if (!is_null($discord))
            <a href="{{$discord}}" target="_blank" class="p-2 transition duration-500">
                <div class="w-10 h-10 bg-white flex items-center justify-center hover:bg-blue-600 transition duration-500">
                    <img id="discord" class="w-10 h-10" src="{{ asset('images/discord.png') }}" />
                </div>
            </a>
        @endif
        @if (!is_null($github))
            <a href="{{$github}}" target="_blank" class="p-2 transition duration-500">
                <div class="w-10 h-10 bg-white flex items-center justify-center hover:shadow-lg transition duration-500">
                    <img id="github" class="w-10 h-10" src="{{ asset('images/github.png') }}" />
                </div>
            </a>
        @endif
    </div>
</footer>
