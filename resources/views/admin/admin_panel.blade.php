@php
    $sidebar = [['name' => 'Dashboard', 'icon' => 'space_dashboard'], ['name' => 'Instructors', 'icon' => 'person']];
@endphp

<x-default :title="'SHAPE: Admin'">
    <div
        class="w-dvw h-dvh font-poppins relative text-heading-dark grid grid-cols-8 grid-rows-1 bg-card overflow-hidden gap-4">
        <!-- Navigations -->
        <livewire:side-bar :sideBarItems="$sidebar" />

        <main class="col-span-5 px-8 py-4 flex flex-col h-dvh gap-4 overflow-y-auto">
            <!-- Greetings -->
            <div class="flex gap-2 w-auto justify-between">
                <div class="flex gap-4">
                    <span class="w-1 h-full bg-blue-button rounded-full"></span>
                    <div>
                        <h1 class="text-2xl font-medium">
                            Welcome back, Sir
                            <span class="font-bold text-blue-button">Elpie</span>
                        </h1>
                        <p class="text-sm text-paragraph">Here is your summary today</p>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex gap-4">
                    <button
                        class="flex items-center bg-white py-2 px-5 rounded-full gap-2 shadow-2xl text-paragraph cursor-pointer hover:text-white hover:bg-blue-button hover:shadow-xl/35 hover:shadow-blue-button hover:scale-105">
                        <span class="material-symbols-rounded">calendar_month</span>
                        <p class="text-sm">Select Date</p>
                    </button>
                    <button
                        class="flex items-center bg-white py-2 px-5 rounded-full gap-2 shadow-2xl text-paragraph cursor-pointer hover:text-white hover:bg-blue-button hover:shadow-xl/35 hover:shadow-blue-button hover:scale-105">
                        <span class="material-symbols-rounded">save</span>
                        <p class="text-sm">Export</p>
                    </button>
                </div>
            </div>

            <!-- Dashboard -->
            <div class="mt-12 flex flex-col gap-4">
                <h1 class="text-4xl font-medium">Dashboard</h1>
                <div class="grid grid-cols-4 grid-rows-1 gap-4">
                    <div
                        class="bg-gradient-to-tr from-blue-button to-[#00EEFF] shadow-blue-button shadow-2xl/45 p-6 text-white rounded-3xl flex flex-col justify-between gap-6">
                        <div class="flex justify-between">
                            <div>
                                <p class="text-sm leading-snug font-normal">Total Students</p>
                                <h1 class="text-2xl font-semibold leading-6">ENROLLED</h1>
                            </div>
                            <span class="material-symbols-rounded icon">people</span>
                        </div>
                        <h1 class="text-4xl font-semibold">24</h1>
                    </div>

                    <div
                        class="bg-gradient-to-tr from-lime to-[#00ff80] shadow-lime shadow-2xl/45 p-6 text-white rounded-3xl flex flex-col justify-between gap-6">
                        <div class="flex justify-between">
                            <div>
                                <p class="text-sm leading-snug font-normal">Students with</p>
                                <h1 class="text-2xl font-semibold leading-6">AUTISM</h1>
                            </div>
                            <span class="material-symbols-rounded icon">sentiment_very_satisfied</span>
                        </div>
                        <h1 class="text-4xl font-semibold">24</h1>
                    </div>

                    <div
                        class="bg-gradient-to-tr from-yellowOrange to-[#FFEA00] shadow-yellowOrange shadow-2xl/45 p-6 text-white rounded-3xl flex flex-col justify-between gap-6">
                        <div class="flex justify-between">
                            <div>
                                <p class="text-sm leading-snug font-normal">Students with</p>
                                <h1 class="text-2xl font-semibold leading-6 max-w-50">
                                    HEARING IMPAIRED
                                </h1>
                            </div>
                            <span class="material-symbols-rounded icon">hearing_disabled</span>
                        </div>
                        <h1 class="text-4xl font-semibold">24</h1>
                    </div>

                    <div
                        class="bg-gradient-to-tr from-danger to-[#ff00aa] shadow-danger shadow-2xl/45 p-6 text-white rounded-3xl flex flex-col justify-between gap-6">
                        <div class="flex justify-between">
                            <div>
                                <p class="text-sm leading-snug font-normal">Total Students</p>
                                <h1 class="text-2xl font-semibold leading-6 max-w-50">
                                    SPEECH IMPAIRED
                                </h1>
                            </div>
                            <span class="material-symbols-rounded icon">graphic_eq</span>
                        </div>
                        <h1 class="text-4xl font-semibold">24</h1>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <!-- Registered Teachers -->
                    <div
                        class="bg-blue-button p-8 text-white shadow-2xl/15 rounded-3xl flex items-center justify-between">
                        <!-- Number and Label -->
                        <div class="flex items-center gap-6">
                            <h1 class="text-5xl font-semibold">23</h1>
                            <div class="flex flex-col leading-tight">
                                <span class="text-base font-normal">Teachers</span>
                                <span class="text-lg font-bold">REGISTERED</span>
                            </div>
                        </div>
                        <!-- Icon -->
                        <span class="material-symbols-rounded text-5xl">person</span>
                    </div>

                    <!-- Total Curriculum -->
                    <div
                        class="bg-blue-button p-8 text-white shadow-2xl/15 rounded-3xl flex items-center justify-between">
                        <!-- Number and Label -->
                        <div class="flex items-center gap-6">
                            <h1 class="text-5xl font-semibold">16</h1>
                            <div class="flex flex-col leading-tight">
                                <span class="text-base font-normal">Total No. of</span>
                                <span class="text-lg font-bold">CURRICULUM</span>
                            </div>
                        </div>
                        <!-- Icon -->
                        <span class="material-symbols-rounded text-5xl">book_4</span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 grid-rows-4 gap-4">
                <div class="col-span-1 row-span-2 h-full bg-white p-6 rounded-3xl flex flex-col gap-4 shadow-2xl/15">
                    <h1 class="text-xl font-semibold">Weekly Activities</h1>
                    <div id="Barchart" class="w-full"></div>
                </div>

                <div class="col-span-1 row-span-2 h-full bg-white p-6 rounded-3xl flex flex-col gap-4 shadow-2xl/15">
                    <h1 class="text-xl font-semibold">Weekly Activities</h1>
                    <div id="Piechart" class="w-full"></div>
                </div>

                <div class="col-span-2 row-span-2 h-full bg-white p-6 rounded-3xl flex flex-col gap-4 shadow-2xl/15">
                    <h1 class="text-xl font-semibold">Weekly Activities</h1>
                    <div id="Linechart"></div>
                </div>
            </div>
        </main>

        <!-- Side Bar -->
        <section class="col-span-2 grid grid-cols-1 grid-rows-2 pr-4 py-4 gap-4 h-dvh">
            <!-- Student Feed -->
            <div class="bg-white w-full h-full rounded-3xl px-3 pt-3 pb-6 flex flex-col gap-3">
                <div class="flex gap-2 items-center p-3">
                    <span class="material-symbols-rounded text-yellowOrange">local_library</span>
                    <h1 class="text-xl font-semibold">Teacher Feed</h1>
                </div>

                <!-- Student Notifications -->
                <div class="flex flex-col gap-2 px-3 overflow-y-auto">
                    <div class="flex gap-2 w-full bg-card p-3 rounded-full">
                        <img src="{{ asset('images/profile.jpg') }}" class="rounded-full w-10" alt="" />
                        <!-- notification Details -->
                        <div>
                            <h2 class="leading-tight font-semibold text-md">
                                Juan Dela Cruz
                            </h2>
                            <p class="text-xs leading-tight text-paragraph">
                                Completed Lesson 1
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-2 w-full bg-card p-3 rounded-full">
                        <img src="{{ asset('images/profile.jpg') }}" class="rounded-full w-10" alt="" />
                        <!-- notification Details -->
                        <div>
                            <h2 class="leading-tight font-semibold text-md">
                                Juan Dela Cruz
                            </h2>
                            <p class="text-xs leading-tight text-paragraph">
                                Completed Lesson 1
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-2 w-full bg-card p-3 rounded-full">
                        <img src="{{ asset('images/profile.jpg') }}" class="rounded-full w-10" alt="" />
                        <!-- notification Details -->
                        <div>
                            <h2 class="leading-tight font-semibold text-md">
                                Juan Dela Cruz
                            </h2>
                            <p class="text-xs leading-tight text-paragraph">
                                Completed Lesson 1
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-2 w-full bg-card p-3 rounded-full">
                        <img src="{{ asset('images/profile.jpg') }}" class="rounded-full w-10" alt="" />
                        <!-- notification Details -->
                        <div>
                            <h2 class="leading-tight font-semibold text-md">
                                Juan Dela Cruz
                            </h2>
                            <p class="text-xs leading-tight text-paragraph">
                                Completed Lesson 1
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-2 w-full bg-card p-3 rounded-full">
                        <img src="{{ asset('images/profile.jpg') }}" class="rounded-full w-10" alt="" />
                        <!-- notification Details -->
                        <div>
                            <h2 class="leading-tight font-semibold text-md">
                                Juan Dela Cruz
                            </h2>
                            <p class="text-xs leading-tight text-paragraph">
                                Completed Lesson 1
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-2 w-full bg-card p-3 rounded-full">
                        <img src="{{ asset('images/profile.jpg') }}" class="rounded-full w-10" alt="" />
                        <!-- notification Details -->
                        <div>
                            <h2 class="leading-tight font-semibold text-md">
                                Juan Dela Cruz
                            </h2>
                            <p class="text-xs leading-tight text-paragraph">
                                Completed Lesson 1
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System Feed -->
            <div class="bg-white w-full h-full rounded-3xl px-3 pt-3 pb-6 flex flex-col gap-3">
                <div class="flex gap-2 items-center p-3">
                    <span class="material-symbols-rounded text-danger">settings_alert</span>
                    <h1 class="text-xl font-semibold">System Feed</h1>
                </div>

                <!-- System Notifications -->
                <div class="flex flex-col gap-2 px-3 overflow-y-auto">
                    <div class="gap-2 w-full bg-card p-3 rounded-lg">
                        <!-- System Details -->
                        <h2 class="leading-tight font-semibold text-md">
                            Lesson Created Successfully!
                        </h2>
                        <p class="text-xs leading-tight text-paragraph">just now</p>
                    </div>

                    <div class="gap-2 w-full bg-card p-3 rounded-lg">
                        <!-- System Details -->
                        <h2 class="leading-tight font-semibold text-md">
                            Lesson Created Successfully!
                        </h2>
                        <p class="text-xs leading-tight text-paragraph">just now</p>
                    </div>

                    <div class="gap-2 w-full bg-card p-3 rounded-lg">
                        <!-- System Details -->
                        <h2 class="leading-tight font-semibold text-md">
                            Lesson Created Successfully!
                        </h2>
                        <p class="text-xs leading-tight text-paragraph">just now</p>
                    </div>

                    <div class="gap-2 w-full bg-card p-3 rounded-lg">
                        <!-- System Details -->
                        <h2 class="leading-tight font-semibold text-md">
                            Lesson Created Successfully!
                        </h2>
                        <p class="text-xs leading-tight text-paragraph">just now</p>
                    </div>

                    <div class="gap-2 w-full bg-card p-3 rounded-lg">
                        <!-- System Details -->
                        <h2 class="leading-tight font-semibold text-md">
                            Lesson Created Successfully!
                        </h2>
                        <p class="text-xs leading-tight text-paragraph">just now</p>
                    </div>

                    <div class="gap-2 w-full bg-card p-3 rounded-lg">
                        <!-- System Details -->
                        <h2 class="leading-tight font-semibold text-md">
                            Lesson Created Successfully!
                        </h2>
                        <p class="text-xs leading-tight text-paragraph">just now</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-default>
