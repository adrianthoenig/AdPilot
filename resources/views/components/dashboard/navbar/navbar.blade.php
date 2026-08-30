<nav class="p-6 bg-gray-200">
    <div class="container-xl flex items-center justify-between">
        <div class="flex items-center gap-20">
            <a href="/dashboard" class="bg-white hover:bg-gray-50 p-2 rounded-full flex items-center gap-2">
                <div class="bg-gray-200 rounded-full w-[36px] h-[36px]"></div>
                AdPilot
            </a>
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-4">
                    <div class="bg-white hover:bg-gray-50 p-2 rounded-full flex items-center gap-2">
                        <div class="bg-gray-200 rounded-full w-[36px] h-[36px]"></div>
                        <p class="pr-8">Agefit</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <form method="GET" action="/dashboard/search">
                        <input type="text" placeholder="Search..." class="bg-white hover:bg-gray-50 p-2 rounded-full">
                    </form>
                </div>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <i class="fas fa-bell"></i>
            <div class="bg-white hover:bg-gray-50 p-2 rounded-full flex items-center gap-2">
                <div class="bg-gray-200 rounded-full w-[36px] h-[36px]"></div>
                <div class="flex flex-col">
                    <p class="pr-8">Adrian Thoenig</p>
                    <p class="text-gray-400">adrian@adpilot.com</p>
                </div>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </div>
</nav>